<?php

namespace UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use FOS\UserBundle\Model\UserManagerInterface;

class UserAdmin extends Admin
{

    private $userManager;
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
		->add('username' ,'text', array('label'=>'Login' , 'required'=>false))
        ->add('nom' ,'text', array('label'=>'Nom' , 'required'=>true))
        ->add('prenom' ,'text', array('label'=>'Prénom' , 'required'=>true))
        ->add('grade' ,'text', array('label'=>'Grade' , 'required'=>true))
        ->add('trigramme' ,'text', array('label'=>'Trigramme' , 'required'=>false))
        ->add('anneeService','text', array('label'=>'Année d\'entrée en service' , 'required'=>false))
        ->add('unite' ,'text', array('label'=>'Unité', 'required'=>true))
        ->add('armee','choice',array('label'=>'Armée d\'appartenance :' ,'choices'=> array(
                'AIR'=>'Armée de l\'Air',
				'TERRE'=>'Armée de Terre',
                'MARINE'=>'Marine',
                'DGA'=>'Direction Générale de l\'Armement',
                'GEND'=>'Gendarmerie'
            ),
            'multiple' => false,
            'expanded' => false,
            'required' => false
        ))
        ->add('fonction' ,'text', array('label'=>'Fonction' , 'required'=>true))
        //->add('plainPassword','password',array('required'=>false))
        ->add('roles','choice',array(
            'choices'=> array(
                'ROLE_ADMIN'=>'admin',
				'ROLE_OFFICIER_NEDEX'=>'offnedex',
                'ROLE_CLIENT'=>'client',
                'ROLE_EXPERT'=>'expert',
                'ROLE_VALIDATEUR'=>'validateur'
            ),
            'multiple' => true,
            'expanded' => false,
            'required' => false
        ))
        ->add('locked','checkbox',array(
            'required'=>false,
        ))
        //->add('qualifications',new \UserBundle\Form\QualificationsType())
        ;
    }

    /*protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper

        ->add('qualification2')
        ;

    }*/

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
 
       ->add('username')
        ->add('nom') //if no type is specified, SonataAdminBundle tries to guess it
        ->add('prenom')
        ->add('locked')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->add('armee')
		->add('username')
        ->add('nom' ,'text', array('label'=>'Nom' , 'required'=>true))
        ->add('prenom' ,'text', array('label'=>'Prénom' , 'required'=>true))
        ->add('locked')
        ->add('roles')
        ->add('_action', 'actions', array( 'actions' => array(
					'edit' => array(), 
				//	'delete' => array(), 
			)))
        ;
    }

    public function preUpdate($user)
    {
        $this->getUserManager()->updateCanonicalFields($user);
        $this->getUserManager()->updatePassword($user);
    }

    public function setUserManager(UserManagerInterface $userManager)
    {
        $this->userManager = $userManager;
    }

    public function getUserManager()
    {
        return $this->getConfigurationPool()->getContainer()->get('fos_user.user_manager');
    }
}
