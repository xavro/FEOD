<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FeodBundle\Repository\AmorcageRepository;
use FeodBundle\Repository\ExplosifRepository;
use FeodBundle\Repository\ChimiqueRepository;

class MinesType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

//base
        $builder->add('nomine','text',array('attr' => array('class' => 'col-sm-5'),'label'=>'Nom','required'=>true))
        ->add('typeMine','entity',array('label'=>'Type de mine','attr' => array('class' => 'chosen-select col-sm-offset-4-3'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMine'))
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
                        array('label'=>'Alias','required'=>false))
                ->add('natureEnveloppe','entity',
                        array('label'=>'Nature de l\'enveloppe','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Enveloppe'))
                ->add('sousTypeMine','entity',
                        array('label'=>'Sous-type de mine','attr' => array('class' => 'chosen-select'),'multiple'=>false,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMine2'))
                ->add('epaisseurEnveloppe','number',
                        array('required'=>false,'label'=>'Epaisseur de l\'enveloppe (mm)'))
                ->add('nomAllumeurMine','entity',array('label'=>'Nom Allumeur 1 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
			'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
                ->add('nomAllumeurMine1','entity',array('label'=>'Nom Allumeur 2 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
			'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
                ->add('nomAllumeurMine2','entity',array('label'=>'Nom Allumeur 3 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
			'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
            
                ->add('positionAllumeurOrigine','entity',
                    array('label'=>'Position','attr' => array ('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionAllumeurOrigine'))
                ->add('positionAllumeurOrigine1','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionAllumeurOrigine'))
                ->add('positionAllumeurOrigine2','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionAllumeurOrigine'))
                ->add('declenchement','entity',
                    array('label'=>'Déclenchement','attr' => array('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Declenchement'))
                ->add('nbrAllumeur','integer',
                    array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
				->add('nbrRelais','integer',
                    array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
				->add('natureChargeRelais','entity',
                    array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeMili'))
                ->add('autoNeutra','checkbox',
                        array('label'=>'Auto Neutralisation','required'=>false))
                ->add('DelaiAutoNeutralisation','text',
                        array('label'=>'Délai de neutralisation','required'=>false))
                ->add('autoDestruction','checkbox',
                        array('required'=>false))
                ->add('relaisAmorcage','checkbox',
                        array('required'=>false))
                ->add('PresenceAllumeurPiegeage','checkbox',
                        array('label'=>'Présence Allumeur de Piegeage','required'=>false))
                ->add('DelaiAutoDestruction','text',
                        array('label'=>'Délai de destruction','required'=>false))
                ->add('commandeADistance','checkbox',
                        array('required'=>false))
                ->add('modePose','entity',
                        array('label'=>'Mode de pose','attr' => array('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ModePose'))
                ->add('detectabilite','entity',
                        array('attr' => array('class' => 'chosen-select'),'label'=>'Détectabilité','required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Detectabilite'))
                ->add('dispositifSecurite','entity',
                        array('label'=>'Dispositif(s) de sécurité','attr' => array('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DispositifSecurite'))
                ->add('presenceSupport','checkbox',
                        array('label'=>'Présence','required'=>false))
                ->add('typeSupport','entity',
                        array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeSupport'))
                ->add('presenceDispositifTransport','checkbox',
                        array('label'=>'Présence','required'=>false))
                ->add('typeDispositifTransport','entity',
                        array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeDispositifTransport'))
                ->add('positionDispositifTransport','entity',
                        array('label'=>'Position','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionDispositifTransport'))
                ->add('fabrication','entity',
                        array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Fabrication'))
				->add('copieExistante','text',array('label'=>'Copie(s) Existante(s)','required'=>false))
                ->add('nomUsine','text',
                        array('label'=>'Nom Usine','required'=>false))
                ->add('codeUsine','text',
                        array('label'=>'Code Usine','required'=>false))
				->add('performances','textarea',array('required'=>false , 'attr' => array('rows' => '3')))
				
        //chargement
            ->add('natureChargeMili','entity',
                    array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeMili'))
            ->add('poidsChargeMili','number',
                    array('label'=>'Poids','required'=>false))
            ->add('uniteQMA','entity',
                    array('label'=>'Unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMasseVolume'))
            ->add('poidsChargeMiliCalcule','number',
                    array('label'=>'Poids Calculé (g)','required'=>false,'disabled'=>true))
            ->add('effetChargeMili','entity',
                    array('label'=>'Effets','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargeMili'))
            ->add('conditionnement','entity',
                    array('label'=>'Conditionnement de la charge','attr' => array('class' => 'chosen-select'),'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Conditionnement'))
            //->add('natureChargeDepotage','entity',
              //      array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
            ->add('poidsChargeDepotage','number',
                    array('label'=>'Poids (g)','required'=>false))
            ->add('chargeAmovible','checkbox',
                    array('label'=>'Charge Amovible','required'=>false))
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
            ->add('natureChargePropu','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
			->add('effetChargement','entity',array('label'=>'Effet terminal du Chargement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargement'))
            
                //aspectDimensions

            ->add('formeMine','entity',
                    array('label'=>'Forme de la mine','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeMine'))
            ->add('hauteurAvecAll','number',
                    array('label'=>'Hauteur avec Allumeur (mm)','required'=>false))
            ->add('hauteurSansAll','number',
                    array('label'=>'Hauteur sans Allumeur (mm)','required'=>false))
            ->add('longueur','number',
                    array('label'=>'Longueur (mm)','required'=>false))
            ->add('largeur','number',
                    array('label'=>'Largeur (mm)','required'=>false))
            ->add('diametre','number',
                    array('label'=>'Diamètre (mm)','required'=>false))
            ->add('poidsMine','number',
                    array('label'=>'Poids','required'=>false))
            ->add('unitePoidsMine','entity',
                    array('label'=>'Unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UniteMasse'))
            ->add('poidsMineCalcule','number',
                    array('label'=>'Poids Calculé (g)','required'=>false,'disabled'=>true))
            ->add('dispositifVisee','checkbox',
                    array('label'=>'Dispositif de visée','required'=>false))
                //marquage
            ->add('couleurPrincipale','entity',array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurSecondaire','entity',array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('typeMarquage','entity',array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('marquageAFroidPosition','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionMarquage'))
            ->add('marquageAFroidTexte','text',
                    array('label'=>'Inscription','required'=>false))
            ->add('marquageEnReliefPosition','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionMarquage'))
            ->add('marquageEnReliefTexte','text',
                    array('label'=>'Inscription','required'=>false))
            ->add('marquageEnCouleurPosition','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionMarquage'))
            ->add('marquageEncouleurTexte','text',
                    array('label'=>'Inscription','required'=>false))
            ->add('bandeCouleurNombre','integer',
                    array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
            ->add('bandeCouleur1','entity',
                    array('label'=>'Couleur Bande 1','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('bandeCouleur2','entity',
                    array('label'=>'Couleur Bande 2','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('bandeCouleur3','entity',
                    array('label'=>'Couleur Bande 3','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))

//amorcage
            ->add('puitAmorcage','checkbox',
                    array('label'=>'Puit d\'amorçage','required'=>false))
            ->add('typeAllumeur','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAllumeur'))
            ->add('typeAllumeur1','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAllumeur'))
            ->add('typeAllumeur2','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAllumeur'))
            ->add('nombrePuitAmorcage','integer',
                    array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
            ->add('alveolePiegeage','checkbox',
                    array('label'=>'Alvéole de piégeage','required'=>false))
            ->add('nombreAlveolePiegeage','integer',
                    array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
            ->add('positionAlveolePiegeage','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'multiple'=>false,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionMarquage'))
            ->add('positionAlveolePiegeage1','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'multiple'=>false,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionMarquage'))
            ->add('positionAlveolePiegeage2','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'multiple'=>false,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionMarquage'))  
            ->add('nomAllumeur','entity',array('label'=>'Nom Allumeur 1 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
			'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
            ->add('nomAllumeur1','entity',array('label'=>'Nom Allumeur 2 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
			'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
            ->add('nomAllumeur2','entity',array('label'=>'Nom Allumeur 3 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
			'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
            ->add('sensibilite','entity',
                    array('attr' => array('class' => 'chosen-select'),'label'=>'Sensibilité','required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Sensibilite'))
            ->add('compteurDeVehicule','checkbox',
                    array('required'=>false))
            ->add('antiRelevage','checkbox',
                    array('label'=>'Dispositif anti-relevage','required'=>false))
            ->add('antiDemontage','checkbox',
                    array('label'=>'Dispositif anti-démontage','required'=>false))

            ->add('amorce','checkbox',
                    array('label'=>'Amovible','required'=>false))
            ->add('nbrAmorce','integer',
                    array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
            ->add('detonateur','checkbox',
                    array('label'=>'Amovible','required'=>false))
            ->add('nbrDetonateur','integer',
                    array('attr'=>array('min'=>0,'max'=>4),'label'=>'Nombre','required'=>false))
            ->add('inflammateur','checkbox',
                    array('label'=>'Amovible','required'=>false))
            ->add('nbrInflammateur','integer',
                    array('attr'=>array('min'=>0,'max'=>4),'label'=>'Nombre','required'=>false))
            ->add('retard','checkbox',
                    array('label'=>'Retard','required'=>false))
            ->add('delaiRetard','text',
                    array('label'=>'Délai du retard (s)','required'=>false))


                //fonctionnement
            ->add('fonctionnement','textarea',array('required'=>false  , 'attr' => array('rows' => '8')))
                //conditionnement
            ->add('conditionnement','entity',
                    array('label'=>'Conditionnement de la mine','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Conditionnement'))

            ->add('conditionnementTypeEmballage','entity',
                    array('label'=>'Type d\'emballage','attr' => array('class' => 'chosen-select'),'required'=>false, 'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Emballage'))
            ->add('conditionnementQteEmballage','integer',
                    array('label'=>'Qté par emballage','required'=>false))
			->add('coupComplet','checkbox',
                    array('label'=>'Coup Complet','required'=>false))
            ->add('conditionnementMarquageEmballage','text',
                    array('label'=>'Marquage de l\'emballage','required'=>false))
            ->add('conditionnementTypeCloisonnement','entity',
                    array('label'=>'Cloisonnement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Cloison'))
            ->add('conditionnementDimEmballageHaut','number',
                    array('label'=>'Hauteur (cm)','required'=>false))
            ->add('conditionnementDimEmballageLarg','number',
                    array('label'=>'Largeur (cm)','required'=>false))
            ->add('conditionnementDimEmballageLong','number',
                    array('label'=>'Longeur (cm)','required'=>false))
            ->add('conditionnementVolumeEmballage','number',
                    array('label'=>'Volume (m³)','required'=>false))
            ->add('conditionnementPoidsEmballage','number',
                    array('label'=>'Poids (kg)','required'=>false))
            ->add('conditionnementPoidsTotal','number',
                    array('label'=>'Poids Total (kg)','required'=>false))
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
            ->add('lanceur','textarea',array('required'=>false  , 'attr' => array('rows' => '8')))

        //historique
            ->add('historique','textarea',array('required'=>false  , 'attr' => array('rows' => '8')))

        //securite
            ->add('securite','textarea',array('label'=>'Sécurité','required'=>false  , 'attr' => array('rows' => '8')))
			->add('TravauxAttenuation','textarea',array('label'=>'Travaux Attenuation','required'=>false  , 'attr' => array('rows' => '8')))

		//traitement
            ->add('NEDE','textarea',array('label'=>'Neutralisation Destruction','required'=>false  , 'attr' => array('rows' => '8')))
            ->add('neutralisationDestructionIME','textarea',array('label'=>'Neutralisation Destruction IME','required'=>false  , 'attr' => array('rows' => '8')))
            ->add('dementelement','textarea',array('label'=>'Démantèlement','required'=>false  , 'attr' => array('rows' => '8')))
            ->add('demilitarisationConnue','checkbox',array('label'=>'Démilitarisation connue','required'=>false))

                //remarque
            ->add('remarques','textarea',array('label'=>'Remarque(s)','required'=>false  , 'attr' => array('rows' => '8')))

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
            
            ->add('imagesTraitement', 'collection',
                    array('type' => new ImageTraitementType(),
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
							
			->add('file', 'collection', array(
                    'type' => new FileType(),
                    'allow_add' => true,
                    'by_reference' => false,
                ))


        ;



//
//        ->add('quantiteMatiereActive')
//        ->add('uniteQMA')
//        ->add('qMACalculee')
//        ->add('uniteSIPdsMineCalcule')
//        ->add('numero')
//        ->add('identifiant')
//        ->add('dateCreation')
//        ->add('dateMAJ')
//        ->add('dateValidation')
//        ->add('conditionnementQteEmballage')
//        ->add('conditionnementMarquageEmballage')
//        ->add('conditionnementDimEmballageHaut')
//        ->add('conditionnementDimEmballageLarg')
//        ->add('conditionnementDimEmballageLong')
//        ->add('conditionnementVolumeEmballage')
//        ->add('conditionnementPoidsTotal')
//        ->add('conditionnementPoidsEmballage')
//        ->add('conditionnementTempStockMin')
//        ->add('conditionnementTempStockMax')
//        ->add('conditionnementTempUtilMin')
//        ->add('conditionnementTempUtilMax')
//        ->add('historique')
//        ->add('dementelement')
//        ->add('demilitarisationConnue')
//        ->add('poidsChargeDepotage')
//        ->add('delaiDestruction')
//        ->add('uniteSIQMACalculee')
//        ->add('lanceurMine')
//        ->add('relaisAmorcage')
//        ->add('nbrRelais')
//        ->add('amorce')
//        ->add('nbrAmorce')
//        ->add('detonateur')
//        ->add('nbrDetonateur')
//        ->add('inflammateur')
//        ->add('nbrInflammateur')
//        ->add('retard')
//        ->add('delaiRetard')
//        ->add('typeAllumeur')
//        ->add('delaiArmement')
//        ->add('securite')
//        ->add('neutralisationDestruction')
//        ->add('remarques')
//        ->add('fonctionnement')
//        ->add('diffusionExterne')
//        ->add('natureChargeMili')
//        ->add('natureChargeDispersion')
//        ->add('conditionnementTypeEmballage')
//        ->add('conditionnementTypeCloisonnement')
//        ->add('conditionnementClasseDangerStockage')
//        ->add('conditionnementGroupeComptabiliteStockage')
//        ->add('redacteur')
//        ->add('modificateur')
//        ->add('fiabiliteSource')
//        ->add('coherenceInformation')
//        ->add('verificateur')
//        ->add('typeProjection')
//        ->add('formeMine')
//        ->add('unitePoidsMine')
//        ->add('positionAlveolePiegeage')
//        ->add('couleurPrincipale')
//        ->add('couleurSecondaire')
//        ->add('bandeCouleur1')
//        ->add('bandeCouleur2')
//        ->add('bandeCouleur3')
//        ->add('bandeCouleur4')
//        ->add('typeMarquage')
//        ->add('marquageAFroidPosition')
//        ->add('marquageEnReliefPosition')
//        ->add('marquageEnCouleurPosition')
//        ->add('conditionnement')
//
//        ->add('natureRelais1')
//        ->add('natureRelais2')
//        ->add('natureRelais3')
//        ->add('natureRelais4')
//
//        ->add('collectionTravail')
//        ->add('collectionTerrain')
//        ->add('origineInfos')
//        ;

    }

    /**
    * @param OptionsResolverInterface $resolver
    */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FeodBundle\Entity\Mines'
        ));
    }

    /**
    * @return string
    */
    public function getName()
    {
        return 'feodbundle_mines';
    }
}
