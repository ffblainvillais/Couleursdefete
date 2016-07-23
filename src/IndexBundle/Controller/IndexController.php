<?php

namespace IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class IndexController extends Controller
{
    
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $message = 'Mon premier message';

        return $this->render(
            'index/index.html.twig',
          array('message' => $message)
        );
    }
    
    
    
    
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $tableau = [
            "salut",
            "ca va?",
            "oui et toi?"
        ];
        
        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'tableau' => $tableau
        ]);

    }
}
