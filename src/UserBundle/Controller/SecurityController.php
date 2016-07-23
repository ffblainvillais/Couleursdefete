<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function loginAction()
    {
        //Si le visiteur est déjà identifié, on le redirige vers l'accueil
        /*if($this->get('security.context')->isGranted("IS_AUTHENTICATED_REMEMBERED")){
            return $this->redirectToRoute('oc_platform_accueil');
        }*/
        
        //$userService = $this->get('user');
        //Le service authentication_utils permet de recuperer le nom d'utilisateur
        // et l'erreur dans le cas ou le formulaire à déjà été soumis mais était invalide
        $authenticationUtils = $this->get('security.authentication_utils');
        
        $utilisateur = $this->getUser();

        return $this->render('security/login.html.twig',array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
            'utilisateur'   => $utilisateur,
        ));
    }
    
    
    
    public function logoutAction()
    {
        $message = 'Au revoir !';
        
        return $this->render(
            'index/index.html.twig',
          array('message' => $message)
        );
    }
}
