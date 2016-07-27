<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\DBAL\Types\Type;

class UserEditPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array('label' => 'Nom : ',
                                            'read_only' => true,
                                            'required' => false,
                                            'attr' => array('class' => 'form-control')
                ))
            
            ->add('email', 'email', array('label' => 'Email : ',
                                          'required' => false,
                                          'read_only' => true,
                                          'attr' => array('class' => 'form-control')
                ))
                        
            //->add('password', 'text', array('label' => 'Mot de passe',))
                
            ->add('plainPassword', 'text', array('label' => 'Mot de passe',                                                
                                                  'attr' =>  array(
                                                                'class' => 'form-control',
                                                                'pattern'   =>  "(?=.*\d)(?=.*[a-z])(?=.*[\*\+\-\,\;\:\!\$\%\_\@\#])(?=.*[A-Z]).{9,}",
                                                                'title'     =>  "Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre, un caractère spécial (*+-,;:!$%_@#) et au moins 9 caractères",
                                                                //'onBlur'  =>  "var objet=this ; var text = objet.value; if(text.length < 8) { objet.parentNode.nextSibling.innerHTML='Le mot de passe ( '+text+' ) doit contenir au moins une majuscule, une minuscule, un chiffre, et au moins 8 caractères.'; return false; } else {objet.parentNode.nextSibling.innerHTML='';return true;}"
                                                )))
                       
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'admin_userbundle_userEditPasswordType';
    }
}
