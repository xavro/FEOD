<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('expression','text',array(
                'required'=>false,
            ))
            ->add('type','choice',array(
                'choices'=> array(
                    'Munition'=>'Toutes munitions',
                    'Mines'=>'Mines',
                    'Artillerie'=>'Artillerie',
                    'Mortier'=>'Mortier',
                    'Missiles'=>'Missiles',
                    'Roquettes'=>'Roquettes',
                    'Bombes'=>'Bombes',
                    'Grenades'=>'Grenades',
                    'SousMunitions'=>'Sous-Munitions',
					'MinesMarines'=>'Mines-Marines',
                    'Amorcage'=>'Amorçage',
					'Explosif'=>'Explosif',
					'Chimique'=>'Chimique',
					),
					'attr' => array('class' => 'chosen-select'),
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\Search'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_search';
    }
}
