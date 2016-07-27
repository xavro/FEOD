<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FeodBundle\Repository\ExplosifRepository;
use FeodBundle\Repository\ChimiqueRepository;
use FeodBundle\Repository\AmorcageRepository;

class MinesMarinesType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

//base
	$builder
		->add('nomine','text',array('attr' => array('class' => 'col-sm-5'),'label'=>'Nom','required'=>true))
        ->add('typeMineMarine','entity',array('label'=>'Type de mine','attr' => array('class' => 'chosen-select col-sm-offset-4-3'),
				'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMineMarine'))
        ->add('pays','entity', array('attr' => array('class' => 'chosen-select col-sm-4'),
				'label'=>'Pays d\'origine', 'required'=>false,
                'multiple'=>true, 'empty_value' => 'Choisissez une option', 'class'=>'FeodBundle:Pays'))
        ->add('paysAcquereur','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),
				'label'=>'Pays Utilisateurs', 'required'=>false,
				'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
        ->add('retrouveEn','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),
				'label'=>'Retrouvé En', 'required'=>false,
				'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
		->add('alias','text', array('label'=>'Alias','required'=>false))
        ->add('rouge','checkbox',array('required'=>false,'attr' => array('class' => 'rougebox')))

//generalite
		->add('denominationOTAN','text', array('attr' => array('class' => 'col-sm-4'),
				'label'=>'Dénomination OTAN', 'required'=>false))
		->add('natureEnveloppe','entity', array('label'=>'Nature de l\'enveloppe', 'attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Enveloppe'))
                ->add('PriseImmersion','entity', array('label'=>'Prise Immersion', 'attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMPriseImmersion'))
		
		->add('ProfondeurMouillage','number',
				array('required'=>false,'label'=>'Profondeur MAX d\'emploi (m)'))
		->add('ProfondeurImmersionFlotteur','number',
				array('required'=>false,'label'=>'Profondeur d\'immersion du flotteur (m)'))
		->add('epaisseurEnveloppe','number',
				array('required'=>false,'label'=>'Epaisseur de l\'enveloppe (mm)'))
                ->add('MMCible','entity',
				array('label'=>'Cible','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMCible'))
		->add('copieExistante','text',array('label'=>'Copie(s) Existante(s)','required'=>false))
		->add('nomUsine','text',
				array('label'=>'Nom Usine','required'=>false))
		->add('codeUsine','text',
				array('label'=>'Code Usine','required'=>false))
		->add('performances','textarea',array('required'=>false , 'attr' => array('rows' => '3')))
				
//chargement
		->add('poidsChargeMili','number',
				array('label'=>'Poids','required'=>false))
		->add('uniteQMA','entity',
				array('label'=>'Unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMasseVolume'))
		->add('poidsChargeMiliCalcule','number',
				array('label'=>'Poids Calculé (g)','required'=>false,'disabled'=>true))

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
            ->add('typeRemplissage','entity', array('label'=>'Type de remplissage', 'attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeRemplissage'))
		

//aspectDimensions
		->add('FormeGenerale','entity',
				array('label'=>'Forme de la mine','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeMine'))
		->add('HauteurNonLargue','number',
				array('label'=>'Hauteur (mm)','required'=>false))
		->add('longueurCorps','number',
				array('label'=>'Longueur du corps (m)','required'=>false))
                ->add('longueurAccessoires','number',
				array('label'=>'Longueur avec accessoires (m)','required'=>false))
		->add('largeur','number',
				array('label'=>'Largeur (mm)','required'=>false))
		->add('diametre','number',
				array('label'=>'Diamètre (mm)','required'=>false))
		->add('diametreHaut','number',
				array('label'=>'Diamètre Haut (mm)','required'=>false))
		->add('poidsMine','number',
				array('label'=>'Poids','required'=>false))
		->add('unitePoidsMine','entity',
				array('label'=>'Unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UniteMasse'))
		->add('poidsMineCalcule','number',
				array('label'=>'Poids Calculé (g)','required'=>false,'disabled'=>true))
                ->add('poidsCrapaud','number',
				array('label'=>'Poids du crapaud (kg)','required'=>false))
                ->add('poidsFlotteur','number',
				array('label'=>'Poids du flotteur (kg)','required'=>false))
                ->add('PoleSuperieur','textarea',array('required'=>false , 'attr' => array('rows' => '3')))
                ->add('PoleInferieur','textarea',array('required'=>false , 'attr' => array('rows' => '3')))
                ->add('HSNombreCornes','integer',array('attr'=>array('min'=>0,'max'=>20),'label'=>'Nombre de cornes','required'=>false))
                ->add('HINombreCornes','integer',array('attr'=>array('min'=>0,'max'=>20),'label'=>'Nombre de cornes','required'=>false))
                ->add('HSAppendicesPosDim','textarea',array('label'=>'Positions Dimension','required'=>false , 'attr' => array('rows' => '3')))
                ->add('HIAppendicesPosDim','textarea',array('label'=>'Positions Dimension','required'=>false , 'attr' => array('rows' => '3')))
                ->add('CommentaireAppMineFond','textarea',array('label'=>'Commentaires','required'=>false , 'attr' => array('rows' => '3')))
                ->add('CeintureMediane','textarea',array('label'=>'Ceinture Médiane','required'=>false , 'attr' => array('rows' => '3')))
                
                ->add('MMAppendicesOrinHS','entity',
				array('label'=>'Appendices','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMAppendicesOrin'))
		->add('MMAppendicesOrinHI','entity',
				array('label'=>'Appendices','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMAppendicesOrin'))
		->add('MMAppendicesMineFond','entity',
				array('label'=>'Appendices','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMAppendicesMineFond'))
		

//marquage
		->add('couleurPrincipale','entity',array('attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
		->add('couleurSecondaire','entity',array('attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
		->add('couleurPrincipaleAlternative','entity',array('attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
		->add('couleurSecondaireAlternative','entity',array('attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
		->add('typeMarquage','entity',array('attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
		->add('marquageAFroidPosition','entity',array('label'=>'Position','attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionMarquage'))
		->add('marquageAFroidTexte','textarea', array('label'=>'Inscription','required'=>false , 'attr' => array('rows' => '3')))
		->add('marquageEnCouleurPosition','entity', array('label'=>'Position','attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionMarquage'))
		->add('marquageEncouleurTexte','textarea', array('label'=>'Inscription','required'=>false , 'attr' => array('rows' => '3')))
		->add('bandeCouleurNombre','integer', array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
		->add('bandesCouleur','entity', array('label'=>'Couleur de bande','attr' => array('class' => 'chosen-select'),
				'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
		->add('CommentaireBandesCouleur','textarea', array('label'=>'Commentaire bandes de couleur','required'=>false , 'attr' => array('rows' => '4')))

//amorcage
		->add('BoiteAmorces','checkbox',
                    array('label'=>'Boîte d\'amorce','required'=>false))
                ->add('PorteDetonateur','checkbox',
                    array('label'=>'Porte-détonateur','required'=>false))
                ->add('CommentaireDA','textarea', array('label'=>'Commentaire DA :','required'=>false , 'attr' => array('rows' => '3')))
                ->add('CeintureMediane','text', array('label'=>'einture Mediane','required'=>false,))
		->add('typeAllumeur','entity',
				array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAllumeur'))
		->add('typeAllumeur1','entity',
				array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAllumeur'))
		->add('typeAllumeur2','entity',
				array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAllumeur'))
		->add('nomAllumeurMine','entity',array('label'=>'Nom 1 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
						'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
                ->add('nomAllumeurMine1','entity',array('label'=>'Nom 2 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
						'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
                ->add('nomAllumeurMine2','entity',array('label'=>'Nom 3 :','attr' => array('class' => 'chosen-select'),
			'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Amorcage',
						'query_builder' => function (AmorcageRepository $er){
				return $er->createQueryBuilder('u')
				->orderBy('u.nomine', 'ASC');
			}))
                ->add('nbrAllumeur','integer',
                    array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
                ->add('MMInfluence','entity',
				array('label'=>'Influence','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMInfluence'))
		->add('MMMiseDeFeu','entity',
				array('label'=>'Mise de feu','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMMiseDeFeu'))
		->add('MMContact','entity',
				array('label'=>'Contact','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMContact'))
		->add('MMSensibilites','textarea',array('label'=>'Sensibilité (T, db, b, Hz, PSI) :','required'=>false , 'attr' => array('rows' => '5')))
                
		->add('antiRelevage','checkbox', array('label'=>'Dispositif anti-relevage','required'=>false))
                ->add('TypeAntiRelevage','text', array('label'=>'Type Anti-Relevage','required'=>false,))
                
		->add('antiDemontage','checkbox', array('label'=>'Dispositif anti-démontage','required'=>false))
                ->add('TypeAntiDemontage','text', array('label'=>'Type Anti-Démontage','required'=>false,))
                
		->add('DispositifSabordage','checkbox', array('label'=>'Dispositif de Sabordage','required'=>false))
                ->add('TypeDispoSabordage','text', array('label'=>'Type de dispositif de sabordage','required'=>false,))
                
                ->add('DispositifSterilisation','checkbox', array('label'=>'Dispositif de Stérilisation','required'=>false))
                ->add('DelaiSterilisation','text', array('label'=>'Délai de Stérilisation','required'=>false,))
                
                ->add('autoDestruction','checkbox', array('label'=>'Auto-Destruction','required'=>false))
                ->add('TypeAutoDes','text', array('label'=>'Type Auto-Destruction','required'=>false,))
                
                ->add('commandeADistance','checkbox', array('label'=>'Commande à distance','required'=>false))
                ->add('TypeCommandeDistance','text', array('label'=>'Type Commande à Distance','required'=>false,))
                
                ->add('compteurNavire','checkbox', array('label'=>'Compteur de navire','required'=>false))
                ->add('compteurNavireCommentaire','text', array('label'=>'Commentaire compteur','required'=>false,))


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

//Vecteur
		->add('lanceur','textarea',array('required'=>false  , 'attr' => array('rows' => '8')))
		->add('MMMouilleur','entity', array('label'=>'Type de Mouilleur','attr' => array('class' => 'chosen-select'),
				'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MMMouilleur'))
		
//historique
		->add('historique','textarea',array('required'=>false  , 'attr' => array('rows' => '8')))

//securite
		->add('dispositifSecurite','entity', array('label'=>'Dispositif(s) de sécurités','attr' => array('class' => 'chosen-select'),
				'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DispositifSecurite'))
		
                ->add('securite','textarea',array('label'=>'Sécurité','required'=>false  , 'attr' => array('rows' => '8')))
                ->add('TravauxAttenuation','textarea',array('label'=>'Travaux Attenuation','required'=>false  , 'attr' => array('rows' => '8')))
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
//        ->add('profondeurMouillage')
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
//        ->add('nomAllumeur')
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
            'data_class' => 'FeodBundle\Entity\MinesMarines'
        ));
    }

    /**
    * @return string
    */
    public function getName()
    {
        return 'feodbundle_minesMarines';
    }
}
