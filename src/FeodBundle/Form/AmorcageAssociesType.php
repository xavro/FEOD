<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FeodBundle\Repository\AmorcageRepository;

class AmorcageAssociesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('NomAmorcage','entity',array('label'=>'Nom :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
						'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
            ->add('positionFusee','entity',
                    array('label'=>'Position :','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionFusee'))
            ->add('DeclenchementFusee','entity',array('label'=>'Déclenchement :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DeclenchementFusee'))
            ->add('typeFusee','entity',
                    array('label'=>'Type :','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))
            
            ->add('commentaires')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\AmorcageAssocies'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_amorcageassocies';
    }
}
