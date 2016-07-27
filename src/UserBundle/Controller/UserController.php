<?php

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;
use UserBundle\Form\UserEditPasswordType;

/**
 * User controller.
 *
 */
class UserController extends Controller {

    /**
     * Page du profil.
     */
    public function profilAction() {
        return $this->render('UserBundle:Security:profil.html.twig', array(
                    'user' => $this->getCurrentUser(),
        ));
    }

    /**
     * Obtient l'utilisateur courant
     * @return type
     * @throws AccessDeniedException
     */
    public function getCurrentUser() {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if (!is_object($user)) {
            throw new AccessDeniedException('Vous n\'êtes pas authentifié.');
        }
        return $user;
    }

    /**
     * Lists all User entities.     *
     */
    public function indexAction() {
        $userManager = $this->get('fos_user.user_manager');

        // Pour récupérer la liste de tous les utilisateurs
        $users = $userManager->findUsers();

        return $this->render('UserBundle:User:index.html.twig', array(
                    'users' => $users,
        ));
    }

    /**
     * Finds and displays a User entity.
     * Utilisation des ParamConverter
     */
    public function showAction(User $user) {

        $deleteForm = $this->createDeleteForm($user->getId());

        return $this->render('UserBundle:User:show.html.twig', array(
                    'user' => $user,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new User entity.     *
     */
    public function newAction() {
        $user = new User();
        //initialisation du formulaire (preremplissage)
        $user->setEnabled(true);
        $datetime = new \DateTime();
        $dateInterval = new \DateInterval('P2Y');
        $user->setExpiresAt($datetime->add($dateInterval));

        //Création du formulaire
        $form = $this->createForm(new UserType(), $user, array('mode' => 'create'));

        return $this->render('UserBundle:User:new.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new User entity.     *
     */
    public function createAction(Request $request) {

        // Pour récupérer le service UserManager du bundle
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $user->setEnabled(true);

        $form = $this->createForm(new UserType(), $user);
        //lien Requête <-> Formulaire
        $form->handleRequest($request);
        
        $pattern = "(?=.*\d)(?=.*[a-z])(?=.*[\*\+\-\,\;\:\!\$\%\_\@\#])(?=.*[A-Z]).{9,}";
        $passwordOk = preg_match("/^$pattern$/", $user->getPassword());

        if ($form->isValid() && $passwordOk) {
            // Pas besoin de faire un flush
            //avec l'entityManager, cette méthode le fait toute seule !
            $user->setPlainPassword($user->getPassword());
            $userManager->updateUser($user);

            //$this->get('myLogger')->error('error logger creer');
            //$this->get('myLogger')->debug('debug logger creer');
            $this->get('myLogger')->info('L\'utilisateur ' . $user->getUsername() . ' a bien été créé.');

            $this->get('session')->getFlashBag()->add('notice', 'L\'utilisateur ' . $user->getUsername() . ' a bien été créé.');

            //$action = $this->get('taranis_otages.creerAction')->create('creation user', $user->getId(), 'desc');
            return $this->redirect($this->generateUrl('admin_user_show', array('id' => $user->getId())));
        }

        if ($passwordOk) {
            $this->get('myLogger')->error('Echec de la création de l\'utilisateur ' . $user->getUsername() . '.');
            $this->get('session')->getFlashBag()->add('notice ', 'Echec de la création de l\'utilisateur ' . $user->getUsername() . '.');
        } else {
            $this->get('myLogger')->error('Echec de la création de l\'utilisateur ' . $user->getUsername() . '. Le mot de passe ne respecte pas les contraintes.');
            $this->get('session')->getFlashBag()->add('notice', 'Echec de la création de l\'utilisateur ' . $user->getUsername() . '. Le mot de passe ne respecte pas les contraintes.');
        }
        return $this->render('UserBundle:User:new.html.twig', array(
                    'user' => $user,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit the password.     *
     */
    public function passwordAction(User $user) {

        //$user = $this->getCurrentUser();
        $editPasswordForm = $this->createForm(new UserEditPasswordType(), $user);

        return $this->render('UserBundle:User:editPassword.html.twig', array(
                    'user' => $user,
                    'editPassword_form' => $editPasswordForm->createView(),
        ));
    }

    /**
     * Edits an existing User entity.     *
     */
    public function updatePasswordAction(Request $request, User $user) {

        $editForm = $this->createForm(new UserEditPasswordType(), $user);
        $editForm->handleRequest($request);
        $deleteForm = $this->createDeleteForm($user->getid());
        
        $pattern = "(?=.*\d)(?=.*[a-z])(?=.*[\*\+\-\,\;\:\!\$\%\_\@\#])(?=.*[A-Z]).{9,}";
        $passwordOk = preg_match("/^$pattern$/", $user->getPlainPassword());

        if ($editForm->isValid() && $passwordOk) {
            $userManager = $this->container->get('fos_user.user_manager');
            //$user->setPlainPassword($user->getPassword());
            $userManager->updateUser($user);
            $this->get('myLogger')->info('Le mot de passe de l\'utilisateur ' . $user->getUsername() . ' a bien été modifié.');
            $this->get('session')->getFlashBag()->add('notice', 'Le mot de passe de l\'utilisateur ' . $user->getUsername() . ' a bien été modifié.');
        } else {
            $this->get('myLogger')->error('Echec de la modification du mot de passe de l\'utilisateur ' . $user->getUsername() . '. Le mot de passe ne respecte pas les contraintes.');
            $this->get('session')->getFlashBag()->add('notice', 'Echec de la modification du mot de passe de l\'utilisateur ' . $user->getUsername() . '. Le mot de passe ne respecte pas les contraintes.');
        }

        if ($this->getCurrentUser()->hasRole('ROLE_ADMIN')) {
            $retour = $this->redirect($this->generateUrl('admin_user_show', array('id' => $user->getId())));
        } else {
            $retour = $this->render('UserBundle:User:show.html.twig', array('user' => $user, 'delete_form' => $deleteForm->createView(),
                ));
        }

        return $retour;
    }

    /**
     * Displays a form to edit an existing User entity.     *
     */
    public function editAction(User $user) {

        $editForm = $this->createForm(new UserType(), $user, array('mode' => 'update'));
        $deleteForm = $this->createDeleteForm($user->getid());

        return $this->render('UserBundle:User:edit.html.twig', array(
                    'user' => $user,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, User $user) {

        $deleteForm = $this->createDeleteForm($user->getId());
        $editForm = $this->createForm(new UserType(), $user, array('mode' => 'update'));
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $userManager = $this->container->get('fos_user.user_manager');
            $userManager->updateUser($user);

            $this->get('myLogger')->info('L\'utilisateur ' . $user->getUsername() . ' a bien été modifié.');
            $this->get('session')->getFlashBag()->add('notice', 'L\'utilisateur ' . $user->getUsername() . ' a bien été modifié.');

            return $this->render('UserBundle:User:show.html.twig', array(
                        'user' => $user,
                        'delete_form' => $deleteForm->createView(),));
        }
else {
        $this->get('myLogger')->error('Echec de la modification de l\'utilisateur ' . $user->getUsername() . '.');
        $this->get('session')->getFlashBag()->add('notice', 'Echec de la modification de l\'utilisateur ' . $user->getUsername() . '.');
}
        return $this->render('UserBundle:User:edit.html.twig', array(
                    'user' => $user,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, User $user) {
        $form = $this->createDeleteForm($user->getId());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $userManager = $this->get('fos_user.user_manager');
            $userManager->deleteUser($user);
            $this->get('myLogger')->info('L\'utilisateur ' . $user->getUsername() . ' a bien été supprimé.');
            $this->get('session')->getFlashBag()->add('notice', 'L\'utilisateur ' . $user->getUsername() . ' a bien été supprimé.');
        } else {
            $this->get('myLogger')->error('Echec de la suppression de l\'utilisateur ' . $user->getUsername() . '.');
            $this->get('session')->getFlashBag()->add('notice', 'Echec de la suppression de l\'utilisateur ' . $user->getUsername() . '.');
        }

        return $this->redirect($this->generateUrl('admin_user'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

    public function activationAction() {

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('row_id');
            $champs = $request->request->get('id');
            $modif = $request->request->get('value');
            $service1 = "set" . $champs;
            $service2 = "is" . $champs;
        }

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle\Entity\User')->find($id);

        $entity->$service1($modif);
        $em->persist($entity);
        $em->flush();
        return new \Symfony\Component\HttpFoundation\Response("'" . $entity->$service2() . "'");
    }

}
