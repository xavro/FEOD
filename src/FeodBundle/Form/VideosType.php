<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class VideosType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder
                ->add('name')
                ->add('file', 'file', array(
                    "required" => false,
                    //'empty_data'  => null,
                    'data_class' => null,
                    //"attr" => array (
                    //    "accept" => 'file/*',
                    //    "multiple" => "multiple",
                    //)
                    
                ))
        ;

       $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            // Retrieve submitted data
            $form = $event->getForm();
            $item = $event->getData();

            // Test if upload image is null (maybe adapt it to work with your code)
            if (null !== $form->get('file')->getData()) {
                $item->file = $form->get('file')->getData();
                //$item->setName(uniqid());
                $item->preUpload();
                //$item->upload();
            } else {
                //unset($item);
            }
        });
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\Videos'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'feodbundle_videos';
    }

}
