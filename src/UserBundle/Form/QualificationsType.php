<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QualificationsType extends AbstractType
{

    private $required;

    //Le constructeur nous permet de savoir si c'est la première qualification, donc
    //obligatoire
    //true si elle est obligatoire, false sinon.
/*    public function __construct($required=false){
        $this->required = $required;
    }
*/
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qualif1','entity',array('label'=>'Qualification n°1','attr' => array('class' => 'chosen-select'),
			'required'=>true,'empty_value' => 'Choisissez une option','class'=>'UserBundle:QualifsMUNEX'))
			->add('date1', 'datetime', array(
                                    'widget'        => 'single_text',
                                    'format'        => 'dd/MM/yyyy',
                                    'empty_value'   => array(   'year'  =>'Année',
                                                                'month' =>'Mois',
                                                                'day'   =>'Jour'),
                                    'attr'          => array('class' => 'date1 form-control'),
                                    'label'         => 'Date de validité :',
                                    'required'      => true,'required'=>$this->required))

            ->add('qualif2','entity',array('label'=>'Qualification n°2','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'UserBundle:QualifsMUNEX'))
			->add('date2', 'datetime', array(
                                    'widget'        => 'single_text',
                                    'format'        => 'dd/MM/yyyy',
                                    'empty_value'   => array(   'year'  =>'Année',
                                                                'month' =>'Mois',
                                                                'day'   =>'Jour'),
                                    'attr'          => array('class' => 'date2 form-control'),
                                    'label'         => 'Date de validité :',
                                    'required'      => false,'required'=>$this->required))

            ->add('qualif3','entity',array('label'=>'Qualification n°3','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'UserBundle:QualifsMUNEX'))
			->add('date3', 'datetime', array(
                                    'widget'        => 'single_text',
                                    'format'        => 'dd/MM/yyyy',
                                    'empty_value'   => array(   'year'  =>'Année',
                                                                'month' =>'Mois',
                                                                'day'   =>'Jour'),
                                    'attr'          => array('class' => 'date3 form-control'),
                                    'label'         => 'Date de validité :',
                                    'required'      => false,'required'=>$this->required))

            ->add('qualif4','entity',array('label'=>'Qualification n°4','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'UserBundle:QualifsMUNEX'))
			->add('date4', 'datetime', array(
                                    'widget'        => 'single_text',
                                    'format'        => 'dd/MM/yyyy',
                                    'empty_value'   => array(   'year'  =>'Année',
                                                                'month' =>'Mois',
                                                                'day'   =>'Jour'),
                                    'attr'          => array('class' => 'date4 form-control'),
                                    'label'         => 'Date de validité :',
                                    'required'      => false,'required'=>$this->required))

            ->add('qualif5','entity',array('label'=>'Qualification n°5','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'UserBundle:QualifsMUNEX'))
			->add('date5', 'datetime', array(
                                    'widget'        => 'single_text',
                                    'format'        => 'dd/MM/yyyy',
                                    'empty_value'   => array(   'year'  =>'Année',
                                                                'month' =>'Mois',
                                                                'day'   =>'Jour'),
                                    'attr'          => array('class' => 'date5 form-control'),
                                    'label'         => 'Date de validité :',
                                    'required'      => false,'required'=>$this->required))
			
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Qualifications'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'userbundle_qualifications';
    }
}
