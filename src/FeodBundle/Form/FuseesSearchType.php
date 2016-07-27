<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FuseesSearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        //base
        $builder

            ->add('nomine','text',array('attr' => array('class' => 'col-sm-5'),'label'=>'Nom','required'=>false))
            ->add('FuseeTypeAmorcage','entity',array('label'=>'Type Amorcage Fusees','attr' => array('class' => 'chosen-select col-sm-offset-4-3'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeTypeAmorcage'))
            ->add('denominationOTAN','text',
                    array('attr' => array('class' => 'col-sm-4'),'label'=>'Dénomination OTAN',
                        'required'=>false))
            ->add('pays',
                    'entity',
                    array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Pays d\'origine',
                        'required'=>false,
                        'multiple'=>true,
                        'empty_data' => 'Choisissez une option',
                        'class'=>'FeodBundle:Pays'))
            ->add('paysAcquereur','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Pays Utilisateurs',
                'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
            ->add('retrouveEn','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Retrouvé En',
                'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
            ->add('rouge','checkbox',array('required'=>false,'attr' => array('class' => 'rougebox')))

            //generalite
           ->add('poids','number',array('label'=>'Poids','required'=>false))
            ->add('UnitePoidsFusee','entity',array('label'=>'Unité','required'=>false,'class'=>'FeodBundle:UniteMasse'))
		   ->add('alias','text',array('required'=>false))
            ->add('NaturePrincipaleCorps','entity',array('label'=>'Principale','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureEnveloppe'))
            ->add('NatureSecondaireCorps','entity',array('label'=>'Secondaire','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureEnveloppe'))
            ->add('Positionnement','entity',array('label'=>'Positionnement Fusée','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseePositionnement'))
			->add('TypeIndicateurArmement','entity',array('label'=>'Type ','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeTypeIndicateurArmement'))
            ->add('IndicateurArmement','checkbox',array('label'=>'Indicateur Armement','required'=>false))
			->add('PositionIndicateurArmement','text',array('label'=>'Position ','required'=>false))
             ->add('DispositifArmementExterieur','checkbox',array('label'=>'','required'=>false))
            ->add('TypeDAE','entity',array('label'=>'Type ','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeTypeDAE'))
			->add('AntiDemontage','checkbox',array('label'=>'Anti-Demontage','required'=>false))
            ->add('AntiManipulation','checkbox',array('label'=>'Anti-Manipulation','required'=>false))
            ->add('AntiDestruction','checkbox',array('label'=>'Auto-Destruction','required'=>false))
            ->add('TypeAutoDestruction','entity',array('label'=>'Type ','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAutoDestruction'))
            ->add('DelaiAutodestruction','text',array('label'=>'Delai ','required'=>false))
            ->add('AutoNeutra','checkbox',array('label'=>'Auto-Neutralisation','required'=>false))
            ->add('DelaiAutoNeutralisation','text',array('label'=>'Delai ','required'=>false))
			->add('copieExistante','text',array('label'=>'Copie(s) Existante(s)','required'=>false))
          


        //chargement
            ->add('natureChargeMili','entity',array('label'=>'Nature ','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeMili'))
            ->add('uniteSI','text',array('required'=>false))
            ->add('poidsChargeMili','number',array('label'=>'Poids ','required'=>false))
            ->add('poidsChargeCalcule','number',array('label'=>'Poids (g)','required'=>false,'disabled'=>true))


        //aspectDimensions
            ->add('LongueurFusee','number',array('label'=>'Longueur  (mm)','required'=>false))
            ->add('LargeurFusee','number',array('label'=>'Largeur (mm)','required'=>false))
            ->add('DiametreFusee','number',array('label'=>'Diamètre  (mm)','required'=>false))
			->add('FormeFusee','entity',array('label'=>'Forme ','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeFusee'))
            
        //marquage
            ->add('couleurPrincipale','entity',
                    array('label'=>'Couleur Principale','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurSecondaire','entity', array('label'=>'Couleur Secondaire','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('MarquageFroidCorps','text', array('label'=>'Marquage à froid sur le Corps','required'=>false))
            ->add('InscriptionCorps','text',  array('label'=>'Inscription sur le Corps','required'=>false))
            ->add('CouleurInscCorps','entity',  array('label'=>'Couleur Inscription du Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('typeInscCorps','entity', array('label'=>'Type d\'inscription sur le Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))


        //fonctionnement
            ->add('fonctionnement','textarea',
                    array('label'=>'Fonctionnement','required'=>false , 'attr' => array('rows' => '8')))
            ->add('ModeAction','entity',
                    array('label'=>'Mode d\'Action','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeModeAction'))
            ->add('ModeDeFonctionnement','entity',
                    array('label'=>'Mode de Fonctionnement','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeModeFonctionnement'))
            ->add('PrincipeDeFonctionnement','entity',
                    array('label'=>'Principe de Fonctionnement','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseePrincipeFonctionnement'))
            ->add('TypeFonctionnement','entity',
                    array('label'=>'Type de Fonctionnement','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeTypeFonctionnement'))
            ->add('DelaisFonctionnement','entity',
                    array('label'=>'Delais de Fonctionnement','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeDelaiFonctionnement'))
            
		//Munitions associées
			 ->add('MunitionsAssociees','text',array('label'=>'Munitions Associées','required'=>false))
            ->add('FuseeTypeMunition','entity',array('label'=>'Type Munitions Associées','attr' => array('class' => 'chosen-select'),'required'=>false, 'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeTypeMunition'))
			
			
        //conditionnement
            ->add('conditionnementTypeEmballage','entity',
                    array('label'=>'Type d\'emballage','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Emballage'))
            ->add('conditionnementQteEmballage','integer',
                    array('label'=>'Qté par emballage','required'=>false))
            ->add('coupComplet','checkbox',
                    array('label'=>'Coup Complet','required'=>false))
            ->add('conditionnementMarquageEmballage','text',
                    array('label'=>'Marquage de l\'emballage','required'=>false))
            ->add('conditionnementTypeCloisonnement','entity',
                    array('label'=>'Cloisonnement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Cloison'))
            ->add('conditionnementDimEmballageHaut','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Hauteur (cm)','required'=>false))
            ->add('conditionnementDimEmballageLarg','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Largeur (cm)','required'=>false))
            ->add('conditionnementDimEmballageLong','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Longeur (cm)','required'=>false))
            ->add('conditionnementVolumeEmballage','number',
                    array('label'=>'Volume (m³)','required'=>false))
            ->add('conditionnementPoidsEmballage','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids (kg)','required'=>false))
            ->add('conditionnementPoidsTotal','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids Total (kg)','required'=>false))
            ->add('conditionnementClasseDangerStockage','entity',
                    array('label'=>'Classe de Danger','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ClasseDangerStockage'))
            ->add('conditionnementGroupeComptabiliteStockage','entity',
                    array('label'=>'Groupe de Compatibilité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:GroupeComptabiliteStockage'))
            ->add('conditionnementTempStockMin','number',
                    array('label'=>'Min (°C)','required'=>false))
            ->add('conditionnementTempStockMax','number',
                    array('label'=>'Max (°C)','required'=>false))
            ->add('conditionnementTempUtilMin','number',
                    array('label'=>'Min (°C)','required'=>false))
            ->add('conditionnementTempUtilMax','number',
                    array('label'=>'Max (°C)','required'=>false))
            ->add('DRAM','entity',
                    array('label'=>'Danger sur les Munitions  (DRAM)','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DRAM'))
            ->add('DREP','entity',
                    array('label'=>'Dommages sur les Personnes  (DREP)','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DREP'))


        //lanceur
            ->add('lanceur','textarea',array('required'=>false , 'attr' => array('rows' => '8')))


        //historique
            ->add('historique','textarea',array('required'=>false , 'attr' => array('rows' => '8')))


        //securite
            ->add('SecuriteExterne','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Securité Externe',
                'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeSecuExterne'))
            ->add('SecuriteInterne','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Securité Interne',
                'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FuseeSecuInterne'))
            
            ->add('securite','textarea',array('label'=>'Sécurité','required'=>false , 'attr' => array('rows' => '8')))
            ->add('NEDE','textarea',array('label'=>'Neutralisation Destruction','required'=>false , 'attr' => array('rows' => '8')))
            ->add('TravauxAttenuation','textarea',array('required'=>false , 'attr' => array('rows' => '8')))
            ->add('dementelement','textarea',array('label'=>'Démantèlement','required'=>false , 'attr' => array('rows' => '8')))
            ->add('demilitarisationConnue','checkbox',array('label'=>'Démilitarisation connue','required'=>false))


        //remarque
            ->add('remarques','textarea',array('label'=>'Remarque(s)','required'=>false , 'attr' => array('rows' => '8')))


        //gestion
            ->add('origineInfos','entity',
                    array('label'=>'Source','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:OrigineInfos'))
            ->add('fiabiliteSource','entity',
                    array('label'=>'Fiabilité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FiabiliteSource'))
            ->add('coherenceInformation','entity',
                    array('label'=>'Cohérence','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CoherenceInformation'))
            ->add('collectionTravail','entity',
                    array('label'=>'Lieu(x) de présence dans la collection de Travail','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMUNEX'))
            ->add('collectionTerrain','entity',
                    array('label'=>'Lieu(x) de présence dans la collection de Terrain','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMUNEX'))

            //photos
            ->add('images', 'collection',
                    array('type' => new ImageType(),
                            'allow_add' => true,
                            'allow_delete' => true,
                            'by_reference' => false,
                            ))
                
            ->add('imagesMarquages', 'collection',
                    array('type' => new ImageMarquagesType(),
                            'allow_add' => true,
                            'allow_delete' => true,
                            'by_reference' => false,
                            ))
                
            ->add('imagesFonctionnement', 'collection',
                    array('type' => new ImageFonctionnementType(),
                            'allow_add' => true,
                            'allow_delete' => true,
                            'by_reference' => false,
                            ))
                
            ->add('imagesConditionnement', 'collection',
                    array('type' => new ImageConditionnementType(),
                            'allow_add' => true,
                            'allow_delete' => true,
                            'by_reference' => false,
                            ))
                
            ->add('imagesVecteur', 'collection',
                    array('type' => new ImageVecteurType(),
                            'allow_add' => true,
                            'allow_delete' => true,
                            'by_reference' => false,
                            ))
                
            ->add('imagesTraitement', 'collection',
                    array('type' => new ImageTraitementType(),
                            'allow_add' => true,
                            'allow_delete' => true,
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
            'data_class' => 'FeodBundle\Entity\Fusees'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_fusees';
    }
}
