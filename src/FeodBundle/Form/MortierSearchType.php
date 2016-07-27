<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MortierSearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

//base
                $builder->add('nomine','text', array('label'=>'Nom','required'=>false))
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
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UniteDistance'))
            ->add('guidage','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Guidage'))
            ->add('natureEnveloppe','entity',
                    array('label'=>'Nature de l\'Enveloppe','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Enveloppe'))

        //chargement poidsChargeCalcule
            ->add('natureChargeMili','entity',
                    array('label'=>'Nature de la charge militaire','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeMili'))
            ->add('poidsChargeMili',"number",
                    array('label'=>'Poids de la charge militaire','required'=>false))
            ->add('uniteQMA','entity',
                    array('label'=>'unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMasseVolume'))
            ->add('poidsChargeCalcule','number',
                    array('label'=>'Poids de la charge (g)','required'=>false))
            ->add('effetChargement','entity',
                    array('label'=>'Effet du Chargement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargement'))
            ->add('natureChargeDispersion','entity',
                    array('label'=>'Nature de la charge de dispersion','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeDispersion'))
            ->add('poidsChargeDisp',"number",
                    array('label'=>'Poids de la charge de dispersion (g)','required'=>false))
            ->add('effetChargeDisp','entity',
                    array('label'=>'Effet de la Charge de dispersion','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargeDispersion'))
            ->add('chargeCartPropu',"number",
                    array('label'=>'Charge de la cartouche de propulsion (g)','required'=>false))
            ->add('nbGargousses','integer',
                    array('label'=>'Nombre de gargousses','required'=>false))
            ->add('poidsGargousse',"number",
                    array('label'=>'Poids d\'une gargousse (g)','required'=>false))



        //aspectDimensions
            ->add('lgTotsansFusee','number',
                    array('label'=>'Hauteur sous Fusée (mm)','required'=>false))
            ->add('poids',"number",
                    array('label'=>'Poids de la munition (kg)','required'=>false))
            ->add('formeOgive','entity',
                    array('label'=>'Forme Ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeOgive'))
            ->add('puitsDeFusee','checkbox',
                    array('label'=>'Puits de Fusée','required'=>false))
            ->add('diametreDelOeil',"number",
                    array('label'=>'Diamètre de l\'oeil (mm)','required'=>false))
            ->add('formeCorps','entity',
                    array('label'=>'Forme Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeCorps'))
            ->add('renflement','checkbox',
                    array('required'=>false))
            ->add('nombreRenflements','integer',
                    array('label'=>'Nombre de renflement(s)','required'=>false))
            ->add('typeRenflement','entity',
                    array('label'=>'Type de Renflement','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeDeRenflement'))
            ->add('typePlaque','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypePlaque'))
            ->add('typeEmpennage','entity',
                    array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeEmpennage'))
            ->add('longEmpennage',"number",
                    array('label'=>'Longueur de l\'empennage (mm)','required'=>false))
            ->add('nbAilettes','integer',
                    array('label'=>'Nombre d\'Ailettes','required'=>false))
                ->add('typeAilettes','entity',
                    array('label'=>'Type d\'ailette','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeAilettes'))
                ->add('formeAilettes','entity',
                    array('label'=>'Forme des ailettes','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeAilettes'))
            ->add('longAilette','number',
                    array('label'=>'Longueur des ailettes (mm)','required'=>false))

                    ->add('preCeinture','checkbox',
                        array('label'=>'Présence de Ceinture(s)','required'=>false))
                    ->add('typeCeinture','entity',
                        array('label'=>'Type de Ceintures(s)','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeCeinture'))
                    ->add('nombreCeintures','integer',
                        array('label'=>'Nombre de Ceinture(s)','required'=>false))
                    ->add('distCeintCulot',"number",
                        array('label'=>'Distance Ceinture-Culot (mm)','required'=>false))

        //marquage
            ->add('couleurOgive','entity',
                    array('label'=>'Couleur de l\'ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('typeInscOgive','entity',
                    array('label'=>'Type d\'inscription sur l\'ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('couleurInscOgive','entity',
                    array('label'=>'Couleur des inscriptions sur l\'ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('marquageFroidOgive','text',
                    array('label'=>'Marquage à froid sur l\'ogive','required'=>false))
            ->add('nbBandesOgive','integer',
                    array('attr'=>array('min'=>0,'max'=>4),'label'=>'Nombre de Bandes sur l\'ogive','required'=>false))
            ->add('couleurBandeOgive1','entity',
                    array('label'=>'Couleur de Bande d\'ogive 1','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeOgive2','entity',
                    array('label'=>'Couleur de Bande d\'ogive 2','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeOgive3','entity',
                    array('label'=>'Couleur de Bande d\'ogive 3','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeOgive4','entity',
                    array('label'=>'Couleur de Bande d\'ogive 4','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurCorps','entity',
                    array('label'=>'Couleur du Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('typeInscCorps','entity',
                    array('label'=>'Type d\'inscription sur le corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('couleurInscCorps','entity',
                    array('label'=>'Couleur des inscriptions sur le corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('marquageFroidCorps','text',
                    array('label'=>'Marquage à Froid sur le corps','required'=>false))
            ->add('nbBandesCorps','integer',
                    array('attr'=>array('min'=>0,'max'=>4),'label'=>'Nombre de Bandes sur le corps','required'=>false))
            ->add('couleurBandeCorps1','entity',
                    array('label'=>'Couleur de Bande 1 sur le Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeCorps2','entity',
                    array('label'=>'Couleur de Bande 2 sur le Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeCorps3','entity',
                    array('label'=>'Couleur de Bande 3 sur le Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeCorps4','entity',
                    array('label'=>'Couleur de Bande 4 sur le Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurCulot','entity',
                    array('label'=>'Couleur du culot','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('typeInscCulot','entity',
                    array('label'=>'Type d\'inscription au Culot','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('inscriptionCulot','text',
                    array('label'=>'Inscription du Culot','required'=>false))

            ->add('marquageFroidCulot','text',
                    array('label'=>'Marquage à froid au culot','required'=>false))

            ->add('marquageFroidEmpennage','text',
                    array('label'=>'Marquage à froid sur l\'empennage','required'=>false))



        //fusee
            ->add('ogiveFusee','text',
                    array('required'=>false))
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
            ->add('conditionnementPoidsEmballage',"number",
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids de l\'emballage (kg)','required'=>false))
            ->add('conditionnementPoidsTotal',"number",
                    array('attr'=>array('min'=>0,'max'=>1000000000000000000),'label'=>'Poids Total (kg)','required'=>false))
            ->add('conditionnementClasseDangerStockage','entity',
                    array('label'=>'Classe de Stockage','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ClasseDangerStockage'))
            ->add('conditionnementGroupeComptabiliteStockage','entity',
                    array('label'=>'Groupe de Compatibilité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:GroupeComptabiliteStockage'))
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

                //$securite
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
