<?php

namespace CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CommandeBundle\Form\CommandeType;
use CommandeBundle\Form\AjoutArticleCommandeType;
use CommandeBundle\Form\AjoutLotCommandeType;
use CommandeBundle\Form\AjoutAcompteCommandeType;
use CommandeBundle\Entity\Commande;
use CommandeBundle\Entity\Reservation;
use CommandeBundle\Entity\Annee;
use AppBundle\Entity\CommandeArticle;
use AppBundle\Entity\CommandeLot;



class CommandeController extends Controller
{
    /*@todo mettre en place l'affichage des commandes par mois
     * faire un repository pour prendre les dates de tout les mois  
     * et les afficher dans la vue
    */
    public function indexAction(Request $request)
    {
        
        $user = $this->getUser();
        
        $repository = $this->getDoctrine()->getRepository('CommandeBundle:Commande');
        
        $query = $repository->createQueryBuilder("c")
                    ->orderBy("c.id",'DESC')
                    ->where("c.archive = 0")
                    ->getQuery();
        
        //$commandes = $query->getResult();

        $commandes  = $this->get('knp_paginator')->paginate($query,$request->query->get('page', 1),5);
        
        //pagination des commandes ! (reste a modifier la vue)
        //$commandes  = $this->get('knp_paginator')->paginate($query,$request->query->get('page', 1),1);
        
        $commandesArticles = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findAll();
        $commandesLots = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findAll();
        
        $form = $this->createForm(CommandeType::class, null, array(
            "action" => $this->generateUrl('ajout-commande'), 
            'attr' => array('user' => $user))
        );

        return $this->render(
            'CommandeBundle:commande:commande.html.twig',
            array('form' => $form->createView(),
                'commandes' => $commandes,
                'commandesArticles' => $commandesArticles,
                'commandesLots' => $commandesLots)
        );
    }

    
    
    public function ajoutAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $commande = new Commande();
        
        $user = $this->getUser();
        $form = $this->createForm(CommandeType::class, null, array(
            "action" => $this->generateUrl('ajout-commande'), 
            'attr' => array('user' => $user))
        );
        
        $form->handleRequest($request);
            
        $commande = $form->getData();
        $commande->setUtilisateur($this->getUser());
        $commande->setPaye(false);
        $commande->setArchive(false);
        
        //Vrai date !
        $date = date('Y-m-d');
        
        $commande->setDate($date);
        
        //On regarde si l'année existe déjà
        $anneeExplose = explode("-", $date)[0];
        $annee = $this->getDoctrine()->getRepository('CommandeBundle:Annee')->findOneBy(['libelle' => $anneeExplose]);
        
        //si elle n'existe pas on l'ajoute en BDD pour débloquer
        //le bilan de l'année ajoutée
        if(!$annee){
            $annee = new Annee();
            $annee->setLibelle($anneeExplose);
            
            $em->persist($annee);
            $em->flush();
        }

        $commande->setAnnee($annee);
        
        $em->persist($commande);
        $em->flush();

        $this->addFlash('feedback', "la commande '".$commande->getLibelle()."' à bien été crée");
       
        return $this->redirectToRoute('commande');   
    }
    
    
    
    
    
    
    //supprime un article d'une commande \AppBundle\Entity\CommandeArticle
    private function suppressionArticleCommande($articleCommande){
        
        $em = $this->getDoctrine()->getManager();
        
        if ($articleCommande->getAction() == "Vente"){
            
            //on remet en stock l'article
            $this->remiseEnStock($articleCommande->getArticle(), $articleCommande->getQuantite());
        }
        
        $em->remove($articleCommande);
        
        $em->flush();
        
    }
    
    //supprime un lot \AppBundle\Entity\CommandeLot
    private function suppressionLot($commandeLot){
        
        $em = $this->getDoctrine()->getManager();
        
        $lot = $commandeLot->getLot();
        $quantiteDeLot = $commandeLot->getQuantite();
        
        $articlesLot = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $lot]);
        
        foreach($articlesLot as $articleLot){
            
            //quantite d'un article dans le lot * quantite de lots
            $quantite = $articleLot->getQuantite()*$quantiteDeLot;
            
            if($commandeLot->getAction()->getLibelle() == 'Vente' ){
                
                //on remet l'article en stock
                $this->remiseEnStock($articleLot->getArticle(), $quantite);
            }
 
        }
        
        $em->remove($commandeLot);
        
        $em->flush();
        
    }
    
    //remet un article en stock \ArticleBundle\Entity\Article
    private function remiseEnStock($article, $quantite){
        
        $em = $this->getDoctrine()->getManager();
              
        $article->setQuantite($article->getQuantite()+$quantite);
        
        $em->flush();
        
    }
    
    //remet un article en stock \ArticleBundle\Entity\Article
    private function retraitStock($article, $quantite){
        
        //si la quantité demandé dépasse le stock
        if($article->getQuantite() < $quantite){
            $this->addFlash('alert', "Le stock de '".$article->getLibelle()."' est de ".$article->getQuantite()." Vous ne pouvez donc pas en ajouter ".$quantite." !");
            return false;
        }

        if($quantite <= 0){
            $this->addFlash('alert', "La quantité d'article demandé est incorrect");
            return false;
        }

        //si la quantité est suffisante, on la soustrait au stock
        $reste = $article->getQuantite()-$quantite;
        $article->setQuantite($reste);
        
        return true;
    }
    
    
    //supprime la commande A TESTER !!!!!
    public function suppressionAction(Request $request){
        
        $em = $this->getDoctrine()->getManager();
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $request->attributes->get('idCommande')]);
        
        $articlesCommande = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $commande]);
        
        //on delegue la suppression de chaque ArticleCommande
        foreach($articlesCommande as $articleCommande){

            $this->suppressionArticleCommande($articleCommande);
        }
        
        $commandesLot = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findBy(['commande' => $commande]);
        
        //on delegue la suppression de chaque CommandeLot
        foreach($commandesLot as $commandeLot){
                
            $this->suppressionLot($commandeLot);
            
        }
        
        $this->addFlash('feedback', "La commande '".$commande->getLibelle()."' à bien été supprimé");
       
        
        $em->remove($commande);
        $em->flush();
        
        return $this->redirectToRoute('commande');
    }
    
    

    
    public function ajoutArticlePopAction(Request $request){

        $idCommande = $request->attributes->get('idCommande');
        
        $user = $this->getUser();
        
        //transmission de la variable $user par les attributs !
        $form = $this->createForm(AjoutArticleCommandeType::class, null, array(
            "action" => $this->generateUrl('ajout-article-commande',array('idCommande' => $idCommande)),
            'attr' => array('user' => $user),
        ));
    
        return $this->render(
            'CommandeBundle:commande:ajout-article-commande.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
    
    public function ajoutArticleAction (Request $request){
        
        $formPost = $request->request->get('ajout_article_commande');

        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $request->attributes->get('idCommande')]);
        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $formPost['article']]);
        $action = $this->getDoctrine()->getRepository('ActionBundle:Action')->findOneBy(['id' => $formPost['action']]);
        
        $quantiteDemandee = $formPost['quantite'];
        
        //si on n'ajoute pas un service on soustrait la qtt demandé au stock
        if($action->getLibelle() == "Vente"){
            
            if(!$this->retraitStock($article, $quantiteDemandee)){
                exit;
            }

        }
        
        $commandeArticle = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findOneBy(['article' => $article, 'commande' => $commande]);
        
        //si l'article est déjà dans la commande on change la quantite 
        if($commandeArticle){
            
            
            //A VOIR !!!!!
            $commandeArticle->setQuantite($commandeArticle->getQuantite()+$quantiteDemandee);

        }
        else{
            
            $commandeArticle = new CommandeArticle();
        
            $commandeArticle->setCommande($commande);
            $commandeArticle->setArticle($article);
            $commandeArticle->setRetour(1);
            $commandeArticle->setQuantite($quantiteDemandee);
            $commandeArticle->setAction($action);
            
        }

        //il vaut mieux reserver lors du paiment de la commande
        //$this->verificationReservtion($article, $commande, $quantiteDemandee);
            
        $em = $this->getDoctrine()->getManager();
        $em->persist($commandeArticle);
        $em->flush();

        exit;

        
    }

    /**
     * Prend un commande en paramètre et reserve tout les articles de cette commande
     *
     * \CommandeBundle\Entity\Commande $commande
     */
    public function reservationCommandePayee($commande)
    {

        $commandeArticles = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $commande]);

        foreach ($commandeArticles as $commandeArticle) {

            $article    = $commandeArticle->getArticle();
            $quantite   = $commandeArticle->getQuantite();

            $this->verificationReservtion($article, $commande, $quantite);

        }

        return true;

    }

    public function verificationReservtion($article, $commande, $quantite){

        $dateEvenement = $commande->getDateEvenement();

        //Voir pour modifier la qtt de la reservation
        $reservation = $this->getDoctrine()->getRepository('CommandeBundle:Reservation')->findOneBy(['article' => $article, 'date' => $dateEvenement]);

        if($reservation){

            return $this->modificationReservation($reservation, $quantite);
        }

        return $this->ajoutReservation($article, $dateEvenement, $quantite);

    }
    
    public function ajoutReservation($article, $dateEvenement, $quantiteDemandee){
        
        //on rajoute une reservation dans le cas de la location d'un article
        $reservation = new Reservation();
        $reservation->setArticle($article);
        $reservation->setDate($dateEvenement);
        $reservation->setQuantite($quantiteDemandee);

        $this->addFlash('feedback', "L'article '".$article->getLibelle()."' a bien été reservé pour le " . $dateEvenement->format('d/m/Y'));
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($reservation);
        $em->flush();
        
        return $reservation;
        
    }

    public function modificationReservation($reservation, $quantite){

        $quantiteReservation = $quantite + $reservation->getQuantite();

        $reservation->setQuantite($quantiteReservation);

        $this->getEntityManager()->merge($reservation);
        $this->getEntityManager()->flush();

        $this->addFlash('feedback', "L'article '".$reservation->getArticle()->getLibelle()."' a bien été reservé pour le " . $reservation->getDate()->format('d/m/Y'));

        return $reservation;
    }
    
    public function suppressionReservation($article, $commande, $quantite){
        
        $reservation = $this->getDoctrine()->getRepository('CommandeBundle:Reservation')->findOneBy(['article' => $article, 'date' => $commande->getDateEvenement()]);

        if ($reservation->getQuantite() == $quantite){

            $this->getEntityManager()->remove($reservation);
        } else {

            $reservation->setQuantite($reservation->getQuantite() - $quantite);
        }
        
        $this->getEntityManager()->flush();
        
        return $reservation;
        
    }
    
    
    
    
    public function suppressionArticleAction(Request $request){

        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $request->attributes->get('idCommande')]);
        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $request->attributes->get('idArticle')]);
        
        $commandeArticle = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findOneBy(['commande' => $commande, 'article' => $article]);
        
        //echo "<pre style='background:#fff; color:#000'>";\Doctrine\Common\Util\Debug::dump($commandeArticle);die();
        // PREND EN COMPTE lors de l'ajout d'un article déja existant dans la commande, 
        //$this->suppressionReservation($article, $commande, $commandeArticle->getQuantite());
        
        //on remet l'article dans le stock
        $this->suppressionArticleCommande($commandeArticle);

        $this->addFlash('feedback', "L'article '".$article->getLibelle()."' à bien été enlevé de la commande '".$commande->getLibelle()."' votre stock de '".$article->getLibelle()."' est désormais de ".$article->getQuantite());
         
        return $this->redirectToRoute('commande');
        
    }

    
    
    public function commandesArchiveesAction(){
        
        $toRender   = array();
        
        $commandes  = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['archive' => true]);
        
        foreach ($commandes as $commande) {

            $commandesArticles = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $commande]);
            
            $toRender[] = array(
                'orderEntity'   => $commande,
                'articleOrder'  => $commandesArticles,
            );
            
        }

        return $this->render(
            'CommandeBundle:commande:commandesArchivees.html.twig',
            array(
                'orderInformationsArray' => $toRender,
            )
        );
        
    }
    
    
    
    public function archiverAction(Request $request){
        
        $idCommande = $request->attributes->get('idCommande');
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $idCommande]);
        
        return $this->setBoolean("archiver", $commande);
        
    }
    
    
    
    public function payeAction(Request $request){
        
        $idCommande = $request->attributes->get('idCommande');
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $idCommande]);

        $this->reservationCommandePayee($commande);

        return $this->setBoolean("payer", $commande);
    } 
    

    
    public function retourLocationAction(Request $request){
        
        $idCommande = $request->attributes->get('idCommande');
        
        return $this->etapeLocation($idCommande, "retour");
    }
    
    
    
    public function departLocationAction(Request $request){
        
        $idCommande = $request->attributes->get('idCommande');
        
        return $this->etapeLocation($idCommande, "depart");
    }
    
    private function departArticle($commandeArticle){
        
        $em = $this->getDoctrine()->getManager();
        
        //on séléctionne uniquement les articles ne sont pas partis
        if($commandeArticle->getRetour() == true){

            //on déduis les articles du stock
            $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $commandeArticle->getArticle()->getId()]);
            
            $article->setQuantite($article->getQuantite()-$commandeArticle->getQuantite());

            $commandeArticle->setRetour(false);

            $em->merge($commandeArticle);
                        
        }
                    
    }
    
    private function retourArticle($commandeArticle){
        
        $em = $this->getDoctrine()->getManager();
        
        //on séléctionne uniquement les articles qui n'ont pas déjà été rendus
        if($commandeArticle->getRetour() == false){

            //on remet les articles en stock
            $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $commandeArticle->getArticle()->getId()]);
            
            $article->setQuantite($article->getQuantite()+$commandeArticle->getQuantite());

            $commandeArticle->setRetour(true);

            $em->merge($commandeArticle);
        
        }
                    
    }
    
    
    private function etapeLocation($idCommande, $etape){
        
        $em = $this->getDoctrine()->getManager();
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $idCommande]);
        
        $commandesArticle = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $idCommande]);
        
        //Boucle ARTICLES
        foreach($commandesArticle as $commandeArticle){
            
            //on séléctionne seulement les articles loués
            if($commandeArticle->getAction() && $commandeArticle->getAction()->getId() == 1){
                
                if($etape == 'depart'){
                    
                    $this->departArticle($commandeArticle);
                    
                    $this->addFlash('feedback', "Les articles loués de la commande '".$commande->getLibelle()."' ont bien été envoyés et déduis du stock ");
                    
                }
                elseif($etape == 'retour'){
                    
                    $this->retourArticle($commandeArticle);
                    
                    $this->addFlash('feedback', "Les articles loués de la commande '".$commande->getLibelle()."' ont bien été restitués et rajouté au stock ");
                }
            }
            else{
                $commandeArticle->setRetour(false);
            }
        }
        
        
        $commandesLot = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findBy(['commande' => $commande]);
        
        //Boucle LOTS
        foreach($commandesLot as $commandeLot){
            
            $articlesLot = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $commandeLot->getLot()]);
            
            //on séléctionne seulement les articles loués
            if($commandeLot->getAction() && $commandeLot->getAction()->getId() == 1){

                foreach($articlesLot as $articleLot){

                    if($etape == 'depart'){
                        //on séléctionne uniquement les articles ne sont pas partis
                        if($commandeLot->getRetour() == true){
                            
                            $article = $articleLot->getArticle();
                            
                            $quantiteStock = $article->getQuantite();

                            //nombre d'un article dans le lot
                            $quantiteLot = $articleLot->getQuantite();

                            //nombre d'un article dans le lot * quantite de lots
                            $quantiteArticleLot = $quantiteLot*$commandeLot->getQuantite();

                            $article->setQuantite($quantiteStock-$quantiteArticleLot);

                            $em->merge($article);
                
                            $this->addFlash('feedback', "Les articles loués de la commande '".$commande->getLibelle()."' ont bien été envoyés et déduis du stock ");
                        }
                    }
                    elseif($etape == 'retour'){

                        //on séléctionne uniquement les articles qui n'ont pas déjà été rendus
                        if($commandeLot->getRetour() == false){
                            
                            $article = $articleLot->getArticle();

                            $quantiteStock = $article->getQuantite();

                            //nombre d'un article dans le lot
                            $quantiteLot = $articleLot->getQuantite();

                            //nombre d'un article dans le lot * quantite de lots
                            $quantiteArticleLot = $quantiteLot*$commandeLot->getQuantite();

                            $article->setQuantite($quantiteStock+$quantiteArticleLot);

                            $em->merge($article);

                            $this->addFlash('feedback', "Les articles loués de la commande '".$commande->getLibelle()."' ont bien été restitués et rajouté au stock ");
                        }
                    }
                }
                if($etape == 'depart'){
                    
                    $commandeLot->setRetour(false);
                    $em->merge($commandeLot);
                }
                else{
                    $commandeLot->setRetour(true);
                    $em->merge($commandeLot);
                }
                    
            }
            else{
                $commandeArticle->setRetour(false);
            }
            
            
            
        }
        
        $em->flush();
        
        return $this->redirectToRoute('commande');
    }
    
    
    
    private function setBoolean($action, $commande){
        
        if($action === "payer"){
            
            $commande->setPaye(true);
            
            $this->addFlash('feedback', "La commande '".$commande->getLibelle()."' à bien été déclarée comme étant payée");
        }
        elseif($action === "archiver"){
            
            $commande->setArchive(true);

            //@todo générer la facture définitive

            $this->deleteArticleAssociateToOrder($commande);
            
            $this->addFlash('feedback', "La commande '".$commande->getLibelle()."' à bien été déclarée comme étant archivée");
        }
        
        
        $em = $this->getDoctrine()->getManager();
        $em->merge($commande);
        $em->flush();
        
        return $this->redirectToRoute('commande');
    }

    public function deleteArticleAssociateToOrder($order)
    {

        $articlesAssociated = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $order]);

        foreach ($articlesAssociated as $articleAssociated) {

            $this->getEntityManager()->remove($articleAssociated);
        }

        $this->getEntityManager()->flush();
    }
    
    
    
    
    public function versementAcomptePopAction(Request $request){
        
        $idCommande = $request->attributes->get('idCommande');
        
        //transmission de la variable $user par les attributs !
        $form = $this->createForm(AjoutAcompteCommandeType::class, null, array(
            "action" => $this->generateUrl('versement-acompte',array('idCommande' => $idCommande))
        ));
    
        return $this->render(
            'CommandeBundle:commande:ajout-article-commande.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
    
    public function versementAcompteAction (Request $request){
        
        $formPost = $request->request->get('ajout_acompte_commande');
        
        $idCommande = $request->attributes->get('idCommande');
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $idCommande]);

        $commande->setAcompte($formPost['Montant']);
        
        $this->addFlash('feedback', "Un acompte de '".$formPost['Montant']."' à bien été rajouté à la commande '".$commande->getLibelle());
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($commande);
        $em->flush();
        
        exit;
        
    }
    
    
    
    public function ajoutLotPopAction(Request $request){
        
        $idCommande = $request->attributes->get('idCommande');
        
        //$user = $this->getUser();
        
        //transmission de la variable $user par les attributs !
        $form = $this->createForm(AjoutLotCommandeType::class, null, array(
            "action" => $this->generateUrl('ajout-lot-commande',array('idCommande' => $idCommande)),
            //'attr' => array('user' => $user),
        ));
    
        return $this->render(
            'CommandeBundle:commande:ajout-article-commande.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
    
    
    public function ajoutLotAction (Request $request){
        
        $formPost = $request->request->get('ajout_lot_commande');

        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $request->attributes->get('idCommande')]);
        $lot = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findOneBy(['id' => $formPost['lot']]);
        $action = $this->getDoctrine()->getRepository('ActionBundle:Action')->findOneBy(['id' => $formPost['action']]);
        $quantiteDemandee = $formPost['quantite'];
        
        $articlesLot = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $lot]);
        
        foreach($articlesLot as $articleLot){
                
                $article = $articleLot->getArticle();
                
                $quantiteStock = $article->getQuantite();
                
                /*if(!$this->verificationReservation($article, $commande, $quantiteDemandee)){

                    //$this->addFlash('alert', "L'article '".$article->getLibelle()."' n'a pas rajouté à la commande '".$commande->getLibelle());

                    exit;
                }*/

                //si on n'ajoute pas un service on soustrait la qtt demandé au stock
                if($action->getLibelle() == "Vente"){

                    //si la quantité demandé dépasse le stock
                    if($quantiteStock < $quantiteDemandee){
                        $this->addFlash('alert', "Le stock de '".$article->getLibelle()."' est de ".$quantiteStock." Vous ne pouvez donc pas en ajouter ".$quantiteDemandee." !");
                        exit;
                    }

                    if($quantiteDemandee <= 0){
                        $this->addFlash('alert', "La quantité d'article demandé est incorrect");
                        exit;
                    }

                    //si la quantité est suffisante, on la soustrait au stock
                    $reste = $quantiteStock-$quantiteDemandee;
                    $article->setQuantite($reste);
                }
        }
        
        
        $commandeLot = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findOneBy(['lot' => $lot, 'commande' => $commande]);
        
        //si l'article est déjà dans la commande on change la quantite 
        if($commandeLot){
            
            //$commandeArticle->setQuantite($commandeArticle->getQuantite()+$quantiteDemandee);
            exit;
        }
        else{
            
            $commandeLot = new CommandeLot();
        
            $commandeLot->setCommande($commande);
            $commandeLot->setLot($lot);
            $commandeLot->setRetour(1);
            $commandeLot->setQuantite($quantiteDemandee);
            $commandeLot->setAction($action);
            
            //$commandeArticle = $form->getData();
        }
        
        
        $this->addFlash('feedback', "Le lot '".$lot->getLibelle()."' à bien été rajouté à la commande '".$commande->getLibelle());
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($commandeLot);
        $em->flush();
        
        exit;
        
    }
    
    
    
    public function suppressionLotAction(Request $request){
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $request->attributes->get('idCommande')]);
        $lot = $this->getDoctrine()->getRepository('ArticleBundle:Lot')->findOneBy(['id' => $request->attributes->get('idLot')]);
        
        $commandeLot = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findOneBy(['commande' => $commande, 'lot' => $lot]);
        $articlesLot = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $lot]);
        
        $em = $this->getDoctrine()->getManager();
        
        //suppression reservation !!!
        foreach($articlesLot as $articleLot){
            
            $this->suppressionReservation($articleLot->getArticle(), $commande, $commandeLot->getQuantite());
        }
        
        //on ne remet les articles d'un lot en stock que si ils ont étés vendus !
        if($commandeLot->getAction()->getLibelle() == 'Vente' ){
            
            foreach($articlesLot as $articleLot){
            
                $article = $articleLot->getArticle();

                $quantiteStock = $article->getQuantite();

                //quantite d'un article dans le lot
                $quantiteLot = $articleLot->getQuantite();

                //quantite d'un article dans le lot * quantite de lots
                $quantiteArticleLot = $quantiteLot*$commandeLot->getQuantite();

                $article->setQuantite($quantiteStock+$quantiteArticleLot);
                
                $em->persist($article);
                $em->flush();

            }
        }
        
        
        $this->addFlash('feedback', "Le lot '".$lot->getLibelle()."' à bien été enlevé de la commande '".$commande->getLibelle());
        
        $em->remove($commandeLot);
        $em->flush();
        
        return $this->redirectToRoute('commande');
        
    }





    public function getEntityManager(){

        return $this->getDoctrine()->getManager();
    }
    
    
    
    
    
}
