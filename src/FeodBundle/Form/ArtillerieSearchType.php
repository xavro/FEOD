<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArtillerieSearchType extends AbstractType
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
            ->add('typeObus','entity',array('label'=>'Type d\'obus','attr' => array('class' => 'chosen-select col-sm-offset-4-3'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeObus'))
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
            ->add('alias','text',array('required'=>false))
            ->add('calibre','number',array('required'=>false))
            ->add('calibreReel','number',array('required'=>false,'label'=>'Calibre (mm)','disabled'=>true))
            ->add('uniteDistance','entity',array('required'=>false,'class'=>'FeodBundle:UniteDistance'))
            ->add('natureEnveloppe','entity',array('label'=>'Nature de l\'enveloppe','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Enveloppe'))
            ->add('diametreTraceur','number',array('label'=>'Diamètre du traceur (mm)','required'=>false))
            ->add('longTraceur','number',array('label'=>'Longueur du traceur (mm)','required'=>false))
            ->add('autoDestruction','entity',array('attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:AutoDestruction'))
            ->add('typeCeinture','entity',array('label'=>'Ceinture(s)','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeCeinture'))
            ->add('matiereCeinture','entity',array('label'=>'Matière de la ceinture','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MatiereCeinture'))
            ->add('nombreCeintures','integer',array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre de ceintures','required'=>false))
            ->add('distanceCeinture','number',array('label'=>'Distance entre les ceintures (mm)','required'=>false))
            ->add('largeurCeinture','number',array('label'=>'Largeur de la ceinture 1 (mm)','required'=>false))
            ->add('largeurCeinture1','number',array('label'=>'Largeur de la ceinture 2 (mm)','required'=>false))
            ->add('largeurCeinture2','number',array('label'=>'Largeur de la ceinture 3 (mm)','required'=>false))
            ->add('distCeintCulot','number',array('label'=>'Distance Ceinture-Culot (mm)','required'=>false))
            ->add('copieExistante','text',array('label'=>'Copie(s) Existante(s)','required'=>false))



        //chargement
            ->add('natureChargeMili','entity',array('label'=>'Nature de la charge militaire','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeMili'))
            ->add('poidsChargeMili','number',array('label'=>'Poids de la charge militaire','required'=>false))
            ->add('uniteQMA','entity',array('label'=>'unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMasseVolume'))
            ->add('poidsChargeCalcule','number',array('label'=>'Poids de la charge militaire (g)','required'=>false,'disabled'=>true))
            ->add('natureChargeDispersion','entity',array('label'=>'Nature de la charge de dispersion','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeDispersion'))
            ->add('poidsChargeDispersion','number',array('label'=>'Poids de la charge de dispersion (g)','required'=>false))
            ->add('effetChargement','entity',array('label'=>'Effet terminal du Chargement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargement'))
            ->add('natureChargePropu','entity',array('label'=>'Nature de la charge du propulseur','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeDispersion'))
            ->add('poidsChargePropu','number',array('label'=>'Poids de la charge du propulseur (g)','required'=>false))
            ->add('chargeTandem','checkbox',array('required'=>false))
            ->add('natureChargeTandem','entity',array('label'=>'Nature de la charge Tandem','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeMili'))
            ->add('poidsChargeTandem','number',array('label'=>'Poids de la charge Tandem','required'=>false))

        //aspectDimensions
            ->add('lgTotavecFusee','number',array('label'=>'Longueur Totale avec Fusée (mm)','required'=>false))
            ->add('lgTotsansFusee','number',array('label'=>'Hauteur sous Fusée (mm)','required'=>false))
            ->add('poids','number',array('label'=>'Poids de la munition (kg)','required'=>false))
            ->add('formeOgive','entity',array('label'=>'Forme Ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeOgive'))
            ->add('standOFF','number',array('label'=>'StandOff (mm)','required'=>false))
            ->add('bagueCalage','checkbox',array('label'=>'Bague de calage','required'=>false))
            ->add('bagueDeRaccordement','number',
                    array('label'=>'Bague de raccordement (diamètres en mm)','required'=>false))
            ->add('puitsDeFusee','checkbox',
                    array('label'=>'Puits de Fusée','required'=>false))
            ->add('diametreDelOeil','number',
                    array('label'=>'Diamètre de l\'oeil (mm)','required'=>false))
            ->add('typeGaine','entity',
                    array('label'=>'Type de Gaine','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeGaine'))
            ->add('formeDeGaine','entity',
                    array('label'=>'Forme de la tête de gaine','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeDeGaine'))
            ->add('hauteurDeLaGaine','number',
                    array('label'=>'Hauteur de la gaine (mm)','required'=>false))
            ->add('diametreExterieurDeLaGaine1','number',
                    array('label'=>'Diamètre extérieur de la gaine (mm)','required'=>false))
            ->add('diametreExterieurDeLaGaine2','number',
                    array('label'=>'Diamètre extérieur de la gaine bas (mm)','required'=>false))
            ->add('formeCorps','entity',
                    array('label'=>'Forme Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeCorps'))
            ->add('nombreDeRenflement','integer',
                    array('label'=>'Nombre de renflement(s)','required'=>false))
            ->add('typeDeRenflement1','entity',
                    array('label'=>'Type du renflement 1','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeDeRenflement'))
            ->add('positionDeRenflement1','entity',
                    array('label'=>'Position du renflement 1','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionDeRenflement'))
            ->add('largeurRenflement1','number',
                    array('label'=>'Largeur du renflement 1','required'=>false))
            ->add('typeDeRenflement2','entity',
                    array('label'=>'Type du renflement 2','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeDeRenflement'))
            ->add('positionDeRenflement2','entity',
                    array('label'=>'Position du renflement 2','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionDeRenflement'))
            ->add('largeurRenflement2','number',
                    array('label'=>'Largeur du renflement 2','required'=>false))
            ->add('typeSabot','entity',
                    array('label'=>'Type de Sabot','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeSabot'))
            ->add('longueurSabot','number',
                    array('label'=>'Longueur de Sabot (mm)','required'=>false))
            ->add('formeCulot','entity',
                    array('label'=>'Forme du Culot','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeCulot'))
            ->add('puitsCulot','checkbox',
                    array('label'=>'Puits de Culot','required'=>false))
            ->add('diametrePuitsCulot','number',
                    array('label'=>'Diamètre du puits de Culot (mm)','required'=>false))
            ->add('typePlaque','entity',
                    array('label'=>'Type de plaque','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypePlaque'))
            ->add('nBGorges','integer',
                    array('label'=>'Nombre de Gorge(s) de sertissage','required'=>false))
            ->add('distCulotGorge','number',
                    array('label'=>'Distance Culot-Gorge (mm)','required'=>false))
            ->add('diametreJupe','number',
                    array('label'=>'Diamètre de Jupe (mm)','required'=>false))
            ->add('longueurJupe','number',
                    array('label'=>'Longueur de Jupe (mm)','required'=>false))
            ->add('typeEmpennage','entity',
                    array('label'=>'Type d\'empennage','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeEmpennage'))
            ->add('longEmpennage','number',
                    array('label'=>'Longueur de l\'empennage','required'=>false))
            ->add('nbAilettes','integer',
                    array('label'=>'Nombre d\'ailettes','required'=>false))
            ->add('formeAilettes','entity',
                    array('label'=>'Forme des ailettes','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeAilettes'))
            ->add('longAilette','number',
                    array('label'=>'Longueur des ailettes (mm)','required'=>false))
            ->add('largAilette','number',
                    array('label'=>'Largeur des ailettes (mm)','required'=>false))
            ->add('orifices','checkbox',
                    array('label'=>'Orifice de remplissage','required'=>false))
            ->add('positionOrifice','entity',
                    array('label'=>'Position de l\'orifice','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionOrifice'))
            ->add('obturation','entity',
                    array('label'=>'Obturation','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Obturation'))
            ->add('typeElemAeroAV','entity',
                    array('label'=>'Type d\'élément aérodynamique AVANT','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ElementsAerodynamiques'))
            ->add('typeElemAeroAR','entity',
                    array('label'=>'Type d\'élément aérodynamique ARRIERE','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ElementsAerodynamiques'))
            ->add('formeElemAeroAV','entity',
                    array('label'=>'Forme de l\'élément aérodynamique AV','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeElemAero'))
            ->add('formeElemAeroAR','entity',
                    array('label'=>'Forme de l\'élément aérodynamique AR','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeElemAero'))
            ->add('positionElemAeroAV','entity',
                    array('label'=>'Position de l\'élément aérodynamique AV','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionElemAeroAV'))
            ->add('positionElemAeroAR','entity',
                    array('label'=>'Position de l\'élément aérodynamique AR','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionElemAeroAR'))

        //marquage
            ->add('couleurOgive','entity',
                    array('label'=>'Couleur de l\'ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('symboleOgive','entity',
                    array('label'=>'Symbole(s) sur l\'ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:SymboleOgive'))
            ->add('typeInscOgive','entity',
                    array('label'=>'Type d\'inscription sur l\'ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('couleurInscOgive','entity',
                    array('label'=>'Couleur des inscriptions sur l\'ogive','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('inscriptionOgive','text',
                    array('label'=>'Inscription sur l\'ogive','required'=>false))
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
            ->add('symboleCorps','entity',
                    array('label'=>'Symbole(s) Corps','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:SymboleOgive'))
            ->add('typeInscCorps','entity',
                    array('label'=>'Type d\'inscription sur le corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('couleurInscCorps','entity',
                    array('label'=>'Couleur des inscriptions sur le corps','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('inscriptionCorps','text',
                    array('label'=>'Inscription sur le corps','required'=>false))
            ->add('marquageFroidCorps','text',
                    array('label'=>'Marquage à Froid sur le corps','required'=>false))
            ->add('nbBandesCorps','integer',
                    array('attr'=>array('min'=>0,'max'=>5),'label'=>'Nombre de Bandes sur le corps','required'=>false))
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
            ->add('symboleCulot','entity',
                    array('label'=>'Symboles sur le culot','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:SymboleOgive'))
            ->add('couleurInscCulot','entity',
                    array('label'=>'Couleur des inscriptions au culot','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeCulot1','entity',
                    array('label'=>'Couleur de bande du culot','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))


        //fusee
            ->add('positionFusee','entity',
                    array('label'=>'Position de la fusée','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionFusee'))
            ->add('nomFusee1','text',
                    array('label'=>'Nom des fusées','required'=>false))


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
            'data_class' => 'FeodBundle\Entity\Artillerie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'feodbundle_artillerie';
    }
}
