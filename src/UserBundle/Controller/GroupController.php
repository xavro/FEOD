<?php

namespace Admin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Admin\UserBundle\Entity\Group;
use Admin\UserBundle\Form\GroupType;

/**
 * Group controller.
 *
 */
class GroupController extends Controller {

    /**
     * Lists all Group entities.
     *
     */
    public function indexAction() {
        $groupmanager = $this->get('fos_user.group_manager');
        
        $groups = $groupmanager->findGroups();
        return $this->render('AdminUserBundle:Group:index.html.twig', array(
                    'entities' => $groups,
                ));
    }

    /**
     * Finds and displays a Group entity.
     * Utilisation des ParamConverter
     */
    public function showAction(Group $group) {

        $deleteForm = $this->createDeleteForm($group->getId());

        return $this->render('AdminUserBundle:Group:show.html.twig', array(
                    'entity' => $group,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Group entity.
     *
     */
    public function newAction() {
        $groupManager = $this->container->get('fos_user.group_manager');
        $group = $groupManager->createGroup('');
        $form = $this->createForm(new GroupType(), $group);

        return $this->render('AdminUserBundle:Group:new.html.twig', array(
                    'entity' => $group,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Creates a new Group entity.
     *
     */
    public function createAction(Request $request) {
        $groupManager = $this->container->get('fos_user.group_manager');
        $group = $groupManager->createGroup('');
        $form = $this->createForm(new GroupType(), $group);
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $groupManager->updateGroup($group);
            
            $this->get('myLogger')->info('Le groupe '. $group->getName() .' a bien été créé.');            
            $this->get('session')->getFlashBag()->add('notice',
                    'Le groupe '. $group->getName() .' a bien été créé.' );

            return $this->redirect($this->generateUrl('admin_group_show', array('id' => $group->getId())));
        }
        
        $this->get('myLogger')->error('Echec de la création du groupe '. $group->getName().'.');            
        $this->get('session')->getFlashBag()->add('notice',
                    'Echec de la création du groupe '. $group->getName().'.' );

        return $this->render('AdminUserBundle:Group:new.html.twig', array(
                    'entity' => $group,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Displays a form to edit an existing Group entity.
     * Utilisation des ParamConverter
     */
    public function editAction(Group $group) {

        $editForm = $this->createForm(new GroupType(), $group);
        
        $deleteForm = $this->createDeleteForm($group->getId());

        return $this->render('AdminUserBundle:Group:edit.html.twig', array(
                    'entity' => $group,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }
    
    /**
     * Edits an existing Group entity.
     * Utilisation des ParamConverter
     */
    public function updateAction(Request $request, Group $group) {    

        $deleteForm = $this->createDeleteForm($group->getId());
        $editForm = $this->createForm(new GroupType(), $group);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $groupManager = $this->container->get('fos_user.group_manager');
            $groupManager->updateGroup($group);
            
            $this->get('myLogger')->info('Le groupe '. $group->getName() .' a bien été modifié.');            
            $this->get('session')->getFlashBag()->add('notice',
                    'Le groupe '. $group->getName() .' a bien été modifié.' );

            return $this->render('AdminUserBundle:Group:show.html.twig', array(
                    'entity' => $group,
                    'delete_form' => $deleteForm->createView(),));
        }
        
        $this->get('myLogger')->error('Echec de la modification du groupe '. $group->getName().'.');            
        $this->get('session')->getFlashBag()->add('notice',
                    'Echec de la modification du groupe '. $group->getName().'.' );

        return $this->render('AdminUserBundle:Group:edit.html.twig', array(
                    'entity' => $group,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }
    
    /**
     * Displays a form to edit the relation user-group.
     * Utilisation des ParamConverter
     */
    public function relationAction(Group $group) {
        
        $userManager = $this->get('fos_user.user_manager');

        // Pour récupérer la liste de tous les utilisateurs
        $users = $userManager->findUsers();

        $editForm = $this->createForm(new GroupType(), $group); 

        return $this->render('AdminUserBundle:Group:relation.html.twig', array(
                    'entity' => $group,
                    'edit_form' => $editForm->createView(),
                    'users' => $users,                    
                ));
    }
    
    /**
     * Execute les modification des relations user-group.
     * Utilisation des ParamConverter
     */
    public function relationUpdateAction() {
        
        $groupId = $_POST['groupId'];
        $userId = $_POST['userId'];
        $affect = $_POST['affect'];
        
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array ('id' => $userId));
        $usergroup = $this->get('fos_user.group_manager');
        $group = $usergroup->findgroupBy(array ('id' => $groupId));
        
        if($affect === 'true'){
            $user->addGroup($group);
        } else {
            $user->removeGroup($group);    
        }
        
        $userManager->updateUser($user);   
        
        return new \Symfony\Component\HttpFoundation\Response($user);      
    }
    

    /**
     * Deletes a Group entity.
     * Utilisation des ParamConverter
     */
    public function deleteAction(Request $request, Group $group) {
        $form = $this->createDeleteForm($group->getId());
        $form->handleRequest($request);

        //liste des users du groupe
        $userEm = $this->getDoctrine()->getManager('cithareEm');
        $userDuGroup = $userEm->getRepository('AdminUserBundle:User')->UsersByGroup($group);
        
        //modification des users. suppression du group
        $userManager = $this->get('fos_user.user_manager');
        foreach ($userDuGroup as $user) {
            $user->removeGroup($group);
            $userManager->updateUser($user);
        }
        
        if ($form->isValid()) {
            $groupManager = $this->container->get('fos_user.group_manager');
            $groupManager->deleteGroup($group);
            
            $this->get('myLogger')->info('Le groupe '. $group->getName() .' a bien été supprimé.');            
            $this->get('session')->getFlashBag()->add('notice',
                    'Le groupe '. $group->getName() .' a bien été supprimé.' );
        } else {
            $this->get('myLogger')->error('Echec de la suppression du groupe '. $group->getName().'.');            
            $this->get('session')->getFlashBag()->add('notice',
                    'Echec de la suppression du groupe '. $group->getName().'.' );
        }        

        return $this->redirect($this->generateUrl('admin_group'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
