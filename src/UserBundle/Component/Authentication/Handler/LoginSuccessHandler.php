<?php

namespace Admin\UserBundle\Component\Authentication\Handler;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

/**
 * Gestionnaire écoutant le succes de la connexion.
 * Redirige l'utilisateur sur des pages différentes suivant son role.
 */
class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface {

    protected $router;

    public function __construct(Router $router, \FOS\UserBundle\Doctrine\UserManager $entityManager) {
        $this->router = $router;
        $this->em = $entityManager;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        
        $roles = $token->getRoles();
        //On transforme un tableau d'instance en tableau simple
        $rolesTab = array_map(function($roles){return $roles->getRole();}, $roles);
        
        //l'utilisateur est locké
        $user = $token->getUser();
        $user->setLocked(false);
        $user->setConnected(true);
        $this->em->updateUser($user);
        
		if (in_array("ROLE_CO", $rolesTab) or in_array("ROLE_MUNEX", $rolesTab) or in_array("ROLE_LABMANAGER", $rolesTab)) {            
            $response = new RedirectResponse($this->router->generate('cithare_search_eo', array()));
	    }
		 
        elseif (in_array("ROLE_CHIMISTE", $rolesTab) or in_array("ROLE_ELECTRONICIEN", $rolesTab) or
                in_array("ROLE_FORENSIC", $rolesTab) or in_array("ROLE_TRIAGE", $rolesTab) or
                in_array("ROLE_LABMANAGER", $rolesTab)) {            
            $response = new RedirectResponse($this->router->generate('cithare_exhibits_index', array()));
        }
        
		 elseif (in_array("ROLE_USER", $rolesTab)) {            
            $response = new RedirectResponse($this->router->generate('profil', array()));
        }
		
        elseif (in_array("ROLE_ADMIN", $rolesTab)) {
            $response = new RedirectResponse($this->router->generate('admin_user'));
        }
       
        return $response;
    }

}