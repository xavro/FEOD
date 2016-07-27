<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChimiqueAssociesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('NomChimique','entity',array('label'=>'Nom :','attr' => array('class' => 'chosen-select'),
			'required'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Chimique'))
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
            'data_class' => 'FeodBundle\Entity\ChimiqueAssocies'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_chimiqueassocies';
    }
}
