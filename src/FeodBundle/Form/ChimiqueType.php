<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChimiqueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomine', 'text', array('label' => 'Nom Chimique',
                                             'attr' => array('class' => 'form-control')
                ))
            ->add('ChimiquesFormule', 'textarea',array('required'=>false , 'attr' => array('rows' => '3')))
            ->add('TypeChimique','entity',array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeChimique'))
            
			->add('ChimiqueImage', 'collection',
                    array('type' => new ChimiqueImageType(),
                            'allow_add' => true,
                            'allow_delete' => false,
                            'by_reference' => false,
                            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\Chimique'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_chimique';
    }
}
