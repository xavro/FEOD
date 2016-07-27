<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class munitionSuiviModificationsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('Modificateur')			//	on ne l'entre pas car la donnée est récupérée automatiquement
//            ->add('DateMAJ')				//	on ne l'entre pas car la donnée est récupérée automatiquement 
//			->add('munition_id')			//  on ne l'entre pas car la donnée est récupérée automatiquement 
			
            ->add('OrigineInfos','entity', 
				array('label'=>'Source',
					'attr' => array('class' => 'chosen-select'),
					'required'=>true,'multiple'=>true,'empty_value' => 'Choisissez une option'
					,'class'=>'FeodBundle:OrigineInfos'
					)
				)
            ->add('FiabiliteSource','entity',
                array('label'=>'Fiabilité de la source',
					'attr' => array('class' => 'chosen-select'),
					'required'=>true,'empty_value' => 'Choisissez une option',
					'class'=>'FeodBundle:FiabiliteSource'
					)
				)
            ->add('CoherenceInfo','entity',
                array('label'=>'Cohérence de l\'information',
					'attr' => array('class' => 'chosen-select'),
					'required'=>true,'empty_value' => 'Choisissez une option',
					'class'=>'FeodBundle:CoherenceInformation'
					)
				)
            ->add('commentaire', 'text', array('label'=>'Commentaire', ))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\munitionSuiviModifications',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_munitionSuiviModifications';
    }
}
