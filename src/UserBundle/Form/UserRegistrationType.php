<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class UserRegistrationType extends BaseType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
        ->add('nom' ,'text', array('attr' => array('class' => 'col-sm-2'),'label'=>'Nom :','required'=>true))
        ->add('prenom' ,'text', array('attr' => array('class' => 'col-sm-2'),'label'=>'Prénom :' , 'required'=>true))
        ->add('grade', 'text', array('attr' => array('class' => 'col-sm-2'),'label'=>'Grade :' , 'required'=>true))
        ->add('trigramme' ,'text', array('attr' => array('class' => 'col-sm-2'),'label'=>'Trigramme :' , 'required'=>false))
        ->add('anneeService','integer', array('attr' => array('class' => 'col-sm-3'),'label'=>'Année d\'entrée en service :' , 'required'=>false))
        ->add('unite' , 'text', array('attr' => array('class' => 'col-sm-2'),'label'=>'Unité :', 'required'=>true))
        //->add('site')
        ->add('fonction' , 'text', array('attr' => array('class' => 'col-sm-2'),'label'=>'Fonction :'))
                ->add('armee','choice',array('label'=>'Armée d\'appartenance :' ,'choices'=> array(
                'AIR'=>'Armée de l\'Air',
				'TERRE'=>'Armée de Terre',
                'MARINE'=>'Marine',
                'DGA'=>'Direction Générale de l\'Armement',
                'GEND'=>'Gendarmerie'
            ),
            'multiple' => false,'expanded' => false,'required' => false
			))
                ->add('qualifications', new QualificationsType())
        // on ajoute les 5 qualifications
        //->add('qualification1', new QualificationType(true))
        //->add('qualification2', new QualificationType())
        //->add('qualification3', new QualificationType())
        //->add('qualification4', new QualificationType())
        //->add('qualification5', new QualificationType())
        ;
    }

    /**
    * @param OptionsResolverInterface $resolver
    */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    /**
    * @return string
    */
    public function getName()
    {
        return 'feod_user_registration';
    }
}
