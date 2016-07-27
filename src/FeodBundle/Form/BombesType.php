<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FeodBundle\Repository\ExplosifRepository;
use FeodBundle\Repository\ChimiqueRepository;

class BombesType extends AbstractType
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
            ->add('FamilleBombe','entity',array('label'=>'Type de bombe','attr' => array('class' => 'chosen-select col-sm-offset-4-3'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:BombeGroupe'))
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
		->add('nomUsine','text',array('required'=>false))
                ->add('codeUsine','text',array('required'=>false))
                ->add('alias','text',array('label'=>'Alias','required'=>false))
		->add("NatureEnveloppe","entity",array("label"=>"Nature de l'enveloppe","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureEnveloppe"))
		->add("Poids","number",array("label"=>"Poids de la munition","required"=>false))
                ->add("PoidsMunCalcule","number",array("label"=>"Poids (g)","required"=>false))
		->add("UniteMasse","entity",array("label"=>"","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Unité","class"=>"FeodBundle:UniteMasse"))
		->add("SystemGuidage","checkbox",array("label"=>"Système de guidage","required"=>false))
			->add("TypeGuidage","entity",array("label"=>"Technologie de guidage","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TechnologieGuidage"))
		->add("PropulsionAdditionnelle","checkbox",array("label"=>"Propulsion Additionnelle","required"=>false))
		->add("CopieExistante","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Copie(s) existante(s)","required"=>false))
			->add("NatureChargeMili","entity",array("label"=>"Nature","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("poidsChargeMili","number",array("label"=>"Poids","required"=>false))
		->add("uniteQMA","entity",array("label"=>"","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Unité","class"=>"FeodBundle:UnitesMasseVolume"))
            ->add("poidsChargeCalcule","number",array("label"=>"Poids (g)","required"=>false))
            ->add('natureChargeDispersion','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
            ->add('poidsChargeDispersion','number',array('label'=>'Poids (g)','required'=>false))
            ->add('effetChargement','entity',array('label'=>'Effet terminal du Chargement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargement'))
            ->add('natureChargePropu','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
            ->add('poidsChargePropu','number',array('label'=>'Poids (g)','required'=>false))
            ->add("LgTotavecFusee","number",array("label"=>"Longueur avec fusée (mm)","required"=>false))
		->add("LgTotsansFusee","number",array("label"=>"Longueur sans fusée (mm)","required"=>false))
		->add("Diametre","number",array("label"=>"Ø (mm)","required"=>false))
		->add("FormeOgive","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesFormeOgive"))
		->add("PuitsDeFusee","checkbox",array("label"=>"Puits de fusée","required"=>false))
		->add("Bague","checkbox",array("label"=>"Bague","required"=>false))
		->add("TypeBague","number",array("label"=>" Ø Bague de raccordement","required"=>false))
		->add("SystemeOgive","entity",array("label"=>"Système sur ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesSystemeOgive"))
		->add("FormeCorps","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeCorps"))
		->add("TypeAccrochage","entity",array("label"=>"Type d'accrochage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesTypeAccrochage"))
		->add("NombreAnneaux","integer",array("label"=>"Nombre d'anneaux","required"=>false))
		->add("DistanceAnneaux","number",array("label"=>"Entraxe (pouce)","required"=>false))
		->add("LargeurAnneaux","number",array("label"=>"Largeur des anneaux (cm)","required"=>false))
		->add("DistRingCulot","number",array("label"=>"Distance ring-culot (cm)","required"=>false))
		->add("NombrePuitsLateraux","integer",array("label"=>"Nombre de puits latéraux","required"=>false))
		->add("FormeCulot","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeCulot"))
		->add("TypePlaque","entity",array("label"=>"Type de plaque","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesTypePlaque"))
		->add("TypeEmpennage","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesTypeEmpennage"))
		->add("LongEmpennage","number",array("label"=>"Longueur (cm)","required"=>false))
		->add("NbAilettes","integer",array("label"=>"Nombre","required"=>false))
		->add("LongAilette","number",array("label"=>"Longueur (cm)","required"=>false))
		->add("LargAilette","number",array("label"=>"Largeur (cm)","required"=>false))
		->add("TypeAilette","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesTypeAilettes"))
		->add("FormeAilette","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesFormeAilettes"))
		->add("NombreOrifice","integer",array("label"=>"Nombre","required"=>false))
			->add("PositionOrifice","entity",array("label"=>"Position(s)","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:PositionOrifice"))
		->add("DistJonction","number",array("label"=>"Distance Jonction (cm)","required"=>false))
		->add("TypeElemAeroAV","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:ElementsAerodynamiques"))
		->add("FormeElemAeroAV","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeElemAero"))
		->add("PositionElemAeroAV","entity",array("label"=>"Position","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:PositionElemAeroAV"))
		->add("CouleurOgive","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("SymboleOgive","entity",array("label"=>"Symbole","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombeSymboleCorpsOgives"))
		->add("TypeInscOgive","entity",array("label"=>"Type d'inscription","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscOgive","entity",array("label"=>"Couleur des inscriptions","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionOgive","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Inscription","required"=>false))
		->add("MarquageFroidOgive","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid","required"=>false))
		->add("NbBandesOgive","integer",array('attr'=>array('min'=>0,'max'=>4),"label"=>"Nombre de bandes","required"=>false))
		->add("CouleurBandeOgive1","entity",array("label"=>"Couleur de bande 1","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive2","entity",array("label"=>"Couleur de bande 2","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive3","entity",array("label"=>"Couleur de bande 3","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive4","entity",array("label"=>"Couleur de bande 4","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurCorps","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("SymboleCorps","entity",array("label"=>"Symbole","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombeSymboleCorpsOgives"))
		->add("TypeInscCorps","entity",array("label"=>"Type d'inscription","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscCorps","entity",array("label"=>"Couleur des inscriptions","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionCorps","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Inscription","required"=>false))
		->add("MarquageFroidCorps","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid","required"=>false))
		->add("NbBandesCorps","integer",array('attr'=>array('min'=>0,'max'=>4), "label"=>"Nombre de bandes","required"=>false))
		->add("CouleurBandeCorps1","entity",array("label"=>"Couleur de bande 1 ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps2","entity",array("label"=>"Couleur de bande 2 ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps3","entity",array("label"=>"Couleur de bande 3 ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps4","entity",array("label"=>"Couleur de bande 4 ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurEmp","entity",array("label"=>"Couleur","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("SymboleEmp","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Symboles ","required"=>false))
		->add("TypeInscEmp","entity",array("label"=>"Type d'inscription ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscEmp","entity",array("label"=>"Couleur des inscriptions ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionEmp","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Inscriptions sur l'empennage","required"=>false))
		->add("MarquageFroidBase","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid sur l'empennage","required"=>false))
		->add("NbBandesEmp","integer",array('attr'=>array('min'=>0,'max'=>4), "label"=>"Nombre de bandes","required"=>false))
		->add("CouleurBandeEmp1","entity",array("label"=>"Couleur de bande 1 ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeEmp2","entity",array("label"=>"Couleur de bande 2 ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeEmp3","entity",array("label"=>"Couleur de bande 3 ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeEmp4","entity",array("label"=>"Couleur de bande 4 ","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("PositionFusees","entity",array("label"=>"Position fusée(s)","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:PositionFusee"))
		->add("TypeFusee","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Nom des fusées","required"=>false))
		->add('typeAllumeur','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))
        ->add('typeAllumeur1','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))
        ->add('typeAllumeur2','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeFusee'))
		->add('nomAllumeur','text',
                    array('label'=>'Nom Fusées 1','required'=>false))
        ->add('nomAllumeur1','text',
                    array('label'=>'Nom Fusées 2','required'=>false))
        ->add('nomAllumeur2','text',
                    array('label'=>'Nom Fusées 3','required'=>false))
		->add('nbrAmorce','integer',
                    array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
		->add('positionAllumeurOrigine','entity',
                    array('label'=>'Position','attr' => array ('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionFusee'))
        ->add('positionAllumeurOrigine1','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionFusee'))
        ->add('positionAllumeurOrigine2','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'multiple'=>true,'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionFusee'))
		->add('performances','textarea',array('required'=>false , 'attr' => array('rows' => '3')))
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
            ->add('natureChargeTandem','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
            ->add('poidsChargeTandem','number',array('label'=>'Poids (g)','required'=>false))
	    ->add('natureChargeInerte','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeInerte'))
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
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Longueur (cm)','required'=>false))
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
            "data_class" => 'FeodBundle\Entity\Bombes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "feodbundle_bombes";
    }
}