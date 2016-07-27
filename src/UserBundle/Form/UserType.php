<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
        ->add('username', 'text', array('label' => 'Login de connexion',
                                             'attr' => array('class' => 'form-control', 'placeholder' => ' Prénom.Nom')
                ))
            ->add('prenom', 'text', array('label' => 'Prenom',
                                          'required' => false,  
                                          'attr' => array('class' => 'form-control')
                ))
                ->add('nom' ,'text', array('label'=>'Nom :','required'=>true))
                 ->add('grade', 'text', array('label'=>'Grade :' , 'required'=>true))
        ->add('trigramme' ,'text', array('label'=>'Trigramme :' , 'required'=>false))
        //->add('anneeService','integer', array('label'=>'Année d\'entrée en service :' , 'required'=>false))
        ->add('unite' , 'text', array('label'=>'Unité :', 'required'=>true))
        ->add('armee','choice',array('label'=>'Armée d\'appartenance :' ,'choices'=> array(
                'AIR'=>'Armée de l\'Air',
				'TERRE'=>'Armée de Terre',
                'MARINE'=>'Marine',
                'DGA'=>'Direction Générale de l\'Armement',
                'GEND'=>'Gendarmerie'
            ),
            'multiple' => false,'expanded' => false,'required' => false
			))
  
	->add('fonction' , 'text', array('label'=>'Fonction :'))
		
	// on ajoute les 5 qualifications
        ->add('qualifications', new QualificationsType())
            ->add('grade', 'text', array('label' => 'Grade',
                                         'required' => false, 
                                         'attr' => array('class' => 'form-control')
                ))    
            ->add('email', 'email', array(
                'attr' => array('class' => 'form-control')
            ))

                ;
        
        if ('create' == $options['mode']) {
            $builder->add('password', 'repeated', array( 
                'type' => 'password','label' => ' ',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Mot de passe :',                                               
                                                  'attr' =>  array(
                                                                'class' => 'form-control',
                                                                'pattern'   =>  "(?=.*\d)(?=.*[a-z])(?=.*[\*\+\-\,\;\:\!\$\%\_\@\#])(?=.*[A-Z]).{9,}",
                                                                'title'     =>  "Le mot de passe doit contenir au moins \n une majuscule, une minuscule, \n un chiffre, un caractère spécial (*+-,;:!$%_@#) \n et au moins 9 caractères",
                                                                //'onBlur'  =>  "var objet=this ; var text = objet.value; if(text.length < 9) { objet.parentNode.nextSibling.innerHTML='Le mot de passe ( '+text+' ) doit contenir au moins une majuscule, une minuscule, un chiffre, et au moins 8 caractères.'; return false; } else {objet.parentNode.nextSibling.innerHTML='';return true;}"
                                                )),
                'second_options' => array('label' => 'Confirmation mot de passe :',                                                
                                                  'attr' =>  array(
                                                                'class' => 'form-control',
                                                                'pattern'   =>  "(?=.*\d)(?=.*[a-z])(?=.*[\*\+\-\,\;\:\!\$\%\_\@\#])(?=.*[A-Z]).{9,}",
                                                                'title'     =>  "La confirmation du mot de passe doit être \n identique au mot de passe.",
                                                                //'onBlur'  =>  "var objet=this ; var text = objet.value; if(text.length < 9) { objet.parentNode.nextSibling.innerHTML='Le mot de passe ( '+text+' ) doit contenir au moins une majuscule, une minuscule, un chiffre, et au moins 8 caractères.'; return false; } else {objet.parentNode.nextSibling.innerHTML='';return true;}"
                                                )),
                'invalid_message' => 'fos_user.password.mismatch',
            ));
        }
        
        if ('update' == $options['mode']) {
            $builder->add('locked','checkbox', array('required' => false, 'label' => 'Verrouillé'));
        }
        
        $builder            
            
            ->add('roles', 'choice', array('choices'=> array(
                                                            'ROLE_ADMIN'=>'ADMIN',
		'ROLE_OFFICIER_NEDEX'=>'OFFICIER NEDEX',
                'ROLE_CLIENT'=>'CLIENT',
                'ROLE_EXPERT'=>'EXPERT',
                'ROLE_VALIDATEUR'=>'VALIDATEUR'
            ),
                                            'multiple' => true,
                                            'expanded' => true,
                                            'required' => false,
                                            'attr'     => array('class' => 'roles'),
            ))
   
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User',
            'mode' => 'create',
        ));
    }

    public function getName()
    {
        return 'userbundle_usertype';
    }
}
