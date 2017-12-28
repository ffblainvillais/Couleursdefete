<?php

namespace ArticleBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

use ArticleBundle\Entity\Lot;
use ArticleBundle\Entity\Article;
use ArticleBundle\Entity\LotArticle;
use AppBundle\Entity\CommandeArticle;
use AppBundle\Entity\CommandeLot;

class ArticleService{

    protected $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * Create a new Article
     *
     * @param $title
     * @param $quantityStock
     * @param $description
     * @param $price
     * @return Article
     */
    public function createArticle($title, $quantityStock, $description, $price)
    {
        $article = new Article();

        $article->setLibelle($title);
        $article->setQuantite($quantityStock);
        $article->setDescription($description);
        $article->setPrix($price);

        return $article;
    }

    /**
     * Create a new Lot
     *
     * @param $title
     * @param $price
     * @return Lot
     */
    public function createLot($title, $price)
    {
        $lot = new Lot;

        $lot->setLibelle($title);
        $lot->setPrix($price);

        return $lot;
    }

    /**
     * Return false if Lot can't to be removed else true and remove article in the Lot
     *
     * @param Lot $lot
     * @return bool
     */
    public function removeLot(Lot $lot)
    {
        $orderLot = $this->em->getRepository(CommandeLot::class)->findBy(['lot' => $lot]);

        if (!empty($orderLot)) {

            return false;

        } else {

            foreach ($lot->getLotArticles() as $lotArticle) {
                $this->em->remove($lotArticle);
            }

            return true;
        }
    }

    /**
     * Add the submitted quantity of Article into the Lot
     *
     * @param Lot $lot
     * @param Article $article
     * @param $quantity
     * @return LotArticle|null|object
     */
    public function addArticleToLot(Lot $lot, Article $article, $quantity)
    {
        $lotArticle = $this->em->getRepository(LotArticle::class)->findOneBy(['article' => $article, 'lot' => $lot]);

        if($lotArticle){

            $lotArticle->setQuantite($quantity + $lotArticle->getQuantite());

        } else {

            $lotArticle = new LotArticle();
            $lotArticle->setArticle($article);
            $lotArticle->setLot($lot);
            $lotArticle->setQuantite($quantity);

        }

        return $lotArticle;
    }

    /**
     * Return true if Article used in a Commande else return false
     *
     * @param Article $article
     * @return bool
     */
    public function isUsedInOrder(Article $article)
    {
        $lotArticles = $this->em->getRepository(LotArticle::class)->findBy(['article' => $article]);

        foreach ($lotArticles as $lotArticle) {

            $orderWhoUseLot = $this->em->getRepository(CommandeLot::class)->findBy(['lot' => $lotArticle->getLot()]);

            if (!empty($orderWhoUseLot)) {
                return true;
            }
        }

        $orderArticle = $this->em->getRepository(CommandeArticle::class)->findby(['article' => $article]);

        if (!empty($orderArticle)) {
            return true;
        }

        return false;
    }

    /**
     * Return true if Article used in a Lot else return false
     *
     * @param Article $article
     * @return bool
     */
    public function isUsedInLot(Article $article)
    {
        $lotArticle = $this->em->getRepository(LotArticle::class)->findBy(['article' => $article]);

        if ($lotArticle) {
            return true;
        }

        return false;
    }

    /**
     * Test if Article exist with title & description
     *
     * @param $title
     * @param $description
     * @return bool
     */
    public function verifyIfArticleExistWithTitleAndDescription($title, $description)
    {
        $article = $this->em->getRepository(Article::class)->findOneBy(['libelle' => $title, 'description' => $description]);

        if ($article) {
            return true;
        }

        return false;
    }

    /**
     * Test if Lot exist with title
     *
     * @param $title
     * @return bool
     */
    public function verifyIfLotExistWithTitle($title)
    {
        $lot = $this->em->getRepository(Lot::class)->findOneBy(['libelle' => $title]);

        if ($lot) {
            return true;
        }

        return false;
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
     * Return Lot from this id
     *
     * @param $id
     * @return mixed
     */
    public function getLotById($id)
    {
        return $this->em->getRepository(Lot::class)->findOneById($id);
    }

}