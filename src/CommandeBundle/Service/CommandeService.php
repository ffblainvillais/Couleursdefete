<?php

namespace CommandeBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;

use ArticleBundle\Entity\Article;
use ArticleBundle\Entity\Lot;
use CommandeBundle\Entity\Commande;
use AppBundle\Entity\CommandeArticle;
use AppBundle\Entity\CommandeLot;
use ActionBundle\Entity\Action;

class CommandeService{

    protected $container;
    protected $em;
    protected $bookingService;

    CONST LOCATION = "Location";

    public function __construct(ContainerInterface $container, EntityManagerInterface $entityManager, BookingService $bookingService)
    {
        $this->container        = $container;
        $this->em               = $entityManager;
        $this->bookingService   = $bookingService;
    }

    /**
     * Add ArticleOrder or modify is quantity for the order submitted
     *
     * @param Commande $order
     * @param Article $article
     * @param number $quantity
     * @param int $actionId
     * @return CommandeArticle
     */
    public function addArticleToOrder(Commande $order, Article $article, $quantity, $actionId)
    {
        $action         = $this->em->getRepository(Action::class)->findOneById($actionId);
        $orderArticle   = $this->getOrderArticle($order, $article);

        //si l'article est déjà dans la commande on change la quantite
        if ($orderArticle) {

            $orderArticle->setQuantite($orderArticle->getQuantite() + $quantity);

        } else {

            $orderArticle = new CommandeArticle();

            $orderArticle->setCommande($order);
            $orderArticle->setArticle($article);
            $orderArticle->setRetour(1);
            $orderArticle->setQuantite($quantity);
            $orderArticle->setAction($action);
        }

        return $orderArticle;
    }

    /**
     * Remove a ArticleCommande from a Commande
     *
     * @param CommandeArticle $commandeArticle
     * @return CommandeArticle
     */
    public function removeArticleOrder(CommandeArticle $commandeArticle)
    {

        $isPayed = $commandeArticle->getCommande()->getPaye();

        if ($isPayed) {

            $this->remiseEnStock($commandeArticle->getArticle(), $commandeArticle->getQuantite());
            $this->bookingService->removeQuantityBooking($commandeArticle->getArticle(), $commandeArticle->getCommande(), $commandeArticle->getQuantite());
        }
        
        $this->em->remove($commandeArticle);
        $this->em->flush();

        return $commandeArticle;
    }

    /**
     * Add CommandeLot of modify is quantity for the order submitted
     *
     * @param Commande $order
     * @param Lot $lot
     * @param number $quantity
     * @param integer $actionId
     * @return CommandeLot|object
     */
    public function addLotArticleToOrder(Commande $order, Lot $lot, $quantity, $actionId)
    {
        $action         = $this->em->getRepository(Action::class)->findOneById($actionId);
        $orderLot       = $this->em->getRepository(CommandeLot::class)->findOneBy(['lot' => $lot, 'commande' => $order]);

        if($orderLot){

            $orderLot->setQuantite($orderLot->getQuantite() + $quantity);

        } else {

            $orderLot = new CommandeLot();

            $orderLot->setCommande($order);
            $orderLot->setLot($lot);
            $orderLot->setRetour(1);
            $orderLot->setQuantite($quantity);
            $orderLot->setAction($action);
        }

        return $orderLot;
    }

    /**
     * Remove Lot from Order
     *
     * @param CommandeLot $commandeLot
     * @return CommandeLot
     */
    public function removeLotOrder(CommandeLot $commandeLot)
    {
        $lot            = $commandeLot->getLot();
        $quantityLot    = $commandeLot->getQuantite();
        $articlesLot    = $this->em->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $lot]);

        $isPayed = $commandeLot->getCommande()->getPaye();

        if ($isPayed) {

            foreach($articlesLot as $articleLot) {

                $this->remiseEnStock($articleLot->getArticle(), $articleLot->getQuantite() * $quantityLot);
                $this->bookingService->removeQuantityBooking($articleLot->getArticle(), $commandeLot->getCommande(), $articleLot->getQuantite() * $quantityLot);

            }
        }
        
        $this->em->remove($commandeLot);
        $this->em->flush();

        return $commandeLot;
        
    }

    /**
     * Remove all items from an Order
     *
     * @param Commande $order
     * @return Commande
     */
    public function removeAllItemsFromOrder(Commande $order)
    {
        $articlesOrder = $this->getArticlesOrderByOrder($order);

        foreach($articlesOrder as $articleOrder){

            $this->removeArticleOrder($articleOrder);
        }

        $commandesLot = $this->getArticleLotFromOrder($order);

        foreach($commandesLot as $commandeLot){

            $this->removeLotOrder($commandeLot);
        }

        return $order;
    }
    
    /**
     * Remove from stock all the articles & quantity of an order
     *
     * @param Commande $order
     * @return bool
     */
    public function removeFromStock(Commande $order)
    {
        $commandeArticles = $this->em->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $order]);

        foreach ($commandeArticles as $commandeArticle) {

            $article    = $commandeArticle->getArticle();
            $quantite   = $commandeArticle->getQuantite();

            $article = $this->retraitStock($article, $quantite);

            $this->em->persist($article);
        }

        $commandeLots = $this->em->getRepository('AppBundle:CommandeLot')->findBy(['commande' => $order]);

        foreach ($commandeLots as $commandeLot) {

            $lot            = $commandeLot->getLot();
            $quantityLot    = $commandeLot->getQuantite();
            $articlesLot    = $this->em->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $lot]);

            foreach($articlesLot as $articleLot) {

                $booking = $this->retraitStock($articleLot->getArticle(), $articleLot->getQuantite() * $quantityLot);

                $this->em->persist($booking);

            }
        }

        $this->em->flush();

        return true;
    }

    /**
     * Remove from stock of an article the quantity submitted
     *
     * @param Article $article
     * @param number $quantite
     * @return Article
     */
    public function retraitStock(Article $article, $quantite)
    {
        $article->setQuantite($article->getQuantite() - $quantite);
        
        return $article;
    }

    /**
     * Put in the stock the quantity of article
     *
     * @param Article $article
     * @param number $quantite
     */
    public function remiseEnStock(Article $article, $quantite){

        $article->setQuantite($article->getQuantite() + $quantite);

        $this->em->flush();

    }
    
    /**
     * Archived an Order
     *
     * @param Commande $order
     * @return Commande
     */
    public function archivedOrder(Commande $order)
    {
        $order->setArchive(true);

        $this->removeAllItemsFromOrder($order);

        return $order;
    }

    /**
     * Ser accompte to Commande
     *
     * @param Commande $order
     * @param number $amount
     * @return Commande
     */
    public function deposit(Commande $order, $amount)
    {
        $order->setAcompte($amount);

        return $order;
    }

    /**
     * Puts the status back to each item and puts them back in the stock for all OrderArticle on a Order
     *
     * @param Commande $order
     */
    /*public function retourLocation(Commande $order)
    {
        $orderArticles = $this->getArticlesOrderByOrder($order);

        foreach ($orderArticles as $orderArticle) {

            if ($orderArticle->getAction() && $orderArticle->getAction()->getLibelle() == self::LOCATION) {

                $orderArticleReturned = $this->retourArticle($orderArticle);

                $this->em->persist($orderArticleReturned);
            }
        }

        $this->em->flush();
    }*/

    /**
     * Puts the status back to each item and puts them back in the stock
     *
     * @param CommandeArticle $orderArticle
     * @return bool
     */
    /*private function retourArticle(CommandeArticle $orderArticle)
    {
        if ($orderArticle->getRetour() == false) {

            $article = $orderArticle->getArticle();

            $article->setQuantite($article->getQuantite() + $orderArticle->getQuantite());

            $orderArticle->setRetour(true);

            return $orderArticle;
        }
        return false;
    }*/

    //@todo reste le depart en location des lots !!!
    /*public function departLocation(Commande $order)
    {
        $orderArticles = $this->getArticlesOrderByOrder($order);

        foreach ($orderArticles as $orderArticle) {

            if ($orderArticle->getAction() && $orderArticle->getAction()->getLibelle() == self::LOCATION) {

                $orderArticleLocated = $this->departArticle($orderArticle);

                $this->em->persist($orderArticleLocated);
            }
        }

        $this->em->flush();
    }*/

    /*private function departArticle(CommandeArticle $orderArticle)
    {
        if($orderArticle->getRetour() == true){

            //on déduis les articles du stock
            $article = $orderArticle->getArticle();

            $article->setQuantite($article->getQuantite() - $orderArticle->getQuantite());

            $orderArticle->setRetour(false);

            return $orderArticle;
        }

        return false;
    }*/

    /**
     * Return Order from this id
     *
     * @param int $id
     * @return mixed
     */
    public function getOrderById($id)
    {
        return $this->em->getRepository(Commande::class)->findOneById($id);
    }

    /**
     * Return CommandeArticle(s) from Order
     *
     * @param Commande $order
     * @return CommandeArticle[]|array
     */
    public function getArticlesOrderByOrder(Commande $order)
    {
        return $this->em->getRepository(CommandeArticle::class)->findBy(['commande' => $order]);
    }

    /**
     * Return CommandeArticle from Order and Article
     *
     * @param Commande $order
     * @param Article $article
     * @return CommandeArticle
     */
    public function getOrderArticle(Commande $order, Article $article)
    {
        return $this->em->getRepository(CommandeArticle::class)->findOneBy(['commande' => $order, 'article' => $article]);
    }

    /**
     * Return CommandeLot(s) from Order
     *
     * @param Commande $order
     * @return CommandeLot[]|array
     */
    public function getArticleLotFromOrder(Commande $order)
    {
        return $this->em->getRepository(CommandeLot::class)->findBy(['commande' => $order]);
    }

    /**
     * Return Article from this id
     *
     * @param int $id
     * @return mixed
     */
    public function getArticleById($id)
    {
        return $this->em->getRepository(Article::class)->findOneById($id);
    }

    /**
     * Return LotArticle rfom this id
     *
     * @param $id
     * @return mixed
     */
    public function getLotById($id)
    {
        return $this->em->getRepository(Lot::class)->findOneById($id);
    }
    
}