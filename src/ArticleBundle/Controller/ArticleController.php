<?php

namespace ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ArticleBundle\Form\ArticleType;
use ArticleBundle\Form\LotType;
use ArticleBundle\Form\AjoutArticleLotType;
use ArticleBundle\Entity\Article;
use ArticleBundle\Entity\Lot;
use ArticleBundle\Entity\LotArticle;


class ArticleController extends Controller
{
    
   
    public function indexAction(Request $request)
    {
        
        $repository = $this->getDoctrine()->getRepository('ArticleBundle:Article');
        
        foreach($this->getUser()->getRoles() as $role){
            
            if($role === "ROLE_SUPER_ADMIN"){
                
                $query = $repository->createQueryBuilder("a")
                    ->orderBy("a.libelle",'ASC')
                    ->getQuery();
                
                break;
            }
            elseif($role === "ROLE_ADMIN"){
                
                $query = $repository->createQueryBuilder("a")
                    ->where('a.utilisateur = :user')
                    ->setParameter('user', $this->getUser())
                    ->orderBy("LOWER(a.libelle)",'ASC')
                    ->getQuery();
                
                break;
            }
            //@todo selectionner les article du parent (de son admin)
            /*else{
                $articles = $repository->findBy(['utilisateur' => $this->getUser()]);
                break;
            }*/
        }
        
        $articles  = $this->get('knp_paginator')->paginate($query,$request->query->get('page', 1),10);
        
        $lots = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findAll();
        $articlesLots = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findAll();
        
        $form = $this->createForm(ArticleType::class, null, array("action" => $this->generateUrl('ajout-article')));
        $formLot = $this->createForm(LotType::class, null, array("action" => $this->generateUrl('ajout-lot')));

        return $this->render(
            'ArticleBundle:article:article.html.twig',
            array('articles' => $articles,
                  'lots' => $lots,
                  'articlesLots' => $articlesLots,
                  'form' => $form->createView(),
                  'formLot' => $formLot->createView())
        );
    }
    
    
    
    
    public function ajoutAction(Request $request)
    {
        $articleTest = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['libelle' => $request->request->get('article')['libelle']]);

        if($articleTest){
            
            if($articleTest->getDescription() == $request->request->get('article')['description']/*$articleTestDescription*/){
                
                $this->addFlash('alert', "l'article '".$articleTest->getLibelle()." ".$articleTestDescription->getDescription()."' existe déjà !");
            
                //return $this->indexAction();
                return $this->redirectToRoute('article');
            }
            
        }
        
        $article = new Article();
        
        $form = $this->createForm(ArticleType::class, $article);
        
        //renvois true quand le formulaire n'est pas valide n'empeche
        //pas de lancer la requete avec ces données
        $form->handleRequest($request)->isValid();
        
        $article = $form->getData();
        
        $article->setUtilisateur($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();

        $this->addFlash('feedback', "l'article '".$article->getLibelle()."' à bien été ajouté");
       
        //return $this->indexAction();
        return $this->redirectToRoute('article');
    }
    
    
    
    public function suppressionAction(Request $request){

        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $request->attributes->get('idArticle')]);

        $commandeArticle = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findOneBy(['article' => $article]);

        $reservations = $this->getDoctrine()->getRepository('CommandeBundle:Reservation')->findBy(['article' => $article]);

        foreach ($reservations as $reservation) {

            $this->getDoctrine()->getManager()->remove($reservation);
        }
        
        if($commandeArticle){
            
            $this->addFlash('alert', "L'article '".$article->getLibelle()."' est utilisée dans une/plusieurs commandes, vous ne pouvez donc pas le supprimer");
        
            return $this->redirectToRoute('article');
        }
        
        $this->addFlash('feedback', "L'article '".$article->getLibelle()."' à bien été supprimé");
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        
        return $this->redirectToRoute('article');
    }
    
    
    
    public function modificationPopAction(Request $request)
    {
        $idArticle = $request->attributes->get('idArticle');
        
        $repository = $this->getDoctrine()->getRepository('ArticleBundle:Article');
        $article = $repository->findOneBy(['id' => $idArticle]);
        
        $form = $this->createForm(ArticleType::class, null, array("action" => $this->generateUrl('modification-article', array('idArticle' => $idArticle))));
        
        $form->setData($article);
        
        return $this->render(
            'ArticleBundle:article:ajout-article.html.twig',
            array('form' => $form->createView())
        ); 
        
    }
    
    
    public function modificationAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('ArticleBundle:Article');
        
        $article = $repository->findOneBy(['id' => $request->attributes->get('idArticle')]);
        
        $form = $this->createForm(ArticleType::class);
        
        $form->setData($article);
        
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->merge($article);
        $em->flush();

        $this->addFlash('feedback', "l'article '".$article->getLibelle()."' à bien été modifié");
        
        //return $this->indexAction();
        return $this->redirectToRoute('article');
        
    }
    
    
    
    
    public function ajoutLotAction(Request $request){
        
        $lotTest = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findOneBy(['libelle' => $request->request->get('lot')['libelle']]);

        if($lotTest){
            
            $this->addFlash('alert', "le lot '".$lotTest->getLibelle()."' existe déjà !");
            
            //return $this->indexAction();
            return $this->redirectToRoute('article');
        }
        
        $lot = new Lot();
        
        $form = $this->createForm(LotType::class, $lot);
        
        //renvois true quand le formulaire n'est pas valide n'empeche
        //pas de lancer la requete avec ces données
        $form->handleRequest($request)->isValid();
        
        $lot = $form->getData();

        $em = $this->getDoctrine()->getManager();
        $em->persist($lot);
        $em->flush();

        $this->addFlash('feedbackLot', "le lot '".$lot->getLibelle()."' à bien été ajouté");
       
        //return $this->indexAction();
        return $this->redirectToRoute('article');
    }
    
    
    
    public function suppressionLotAction(Request $request){

        $lot = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findOneBy(['id' => $request->attributes->get('idLot')]);
        
        $this->addFlash('feedbackLot', "Le lot '".$lot->getLibelle()."' à bien été supprimé");
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($lot);
        $em->flush();
        
        return $this->redirectToRoute('article');
    }
    
    
    
    public function modificationPopLotAction(Request $request)
    {
        $idLot = $request->attributes->get('idLot');
        
        $lot = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findOneBy(['id' => $idLot]);
        
        $form = $this->createForm(LotType::class, null, array("action" => $this->generateUrl('modification-lot', array('idLot' => $idLot))));
        
        $form->setData($lot);
        
        return $this->render(
            'ArticleBundle:article:ajout-article.html.twig',
            array('form' => $form->createView())
        ); 
        
    }
    
    
    public function modificationLotAction(Request $request)
    {
        $lot = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findOneBy(['id' => $request->attributes->get('idLot')]);
        
        $form = $this->createForm(LotType::class);
        
        $form->setData($lot);
        
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->merge($lot);
        $em->flush();

        $this->addFlash('feedbackLot', "le lot '".$lot->getLibelle()."' à bien été modifié");
        
        //return $this->indexAction();
        return $this->redirectToRoute('article');
        
    }
    
    
    
    public function ajoutArticlePopAction(Request $request){
        
        $idLot = $request->attributes->get('idLot');
        
        //$user = $this->getUser();
        
        //transmission de la variable $user par les attributs !
        $form = $this->createForm(AjoutArticleLotType::class, null, array(
            "action" => $this->generateUrl('ajout-article-lot',array('idLot' => $idLot)),
            //'attr' => array('user' => $user),
        ));
    
        return $this->render(
            'CommandeBundle:commande:ajout-article-commande.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
    
    
    public function ajoutArticleAction (Request $request){
        
        $formPost = $request->request->get('ajout_article_lot');

        $lot = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findOneBy(['id' => $request->attributes->get('idLot')]);
        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $formPost['article']]);

        $lotArticle = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findOneBy(['article' => $article, 'lot' => $lot]);
        
        //si l'article est déjà dans la commande on change la quantite 
        if($lotArticle){
            
            $this->addFlash('alertLot', "L'article '".$article->getLibelle()."' est deja dans le lot '".$lot->getLibelle()."'");
            exit;
        }
        else{
            
            $lotArticle = new LotArticle();
        
            $lotArticle->setArticle($article);
            $lotArticle->setLot($lot);
            $lotArticle->setQuantite($formPost['quantite']);
            
            //$commandeArticle = $form->getData();
        }
        
        $this->addFlash('feedbackLot', "L'article '".$article->getLibelle()."' à bien été rajouté au lot '".$lot->getLibelle()."'");
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($lotArticle);
        $em->flush();
        
        exit;
        
    }
    
    
    
    public function suppressionArticleAction(Request $request){
        
        $idArticle = $request->attributes->get('idArticle');
        $idLot = $request->attributes->get('idLot');
        
        $lot = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findOneBy(['id' => $idLot]);
        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $idArticle]);
        $lotArticle = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findOneBy(['article' => $article, 'lot' => $lot]);
        
        $this->addFlash('feedbackLot', "L'article '".$article->getLibelle()."' à bien été enlevé du lot '".$lot->getLibelle()."'");
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($lotArticle);
        $em->flush();
        
        return $this->redirectToRoute('article');
        
    }

    public function indexReservationAction(Request $request){

        $dateDuJour = date("Y-m-d");

        $repository = $this->getDoctrine()->getRepository('CommandeBundle:Reservation');

        $queryReservations = $repository->createQueryBuilder("r")
            ->orderBy("LOWER(r.date)",'ASC')
            ->where("r.date > :dateDuJour")
            ->getQuery();

        $queryReservations->setParameter("dateDuJour", $dateDuJour);

        $reservations  = $this->get('knp_paginator')->paginate($queryReservations,$request->query->get('page', 1),10);

        $excesReservation = $this->getExcesReservation();

        return $this->render(
            'ArticleBundle:reservation:index.html.twig',
            array(
                'reservations'      => $reservations,
                'excesReservation'  => $excesReservation
            )
        );
    }

    public function getExcesReservation()
    {

        $dateDuJour = date("Y-m-d");

        $repository = $this->getDoctrine()->getRepository('CommandeBundle:Reservation');

        $queryReservations = $repository->createQueryBuilder("r")
            ->leftJoin('r.article', 'a')
            ->orderBy("LOWER(r.date)",'ASC')
            ->where("r.date > :dateDuJour")
            ->andWhere("r.quantite > a.quantite")
            ->getQuery();

        $queryReservations->setParameter("dateDuJour", $dateDuJour);

        return $queryReservations->getResult();

    }
    
    
}
