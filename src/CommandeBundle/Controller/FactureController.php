<?php

namespace CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CommandeBundle\Service\InvoiceService;
use Symfony\Component\HttpFoundation\Request;

class FactureController extends Controller
{

    protected $invoiceService;

    public function __construct()
    {
        $this->invoiceService = new InvoiceService();
    }

    /**
     * Demande le devis correspondant à l'id de la commande donné
     *
     * @param Request $request
     * @return Response
     */
    public function devisAction(Request $request) {

        $commandeId = $request->attributes->get('idCommande');

        return $this->invoiceService->genererPdf($commandeId, "Devis");

    }

    /**
     * Demande la facture correspondant à l'id de la commande donné
     *
     * @param Request $request
     * @return Response
     */
    public function factureAction(Request $request) {

        $commandeId = $request->attributes->get('idCommande');

        return $this->invoiceService->genererPdf($commandeId, "Facture");

    }

    /**
     * Demande la facture correspondant à l'id de la commande donné
     *
     * @param Request $request
     * @return Response
     */
    public function ultimeFactureAction(Request $request) {

        $commandeId = $request->attributes->get('idCommande');

        return $this->invoiceService->getOrderPdf($commandeId, "UltimeFacture");

    }


}
