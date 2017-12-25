<?php

namespace CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use CommandeBundle\Service\InvoiceService;
use CommandeBundle\Service\CommandeService;
use CommandeBundle\Service\BookingService;

use CommandeBundle\Form\CommandeType;
use CommandeBundle\Form\AjoutArticleCommandeType;
use CommandeBundle\Form\AjoutLotCommandeType;
use CommandeBundle\Form\AjoutAcompteCommandeType;
use CommandeBundle\Entity\Commande;
use CommandeBundle\Entity\Annee;
use AppBundle\Entity\CommandeLot;

class CommandeController extends Controller
{

    protected $container;
    protected $em;
    protected $invoiceService;
    protected $commandeService;
    protected $bookingService;
    protected $paginator;

    public function __construct(ContainerInterface $container, EntityManagerInterface $entityManager, InvoiceService $invoiceService,  CommandeService $commandeService, BookingService $bookingService, $paginator)
    {
        $this->container        = $container;
        $this->em               = $entityManager;
        $this->invoiceService   = $invoiceService;
        $this->commandeService  = $commandeService;
        $this->bookingService   = $bookingService;
        $this->paginator        = $paginator;
    }

    public function indexAction(Request $request)
    {
        $curentPage = $request->query->get('page', 1);
        $query      = $this->em->getRepository('CommandeBundle:Commande')->getOrdersForPaginate();

        $orders     = $this->paginator->paginate($query, $curentPage, 5);

        $form = $this->createForm(CommandeType::class, null, array(
                "action"    => $this->generateUrl('ajout-commande'),
                'attr'      => array('user' => null))
        );

        return $this->render(
            'CommandeBundle:commande:commande.html.twig',
            array(
                'form'              => $form->createView(),
                'orders'            => $orders
            )
        );
    }

    public function viewAction(Request $request)
    {
        $orderId    = $request->attributes->get('idCommande');
        $order      = $this->em->getRepository(Commande::class)->findOneBy(['id' => $orderId]);

        $form = $this->createForm(CommandeType::class, null, array(
                "action"    => $this->generateUrl('ajout-commande'),
                'attr'      => array('user' => null))
        );

        return $this->render(
            'CommandeBundle:commande:order-details.html.twig',
            array(
                'form'          => $form->createView(),
                'order'         => $order,
            )
        );
    }

    public function ajoutAction(Request $request)
    {

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
            
            $this->em->persist($annee);
            $this->em->flush();
        }

        $commande->setAnnee($annee);
        
        $this->em->persist($commande);
        $this->em->flush();

        $this->addFlash('feedback', "la commande '".$commande->getLibelle()."' à bien été crée");
       
        return $this->redirectToRoute('commande');   
    }
    
    public function suppressionAction(Request $request)
    {
        $commande = $this->commandeService->getOrderById($request->attributes->get('idCommande'));

        $this->commandeService->removeAllItemsFromOrder($commande);
        
        $this->addFlash('feedback', "La commande '".$commande->getLibelle()."' à bien été supprimé");

        $this->em->remove($commande);
        $this->em->flush();
        
        return $this->redirectToRoute('commande');
    }

    public function ajoutArticlePopAction(Request $request)
    {

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

    public function ajoutArticleAction (Request $request)
    {
        
        $formPost   = $request->request->get('ajout_article_commande');

        $article    = $this->commandeService->getArticleById($formPost['article']);
        $order      = $this->commandeService->getOrderById($request->attributes->get('idCommande'));

        $orderArticle = $this->commandeService->addArticleToOrder($order, $article, $formPost['quantite'], $formPost['action']);

        $this->addFlash('feedback', "L'article '".$article->getLibelle()."' à bien été ajouté");

        $this->em->persist($orderArticle);
        $this->em->flush();

        exit;
    }

    public function suppressionArticleAction(Request $request)
    {
        $order          = $this->commandeService->getOrderById($request->attributes->get('idCommande'));
        $article        = $this->commandeService->getArticleById($request->attributes->get('idArticle'));
        $orderArticle   = $this->commandeService->getOrderArticle($order, $article);

        $this->commandeService->removeArticleOrder($orderArticle);

        $this->addFlash('feedback', "L'article '".$article->getLibelle()."' à bien été enlevé de la commande '".$order->getLibelle()."' votre stock de '".$article->getLibelle()."' est désormais de ".$article->getQuantite());
         
        return $this->redirectToRoute('commande');
        
    }
    
    public function commandesArchiveesAction(Request $request)
    {
        $archivedOrdersForPaginate = $this->em->getRepository(Commande::class)->getArchivedOrdersForPaginate();

        $orders  = $this->paginator->paginate($archivedOrdersForPaginate, $request->query->get('page', 1),5);

        return $this->render(
            'CommandeBundle:commande:commandesArchivees.html.twig',
            array(
                'orders' => $orders,
            )
        );
    }

    public function archiverAction(Request $request)
    {
        $order = $this->commandeService->getOrderById($request->attributes->get('idCommande'));

        $varsForPdf = $this->invoiceService->prepareRenderViewPdf($order->getId(), "UltimeFacture");

        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->render('CommandeBundle:commande:facture.html.twig',
            array(
                'commande'          => $varsForPdf['commande'],
                'itemsCommande'     => $varsForPdf['itemsCommande'],
                'typeDocument'      => $varsForPdf['typeDocument'],
            )
        )->getContent();

        $this->invoiceService->getOrderPdf($order->getId(), "UltimeFacture", $html);

        $this->addFlash('feedback', "La commande '".$order->getLibelle()."' à bien été déclarée comme étant archivée");

        $order = $this->commandeService->archivedOrder($order);

        $this->em->persist($order);
        $this->em->flush();

        return $this->redirectToRoute('commande');
    }

    public function payeAction(Request $request)
    {
        $order = $this->commandeService->getOrderById($request->attributes->get('idCommande'));

        //lors de la réservation on retir du stock également
        $this->bookingService->bookingPayedOrder($order);
        $this->commandeService->removeFromStock($order);

        $order->setPaye(true);

        $this->em->persist($order);
        $this->em->flush();

        $this->addFlash('feedback', "La commande '".$order->getLibelle()."' à bien été déclarée comme étant payée");

        return $this->redirectToRoute('commande');
    }

    public function versementAcomptePopAction(Request $request)
    {
        
        $idCommande = $request->attributes->get('idCommande');
        
        $form = $this->createForm(AjoutAcompteCommandeType::class, null, array(
            "action" => $this->generateUrl('versement-acompte',array('idCommande' => $idCommande))
        ));
    
        return $this->render(
            'CommandeBundle:commande:ajout-article-commande.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    public function versementAcompteAction (Request $request)
    {
        $amount     = $request->request->get('ajout_acompte_commande')['Montant'];
        $order      = $this->commandeService->getOrderById($request->attributes->get('idCommande'));

        $order = $this->commandeService->deposit($order, $amount);

        $this->em->persist($order);
        $this->em->flush();

        $this->addFlash('feedback', "Un acompte de '". $amount ."' à bien été rajouté à la commande '".$order->getLibelle());
        
        exit;
    }

    public function ajoutLotPopAction(Request $request)
    {
        
        $idCommande = $request->attributes->get('idCommande');

        $form = $this->createForm(AjoutLotCommandeType::class, null, array(
            "action" => $this->generateUrl('ajout-lot-commande',array('idCommande' => $idCommande)),
        ));
    
        return $this->render(
            'CommandeBundle:commande:ajout-article-commande.html.twig',
            array('form' => $form->createView())
        );
    }

    public function ajoutLotAction (Request $request)
    {
        $formPost = $request->request->get('ajout_lot_commande');

        $order  = $this->commandeService->getOrderById($request->attributes->get('idCommande'));
        $lot    = $this->commandeService->getLotById($formPost['lot']);

        $orderLot = $this->commandeService->addLotArticleToOrder($order, $lot, $formPost['quantite'], $formPost['action']);
        
        $this->em->persist($orderLot);
        $this->em->flush();

        $this->addFlash('feedback', "Le lot '".$lot->getLibelle()."' à bien été rajouté à la commande '".$order->getLibelle());

        exit;
    }
    
    public function suppressionLotAction(Request $request)
    {
        $order      = $this->commandeService->getOrderById($request->attributes->get('idCommande'));
        $lot        = $this->commandeService->getLotById($request->attributes->get('idLot'));
        $orderLot   = $this->em->getRepository(CommandeLot::class)->findOneBy(['lot' => $lot, 'commande' => $order]);

        $this->commandeService->removeLotOrder($orderLot);

        $this->addFlash('feedback', "Le lot '".$lot->getLibelle()."' à bien été enlevé de la commande '".$order->getLibelle());

        return $this->redirectToRoute('commande');
    }

    //@todo old function useless now
    /*public function retourLocationAction(Request $request)
    {
        $order = $this->commandeService->getOrderById($request->attributes->get('idCommande'));

        $this->commandeService->retourLocation($order);

        $this->addFlash('feedback', "Les articles loués de la commande '".$order->getLibelle()."' ont bien été restitués et rajouté au stock ");

        return $this->redirectToRoute('commande');
    }

    public function departLocationAction(Request $request)
    {
        $order = $this->commandeService->getOrderById($request->attributes->get('idCommande'));

        $this->commandeService->departLocation($order);

        $this->addFlash('feedback', "Les articles loués de la commande '".$order->getLibelle()."' ont bien été envoyés et déduis du stock ");

        return $this->redirectToRoute('commande');
    }*/
    
}
