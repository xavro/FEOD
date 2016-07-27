<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                //->add('type','choice',array(
                //'choices'=> array(
                //    'Munition'=>'Toutes munitions',
                //    'Mines'=>'Mines',
                //    'Artillerie'=>'Artillerie',
                //    'Mortier'=>'Mortier',
                //    'Missiles'=>'Missiles',
                //    'Roquettes'=>'Roquettes',
                //    'Bombes'=>'Bombes',
                //    'Grenades'=>'Grenades',
                //    'SousMunitions'=>'Sous-Munitions',
		//			'MinesMarines'=>'Mines-Marines',
                //    'Amorcage'=>'Amorçage',
		//			'Explosif'=>'Explosif',
		//			'Chimique'=>'Chimique',
		//			),
		//			'attr' => array('class' => 'chosen-select'),
            //))
        
                        //Artillerie
        ->add('recherchenomartillerie', 'text', array('required' => false, 'label' => 'Nom','attr' => array('class' => 'input-md search-query', 'placeholder' => 'nom, alias, dénomination OTAN')))
        ->add('recherchepoidsartillerie', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'munition, projectile')))
        ->add('recherchecouleurartillerie', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('recherchepaysartillerie', 'text', array('required' => false, 'label' => 'Pays', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'origine, acquéreur, utilisateur')))
        ->add('recherchecalibreartillerie', 'text', array('required' => false, 'label' => 'Calibre', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'calculé (mm)')))
        ->add('recherchedimartillerie', 'text', array('required' => false, 'label' => 'Dimensions', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'longueur, hauteur')))
        //->add('rechercheformeartillerie', 'text', array('required' => false, 'label' => 'Forme', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('rechercheformeartillerie','entity',
                    array('label'=>'Forme', 'required'=>false, 'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeCorps'))
                    
                        //Mortier
        ->add('recherchenommortier', 'text', array('required' => false, 'label' => 'Nom', 'attr' => array('class' => 'input-md search-query')))
        ->add('recherchepoidsmortier', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query')))
        ->add('recherchecouleurmortier', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query')))
                
                        //Mines
        ->add('recherchenommines', 'text', array('required' => false, 'label' => 'Nom', 'attr' => array('class' => 'input-md search-query')))
        ->add('recherchepoidsmines', 'text', array('required' => false, 'label' => 'Poids', 'attr' => array('class' => 'input-md search-query')))
        ->add('recherchecouleurmines', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query')))
      
                        //Grenades
        ->add('recherchenomgrenades', 'text', array('required' => false, 'label' => 'Nom','attr' => array('class' => 'input-md search-query', 'placeholder' => 'nom, alias, dénomination OTAN')))
        ->add('recherchepoidsgrenades', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'munition, projectile')))
        ->add('recherchecouleurgrenades', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('recherchepaysgrenades', 'text', array('required' => false, 'label' => 'Pays', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'origine, acquéreur, utilisateur')))
        ->add('recherchecalibregrenades', 'text', array('required' => false, 'label' => 'Calibre', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'calculé (mm)')))
        
                        //Roquettes
        ->add('recherchenomroquettes', 'text', array('required' => false, 'label' => 'Nom','attr' => array('class' => 'input-md search-query', 'placeholder' => 'nom, alias, dénomination OTAN')))
        ->add('recherchepoidsroquettes', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'munition, projectile')))
        ->add('recherchecouleurroquettes', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('recherchepaysroquettes', 'text', array('required' => false, 'label' => 'Pays', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'origine, acquéreur, utilisateur')))
        ->add('recherchecalibreroquettes', 'text', array('required' => false, 'label' => 'Calibre', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'calculé (mm)')))
        
                        //Bombes
        ->add('recherchenombombes', 'text', array('required' => false, 'label' => 'Nom','attr' => array('class' => 'input-md search-query', 'placeholder' => 'nom, alias, dénomination OTAN')))
        ->add('recherchepoidsbombes', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'munition, projectile')))
        ->add('recherchecouleurbombes', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('recherchepaysbombes', 'text', array('required' => false, 'label' => 'Pays', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'origine, acquéreur, utilisateur')))
        ->add('recherchecalibrebombes', 'text', array('required' => false, 'label' => 'Calibre', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'calculé (mm)')))
        
                        //Missiles
        ->add('recherchenommissiles', 'text', array('required' => false, 'label' => 'Nom','attr' => array('class' => 'input-md search-query', 'placeholder' => 'nom, alias, dénomination OTAN')))
        ->add('recherchepoidsmissiles', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'munition, projectile')))
        ->add('recherchecouleurmissiles', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('recherchepaysmissiles', 'text', array('required' => false, 'label' => 'Pays', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'origine, acquéreur, utilisateur')))
        ->add('recherchecalibremissiles', 'text', array('required' => false, 'label' => 'Calibre', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'calculé (mm)')))
        
                        //Sous-Munitions
        ->add('recherchenomsousmun', 'text', array('required' => false, 'label' => 'Nom','attr' => array('class' => 'input-md search-query', 'placeholder' => 'nom, alias, dénomination OTAN')))
        ->add('recherchepoidssousmun', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'munition, projectile')))
        ->add('recherchecouleursousmun', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('recherchepayssousmun', 'text', array('required' => false, 'label' => 'Pays', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'origine, acquéreur, utilisateur')))
        ->add('recherchecalibresousmun', 'text', array('required' => false, 'label' => 'Calibre', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'calculé (mm)')))
        
                        //Mines-Marines
        ->add('recherchenomminesmar', 'text', array('required' => false, 'label' => 'Nom','attr' => array('class' => 'input-md search-query', 'placeholder' => 'nom, alias, dénomination OTAN')))
        ->add('recherchepoidsminesmar', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'munition, projectile')))
        ->add('recherchecouleurminesmar', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('recherchepaysminesmar', 'text', array('required' => false, 'label' => 'Pays', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'origine, acquéreur, utilisateur')))
        ->add('recherchecalibreminesmar', 'text', array('required' => false, 'label' => 'Calibre', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'calculé (mm)')))
        
                        //Amorcage
        ->add('recherchenomamorcage', 'text', array('required' => false, 'label' => 'Nom','attr' => array('class' => 'input-md search-query', 'placeholder' => 'nom, alias, dénomination OTAN')))
        ->add('recherchepoidsamorcage', 'text', array('required' => false, 'label' => 'Poids (kg)', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'munition, projectile')))
        ->add('recherchecouleuramorcage', 'text', array('required' => false, 'label' => 'Couleurs', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'corps')))
        ->add('recherchepaysamorcage', 'text', array('required' => false, 'label' => 'Pays', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'origine, acquéreur, utilisateur')))
        ->add('recherchecalibreamorcage', 'text', array('required' => false, 'label' => 'Calibre', 'attr' => array('class' => 'input-md search-query', 'placeholder' => 'calculé (mm)')))
        
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\Recherche'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_recherche';
    }
    
}