<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SousMunitionsSearchType extends AbstractType
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
        ->add('TypeSousMunition','entity',array('label'=>'Type de sous munitions','attr' => array('class' => 'chosen-select col-sm-offset-4-3'),
					'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeSousMunition'))
        ->add('pays','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Pays d\'origine',
                    'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
        ->add('paysAcquereur','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Pays Utilisateurs',
					'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
        ->add('retrouveEn','entity',array('attr' => array('class' => 'chosen-select col-sm-4'),'label'=>'Retrouvé En',
                'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Pays'))
        ->add('rouge','checkbox',array('required'=>false,'attr' => array('class' => 'rougebox')))
		->add("Alias","text",array("attr" => array("class" => "col-sm-5"),"label"=>"Alias","required"=>false))

// Généralités		
        ->add('denominationOTAN','text',array('attr' => array('class' => 'col-sm-4'),'label'=>'Dénomination OTAN','required'=>false))
		->add("SousMunitionEmploi","entity",array("label"=>"Type d'emploi","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionEmploi"))
		->add("Initiation","entity",array("label"=>"Initiation","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:Initiation"))
		->add("AntiManipulation","checkbox",array("label"=>"Anti-manipulation","required"=>false))
		->add("AutoDestruction","checkbox",array("label"=>"Auto-destruction","required"=>false))
		->add("DelaiAutoDestruction","text",array("label"=>"Délai","required"=>false))
		->add("AutoNeutralisation","checkbox",array("label"=>"Auto-neutralisation","required"=>false))
		->add("DelaiAutoNeutralisation","text",array("label"=>"Délai","required"=>false))
		->add("SousMunitionAccessoires","entity",array("label"=>"Accessoire","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionAccessoires"))
		->add("ModeDeFonctionnement","entity",array("label"=>"Mode","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionModeDeFonctionnement"))
		->add("PrincipeDeFonctionnement","entity",array("label"=>"Principe","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionPrincipeDeFonctionnement"))
		->add("PrincipeArmement","entity",array("label"=>"Principe","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionPrincipeArmement"))
		->add("IndicateurArmement","checkbox",array("label"=>"Présence indicateur","required"=>false))
		->add("TypeIndicateur","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionTypeIndicateur"))
		->add("PositionIndicateur","entity",array("label"=>"Position","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionPositionIndicateur"))
		->add("HauteurEjection","number",array("label"=>"Hauteur d'éjection (m)","required"=>false))
		->add("Stabilisation","entity",array("label"=>"Stabilisation","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionStabilisation"))
		->add("SystemeGuidage","checkbox",array("label"=>"Système","required"=>false))
		->add("TypeGuidage","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TechnologieGuidage"))
		->add("ChargeTandem","checkbox",array("label"=>"Charge Tandem","required"=>false))
		->add("PropulsionAdditionnelle","checkbox",array("label"=>"Propulsion additionnelle","required"=>false))
		->add("CopieExistante","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Copie existante","required"=>false))

// Chargement
		->add("NatureChargementPrincipal","entity",array("label"=>"Nature","attr" => array("class" => "chosen-select"),
				"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureCharge"))
		->add("PoidsChargeMili","number",array('attr'=>array('min'=>0,'max'=>1000000000000000000),"label"=>"Poids","required"=>false))
		->add("UniteQMA","entity",array("label"=>"","attr" => array("class" => "chosen-select"),
				"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:UnitesMasseVolume"))
		->add("EjectionDeLaChargeMilitaire","checkbox",array("label"=>"Charge éjectable","required"=>false))
		->add("NombreDetonateur","integer",array("label"=>"Nombre de détonateur(s)","required"=>false))
		->add("NombreAmorce","integer",array("label"=>"Nombre d'amorce(s)","required"=>false))
		->add("NatureChargePropu","entity",array("label"=>"Nature","attr" => array("class" => "chosen-select"),
				"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeDispersion"))
		->add("PoidsChargePropu","number",array("label"=>"Poids (g)","required"=>false))
		->add("NatureChargeTandem","entity",array("label"=>"Nature","attr" => array("class" => "chosen-select"),
				"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("PoidsChargeTandem","number",array("label"=>"Poids (g)","required"=>false))


//	Aspect-dimensions
		->add("FormeGenerale","entity",array("label"=>"Forme générale","attr" => array("class" => "chosen-select"),
				"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeCorps"))
		->add("NatureEnveloppe","entity",array("label"=>"Nature","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureEnveloppe"))
		->add("AspectExterieur","entity",array("label"=>"Aspect extérieur","attr" => array("class" => "chosen-select"),
				"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SousMunitionAspectExterieur"))
		->add("HauteurNonLargue","number",array("label"=>"Hauteur non largué (mm)","required"=>false))
		->add("LongueurNonLargue","number",array("label"=>"Longueur non largué (mm)","required"=>false))
		->add("LargeurNonLargue","number",array("label"=>"Largeur non largué (mm)","required"=>false))
		->add("DiametreNonLargue","number",array("label"=>"Diamètre non largué (mm)","required"=>false))
		->add("PoidsNonLargue","number",array("label"=>"Poids non largué (g)","required"=>false))
		->add("HauteurLargue","number",array("label"=>"Hauteur largué (mm)","required"=>false))
		->add("LongueurLargue","number",array("label"=>"Longueur largué (mm)","required"=>false))
		->add("LargeurLargue","number",array("label"=>"Largeur largué (mm)","required"=>false))
		->add("DiametreLargue","number",array("label"=>"Diamètre largué (mm)","required"=>false))

//	Marquages
	//	->add("CouleurCorps","text",array("attr" => array("class" => "col-sm-3"),"label"=>"Corps","required"=>false))   	PENSER A METTRE LA TABLE A JOUR !!
		->add("CouleurPrincipale","entity",array("label"=>"Corps principale","attr" => array("class" => "chosen-select"),
				"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurSecondaire","entity",array("label"=>"Corps secondaire","attr" => array("class" => "chosen-select"),
				"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurStabilisateur","entity",array("label"=>"Stabilisateur","attr" => array("class" => "chosen-select"),
				"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("TypeDeMarquage","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("MarquageEnCouleur","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Texte","required"=>false))
		->add("MarquageAFroid","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid","required"=>false))
		->add("MarquageEnRelief","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage en relief","required"=>false))
		->add("NombreDeBande","integer",array('attr'=>array('min'=>0,'max'=>4),"label"=>"Nombre de bandes","required"=>false))
		->add("BandeCouleur1","entity",array("label"=>"Bande de couleur 1","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("BandeCouleur2","entity",array("label"=>"Bande de couleur 2","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("BandeCouleur3","entity",array("label"=>"Bande de couleur 3","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("BandeCouleur4","entity",array("label"=>"Bande de couleur 4","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))

//	fonctionnement
            ->add('fonctionnement','textarea', array('label'=>'Fonctionnement','required'=>false))

//	conditionnement
            ->add('conditionnementTypeEmballage','entity', array('label'=>'Type','attr' => array('class' => 'chosen-select'),
					'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Emballage'))
            ->add('conditionnementQteEmballage','integer', array('label'=>'Quantité de munition par emballage','required'=>false))
            ->add('coupComplet','checkbox', array('label'=>'Coup Complet','required'=>false))
            ->add('conditionnementMarquageEmballage','text', array('label'=>'Marquage de l\'emballage','required'=>false))
            ->add('conditionnementTypeCloisonnement','entity', array('label'=>'Cloisonnement','attr' => array('class' => 'chosen-select'),
					'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Cloison'))
            ->add('conditionnementDimEmballageHaut','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Hauteur (cm)','required'=>false))
            ->add('conditionnementDimEmballageLarg','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Largeur (cm)','required'=>false))
            ->add('conditionnementDimEmballageLong','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Longeur (cm)','required'=>false))
            ->add('conditionnementVolumeEmballage','number', array('label'=>'Volume (m³)','required'=>false))
            ->add('conditionnementPoidsEmballage','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids (kg)','required'=>false))
            ->add('conditionnementPoidsTotal','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids Total (kg)','required'=>false))
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
            ->add('lanceur','textarea',array('required'=>false))


        //historique
            ->add('historique','textarea',array('required'=>false))


        //securite
            ->add('securite','textarea',array('label'=>'Sécurité','required'=>false))
            ->add('NEDE','textarea',array('label'=>'Neutralisation Destruction','required'=>false))
            ->add('dementelement','textarea',array('label'=>'Démantèlement','required'=>false))
            ->add('demilitarisationConnue','checkbox',array('label'=>'Démilitarisation connue','required'=>false))


        //remarque
            ->add('remarques','textarea',array('label'=>'Remarque(s)','required'=>false))


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

                ;

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            "data_class" => 'FeodBundle\Entity\SousMunitions'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "feodbundle_sousmunitions";
    }
}