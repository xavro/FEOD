<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MissilesSearchType extends AbstractType
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
            ->add('TypeMissile','entity',array('label'=>'Type de missile','attr' => array('class' => 'chosen-select col-sm-offset-4-3'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MissileType'))
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

                ->add('alias','text',array('label'=>'Alias','required'=>false))
		->add("NatureEnveloppe","entity",array("label"=>"Nature de l'enveloppe","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureEnveloppe"))
		->add("CalibreDiametre","number",array("label"=>"Calibre ou Diamètre","required"=>false))
		->add("UniteCalibre","entity",array("label"=>"","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:UniteDistance"))
		->add("TempsAutodestruction","number",array("label"=>"Temps avant autodestruction (s)","required"=>false))
			->add("TypeGuidage","entity",array("label"=>"Type de guidage","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeGuidage"))
		->add("LoiDeNavigation","entity",array("label"=>"Loi de navigation","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:LoiNavigation"))
			->add("TechnologieGuidage","entity",array("label"=>"Technologie de guidage","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TechnologieGuidage"))
		->add("DomaineAcquisition","entity",array("label"=>"Domaine d'acquisition","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:MissileDomaineAcquisition"))
		->add("IndicateurArmement","checkbox",array("label"=>"Indicateur armement","required"=>false))
		->add("CopieExistante","text",array("attr" => array("class" => "col-sm-8"),"label"=>"Copie(s) existante(s)","required"=>false))
			->add("NatureChargeMili","entity",array("label"=>"Nature de la charge militaire","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("PoidsCharge","number",array("label"=>"Poids de la charge millitaire","required"=>false))
		->add("UniteQMA","entity",array("label"=>"Unité QMA","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:UnitesMasseVolume"))
			->add("NatureChargePropu","entity",array("label"=>"Nature de la charge du propulseur","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureCP"))
		->add("PoidsChargePropu","number",array("label"=>"Poids de la charge du propulseur (g)","required"=>false))
		->add("TypeChargePropu","entity",array("label"=>"Type de la charge propulsive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeCP"))
		->add("EffetChargeMissile","entity",array("label"=>"Effet terminal du chargement","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:MissileEffetCharge"))
			->add("NatureChargeDispersion","entity",array("label"=>"Nature de la charge de dispersion","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeDispersion"))
		->add("PoidsChargeDispersion","number",array("label"=>"Poids de la charge de dispersion (g)","required"=>false))
		->add("NomSousMunition","text",array("attr" => array("class" => "col-sm-3"),"label"=>"Nom des sous-munitions","required"=>false))
		->add("NombreSSMun","number",array("label"=>"Quantité de sous-munitions","required"=>false))
		->add("ChargeTandem","checkbox",array("label"=>"Charge tandem","required"=>false))
			->add("NatureChargeTandem","entity",array("label"=>"Nature de la charge tandem","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("PoidsChargeTandem","number",array("label"=>"Poids de la charge tandem (g)","required"=>false))
		->add("LongueurTotale","number",array("label"=>"Longueur totale (mm)","required"=>false))
		->add("Poids","number",array("label"=>"Poids de la munition (kg)","required"=>false))
		->add("FormeOgive","entity",array("label"=>"Forme Ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeOgive"))
		->add("DiametreTete","number",array("label"=>"Diamètre de la tête (mm)","required"=>false))
		->add("LongueurTete","number",array("label"=>"Longueur de la tête (mm)","required"=>false))
		->add("PresenceRadome","checkbox",array("label"=>"Présence d'un radôme","required"=>false))
		->add("NombreTrappe","integer",array("label"=>"Nombre de trappe(s)","required"=>false))
			->add("FormeTrappe","entity",array("label"=>"Forme des trappes","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeTrappe"))
		->add("LongueurCharge","number",array("label"=>"Longueur de charge","required"=>false))
		->add("DiametreCharge","number",array("label"=>"Diamètre de la charge (mm)","required"=>false))
		->add("PriseExterne","text",array("attr" => array("class" => "col-sm-2"),"label"=>"Prise Externe","required"=>false))
		->add("NombrePrise","integer",array('attr'=>array('min'=>0,'max'=>1000000000000000000),"label"=>"Nombre de prises","required"=>false))
		->add("DistanceTuyerePrise","number",array("label"=>"Distance Tuyère-prise (cm)","required"=>false))
		->add("TypeEmpennage","entity",array("label"=>"Type d'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:MissileTypeEmpennage"))
		->add("LongueurEmpennage","number",array("label"=>"Longueur de l'empennage","required"=>false))
		->add("NombreAilette","integer",array('attr'=>array('min'=>0,'max'=>1000000000000000000),"label"=>"Nombre d'ailettes","required"=>false))
		->add("FormeAilettes","entity",array("label"=>"Forme des ailettes","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeAilettes"))
		->add("LongueurAilette","number",array("label"=>"Longueur des ailettes (mm)","required"=>false))
		->add("LargeurAilette","number",array("label"=>"Largeur des ailettes (mm)","required"=>false))
		->add("FixationAilettes","entity",array("label"=>"Fixation des ailettes","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FixationAilettes"))
		->add("DistanceOgiveGouverne","number",array("label"=>"Distance ogive gouvernes (cm)","required"=>false))
		->add("NombreGouverne","integer",array('attr'=>array('min'=>0,'max'=>1000000000000000000),"label"=>"Nombre de gouvernes","required"=>false))
		->add("FormeGouverne","entity",array("label"=>"Forme des gouvernes","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeAilettes"))
		->add("DistanceOgiveGouverne2","number",array("label"=>"Distance ogive gouverne 2 (cm)","required"=>false))
		->add("NombreGouverne2","integer",array('attr'=>array('min'=>0,'max'=>1000000000000000000),"label"=>"Nombre de gouvernes 2","required"=>false))
		->add("FormeGouverne2","entity",array("label"=>"Forme des gouvernes 2","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeAilettes"))
		->add("DiametrePropulseur","number",array("label"=>"Diamètre du propulseur (mm)","required"=>false))
		->add("LongueurPropulseur","number",array("label"=>"Longueur du propulseur (mm)","required"=>false))
		->add("PropulseurEjection","checkbox",array("label"=>"Propulseur d'éjection","required"=>false))
		->add("CouleurTete","entity",array("label"=>"Couleur de l'ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("NombreBandeTete","integer",array('attr'=>array('min'=>0,'max'=>4),"label"=>"Nombre de bandes sur l'ogive","required"=>false))
		->add("SymbolesTete","entity",array("label"=>"Symboles à l'ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:Symboles"))
		->add("CouleurBandeTete","entity",array("label"=>"Couleur de bande(s) d'ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("TypeInscriptionTete","entity",array("label"=>"Type d'inscription sur l'ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscriptionTete","entity",array("label"=>"Couleur des inscriptions sur l'ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionOgive","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Inscription sur l'ogive","required"=>false))
		->add("MarquageFroidOgive","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid sur l'ogive","required"=>false))
		->add("CouleurCorps","entity",array("label"=>"Couleur du corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
			->add("SymboleCorps","entity",array("label"=>"Symboles sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:SymboleOgive"))
		->add("TypeInscCorps","entity",array("label"=>"Type d'inscription sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscCorps","entity",array("label"=>"Couleur des inscriptions sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionCorps","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Inscription sur le corps","required"=>false))
		->add("MarquageFroidCorps","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid sur le corps","required"=>false))
		->add("CouleurPropulseur","entity",array("label"=>"Couleur du propulseur","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("NombreBandePropulseur","integer",array('attr'=>array('min'=>0,'max'=>1000000000000000000),"label"=>"Nombre de bandes sur le propulseur","required"=>false))
		->add("SymbolePropulseur","entity",array("label"=>"Symboles sur le culot","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:Symboles"))
		->add("CouleurBandePropulseur","entity",array("label"=>"Couleur de bandes du propulseur","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("TypeInscriptionPropulseur","entity",array("label"=>"Type d'inscription au culot","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscriptionPropulseur","entity",array("label"=>"Couleur des inscriptions au culot","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionPropulseur","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Inscription sur le culot","required"=>false))
		->add("MarquageFroidPropulseur","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Marquage à froid au culot","required"=>false))
		->add("NomFusee","text",array("attr" => array("class" => "col-sm-3"),"label"=>"Nom de la fusée","required"=>false))
			->add("PositionFusee","entity",array("label"=>"Position de la fusée","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:PositionFusee"))
			->add("DeclenchementFusee","entity",array("label"=>"Déclenchement de la fusée","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:DeclenchementFusee"))
		->add("PiezoElec","checkbox",array("label"=>"Piezo-elec","required"=>false))
        //fonctionnement
            ->add('fonctionnement','textarea',
                    array('label'=>'Fonctionnement','required'=>false))

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
                    array('label'=>'Hauteur Emballage(cm)','required'=>false))
            ->add('conditionnementDimEmballageLarg','number',
                    array('label'=>'Largeur Emballage(cm)','required'=>false))
            ->add('conditionnementDimEmballageLong','number',
                    array('label'=>'Longeur Emballage(cm)','required'=>false))
            ->add('conditionnementVolumeEmballage','number',
                    array('label'=>'Volume Emballage(m³)','required'=>false))
            ->add('conditionnementPoidsEmballage','number',
                    array('label'=>'Poids de l\'emballage (kg)','required'=>false))
            ->add('conditionnementPoidsTotal','number',
                    array('label'=>'Poids Total (kg)','required'=>false))
            ->add('conditionnementClasseDangerStockage','entity',
                    array('label'=>'Classe de Stockage','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ClasseDangerStockage'))
            ->add('conditionnementGroupeComptabiliteStockage','entity',
                    array('label'=>'Groupe de Comptabilité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:GroupeComptabiliteStockage'))
            ->add('conditionnementTempStockMin','number',
                    array('label'=>'T° Stockage Min (°C)','required'=>false))
            ->add('conditionnementTempStockMax','number',
                    array('label'=>'T° Stockage Max (°C)','required'=>false))
            ->add('conditionnementTempUtilMin','number',
                    array('label'=>'T° Utilisation Min (°C)','required'=>false))
            ->add('conditionnementTempUtilMax','number',
                    array('label'=>'T° Utilisation Max (°C)','required'=>false))
            ->add('DRAM','entity',
                    array('label'=>'Danger des Rayonnements electromagnétiques sur les Munitions  (DRAM)','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DRAM'))
            ->add('DREP','entity',
                    array('label'=>'Dommages dus aux Rayonnements electromagnétiques sur les Personnes  (DREP)','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:DREP'))


        //lanceur
            ->add('lanceur','textarea',array('required'=>false))


        //historique
            ->add('historique','textarea',array('required'=>false))


        //securite
            ->add('securite','textarea',array('required'=>false))
            ->add('NEDE','textarea',array('label'=>'Neutralisation Destruction','required'=>false))
            ->add('dementelement','textarea',array('required'=>false))
            ->add('demilitarisationConnue','checkbox',array('required'=>false))


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

                ;

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            "data_class" => 'FeodBundle\Entity\Missiles'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "feodbundle_missiles";
    }
}