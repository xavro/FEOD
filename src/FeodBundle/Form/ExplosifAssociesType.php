<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExplosifAssociesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('NomExplosif','entity',array('label'=>'Nom :','attr' => array('class' => 'chosen-select'),
			'required'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
            ->add('poids','number', array('label'=>'Poids (g)'))
            //->add('commentaires')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\ExplosifAssocies'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_explosifassocies';
    }
}
