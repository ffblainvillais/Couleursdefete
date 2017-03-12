<?php

namespace CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use CommandeBundle\Form\CommandeType;
use CommandeBundle\Form\AjoutArticleCommandeType;
use CommandeBundle\Form\AjoutLotCommandeType;
use CommandeBundle\Form\AjoutAcompteCommandeType;
use CommandeBundle\Entity\Commande;
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
        
        //multi-user pour plus tard si besoin...
        /*foreach($user->getRoles() as $role){
            
            if($role === "ROLE_SUPER_ADMIN"){
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['archive' => false]);
                break;
            }
            elseif($role === "ROLE_ADMIN"){
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['archive' => false, 'utilisateur' => $this->getUser()]);
                break;
            }
            //@todo selectionner les article du parent (de son admin)
            else{
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['archive' => false, 'utilisateur' => $this->getUser()]);
                break;
            }
        }*/
        
        $repository = $this->getDoctrine()->getRepository('CommandeBundle:Commande');
        
        $query = $repository->createQueryBuilder("c")
                    ->orderBy("c.id",'DESC')
                    ->getQuery();
        
        $commandes = $query->getResult();
        
        //pagination des commandes ! (reste a modifier la vue)
        //$commandes  = $this->get('knp_paginator')->paginate($query,$request->query->get('page', 1),1);
        
        $commandesArticles = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findAll();
        $commandesLots = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findAll();
        
        $form = $this->createForm(CommandeType::class, null, array(
            "action" => $this->generateUrl('ajout-commande'), 
            'attr' => array('user' => $user))
        );

        return $this->render(
            'commande/commande.html.twig',
            array('form' => $form->createView(),
                'commandes' => $commandes,
                'commandesArticles' => $commandesArticles,
                'commandesLots' => $commandesLots)
        );
    }

    
    
    public function ajoutAction(Request $request)
    {
        //$commandeTest = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['libelle' => $request->request->get('commande')['libelle']]);
        
        //on verifie si la commande n'existe pas déjà
        /*if($commandeTest){
            
            $this->addFlash('alert', "la commande '".$commandeTest->getLibelle()."' existe déjà !");
            
            return $this->indexAction(); 
        }*/

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
        
        //test ajout d'année auto
        //$date = ('2018-08-15');
        
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
    
    
    
    public function suppressionAction(Request $request){
        
        $em = $this->getDoctrine()->getManager();
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $request->attributes->get('idCommande')]);
        
        $articlesCommande = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $commande]);
        
        //on remet les articles en stock avant suppression
        foreach($articlesCommande as $articleCommande){
            
            $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $articleCommande->getArticle()->getId()]);
            
            //si l'article est en vente, on remet dans le stock !
            if ($articleCommande->getAction() == "Vente"){
                
                $article->setQuantite($articleCommande->getQuantite()+$article->getQuantite());
            }
            
            $em->remove($articleCommande);
            
        }
        
        $commandesLot = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findBy(['commande' => $commande]);
        
        foreach($commandesLot as $commandeLot){
            
            $articlesLot = $this->getDoctrine()->getRepository('ArticleBundle:LotArticle')->findBy(['lot' => $commandeLot->getLot()]);
            
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
                
                }
            }
            
            $em->remove($commandeLot);
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
            'commande/ajout-article-commande.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
    
    
    public function ajoutArticleAction (Request $request){
        
        $formPost = $request->request->get('ajout_article_commande');

        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $request->attributes->get('idCommande')]);
        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $formPost['article']]);
        $action = $this->getDoctrine()->getRepository('ActionBundle:Action')->findOneBy(['id' => $formPost['action']]);
        
        $quantiteDemandee = $formPost['quantite'];
        $quantiteStock = $article->getQuantite();
        
        //si on n'ajoute pas un service on soustrait la qtt demandé au stock
        if($action->getLibelle() == "Vente"){
            
            //si la quantité demandé dépasse le stock
            if($article->getQuantite() < $quantiteDemandee){
                $this->addFlash('alert', "Le stock de '".$article->getLibelle()."' est de ".$article->getQuantite()." Vous ne pouvez donc pas en ajouter ".$quantiteDemandee." !");
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
        
        $commandeArticle = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findOneBy(['article' => $article, 'commande' => $commande]);
        
        //si l'article est déjà dans la commande on change la quantite 
        if($commandeArticle){
            
            $commandeArticle->setQuantite($commandeArticle->getQuantite()+$quantiteDemandee);
        }
        else{
            
            $commandeArticle = new CommandeArticle();
        
            $commandeArticle->setCommande($commande);
            $commandeArticle->setArticle($article);
            $commandeArticle->setRetour(1);
            $commandeArticle->setQuantite($quantiteDemandee);
            $commandeArticle->setAction($action);
            
            //$commandeArticle = $form->getData();
        }
        
        
        $this->addFlash('feedback', "L'article '".$article->getLibelle()."' à bien été rajouté à la commande '".$commande->getLibelle()."' votre stock de '".$article->getLibelle()."' est désormais de ".$article->getQuantite());
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($commandeArticle);
        $em->flush();
        
        exit;
        
    }
    
    
    
    
    public function suppressionArticleAction(Request $request){
        
        $idArticle = $request->attributes->get('idArticle');
        $idCommande = $request->attributes->get('idCommande');
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $idCommande]);
        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $idArticle]);
        
        $commandeArticle = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findOneBy(['commande' => $commande, 'article' => $article]);
        
        //on remet les items pris pour la commande dans le stock
        $article->setQuantite($commandeArticle->getQuantite()+$article->getQuantite());
        
        $this->addFlash('feedback', "L'article '".$article->getLibelle()."' à bien été enlevé de la commande '".$commande->getLibelle()."' votre stock de '".$article->getLibelle()."' est désormais de ".$article->getQuantite());
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($commandeArticle);
        $em->flush();
        
        return $this->redirectToRoute('commande');
        
    }
    
    
    
    public function devisAction(Request $request) {
        
        $commandeId = $request->attributes->get('idCommande');
        
        return $this->genererPdf($commandeId, "Devis");
        
    }
    
    
    
    public function factureAction(Request $request) {
        
        $commandeId = $request->attributes->get('idCommande');
        
        return $this->genererPdf($commandeId, "Facture");
        
    }
    
    
    
    private function genererPdf($commandeId, $document){
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $commandeId]);
        $commandesArticles = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findAll();
        $commandesLot = $this->getDoctrine()->getRepository('AppBundle:CommandeLot')->findAll();
        
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->render('commande/facture.html.twig',
                array('commande' => $commande,
                    'commandesArticles' => $commandesArticles,
                    'document' => $document,
                    'commandesLot' => $commandesLot)
                )->getContent();
         
        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
 
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
 
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);
 
        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $content = $html2pdf->Output('', true);
        
        //on appose un titre
        $titre = $document.str_replace(" ", "_", $commande->getLibelle());

        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename='.$titre.'.pdf');
        return $response;
    }
    
    
    
    public function commandesArchiveesAction(){
        
        $user = $this->getUser();
        
        foreach($user->getRoles() as $role){
            
            if($role === "ROLE_SUPER_ADMIN"){
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['archive' => true]);
                break;
            }
            elseif($role === "ROLE_ADMIN"){
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['archive' => true, 'utilisateur' => $this->getUser()]);
                break;
            }
            //@todo selectionner les article du parent (de son admin)
            else{
                $commandes = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findBy(['archive' => true, 'utilisateur' => $this->getUser()]);
                break;
            }
        }
        
        $commandesArticles = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findAll();

        return $this->render(
            'commande/commandesArchivees.html.twig',
            array('commandes' => $commandes,
                'commandesArticles' => $commandesArticles)
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
    
    
    
    private function etapeLocation($idCommande, $etape){
        
        $em = $this->getDoctrine()->getManager();
        
        $commande = $this->getDoctrine()->getRepository('CommandeBundle:Commande')->findOneBy(['id' => $idCommande]);
        
        $commandesArticle = $this->getDoctrine()->getRepository('AppBundle:CommandeArticle')->findBy(['commande' => $idCommande]);
        
        //Boucle ARTICLES
        foreach($commandesArticle as $commandeArticle){
            
            //on séléctionne seulement les articles loués
            if($commandeArticle->getAction() && $commandeArticle->getAction()->getId() == 1){
                
                if($etape == 'depart'){
                    //on séléctionne uniquement les articles ne sont pas partis
                    if($commandeArticle->getRetour() == true){

                        //on déduis les articles du stock
                        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $commandeArticle->getArticle()->getId()]);
                        $article->setQuantite($article->getQuantite()-$commandeArticle->getQuantite());

                        $commandeArticle->setRetour(false);

                        $em->merge($commandeArticle);
                        
                        $this->addFlash('feedback', "Les articles loués de la commande '".$commande->getLibelle()."' ont bien été envoyés et déduis du stock ");
                    }
                }
                elseif($etape == 'retour'){
                    
                    //on séléctionne uniquement les articles qui n'ont pas déjà été rendus
                    if($commandeArticle->getRetour() == false){

                        //on remet les articles en stock
                        $article = $this->getDoctrine()->getRepository('ArticleBundle:Article')->findOneBy(['id' => $commandeArticle->getArticle()->getId()]);
                        $article->setQuantite($article->getQuantite()+$commandeArticle->getQuantite());

                        $commandeArticle->setRetour(true);

                        $em->merge($commandeArticle);
        
                        $this->addFlash('feedback', "Les articles loués de la commande '".$commande->getLibelle()."' ont bien été restitués et rajouté au stock ");
                    }
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
            
            $this->addFlash('feedback', "La commande '".$commande->getLibelle()."' à bien été déclarée comme étant archivée");
        }
        
        
        $em = $this->getDoctrine()->getManager();
        $em->merge($commande);
        $em->flush();
        
        return $this->redirectToRoute('commande');
    }
    
    
    
    
    public function versementAcomptePopAction(Request $request){
        
        $idCommande = $request->attributes->get('idCommande');
        
        //transmission de la variable $user par les attributs !
        $form = $this->createForm(AjoutAcompteCommandeType::class, null, array(
            "action" => $this->generateUrl('versement-acompte',array('idCommande' => $idCommande))
        ));
    
        return $this->render(
            'commande/ajout-article-commande.html.twig',
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
            'commande/ajout-article-commande.html.twig',
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
    
}
