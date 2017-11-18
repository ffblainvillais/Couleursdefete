<?php

namespace CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ContainerInterface;
use CommandeBundle\Service\InvoiceService;

class FactureController extends Controller
{

    protected $invoiceService;
    protected $container;

    public function __construct(InvoiceService $invoiceService, ContainerInterface $container)
    {
        $this->invoiceService   = $invoiceService;
        $this->container        = $container;
    }

    /**
     * Demande le devis correspondant à l'id de la commande donné
     *
     * @param Request $request
     * @return Response
     */
    public function devisAction(Request $request) {

        $commandeId = $request->attributes->get('idCommande');

        $varsForPdf = $this->invoiceService->prepareRenderViewPdf($commandeId, "Devis");

        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->render('CommandeBundle:commande:facture.html.twig',
            array(
                'commande'          => $varsForPdf['commande'],
                'itemsCommande'     => $varsForPdf['itemsCommande'],
                'typeDocument'      => $varsForPdf['typeDocument'],
            )
        )->getContent();        //return $this->invoiceService->genererPdf($commandeId, "Devis");

        return $this->invoiceService->genererPdf($html, "Devis", $commandeId);
    }

    /**
     * Demande la facture correspondant à l'id de la commande donné
     *
     * @param Request $request
     * @return Response
     */
    public function factureAction(Request $request) {

        $commandeId = $request->attributes->get('idCommande');

        $varsForPdf = $this->invoiceService->prepareRenderViewPdf($commandeId, "Facture");

        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->render('CommandeBundle:commande:facture.html.twig',
            array(
                'commande'          => $varsForPdf['commande'],
                'itemsCommande'     => $varsForPdf['itemsCommande'],
                'typeDocument'      => $varsForPdf['typeDocument'],
            )
        )->getContent();        //return $this->invoiceService->genererPdf($commandeId, "Devis");

        return $this->invoiceService->genererPdf($html, "Facture", $commandeId);

    }

    /**
     * Demande la facture correspondant à l'id de la commande donné
     *
     * @param Request $request
     * @return Response
     */
    public function ultimeFactureAction(Request $request) {

        $commandeId = $request->attributes->get('idCommande');

        $varsForPdf = $this->invoiceService->prepareRenderViewPdf($commandeId, "UltimeFacture");

        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->render('CommandeBundle:commande:facture.html.twig',
            array(
                'commande'          => $varsForPdf['commande'],
                'itemsCommande'     => $varsForPdf['itemsCommande'],
                'typeDocument'      => $varsForPdf['typeDocument'],
            )
        )->getContent();

        return $this->invoiceService->getOrderPdf($commandeId, "UltimeFacture", $html);

    }


}
