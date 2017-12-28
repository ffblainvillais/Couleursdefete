<?php

namespace ArticleBundle\Controller;

use ArticleBundle\Entity\LotArticle;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use ArticleBundle\Service\ArticleService;
use Knp\Component\Pager\Paginator;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ArticleBundle\Form\ArticleType;
use ArticleBundle\Form\LotType;
use ArticleBundle\Form\AjoutArticleLotType;
use ArticleBundle\Entity\Article;
use ArticleBundle\Entity\Lot;
use ArticleBundle\Entity\Reservation;


class ArticleController extends Controller
{
    protected $container;
    protected $em;
    protected $articleService;
    protected $paginator;

    public function __construct(ContainerInterface $container, EntityManagerInterface $em, ArticleService $articleService, Paginator $paginator)
    {
        $this->container        = $container;
        $this->em               = $em;
        $this->articleService   = $articleService;
        $this->paginator        = $paginator;
    }

    public function indexAction(Request $request)
    {
        //2 paginations dans une même page = probleme, les pages défilent sur les 2 paginations en meme temps
        //$querylot       = $this->em->getRepository(Lot::class)->getLotForPaginate();
        //$lots           = $this->paginator->paginate($querylot, $request->query->get('page', 1),10);

        $lots           = $this->em->getRepository(Lot::class)->findAll();
        $queryArticle   = $this->em->getRepository(Article::class)->getArticlesForPaginate();
        $articles       = $this->paginator->paginate($queryArticle, $request->query->get('page', 1),10);

        $form           = $this->createForm(ArticleType::class, null, array("action" => $this->generateUrl('ajout-article')));
        $formLot        = $this->createForm(LotType::class, null, array("action" => $this->generateUrl('ajout-lot')));

        return $this->render(
            'ArticleBundle:article:article.html.twig',
            array(
                'articles'  => $articles,
                'lots'      => $lots,
                'form'      => $form->createView(),
                'formLot'   => $formLot->createView()
            )
        );
    }
    
    public function ajoutAction(Request $request)
    {
        $articleInfos   = $request->request->get('article');
        $articleTest    = $this->articleService->verifyIfArticleExistWithTitleAndDescription($articleInfos['libelle'], $articleInfos['description']);

        if($articleTest){
            
            $this->addFlash('alert', "l'article '".$articleInfos['libelle']." ".$articleInfos['description']."' existe déjà !");
            return $this->redirectToRoute('article');
        }

        $article = $this->articleService->createArticle($articleInfos['libelle'], $articleInfos['quantite'], $articleInfos['description'], $articleInfos['prix']);

        $this->em->persist($article);
        $this->em->flush();

        $this->addFlash('feedback', "l'article '".$article->getLibelle()."' à bien été ajouté");
       
        return $this->redirectToRoute('article');
    }

    public function suppressionAction(Request $request)
    {
        $article = $this->articleService->getArticleById($request->attributes->get('idArticle'));
        
        if ($this->articleService->isUsedInOrder($article)) {
            
            $this->addFlash('alert', "L'article '".$article->getLibelle()."' est utilisée dans une/plusieurs commandes, vous ne pouvez donc pas le supprimer");

        } elseif ($this->articleService->isUsedInLot($article)) {

            $this->addFlash('alert', "L'article '".$article->getLibelle()."' est utilisée dans un/plusieurs lot d'article, vous ne pouvez donc pas le supprimer");

        } else {

            $this->addFlash('feedback', "L'article '".$article->getLibelle()."' à bien été supprimé");

            $this->em->remove($article);
            $this->em->flush();
        }

        return $this->redirectToRoute('article');
    }

    public function modificationPopAction(Request $request)
    {
        $idArticle  = $request->attributes->get('idArticle');
        $article    = $this->articleService->getArticleById($idArticle);
        
        $form = $this->createForm(ArticleType::class, null, array("action" => $this->generateUrl('modification-article', array('idArticle' => $idArticle))));
        
        $form->setData($article);
        
        return $this->render(
            'ArticleBundle:article:ajout-article.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    public function modificationAction(Request $request)
    {
        $articleInfos   = $request->request->get('article');

        $article = $this->articleService->getArticleById($request->attributes->get('idArticle'));

        $article->setLibelle($articleInfos['libelle']);
        $article->setQuantite($articleInfos['quantite']);
        $article->setDescription($articleInfos['description']);
        $article->setPrix($articleInfos['prix']);

        $this->em->merge($article);
        $this->em->flush();

        $this->addFlash('feedback', "l'article '".$article->getLibelle()."' à bien été modifié");
        
        return $this->redirectToRoute('article');
    }
    
    public function ajoutLotAction(Request $request)
    {
        $lotInfos       = $request->request->get('lot');
        $lotTest        = $this->articleService->verifyIfLotExistWithTitle($lotInfos['libelle']);

        if($lotTest){

            $this->addFlash('alert', "le lot '".$lotInfos['libelle']."' existe déjà !");
            return $this->redirectToRoute('article');
        }

        $lot = $this->articleService->createLot($lotInfos['libelle'], $lotInfos['prix']);

        $this->em->persist($lot);
        $this->em->flush();

        $this->addFlash('feedback', "le lot '".$lot->getLibelle()."' à bien été ajouté");

        return $this->redirectToRoute('article');
    }

    public function suppressionLotAction(Request $request)
    {
        $lot        = $this->articleService->getLotById($request->attributes->get('idLot'));

        $isRemoved  = $this->articleService->removeLot($lot);

        if ($isRemoved) {
            
            $this->addFlash('feedbackLot', "Le lot '".$lot->getLibelle()."' à bien été supprimé");

            $this->em->remove($lot);
            $this->em->flush();
            
        } else {
            
            $this->addFlash('alert', "Le lot '".$lot->getLibelle()."' est utilisé dans une/plusieurs commande et ne peut pas être supprimé");
        }
        
        return $this->redirectToRoute('article');
    }

    public function modificationPopLotAction(Request $request)
    {
        $lot = $this->articleService->getLotById($request->attributes->get('idLot'));

        $form = $this->createForm(LotType::class, null, array("action" => $this->generateUrl('modification-lot', array('idLot' => $request->attributes->get('idLot')))));
        
        $form->setData($lot);
        
        return $this->render(
            'ArticleBundle:article:ajout-article.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    public function modificationLotAction(Request $request)
    {
        $lot = $this->articleService->getLotById($request->attributes->get('idLot'));
        
        $form = $this->createForm(LotType::class);
        $form->setData($lot);
        $form->handleRequest($request);

        $this->em->merge($lot);
        $this->em->flush();

        $this->addFlash('feedbackLot', "le lot '".$lot->getLibelle()."' à bien été modifié");
        
        return $this->redirectToRoute('article');
    }

    public function ajoutArticlePopAction(Request $request)
    {
        $idLot = $request->attributes->get('idLot');

        $form = $this->createForm(AjoutArticleLotType::class, null, array(
            "action" => $this->generateUrl('ajout-article-lot',array('idLot' => $idLot)),
        ));
    
        return $this->render(
            'CommandeBundle:commande:ajout-article-commande.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    public function ajoutArticleAction (Request $request)
    {
        $formPost   = $request->request->get('ajout_article_lot');
        
        $lot        = $this->articleService->getLotById($request->attributes->get('idLot'));
        $article    = $this->articleService->getArticleById($formPost['article']);

        $lotArticle = $this->articleService->addArticleToLot($lot, $article, $formPost['quantite']);
        
        $this->addFlash('feedbackLot', "L'article '".$article->getLibelle()."' à bien été rajouté au lot '".$lot->getLibelle()."'");
        
        $this->em->persist($lotArticle);
        $this->em->flush();
        
        exit;
    }

    public function suppressionArticleAction(Request $request)
    {
        $article    = $this->articleService->getArticleById($request->attributes->get('idArticle'));
        $lot        = $this->articleService->getLotById($request->attributes->get('idLot'));
        $lotArticle = $this->em->getRepository(LotArticle::class)->findOneBy(['article' => $article, 'lot' => $lot]);
        
        $this->addFlash('feedbackLot', "L'article '".$article->getLibelle()."' à bien été enlevé du lot '".$lot->getLibelle()."'");
        
        $this->em->remove($lotArticle);
        $this->em->flush();
        
        return $this->redirectToRoute('article');
    }

    public function indexReservationAction(Request $request)
    {
        $queryReservations  = $this->em->getRepository(Reservation::class)->getBookingsForPaginate();
        $reservations       = $this->paginator->paginate($queryReservations,$request->query->get('page', 1),10);
        $excesReservation   = $this->em->getRepository(Reservation::class)->getExcesReservation();

        return $this->render(
            'ArticleBundle:reservation:index.html.twig',
            array(
                'reservations'      => $reservations,
                'excesReservation'  => $excesReservation
            )
        );
    }
}
