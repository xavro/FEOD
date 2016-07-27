<?php

namespace FeodBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FeodBundle\Repository\ExplosifRepository;
use FeodBundle\Repository\ChimiqueRepository;

class ArtillerieType extends AbstractType
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
            ->add('performances','textarea',array('required'=>false , 'attr' => array('rows' => '3')))
            ->add('nomUsine','text',array('required'=>false))
            ->add('codeUsine','text',array('required'=>false))
            ->add('calibre','number',array('required'=>false))
            ->add('calibreReel','number',array('required'=>false,'label'=>'Calculé (mm)','disabled'=>true))
            ->add('uniteDistance','entity',array('required'=>false,'label'=>'Unité','class'=>'FeodBundle:UniteDistance'))
            ->add('natureEnveloppe','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Enveloppe'))
            ->add('diametreTraceur','number',array('label'=>'Diamètre (mm)','required'=>false))
            ->add('longTraceur','number',array('label'=>'Longueur (mm)','required'=>false))
            ->add('autoDestruction','checkbox',
                    array('label'=>'Auto Destruction','required'=>false))
            ->add('encartouche','checkbox',
                    array('label'=>'Encartouché','required'=>false))
            ->add('typeCeinture','entity',array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeCeinture'))
            ->add('matiereCeinture','entity',array('label'=>'Matière','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MatiereCeinture'))
            ->add('typeCeinture1','entity',array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeCeinture'))
            ->add('matiereCeinture1','entity',array('label'=>'Matière','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MatiereCeinture'))
            ->add('typeCeinture2','entity',array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeCeinture'))
            ->add('matiereCeinture2','entity',array('label'=>'Matière','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:MatiereCeinture'))
            ->add('nombreCeintures','integer',array('attr'=>array('min'=>0,'max'=>3),'label'=>'Nombre','required'=>false))
            ->add('distanceCeinture','number',array('label'=>'Espace entre ceintures (mm)','required'=>false))
            ->add('largeurCeinture','number',array('label'=>'1 : Largeur (mm)','required'=>false))
            ->add('largeurCeinture1','number',array('label'=>'2 : Largeur (mm)','required'=>false))
            ->add('largeurCeinture2','number',array('label'=>'3 : Largeur (mm)','required'=>false))
            ->add('distCeintCulot','number',array('label'=>'Distance Ceinture-Culot (mm)','required'=>false))
            ->add('copieExistante','text',array('label'=>'Copie(s) Existante(s)','required'=>false))



        //chargement
            ->add('natureChargeMili','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeMili'))
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
            ->add('poidsChargeMili','number',array('label'=>'Poids','required'=>false))
            ->add('uniteQMA','entity',array('label'=>'Unité','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:UnitesMasseVolume'))
            ->add('poidsChargeCalcule','number',array('label'=>'Poids (g)','required'=>false,'disabled'=>true))
            ->add('natureChargeDispersion','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
            ->add('poidsChargeDispersion','number',array('label'=>'Poids (g)','required'=>false))
            ->add('effetChargement','entity',array('label'=>'Effet terminal du Chargement','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:EffetChargement'))
            ->add('natureChargeInerte','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:NatureChargeInerte'))
            ->add('natureChargePropu','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
            ->add('poidsChargePropu','number',array('label'=>'Poids (g)','required'=>false))
            ->add('chargeTandem','checkbox',array('required'=>false))
            ->add('natureChargeTandem','entity',array('label'=>'Nature','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Explosif'))
            ->add('poidsChargeTandem','number',array('label'=>'Poids (g)','required'=>false))
            //->add('ExplosifAssocies', 'collection', array(
              //  'type' => new ExplosifAssociesType(),
                //'allow_add' => true,
                //'by_reference' => false,
                //))

        //aspectDimensions
            ->add('lgTotavecFusee','number',array('label'=>'Sans Douille','required'=>false))
            ->add('lgTotavecFuseeDouille','number',array('label'=>'Avec Douille','required'=>false))
            ->add('lgTotsansFusee','number',array('label'=>'','required'=>false))
            ->add('hautProjectile','number',array('label'=>'','required'=>false))
            ->add('poids','number',array('label'=>'Poids de la munition (kg)','required'=>false))
			->add('poidsProjectile','number',array('label'=>'Poids du projectile (kg)','required'=>false))
			->add('poidsDouille','number',array('label'=>'Poids de la douille (kg)','required'=>false))
            ->add('formeOgive','entity',array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeOgive'))
            ->add('standOFF','number',array('label'=>'StandOff (mm)','required'=>false))
            ->add('bagueCalage','checkbox',array('label'=>'Bague de calage','required'=>false))
            ->add('bagueDeRaccordement','number',
                    array('label'=>'Ø bague de raccordement (mm)','required'=>false))
            ->add('puitsDeFusee','checkbox',
                    array('label'=>'Présence','required'=>false))
            ->add('diametreDelOeil','number',
                    array('label'=>'Ø oeil (mm)','required'=>false))
            ->add('typeGaine','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeGaine'))
            ->add('formeDeGaine','entity',
                    array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeDeGaine'))
            ->add('hauteurDeLaGaine','number',
                    array('label'=>'Hauteur (mm)','required'=>false))
            ->add('diametreExterieurDeLaGaine1','number',
                    array('label'=>'Ø extérieur (mm)','required'=>false))
            ->add('diametreExterieurDeLaGaine2','number',
                    array('label'=>'Ø extérieur bas (mm)','required'=>false))
            ->add('formeCorps','entity',
                    array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeCorps'))
            ->add('nombreDeRenflement','integer',
                    array('label'=>'Nombre de renflement(s)','required'=>false))
            ->add('typeDeRenflement1','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeDeRenflement'))
            ->add('positionDeRenflement1','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionDeRenflement'))
            ->add('largeurRenflement1','number',
                    array('label'=>'Largeur (mm)','required'=>false))
            ->add('typeDeRenflement2','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeDeRenflement'))
            ->add('positionDeRenflement2','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionDeRenflement'))
            ->add('largeurRenflement2','number',
                    array('label'=>'Largeur (mm)','required'=>false))
            ->add('typeSabot','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeSabot'))
            ->add('longueurSabot','number',
                    array('label'=>'Longueur (mm)','required'=>false))
            ->add('formeCulot','entity',
                    array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeCulot'))
            ->add('puitsCulot','checkbox',
                    array('label'=>'Présence','required'=>false))
            ->add('diametrePuitsCulot','number',
                    array('label'=>'Ø (mm)','required'=>false))
            ->add('typePlaque','entity',
                    array('label'=>'Type de plaque','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypePlaque'))
            ->add('nBGorges','integer',
                    array('label'=>'Nombre','required'=>false))
            ->add('distCulotGorge','number',
                    array('label'=>'Distance du Culot (mm)','required'=>false))
            ->add('diametreJupe','number',
                    array('label'=>'Ø (mm)','required'=>false))
            ->add('longueurJupe','number',
                    array('label'=>'Longueur (mm)','required'=>false))
            ->add('typeEmpennage','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeEmpennage'))
            ->add('longEmpennage','number',
                    array('label'=>'Longueur (mm)','required'=>false))
            ->add('nbAilettes','integer',
                    array('label'=>'Nombre','required'=>false))
            ->add('formeAilettes','entity',
                    array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeAilettes'))
            ->add('longAilette','number',
                    array('label'=>'Longueur (mm)','required'=>false))
            ->add('largAilette','number',
                    array('label'=>'Largeur (mm)','required'=>false))
            ->add('orifices','checkbox',
                    array('label'=>'Présence','required'=>false))
            ->add('positionOrifice','entity',
                    array('label'=>'Position(s)','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionOrifice'))
            ->add('obturation','entity',
                    array('label'=>'Obturation','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:Obturation'))
            ->add('typeElemAeroAV','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ElementsAerodynamiques'))
            ->add('typeElemAeroAR','entity',
                    array('label'=>'Type','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:ElementsAerodynamiques'))
            ->add('formeElemAeroAV','entity',
                    array('label'=>'Forme','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeElemAero'))
            ->add('formeElemAeroAR','entity',
                    array('label'=>'Forme de l\'élément aérodynamique AR','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:FormeElemAero'))
            ->add('positionElemAeroAV','entity',
                    array('label'=>'Position','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionElemAeroAV'))
            ->add('positionElemAeroAR','entity',
                    array('label'=>'Position de l\'élément aérodynamique AR','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionElemAeroAR'))

        //marquage
            ->add('couleurOgive','entity',
                    array('label'=>'Couleur','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('symboleOgive','entity',
                    array('label'=>'Symbole(s)','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:SymboleOgive'))
            ->add('typeInscOgive','entity',
                    array('label'=>'Type d\'inscription','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('couleurInscOgive','entity',
                    array('label'=>'Couleur des inscriptions','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('inscriptionOgive','textarea',
                    array('label'=>'Texte des Inscriptions','required'=>false , 'attr' => array('rows' => '3')))
            ->add('marquageFroidOgive','textarea',
                    array('label'=>'Marquage à froid','required'=>false, 'attr' => array('rows' => '2')))
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
            ->add('symboleCorps','entity',
                    array('label'=>'Symbole(s)','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:SymboleOgive'))
            ->add('typeInscCorps','entity',
                    array('label'=>'Type d\'inscription','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:TypeMarquage'))
            ->add('couleurInscCorps','entity',
                    array('label'=>'Couleur des inscriptions','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('inscriptionCorps','textarea',
                    array('label'=>'Texte des inscriptions','required'=>false , 'attr' => array('rows' => '3')))
            ->add('marquageFroidCorps','textarea',
                    array('label'=>'Marquage à Froid','required'=>false , 'attr' => array('rows' => '2')))
            ->add('nbBandesCorps','integer',
                    array('attr'=>array('min'=>0,'max'=>5),'label'=>'Nombre de Bandes','required'=>false))
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
                    array('label'=>'Texte des inscriptions','required'=>false , 'attr' => array('rows' => '3')))
            ->add('marquageFroidCulot','textarea',
                    array('label'=>'Marquage à froid','required'=>false , 'attr' => array('rows' => '2')))
            ->add('symboleCulot','entity',
                    array('label'=>'Symbole(s)','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:SymboleOgive'))
            ->add('couleurInscCulot','entity',
                    array('label'=>'Couleur des inscriptions','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))
            ->add('couleurBandeCulot1','entity',
                    array('label'=>'Couleur de bande','attr' => array('class' => 'chosen-select'),'required'=>false,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:CouleurFond'))


        //fusee
            ->add('positionFusee','entity',
                    array('label'=>'Position de la fusée','attr' => array('class' => 'chosen-select'),'required'=>false,'multiple'=>true,'empty_value' => 'Choisissez une option','class'=>'FeodBundle:PositionFusee'))
            ->add('nomFusee1','text',
                    array('label'=>'Nom des fusées','required'=>false))
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
