<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BombesSearchType extends AbstractType
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

                ->add('alias','text',array('label'=>'Alias','required'=>false))
		->add("NatureEnveloppe","entity",array("label"=>"Nature de l'enveloppe","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureEnveloppe"))
		->add("Poids","number",array("label"=>"Poids de la muniton","required"=>false))
		->add("UniteMasse","entity",array("label"=>"","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:UniteMasse"))
		->add("SystemGuidage","checkbox",array("label"=>"Système de guidage","required"=>false))
			->add("TypeGuidage","entity",array("label"=>"Technologie de guidage","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TechnologieGuidage"))
		->add("PropulsionAdditionnelle","checkbox",array("label"=>"Propulsion Additionnelle","required"=>false))
		->add("CopieExistante","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Copie(s) existante(s)","required"=>false))
			->add("NatureChargeMili","entity",array("label"=>"Nature de la charge militaire","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("PoidsChargeMili","number",array("label"=>"Poids de la charge militaire","required"=>false))
		->add("UniteQMA","entity",array("label"=>"","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Unité","class"=>"FeodBundle:UnitesMasseVolume"))
            ->add("PoidsChargeCalcule","number",array("label"=>"Poids de la charge de dispersion","required"=>false))
            ->add("NatureChargeDispersion","entity",array("label"=>"Nature de la charge de dispersion","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeDispersion"))
		->add("PoidsChargeDispersion","number",array("label"=>"Poids de la charge de dispersion (g)","required"=>false))
			->add("EffetChargement","entity",array("label"=>"Effet terminal du chargement","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:EffetChargement"))
		->add("NatureChargePropu","entity",array("label"=>"Nature de la charge du propulseur","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeDispersion"))
		->add("PoidsChargePropu","number",array("label"=>"Poids de charge du propulseur (g)","required"=>false))
		->add("NatureChargeTandem","entity",array("label"=>"Nature de la charge tandem","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:NatureChargeMili"))
		->add("PoidsChargeTandem","number",array("label"=>"Poids de la charge tandem (g)","required"=>false))
		->add("LgTotavecFusee","number",array("label"=>"Longueur avec fusée (mm)","required"=>false))
		->add("LgTotsansFusee","number",array("label"=>"Longueur sans fusée (mm)","required"=>false))
		->add("Diametre","number",array("label"=>"Diamètre (mm)","required"=>false))
		->add("FormeOgive","entity",array("label"=>"Forme Ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesFormeOgive"))
		->add("PuitsDeFusee","checkbox",array("label"=>"Puits de fusée","required"=>false))
		->add("Bague","checkbox",array("label"=>"Bague","required"=>false))
		->add("TypeBague","number",array("label"=>"Bague de raccordement (diamètre)","required"=>false))
		->add("SystemeOgive","entity",array("label"=>"Système Ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesSystemeOgive"))
		->add("FormeCorps","entity",array("label"=>"Forme Corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeCorps"))
		->add("TypeAccrochage","entity",array("label"=>"Type d'accrochage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesTypeAccrochage"))
		->add("NombreAnneaux","integer",array("label"=>"Nombre d'anneaux","required"=>false))
		->add("DistanceAnneaux","number",array("label"=>"Entraxe (pouce)","required"=>false))
		->add("LargeurAnneaux","number",array("label"=>"Largeur des anneaux (cm)","required"=>false))
		->add("DistRingCulot","number",array("label"=>"Distance ring-culot (cm)","required"=>false))
		->add("NombrePuitsLateraux","integer",array("label"=>"Nombre de puits latéraux","required"=>false))
		->add("FormeCulot","entity",array("label"=>"Forme du culot","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeCulot"))
		->add("TypePlaque","entity",array("label"=>"Type de plaque","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesTypePlaque"))
		->add("TypeEmpennage","entity",array("label"=>"Type d'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesTypeEmpennage"))
		->add("LongEmpennage","number",array("label"=>"Longueur de l'empennage (cm)","required"=>false))
		->add("NbAilettes","integer",array("label"=>"Nombre d'ailettes","required"=>false))
		->add("LongAilette","number",array("label"=>"Longueur des ailettes (cm)","required"=>false))
		->add("LargAilette","number",array("label"=>"Largeur des ailettes (cm)","required"=>false))
		->add("TypeAilette","entity",array("label"=>"Type d'ailettes","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesTypeAilettes"))
		->add("FormeAilette","entity",array("label"=>"Forme des ailettes","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombesFormeAilettes"))
		->add("NombreOrifice","integer",array("label"=>"Nombre d'orifices","required"=>false))
			->add("PositionOrifice","entity",array("label"=>"Position(s) orifice(s)","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:PositionOrifice"))
		->add("DistJonction","number",array("label"=>"Distance Jonction (cm)","required"=>false))
		->add("TypeElemAeroAV","entity",array("label"=>"Type","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:ElementsAerodynamiques"))
		->add("FormeElemAeroAV","entity",array("label"=>"Forme","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:FormeElemAero"))
		->add("PositionElemAeroAV","entity",array("label"=>"Position","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:PositionElemAeroAV"))
		->add("CouleurOgive","entity",array("label"=>"Couleur de l'ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("SymboleOgive","entity",array("label"=>"Symbole à l'ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombeSymboleCorpsOgives"))
		->add("TypeInscOgive","entity",array("label"=>"Type d'inscription ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscOgive","entity",array("label"=>"Couleur des inscriptions sur l'ogive","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionOgive","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Inscription sur l'ogive","required"=>false))
		->add("MarquageFroidOgive","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid sur l'ogive","required"=>false))
		->add("NbBandesOgive","integer",array('attr'=>array('min'=>0,'max'=>4),"label"=>"Nombre de bandes sur l'ogive","required"=>false))
		->add("CouleurBandeOgive1","entity",array("label"=>"Couleur de bande d'ogive 1","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive2","entity",array("label"=>"Couleur de bande d'ogive 2","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive3","entity",array("label"=>"Couleur de bande d'ogive 3","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeOgive4","entity",array("label"=>"Couleur de bande d'ogive 4","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurCorps","entity",array("label"=>"Couleur du corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("SymboleCorps","entity",array("label"=>"Symbole corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:BombeSymboleCorpsOgives"))
		->add("TypeInscCorps","entity",array("label"=>"Type d'inscription sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscCorps","entity",array("label"=>"Couleur des inscriptions sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionCorps","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Inscription sur le corps","required"=>false))
		->add("MarquageFroidCorps","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid sur le corps","required"=>false))
		->add("NbBandesCorps","integer",array("label"=>"Nombre de bandes sur le corps","required"=>false))
		->add("CouleurBandeCorps1","entity",array("label"=>"Couleur de bande 1 sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps2","entity",array("label"=>"Couleur de bande 2 sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps3","entity",array("label"=>"Couleur de bande 3 sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeCorps4","entity",array("label"=>"Couleur de bande 4 sur le corps","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurEmp","entity",array("label"=>"Couleur de l'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("SymboleEmp","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Symboles sur l'empennage","required"=>false))
		->add("TypeInscEmp","entity",array("label"=>"Type d'inscription sur l'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:TypeMarquage"))
		->add("CouleurInscEmp","entity",array("label"=>"Couleur des inscriptions sur l'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("InscriptionEmp","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Inscriptions sur l'empennage","required"=>false))
		->add("MarquageFroidBase","text",array("attr" => array("class" => "col-sm-4"),"label"=>"Marquage à froid sur l'empennage","required"=>false))
		->add("NbBandesEmp","integer",array("label"=>"Nombre de bandes sur l'empennage","required"=>false))
		->add("CouleurBandeEmp1","entity",array("label"=>"Couleur de bande 1 sur l'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeEmp2","entity",array("label"=>"Couleur de bande 2 sur l'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeEmp3","entity",array("label"=>"Couleur de bande 3 sur l'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
		->add("CouleurBandeEmp4","entity",array("label"=>"Couleur de bande 4 sur l'empennage","attr" => array("class" => "chosen-select"),"required"=>false,"empty_value" => "Choisissez une option","class"=>"FeodBundle:CouleurFond"))
			->add("PositionFusees","entity",array("label"=>"Position fusée(s)","attr" => array("class" => "chosen-select"),"required"=>false,"multiple"=>true,"empty_value" => "Choisissez une option","class"=>"FeodBundle:PositionFusee"))
		->add("TypeFusee","text",array("attr" => array("class" => "col-sm-6"),"label"=>"Nom des fusées","required"=>false))
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
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Hauteur Emballage(cm)','required'=>false))
            ->add('conditionnementDimEmballageLarg','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Largeur Emballage(cm)','required'=>false))
            ->add('conditionnementDimEmballageLong','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Longeur Emballage(cm)','required'=>false))
            ->add('conditionnementVolumeEmballage','number',
                    array('label'=>'Volume Emballage(m³)','required'=>false))
            ->add('conditionnementPoidsEmballage','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids de l\'emballage (kg)','required'=>false))
            ->add('conditionnementPoidsTotal','number',
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids Total (kg)','required'=>false))
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