<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    /*public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }*/
    
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $titre = "Accueil";
        
        $message = 'Mon premier message';

        return $this->render(
            'vitrine/index.html.twig',
          array('message' => $message,
                'titre' => $titre)
        );
    }
    
    
    
    public function indexAppliAction()
    {
        $titre = "Accueil";
        
        $message = 'Mon premier message';

        return $this->render(
            'index/index.html.twig',
          array('message' => $message,
                'titre' => $titre)
        );
    }
    
}
