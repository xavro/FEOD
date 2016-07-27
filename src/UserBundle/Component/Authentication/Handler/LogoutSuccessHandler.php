<?php

namespace Admin\UserBundle\Component\Authentication\Handler;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

/**
 * Gestionnaire écoutant le succes de la déconnexion.
 * Délock l'utilisateur.
 */
class LogoutSuccessHandler implements LogoutSuccessHandlerInterface {

    protected $router;

    public function __construct(Router $router, \FOS\UserBundle\Doctrine\UserManager $entityManager, \Symfony\Component\Security\Core\SecurityContext $securityContext) {
        $this->router = $router;
        $this->em = $entityManager;
        $this->sc = $securityContext;
    }

    public function onLogoutSuccess(Request $request) {
        $user = $this->sc->getToken()->getUser();
        // Pour récupérer le service UserManager du bundle
        //$userManager = $this->get('fos_user.user_manager');
        // Pour modifier un utilisateur
        $user->setLocked(false);
        $user->setConnected(false);
        $this->em->updateUser($user);
        // redirect the user to where they were before the login process begun.
        $referer_url = $request->headers->get('referer');

        $response = new RedirectResponse($this->router->generate('profil'));
        return $response;
    }

}