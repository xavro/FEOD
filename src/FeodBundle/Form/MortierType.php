<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FeodBundle\Repository\ExplosifRepository;
use FeodBundle\Repository\ChimiqueRepository;

class MortierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

//base
                $builder->add('nomine','text', array('label'=>'Nom','required'=>true))
            ->add('typeMortier','entity',array('attr' => array('class' => 'chosen-select'),'required'=>false, 'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMortier'))
            ->add('denominationOTAN','text',
                    array('attr' => array('class' => 'col-sm-4'),'label'=>'Dénomination OTAN',
                        'required'=>false))
            ->add('pays',
                    'entity',
                    array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Pays d\'origine',
                        'required'=>false,
                        'multiple'=>true,
                        'empty_value' => 'Choisissez une option',
                        'class'=>'FeodBundle:Pays'))
            ->add('paysAcquereur','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Pays Utilisateurs',
                'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
            ->add('retrouveEn','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Retrouvé En',
                'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
            ->add('rouge','checkbox',array('required'=>false,'attr' => array('class' => 'rougebox')))

        //generalite
            ->add('alias','text',
                    array('required'=>false))
            ->add('calibre','number',
                    array('required'=>false))
            ->add('uniteCalibre','entity',
                    array('label'=>'Unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UniteDistance'))
            ->add('nomUsine','text',array('required'=>false))
            ->add('codeUsine','text',array('required'=>false))
            ->add('copieExistante','text',array('label'=>'Copie(s) Existante(s)','required'=>false))
            ->add('guidage','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Guidage'))
            ->add('natureEnveloppe','entity',
                    array('label'=>'Nature de l\'Enveloppe','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Enveloppe'))
			->add('performances','textarea',array('required'=>false , 'attr' => array('rows' => '3')))

        //chargement
			->add('ExplosifAssocies','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif',
						'query_builder' => function (ExplosifRepository $er){
				return $er->createQueryBuilder('e')
				->orderBy('e.nomine', 'ASC');
			}))
            ->add('ExplosifAssociesAlter1','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif',
						'query_builder' => function (ExplosifRepository $er){
				return $er->createQueryBuilder('e')
				->orderBy('e.nomine', 'ASC');
			}))
            ->add('ExplosifAssociesAlter2','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif',
						'query_builder' => function (ExplosifRepository $er){
				return $er->createQueryBuilder('e')
				->orderBy('e.nomine', 'ASC');
			}))
            ->add('poidsExploAlter1','number',array('label'=>'Poids (g)','required'=>false))
            ->add('poidsExploAlter2','number',array('label'=>'Poids (g)','required'=>false))
            ->add('nBExploAlter','integer',array('attr'=>array('min'=>0,'max'=>2),'label'=>'Nombre','required'=>false))
            ->add('ChimiqueAssocies','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Chimique',
									'query_builder' => function (ChimiqueRepository $er){
				return $er->createQueryBuilder('c')
				->orderBy('c.nomine', 'ASC');
			}))
            ->add('ChimiqueAssociesAlter1','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Chimique',
									'query_builder' => function (ChimiqueRepository $er){
				return $er->createQueryBuilder('c')
				->orderBy('c.nomine', 'ASC');
			}))
            ->add('ChimiqueAssociesAlter2','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Chimique',
									'query_builder' => function (ChimiqueRepository $er){
				return $er->createQueryBuilder('c')
				->orderBy('c.nomine', 'ASC');
			}))
            ->add('poidsChim','number',array('label'=>'Poids (g)','required'=>false))
            ->add('poidsChimAlter1','number',array('label'=>'Poids (g)','required'=>false))
            ->add('poidsChimAlter2','number',array('label'=>'Poids (g)','required'=>false))
            ->add('nBChimAlter','integer',array('attr'=>array('min'=>0,'max'=>2),'label'=>'Nombre','required'=>false))
            ->add('natureChargeInerte','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeInerte'))
            ->add('natureChargeDispersion','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif',
						'query_builder' => function (ExplosifRepository $er){
				return $er->createQueryBuilder('e')
				->orderBy('e.nomine', 'ASC');
			}))
            ->add('poidsChargeDispersion','number',array('label'=>'Poids (g)','required'=>false))
            ->add('natureChargePropu','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif',
						'query_builder' => function (ExplosifRepository $er){
				return $er->createQueryBuilder('e')
				->orderBy('e.nomine', 'ASC');
			}))
            ->add('natureChargeMili','entity',
                    array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeMili'))
            ->add('poidsChargeMili',"number",
                    array('label'=>'Poids','required'=>false))
            ->add('uniteQMA','entity',
                    array('label'=>'Unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMasseVolume'))
            ->add('poidsChargeCalcule','number',
                    array('label'=>'Poids (g)','required'=>false))
            ->add('effetChargement','entity',
                    array('label'=>'Effet du Chargement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargement'))
            ->add('effetChargeDisp','entity',
                    array('label'=>'Effet','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargeDispersion'))
            ->add('chargeCartPropu',"number",
                    array('label'=>'Poids (g)','required'=>false))
            ->add('nbGargousses','integer',
                    array('label'=>'Nombre','required'=>false))
            ->add('poidsGargousse',"number",
                    array('label'=>'Poids (g)','required'=>false))
			->add("NomSousMunition",'textarea',array("attr" => array("class" => "col-sm-3"),"label"=>"Nom","required"=>false , 'attr' => array('rows' => '3')))



        //aspectDimensions
            ->add('lgTotsansFusee','number',
                    array('label'=>'Hauteur sous Fusée (mm)','required'=>false))
            ->add('poids',"number",
                    array('label'=>'Poids de la munition (kg)','required'=>false))
            ->add('formeOgive','entity',
                    array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeOgive'))
            ->add('puitsDeFusee','checkbox',
                    array('label'=>'Puits de Fusée','required'=>false))
            ->add('diametreDelOeil',"number",
                    array('label'=>'Ø de l\'oeil (mm)','required'=>false))
            ->add('formeCorps','entity',
                    array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeCorps'))
            ->add('renflement','checkbox',
                    array('required'=>false))
            ->add('nombreRenflements','integer',
                    array('label'=>'Nombre','required'=>false))
            ->add('typeRenflement','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeDeRenflement'))
            ->add('typePlaque','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypePlaque'))
            ->add('typeEmpennage','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeEmpennage'))
            ->add('longEmpennage',"number",
                    array('label'=>'Longueur (mm)','required'=>false))
            ->add('nbAilettes','integer',
                    array('label'=>'Nombre','required'=>false))
                ->add('typeAilettes','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAilettes'))
                ->add('formeAilettes','entity',
                    array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeAilettes'))
            ->add('longAilette','number',
                    array('label'=>'Longueur (mm)','required'=>false))

                    ->add('preCeinture','checkbox',
                        array('label'=>'Présence','required'=>false))
                    ->add('typeCeinture','entity',
                        array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeCeinture'))
                    ->add('nombreCeintures','integer',
                        array('label'=>'Nombre','required'=>false))
                    ->add('distCeintCulot',"number",
                        array('label'=>'Distance Ceinture-Culot (mm)','required'=>false))

        //marquage
            ->add('couleurOgive','entity',
                    array('label'=>'Couleur','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('typeInscOgive','entity',
                    array('label'=>'Type d\'inscription','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('couleurInscOgive','entity',
                    array('label'=>'Couleur des inscriptions','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('marquageFroidOgive','textarea',
                    array('label'=>'Marquage à froid','required'=>false , 'attr' => array('rows' => '2')))
            ->add('inscriptionOgive','textarea',
                    array('label'=>'Inscription','required'=>false , 'attr' => array('rows' => '3')))
            ->add('nbBandesOgive','integer',
                    array('attr'=>array('min'=>0,'max'=>4),'label'=>'Nombre de Bandes','required'=>false))
            ->add('couleurBandeOgive1','entity',
                    array('label'=>'Couleur de Bande 1','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeOgive2','entity',
                    array('label'=>'Couleur de Bande 2','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeOgive3','entity',
                    array('label'=>'Couleur de Bande 3','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeOgive4','entity',
                    array('label'=>'Couleur de Bande 4','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurCorps','entity',
                    array('label'=>'Couleur','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('typeInscCorps','entity',
                    array('label'=>'Type d\'inscription','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('couleurInscCorps','entity',
                    array('label'=>'Couleur des inscriptions','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('marquageFroidCorps','textarea',
                    array('label'=>'Marquage à Froid','required'=>false , 'attr' => array('rows' => '2')))
            ->add('inscriptionCorps','textarea',
                    array('label'=>'Inscription','required'=>false , 'attr' => array('rows' => '3')))
            ->add('nbBandesCorps','integer',
                    array('attr'=>array('min'=>0,'max'=>4),'label'=>'Nombre de Bandes','required'=>false))
            ->add('couleurBandeCorps1','entity',
                    array('label'=>'Couleur de Bande 1','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeCorps2','entity',
                    array('label'=>'Couleur de Bande 2','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeCorps3','entity',
                    array('label'=>'Couleur de Bande 3','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeCorps4','entity',
                    array('label'=>'Couleur de Bande 4','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurCulot','entity',
                    array('label'=>'Couleur','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('typeInscCulot','entity',
                    array('label'=>'Type d\'inscription','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('inscriptionCulot','textarea',
                    array('label'=>'Inscription','required'=>false , 'attr' => array('rows' => '3')))

            ->add('marquageFroidCulot','textarea',
                    array('label'=>'Marquage à froid','required'=>false , 'attr' => array('rows' => '2')))

            ->add('marquageFroidEmpennage','textarea',
                    array('label'=>'Marquage à froid','required'=>false , 'attr' => array('rows' => '2')))



        //fusee
            ->add('ogiveFusee','text',
                    array('label'=>'Ogive fusée','required'=>false))
            ->add('typeFusee','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))
            ->add('ogiveFusee1','text',
                    array('required'=>false))
            ->add('typeFusee1','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))

            ->add('ogiveFusee2','text',
                    array('required'=>false))
            ->add('typeFusee2','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))

            ->add('ogiveFusee3','text',
                    array('required'=>false))
            ->add('typeFusee3','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))

            ->add('ogiveFusee4','text',
                    array('required'=>false))
            ->add('typeFusee4','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))
            ->add('AmorcageAssocies', 'collection', array(
                'type' => new AmorcageAssociesType(),
                'allow_add' => true,
                'by_reference' => false,
                ))



        //fonctionnement
            ->add('fonctionnement','textarea',
                    array('label'=>'Fonctionnement','required'=>false , 'attr' => array('rows' => '8')))

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
            ->add('conditionnementPoidsEmballage',"number",
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids (kg)','required'=>false))
            ->add('conditionnementPoidsTotal',"number",
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

                //$securite
            ->add('securite','textarea',array('label'=>'Sécurité','required'=>false , 'attr' => array('rows' => '8')))
			->add('TravauxAttenuation','textarea',array('label'=>'Travaux Attenuation','required'=>false  , 'attr' => array('rows' => '8')))

//traitement
			->add('NEDE','textarea',array('label'=>'Neutralisation Destruction','required'=>false , 'attr' => array('rows' => '8')))
            ->add('dementelement','textarea',array('label'=>'Démantèlement','required'=>false , 'attr' => array('rows' => '8')))
            ->add('demilitarisationConnue','checkbox',array('label'=>'Démilitarisation connue','required'=>false))

                //remarque
            ->add('remarques','textarea',array('label'=>'Remarque(s)','required'=>false , 'attr' => array('rows' => '8')))

        //gestion
            ->add('origineInfos','entity',
                    array('label'=>'Source','attr' => array('class' => 'chosen-select'),'required'=>true,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:OrigineInfos'))
            ->add('fiabiliteSource','entity',
                    array('label'=>'Fiabilité','attr' => array('class' => 'chosen-select'),'required'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FiabiliteSource'))
            ->add('coherenceInformation','entity',
                    array('label'=>'Cohérence','attr' => array('class' => 'chosen-select'),'required'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CoherenceInformation'))
            ->add('collectionTravail','entity',
                    array('label'=>'Lieu(x) de présence dans la collection de Travail','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMUNEX'))
            ->add('collectionTerrain','entity',
                    array('label'=>'Lieu(x) de présence dans la collection de Terrain','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMUNEX'))
//photos
            ->add('images', 'collection',
                        array('type' => new ImageType(),
                            'allow_add' => true,
                            //'allow_delete' => true,
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
                       
            ->add('imagesChargement', 'collection',
                    array('type' => new ImageChargementType(),
                            'allow_add' => true,
                            'allow_delete' => true,
                            'by_reference' => false,
                            ))
                
            ->add('imagesDimensions', 'collection',
                    array('type' => new ImageDimensionsType(),
                            'allow_add' => true,
                            'allow_delete' => true,
                            'by_reference' => false,
                            ))
							
		    ->add('imagesFusees', 'collection',
                    array('type' => new ImageFuseesType(),
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
							
			->add('file', 'collection', array(
                    'type' => new FileType(),
                    'allow_add' => true,
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
            'data_class' => 'FeodBundle\Entity\Mortier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_mortier';
    }
}
