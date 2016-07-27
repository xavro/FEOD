<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QualificationType extends AbstractType
{

    private $required;

    //Le constructeur nous permet de savoir si c'est la première qualification, donc
    //obligatoire
    //true si elle est obligatoire, false sinon.
    public function __construct($required=false){
        $this->required = $required;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		    ->add('nom','choice',array(
				'choices' => array(
                    'eor'  => 'EOR',
                    'eoc'  => 'EOC',
                    'cmd1' => 'CMD 1ère partie',
                    'cmd2' => 'CMD',
                    'wit'  => 'WIT',
					'iedd' => 'IEDD',
                    'bcmd' => 'BCMD',
                    'master_eod' => 'MASTER EOD',
					'officier_nedex' => 'Officier EOD / C-IED / Etat Major'
                ),'label'=>'Qualification','attr' => array('class' => 'chosen-select'),
				'empty_value' => 'Choisissez une option',
				'required'=>$this->required,
				))
 
			->add('date', 'date', array('label'=>'Date de validité :','required'=>$this->required))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Qualification'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'userbundle_qualification';
    }
}
