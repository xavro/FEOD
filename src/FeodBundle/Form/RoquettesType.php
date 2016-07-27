<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FeodBundle\Repository\ExplosifRepository;
use FeodBundle\Repository\ChimiqueRepository;

class RoquettesType extends AbstractType
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
            ->add('TypeRoquette','entity',array('label'=>'Type de Roquettes','attr' => array('class' => 'chosen-select col-sm-offset-4-3'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeRoquette'))
            ->add('alias','text',
                    array('attr' => array('class' => 'col-sm-4'),'label'=>'Alias',
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

                ->add('alias','text',array('label'=>'Alias','required'=>false))
// Généralités		
		->add('nomUsine','text',array('required'=>false))
        ->add('codeUsine','text',array('required'=>false))
        ->add('denominationOTAN','text', array('attr' => array('class' => 'col-sm-6'),'label'=>'Dénomination OTAN','required'=>false))
		->add("LgTotavecFusee","number",array("label"=>"Avec fusée (mm)","required"=>false))
		->add("LgTotsansFusee","number",array("label"=>"Sans fusée (mm)","required"=>false))
		->add("PoidsRoq","number",array("label"=>"Poids total (kg)","required"=>false))
		->add('poidsProjectile','number',array('label'=>'Poids de la roquette (kg)','required'=>false))
		->add("DiametreTeteMili","number",array("label"=>"Diamètre de la tête militaire (mm)","required"=>false))
		->add("Calibre","number",array("label"=>"Calibre","required"=>false))
		->add("UniteCalibre","entity",array("label"=>"","attr" => array("class" => "chosen-select"),'label'=>'unité',"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:UniteDistance"))
		->add("CalibreCalcul","number",array("label"=>"Calibre calculé (mm)","required"=>false))
		->add("PorteePratique","number",array("label"=>"Pratique (m)","required"=>false))
		->add("PorteeMax","number",array("label"=>"Maximale (m)","required"=>false))
		->add("IndicateurArmement","checkbox",array("label"=>"Indicateur d'armement","required"=>false))
		->add("AutoDestruction","checkbox",array("label"=>"Auto Destruction","required"=>false))
		->add("NatureEnveloppe","entity",array("label"=>"Nature de l'enveloppe","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureEnveloppe"))
		->add("Guidage","entity",array("label"=>"Technologie de guidage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:Guidage"))
		->add('performances','textarea',array('required'=>false , 'attr' => array('rows' => '3')))
		->add('SystemeArme','text',array("label"=>"Longueur (mm)",'required'=>false))
		->add("CopieExistante","text",array("attr" => array("class" => "col-sm-5"),"label"=>"Copie(s) existante(s)","required"=>false))
		->add('performances','textarea',array('required'=>false , 'attr' => array('rows' => '3')))

// 	Chargement
		->add("NatureChargeMili","entity",array("label"=>"Nature","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("PoidsChargeMili","number",array("label"=>"Poids","required"=>false))
		->add("UniteQMA","entity",array("label"=>"unité","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:UnitesMasseVolume"))
		->add("ChargeTandem","checkbox",array("label"=>"Charge Tandem","required"=>false))
		//->add("NatureChargeTandem","entity",array("label"=>"Nature","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("PoidsChargeTandem","number",array("label"=>"Poids (g)","required"=>false))
		->add('effetChargement','entity',array('label'=>'Effet terminal du Chargement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargement'))
        ->add('natureChargePropu','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
        ->add('poidsChargePropu','number',array('label'=>'Poids (g)','required'=>false))
        ->add("NatureChargeHE","entity",array("label"=>"Nature","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("TypeChargePropu","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeCP"))
		->add("ChargeEjection","checkbox",array("label"=>"Charge d'éjection","required"=>false))
		->add("PoidsChargeEjection","number",array("label"=>"Poids (g)","required"=>false))
		->add("TypeChargeEjection","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeCP"))
		->add("FixationChargeEjection","entity",array("label"=>"Fixation","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:RoquettesFixationChargeEjection"))
        ->add('commentaireCharg','textarea',
                    array('label'=>'Commentaires','required'=>false , 'attr' => array('rows' => '5')))
		->add("NomSousMunition",'textarea',array("attr" => array("class" => "col-sm-3"),"label"=>"Nom","required"=>false , 'attr' => array('rows' => '3')))
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
            ->add('natureChargeTandem','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif',
									'query_builder' => function (ExplosifRepository $er){
				return $er->createQueryBuilder('e')
				->orderBy('e.nomine', 'ASC');
			}))
            ->add('poidsChargeTandem','number',array('label'=>'Poids (g)','required'=>false))
            ->add('natureChargeDispersion','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif',
									'query_builder' => function (ExplosifRepository $er){
				return $er->createQueryBuilder('e')
				->orderBy('e.nomine', 'ASC');
			}))
            ->add('poidsChargeDispersion','number',array('label'=>'Poids (g)','required'=>false))
            
// 	Aspects-dimensions
		->add("TypeCorps","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:RoquettesTypeCorps"))
		->add("NbTuyereAvant","integer",array("label"=>"à l'avant","required"=>false))
		->add("NbTuyereArriere","integer",array("label"=>"à l'arrière","required"=>false))
		->add("LongueurTeteMili","number",array("label"=>"Tête militaire (mm)","required"=>false))
		->add("LongueurChargePropu","number",array("label"=>"Charge propulsive (mm)","required"=>false))
		->add("LongueurPropu","number",array("label"=>"Propulseur (mm)","required"=>false))
		->add("FormeOgive","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeOgive"))
		->add("PuitsDeFusee","checkbox",array("label"=>"Puits de fusée","required"=>false))
		->add("FormeCorps","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeCorps"))
		->add("ModeStabilisation","entity",array("label"=>"Mode","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:ModeStabilisation"))
		->add("TypeEmpennage","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeEmpennage"))
		->add("LongEmp","number",array("label"=>"Longueur (mm)","required"=>false))
		->add("NbAilettes","integer",array("label"=>"Nombre","required"=>false))
		->add("TypeAilette","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeAilettes"))
		->add("FormeAilette","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeAilettes"))
		->add("LongAilette","number",array("label"=>"Longueur (mm)","required"=>false))
		->add("LargAilette","number",array("label"=>"Largeur (mm)","required"=>false))

//	Marquages
		->add("CouleurOgive","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("SymboleOgive","entity",array("label"=>"Symbole(s)","attr" => array("class" => "chosen-select"),"required"=>false,
			"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SymboleOgive"))
		->add("InscriptionOgive","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Texte","required"=>false))
		->add("CouleurInscOgive","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),
			"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("TypeInscOgive","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("MarquageFroidOgive","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Marquage à froid","required"=>false))
		->add("NbBandesOgive","integer",array('attr'=>array('min'=>0,'max'=>4),"label"=>"Nombre","required"=>false))
		->add("CouleurBandeOgive1","entity",array("label"=>"Couleur de bande 1","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive2","entity",array("label"=>"Couleur de bande 2","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive3","entity",array("label"=>"Couleur de bande 3","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive4","entity",array("label"=>"Couleur de bande 4","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive5","entity",array("label"=>"Couleur de bande 5","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurCorps","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("SymboleCorps","entity",array("label"=>"Symbole(s)","attr" => array("class" => "chosen-select"),"required"=>false,
			"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SymboleOgive"))
		->add("InscriptionCorps","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Texte","required"=>false))
		->add("CouleurInscCorps","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("TypeInscCorps","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("MarquageFroidCorps","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Marquage à froid","required"=>false))
		->add("NbBandesCorps","integer",array("label"=>"Nombre","required"=>false))
		->add("CouleurBandeCorps1","entity",array("label"=>"Couleur de bande 1","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps2","entity",array("label"=>"Couleur de bande 2","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps3","entity",array("label"=>"Couleur de bande 3","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps4","entity",array("label"=>"Couleur de bande 4","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurPropu","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscripPropu","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Texte","required"=>false))
		->add("MarqFroidEmpennage","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Marquage à froid","required"=>false))
		->add("CouleurInscPropu","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandePropu","entity",array("label"=>"Couleur de bande","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurEmpennage","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,
			"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("MarquageFroidPropulseur","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Marquage à froid","required"=>false))

// fusee
//
        ->add("PositionFusee","entity",array("label"=>"Position fusée","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:PositionFusee"))
		->add("NomFusee","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Nom des fusées","required"=>false))
		->add('AmorcageAssocies', 'collection', array(
                'type' => new AmorcageAssociesType(),
                'allow_add' => true,
                'by_reference' => false,
                ))
                ->add("Piezo","entity",array("label"=>"Piézo","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:Piezo"))
//fonctionnement
            ->add('fonctionnement','textarea',
                    array('label'=>'Fonctionnement','required'=>false , 'attr' => array('rows' => '8')))

//conditionnement
            ->add('conditionnementTypeEmballage','entity', array('label'=>'Type','attr' => array('class' => 'chosen-select'),
					'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Emballage'))
            ->add('conditionnementQteEmballage','integer', array('label'=>'Quantité de munition(s) par emballage','required'=>false))
            ->add('coupComplet','checkbox', array('label'=>'Coup Complet','required'=>false))
            ->add('conditionnementMarquageEmballage','text', array('label'=>'Marquage','required'=>false))
            ->add('conditionnementTypeCloisonnement','entity', array('label'=>'Cloisonnement','attr' => array('class' => 'chosen-select'),
					'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Cloison'))
            ->add('conditionnementDimEmballageHaut','number', array('label'=>'Hauteur (cm)','required'=>false))
            ->add('conditionnementDimEmballageLarg','number', array('label'=>'Largeur (cm)','required'=>false))
            ->add('conditionnementDimEmballageLong','number', array('label'=>'Longeur (cm)','required'=>false))
            ->add('conditionnementVolumeEmballage','number', array('label'=>'Volume (m³)','required'=>false))
            ->add('conditionnementPoidsEmballage','number', array('label'=>'Poids (kg)','required'=>false))
            ->add('conditionnementPoidsTotal','number', array('label'=>'Poids Total (kg)','required'=>false))
            ->add('conditionnementClasseDangerStockage','entity', array('label'=>'Classe de danger','attr' => array('class' => 'chosen-select'),
					'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ClasseDangerStockage'))
            ->add('conditionnementGroupeComptabiliteStockage','entity', array('label'=>'Groupe de Compatibilité','attr' => array('class' => 'chosen-select'),
					'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:GroupeComptabiliteStockage'))
            ->add('conditionnementTempStockMin','number', array('label'=>'Min (°C)','required'=>false))
            ->add('conditionnementTempStockMax','number', array('label'=>'Max (°C)','required'=>false))
            ->add('conditionnementTempUtilMin','number', array('label'=>'Min (°C)','required'=>false))
            ->add('conditionnementTempUtilMax','number', array('label'=>'Max (°C)','required'=>false))
            ->add('DRAM','entity', array('label'=>'Danger sur les Munitions  (DRAM)','attr' => array('class' => 'chosen-select'),
					'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DRAM'))
            ->add('DREP','entity', array('label'=>'Dommages sur les Personnes  (DREP)','attr' => array('class' => 'chosen-select'),
					'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DREP'))


//lanceur
            ->add('lanceur','textarea',array('required'=>false , 'attr' => array('rows' => '8')))


//historique
            ->add('historique','textarea',array('required'=>false , 'attr' => array('rows' => '8')))


//securite
            ->add('securite','textarea',array('label'=>'Sécurité','required'=>false , 'attr' => array('rows' => '8')))
			->add('TravauxAttenuation','textarea',array('label'=>'Travaux Attenuation','required'=>false  , 'attr' => array('rows' => '8')))
			
// traitement
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
			->add('images', 'collection', array('type' => new ImageType(),
					'allow_add' => true,
					//'allow_delete' => true,
					'by_reference' => false,
					))
		
			->add('imagesMarquages', 'collection', array('type' => new ImageMarquagesType(),
					'allow_add' => true,
					'allow_delete' => true,
					'by_reference' => false,
					))
		
			->add('imagesFonctionnement', 'collection', array('type' => new ImageFonctionnementType(),
					'allow_add' => true,
					'allow_delete' => true,
					'by_reference' => false,
					))
		
			->add('imagesConditionnement', 'collection', array('type' => new ImageConditionnementType(),
					'allow_add' => true,
					'allow_delete' => true,
					'by_reference' => false,
					))
		
			->add('imagesVecteur', 'collection', array('type' => new ImageVecteurType(),
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
            "data_class" => 'FeodBundle\Entity\Roquettes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "feodbundle_roquettes";
    }
}