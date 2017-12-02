<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $titre = "Accueil";
        
        $message = 'Mon premier message';

        return $this->render(
            'VitrineBundle:vitrine:index.html.twig',
          array('message' => $message,
                'titre' => $titre)
        );
    }

    public function indexAppliAction()
    {
        $titre = "Accueil";

        return $this->render(
            'AppBundle:index:index.html.twig',
          array(
                'titre' => $titre
          )
        );
    }
    
}
