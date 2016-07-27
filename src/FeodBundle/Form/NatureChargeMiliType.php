<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NatureChargeMiliType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('natureCharge', 'text', array('label' => 'Nature Charge Militaire',
                                             'attr' => array('class' => 'form-control')
                ))
            ->add('note', 'textarea',array('required'=>false , 'attr' => array('rows' => '3')))
            ->add('ExplosifEmploi','entity',array('label'=>'Emploi','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ExplosifEmploi'))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\NatureChargeMili'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_explosif';
    }
}
