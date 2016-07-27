<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Amorcage
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\AmorcageRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"amorcage" = "Amorcage"})
 *
 */
class Amorcage
{

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="amorcageId", type="integer", nullable=true)
     */
    private $amorcageId;

    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageImage", mappedBy="amorcage",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $images;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageImageMarquage", mappedBy="amorcage",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesMarquages;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageImageFonctionnement", mappedBy="amorcage",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesFonctionnement;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageImageConditionnement", mappedBy="amorcage",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesConditionnement;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageImageVecteur", mappedBy="amorcage",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesVecteur;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageImageTraitement", mappedBy="amorcage",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesTraitement;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageImageChargement", mappedBy="amorcage",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesChargement;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageImageDimensions", mappedBy="amorcage",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesDimensions;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true,name="statut", type="integer")
     * @Assert\Range(min = 0,max = 3)
     *
     * 0 : modification ou création
     * 1 : attente de vérification
     * 2 : attente de validation
     * 3 : validée
     *
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column( name="nomine", type="string", length=255)
     */
    private $nomine;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="denominationOTAN", type="string", length=255)
     */
    private $denominationOTAN;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="alias", type="string", length=255)
     */
     private $alias;
     /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Pays")
     * @ORM\JoinTable(name="amorcage_pays",
     *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="pays_id", referencedColumnName="id", unique=true )}
     * )
     */
     private $pays;
     /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Pays")
     * @ORM\JoinTable(name="amorcage_pays_acq",
     *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="pays_id", referencedColumnName="id", unique=true )}
     * )
     */
     private $paysAcquereur;
     /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Pays")
     * @ORM\JoinTable(name="amorcage_retrouve_en",
     *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="pays_id", referencedColumnName="id", unique=true )}
     * )
     */
     private $retrouveEn;
     
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="copieExistante", type="string", length=255)
     */
    private $copieExistante;

     /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="fonctionnement", type="string", length=255)
     */
     private $fonctionnement;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="conditionnementQteEmballage", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $conditionnementQteEmballage;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="coupComplet", type="boolean")
     */
    private $coupComplet;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="conditionnementMarquageEmballage", type="string", length=255)
     */
    private $conditionnementMarquageEmballage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementDimEmballageHaut", type="float")
     */
    private $conditionnementDimEmballageHaut;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementDimEmballageLarg", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $conditionnementDimEmballageLarg;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementDimEmballageLong", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $conditionnementDimEmballageLong;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementVolumeEmballage", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $conditionnementVolumeEmballage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementPoidsEmballage", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $conditionnementPoidsEmballage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementPoidsTotal", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $conditionnementPoidsTotal;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementTempStockMin", type="float")
     */
    private $conditionnementTempStockMin;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementTempStockMax", type="float")
     */
    private $conditionnementTempStockMax;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="conditionnementTempUtilMin", type="float")
     */
    private $conditionnementTempUtilMin;

    /**
    * @var float
    *
    * @ORM\Column(nullable=true, name="conditionnementTempUtilMax", type="float")
    */
    private $conditionnementTempUtilMax;
    /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Emballage")
    * @ORM\JoinTable(name="amorcage_emballage",
    *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="emballage_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $conditionnementTypeEmballage;
    /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Cloison")
    * @ORM\JoinTable(name="amorcage_cloison",
    *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="cloison_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $conditionnementTypeCloisonnement;
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\ClasseDangerStockage")
    */
    private $conditionnementClasseDangerStockage;
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GroupeComptabiliteStockage")
    */
    private $conditionnementGroupeComptabiliteStockage;
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\DREP")
    */
    private $DREP;
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\DRAM")
    */
    private $DRAM;

    /**
    * @var string
    *
    * @ORM\Column(nullable=true, name="lanceur", type="text")
    */
    private $lanceur;
    
   /**
    * @var string
    *
    * @ORM\Column(nullable=true, name="commentaireCharg", type="text")
    */
    private $commentaireCharg;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="historique", type="text")
     */
    private $historique;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="securite", type="text")
     */
    private $securite;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="dementelement", type="text")
     */
    private $dementelement;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="NEDE", type="string", length=255)
     */
    private $NEDE;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="demilitarisationConnue", type="boolean")
     */
    private $demilitarisationConnue;

    /**
    * @var string
    *
    * @ORM\Column(nullable=true, name="remarques", type="text")
    */
    private $remarques;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="performances", type="string", length=255)
     */
    private $performances;
    
        /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="nomUsine", type="string", length=255)
     */
    private $nomUsine;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="codeUsine", type="string", length=255)
     */
    private $codeUsine;
    
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    */
    private $createurFiche;
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    */
    private $modificateurFiche;
    /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\OrigineInfos")
    * @ORM\JoinTable(name="amorcage_origineinfos",
    *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="origineinfos_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $origineInfos;
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FiabiliteSource")
    */
    private $fiabiliteSource;
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CoherenceInformation")
    */
    private $coherenceInformation;
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    */
    private $validateur;

    /**
    * @var \DateTime
    *
    * @ORM\Column(nullable=true, name="dateCreation", type="datetime")
    */
    private $dateCreation;

    /**
    * @var \DateTime
    *
    * @ORM\Column(nullable=true, name="dateMAJ", type="datetime")
    */
    private $dateMAJ;

    /**
    * @var \DateTime
    *
    * @ORM\Column(nullable=true, name="dateValidation", type="datetime")
    */
    private $dateValidation;
    /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\UnitesMUNEX")
    * @ORM\JoinTable(name="amorcage_collectiontravail",
    *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="unitesmunex_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $collectionTravail;
    /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\UnitesMUNEX")
    * @ORM\JoinTable(name="amorcage_collectionterrain",
    *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="unitesmunex_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $collectionTerrain;
    
   /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\FuseeSecuExterne")
    * @ORM\JoinTable(name="amorcage_SecuriteExterne",
    *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="FuseeSecuExterne_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $SecuriteExterne;
    
   /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\FuseeSecuInterne")
    * @ORM\JoinTable(name="amorcage_SecuriteInterne",
    *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="FuseeSecuInterne_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $SecuriteInterne;

    /**
    * @var boolean
    *
    * @ORM\Column(nullable=true, name="rouge", type="boolean")
    */
    private $rouge;
	

    /**
     *  	 
     *  @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FuseeTypeAmorcage")
     */
    private $FuseeTypeAmorcage;
    
    /**
     *  	 
     *  @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FuseeTypeMunition")
     */
    private $FuseeTypeMunition;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poids", type="float")
     */
    private $poids;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UniteMasse")
     */
    private $UnitePoidsFusee;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureEnveloppe")
     */
    private $NaturePrincipaleCorps;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureEnveloppe")
     */
    private $NatureSecondaireCorps;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeMili", type="float")
     */
    private $poidsChargeMili;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeCalcule", type="float")
     */
    private $poidsChargeCalcule;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="PoidsMunCalcule", type="float")
     */
    private $PoidsMunCalcule;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="uniteSI", type="string", length=20)
     */
    private $uniteSI;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UnitesMasseVolume")
     */
    private $UniteQMA;
            
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeFusee")
     */
    private $FormeFusee;
    
        /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="Longueur", type="float")
     */
    private $LongueurFusee;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="Diametre", type="float")
     */
    private $DiametreFusee;
            
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="Largeur", type="float")
     */
    private $LargeurFusee;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
     */
    private $couleurPrincipale;
     
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
     */
    private $couleurSecondaire;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="MarquageFroidCorps", type="string", length=255)
     */
    private $MarquageFroidCorps;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="InscriptionCorps", type="string", length=255)
     */
    private $InscriptionCorps;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
     */
    private $CouleurInscCorps;
 
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
     */
    private $TypeInscCorps;
    
        /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="AntiDemontage", type="boolean")
     */
    private $AntiDemontage;
    
    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="AntiManipulation", type="boolean")
     */
    private $AntiManipulation;
    
    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="AntiDestruction", type="boolean")
     */
    private $AntiDestruction;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeAutoDestruction")
     */
    private $TypeAutoDestruction;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="DelaiAutodestruction", type="string", length=255)
     */
    private $DelaiAutodestruction;
    
    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="AutoNeutra", type="boolean")
     */
    private $AutoNeutra;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="DelaiAutoNeutralisation", type="string", length=255)
     */
    private $DelaiAutoNeutralisation;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FuseePositionnement")
     */
    private $Positionnement;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\AmorcageModeAction")
     */
    private $AmorcageModeAction;
    
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\AmorcageEnergie")
   * @ORM\JoinTable(name="amorcage_AmorcageEnergie",
   *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="Energie_id", referencedColumnName="id", unique=true )}
   * )
   */
    private $AmorcageEnergie;
    
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\AmorcageDeclenchement")
   * @ORM\JoinTable(name="amorcage_AmorcageDeclenchement",
   *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="Declenchements_id", referencedColumnName="id", unique=true )}
   * )
   */
    private $AmorcageDeclenchement;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FuseeTypeFonctionnement")
     */
    private $TypeFonctionnement;
    
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\AmorcageDelais")
   * @ORM\JoinTable(name="amorcage_AmorcageDelais",
   *  joinColumns={@ORM\JoinColumn(name="amorcage_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="Delais_id", referencedColumnName="id", unique=true )}
   * )
   */
    private $AmorcageDelais;
    
    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="IndicateurArmement", type="boolean")
     */
    private $IndicateurArmement;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FuseeTypeIndicateurArmement")
     */
    private $TypeIndicateurArmement;
    
        /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="PositionIndicateurArmement", type="string", length=255)
     */
    private $PositionIndicateurArmement;
    
    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="DispositifArmementExterieur", type="boolean")
     */
    private $DispositifArmementExterieur;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FuseeTypeDAE")
     */
    private $TypeDAE;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="MunitionsAssociees", type="string", length=255)
     */
    private $MunitionsAssociees;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="TravauxAttenuation", type="text")
     */
    private $TravauxAttenuation;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="NeutralisationDestruction", type="string", length=255)
     */
    private $NeutralisationDestruction;
    
        /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrAmorce", type="integer")
     */
    private $nbrAmorce;
    
        /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsAmorce", type="float")
     */
    private $poidsAmorce;
    
        /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrDetonateur", type="integer")
     */
    private $nbrDetonateur;
    
        /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsDeto", type="float")
     */
    private $poidsDeto;
    
        /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrRelais", type="integer")
     */
    private $nbrRelais;
    
        /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsRelais", type="float")
     */
    private $poidsRelais;
    
        /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="hauteurVisible", type="float")
     */
    private $hauteurVisible;
	
	/**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif", inversedBy="AmorcageExploAssocies", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ExplosifAssocies_munition", referencedColumnName="id")
    */
    private $ExplosifAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif", inversedBy="AmorcageExploAlter1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ExplosifAssociesAlter1_munition", referencedColumnName="id")
    */
    private $ExplosifAssociesAlter1;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif", inversedBy="AmorcageExploAlter2", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ExplosifAssociesAlter2_munition", referencedColumnName="id")
    */
    private $ExplosifAssociesAlter2;
    
    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nBExploAlter", type="integer")
     */
    private $nBExploAlter;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsExploAlter1", type="float")
     */
    private $poidsExploAlter1;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsExploAlter2", type="float")
     */
    private $poidsExploAlter2;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chimique", inversedBy="AmorcageChimAssocies", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ChimiqueAssocies_munition", referencedColumnName="id")
    */
    private $ChimiqueAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chimique", inversedBy="AmorcageChimAlter1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ChimiqueAssociesAlter1_munition", referencedColumnName="id")
    */
    private $ChimiqueAssociesAlter1;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chimique", inversedBy="AmorcageChimAlter2", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ChimiqueAssociesAlter2_munition", referencedColumnName="id")
    */
    private $ChimiqueAssociesAlter2;
    
    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nBChimAlter", type="integer")
     */
    private $nBChimAlter;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChim", type="float")
     */
    private $poidsChim;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChimAlter1", type="float")
     */
    private $poidsChimAlter1;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChimAlter2", type="float")
     */
    private $poidsChimAlter2;
    

    public function __construct()
    {
        $this->dateCreation=new \DateTime();
        $this->dateMAJ=new \DateTime();
        $this->rouge=false; //valeur par défaut on modifie après
        $this->statut=0;
        $this->pays = new \Doctrine\Common\Collections\ArrayCollection();
        $this->paysAcquereur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->retrouveEn = new \Doctrine\Common\Collections\ArrayCollection();
        $this->conditionnementTypeEmballage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->conditionnementTypeCloisonnement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->origineInfos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->collectionTravail = new \Doctrine\Common\Collections\ArrayCollection();
        $this->collectionTerrain = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SecuriteExterne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SecuriteInterne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->imagesMarquages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->imagesDimensions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AmorcageEnergie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AmorcageDeclenchement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AmorcageDelais = new \Doctrine\Common\Collections\ArrayCollection();
        $this->file = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function prepareSearch()
    {
        $this->dateCreation=null;
        $this->dateMAJ=null;
        $this->rouge=null; //valeur par défaut on modifie après
        $this->statut=null;
    }

    public function getNotNullData()
    {
        $data=[];
        foreach ($this as $key => $value) {
            if ($value instanceof \Doctrine\Common\Collections\ArrayCollection) {
                if (!$value->isEmpty()) {
                    $data[$key]=$value;
                }
            } else {
                if (!is_null($value) && !is_bool($value)) {
                    $data[$key]=$value;
                }
            }
        }
        return $data;
    }

    /**
    * On actualise la date de mise à jour
    *
    * @ORM\PreUpdate()
    */
    public function preUpdate()
    {
        $this->dateMAJ=new \DateTime();
    }

    public function fileName($calibre = null, $info = null)
    {
        $fileName = '';
        if (!$this->pays->isEmpty()) {
            foreach ($this->pays as $pays) {
                $fileName .= $pays->getCodes3().'-';
            }
        } else {
            $fileName .= 'UNK';
        }
        $fileName = rtrim($fileName, '-');
        $fileName .= '_'.strtoupper(substr($this->getClassName(), 0, 3));
        $fileName = rtrim($fileName, '_');
        if ($calibre !== null) {
            $fileName .= '_'.$calibre;
        }
        if ($this->nomine !== null) {
            $fileName .= '_'.$this->nomine;
        }
        if ($info !== null) {
            $fileName .= '_'.$info;
        }
        $fileName .= '_('.uniqid().')';

        return $fileName;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Amorcage
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateMAJ
     *
     * @param \DateTime $dateMAJ
     * @return Amorcage
     */
    public function setDateMAJ($dateMAJ)
    {
        $this->dateMAJ = $dateMAJ;

        return $this;
    }

    /**
     * Get dateMAJ
     *
     * @return \DateTime
     */
    public function getDateMAJ()
    {
        return $this->dateMAJ;
    }

    /**
     * Set dateValidation
     *
     * @param \DateTime $dateValidation
     * @return Amorcage
     */
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get dateValidation
     *
     * @return \DateTime
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set rouge
     *
     * @param boolean $rouge
     * @return Amorcage
     */
    public function setRouge($rouge)
    {
        $this->rouge = $rouge;

        return $this;
    }

    /**
     * Get rouge
     *
     * @return boolean
     */
    public function getRouge()
    {
        return $this->rouge;
    }


    /**
     * Set nomine
     *
     * @param string $nomine
     * @return Amorcage
     */
    public function setNomine($nomine)
    {
        $this->nomine = $nomine;

        return $this;
    }

    /**
     * Get nomine
     *
     * @return string
     */
    public function getNomine()
    {
        return $this->nomine;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Amorcage
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set denominationOTAN
     *
     * @param string $denominationOTAN
     * @return Amorcage
     */
    public function setDenominationOTAN($denominationOTAN)
    {
        $this->denominationOTAN = $denominationOTAN;

        return $this;
    }

    /**
     * Get denominationOTAN
     *
     * @return string
     */
    public function getDenominationOTAN()
    {
        return $this->denominationOTAN;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Amorcage
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set fonctionnement
     *
     * @param string $fonctionnement
     * @return Amorcage
     */
    public function setFonctionnement($fonctionnement)
    {
        $this->fonctionnement = $fonctionnement;

        return $this;
    }

    /**
     * Get fonctionnement
     *
     * @return string
     */
    public function getFonctionnement()
    {
        return $this->fonctionnement;
    }

    /**
     * Set conditionnementQteEmballage
     *
     * @param integer $conditionnementQteEmballage
     * @return Amorcage
     */
    public function setConditionnementQteEmballage($conditionnementQteEmballage)
    {
        $this->conditionnementQteEmballage = $conditionnementQteEmballage;

        return $this;
    }

    /**
     * Get conditionnementQteEmballage
     *
     * @return integer
     */
    public function getConditionnementQteEmballage()
    {
        return $this->conditionnementQteEmballage;
    }

    /**
     * Set coupComplet
     *
     * @param boolean $coupComplet
     * @return Amorcage
     */
    public function setCoupComplet($coupComplet)
    {
        $this->coupComplet = $coupComplet;

        return $this;
    }

    /**
     * Get coupComplet
     *
     * @return boolean
     */
    public function getCoupComplet()
    {
        return $this->coupComplet;
    }

    /**
     * Set conditionnementMarquageEmballage
     *
     * @param string $conditionnementMarquageEmballage
     * @return Amorcage
     */
    public function setConditionnementMarquageEmballage($conditionnementMarquageEmballage)
    {
        $this->conditionnementMarquageEmballage = $conditionnementMarquageEmballage;

        return $this;
    }

    /**
     * Get conditionnementMarquageEmballage
     *
     * @return string
     */
    public function getConditionnementMarquageEmballage()
    {
        return $this->conditionnementMarquageEmballage;
    }

    /**
     * Set conditionnementDimEmballageHaut
     *
     * @param float $conditionnementDimEmballageHaut
     * @return Amorcage
     */
    public function setConditionnementDimEmballageHaut($conditionnementDimEmballageHaut)
    {
        $this->conditionnementDimEmballageHaut = $conditionnementDimEmballageHaut;

        return $this;
    }

    /**
     * Get conditionnementDimEmballageHaut
     *
     * @return float
     */
    public function getConditionnementDimEmballageHaut()
    {
        return $this->conditionnementDimEmballageHaut;
    }

    /**
     * Set conditionnementDimEmballageLarg
     *
     * @param float $conditionnementDimEmballageLarg
     * @return Amorcage
     */
    public function setConditionnementDimEmballageLarg($conditionnementDimEmballageLarg)
    {
        $this->conditionnementDimEmballageLarg = $conditionnementDimEmballageLarg;

        return $this;
    }

    /**
     * Get conditionnementDimEmballageLarg
     *
     * @return float
     */
    public function getConditionnementDimEmballageLarg()
    {
        return $this->conditionnementDimEmballageLarg;
    }

    /**
     * Set conditionnementDimEmballageLong
     *
     * @param float $conditionnementDimEmballageLong
     * @return Amorcage
     */
    public function setConditionnementDimEmballageLong($conditionnementDimEmballageLong)
    {
        $this->conditionnementDimEmballageLong = $conditionnementDimEmballageLong;

        return $this;
    }

    /**
     * Get conditionnementDimEmballageLong
     *
     * @return float
     */
    public function getConditionnementDimEmballageLong()
    {
        return $this->conditionnementDimEmballageLong;
    }

    /**
     * Set conditionnementVolumeEmballage
     *
     * @param float $conditionnementVolumeEmballage
     * @return Amorcage
     */
    public function setConditionnementVolumeEmballage($conditionnementVolumeEmballage)
    {
        $this->conditionnementVolumeEmballage = $conditionnementVolumeEmballage;

        return $this;
    }

    /**
     * Get conditionnementVolumeEmballage
     *
     * @return float
     */
    public function getConditionnementVolumeEmballage()
    {
        return $this->conditionnementVolumeEmballage;
    }

    /**
     * Set conditionnementPoidsEmballage
     *
     * @param float $conditionnementPoidsEmballage
     * @return Amorcage
     */
    public function setConditionnementPoidsEmballage($conditionnementPoidsEmballage)
    {
        $this->conditionnementPoidsEmballage = $conditionnementPoidsEmballage;

        return $this;
    }

    /**
     * Get conditionnementPoidsEmballage
     *
     * @return float
     */
    public function getConditionnementPoidsEmballage()
    {
        return $this->conditionnementPoidsEmballage;
    }

    /**
     * Set conditionnementPoidsTotal
     *
     * @param float $conditionnementPoidsTotal
     * @return Amorcage
     */
    public function setConditionnementPoidsTotal($conditionnementPoidsTotal)
    {
        $this->conditionnementPoidsTotal = $conditionnementPoidsTotal;

        return $this;
    }

    /**
     * Get conditionnementPoidsTotal
     *
     * @return float
     */
    public function getConditionnementPoidsTotal()
    {
        return $this->conditionnementPoidsTotal;
    }

    /**
     * Set conditionnementTempStockMin
     *
     * @param float $conditionnementTempStockMin
     * @return Amorcage
     */
    public function setConditionnementTempStockMin($conditionnementTempStockMin)
    {
        $this->conditionnementTempStockMin = $conditionnementTempStockMin;

        return $this;
    }

    /**
     * Get conditionnementTempStockMin
     *
     * @return float
     */
    public function getConditionnementTempStockMin()
    {
        return $this->conditionnementTempStockMin;
    }

    /**
     * Set conditionnementTempStockMax
     *
     * @param float $conditionnementTempStockMax
     * @return Amorcage
     */
    public function setConditionnementTempStockMax($conditionnementTempStockMax)
    {
        $this->conditionnementTempStockMax = $conditionnementTempStockMax;

        return $this;
    }

    /**
     * Get conditionnementTempStockMax
     *
     * @return float
     */
    public function getConditionnementTempStockMax()
    {
        return $this->conditionnementTempStockMax;
    }

    /**
     * Set conditionnementTempUtilMin
     *
     * @param float $conditionnementTempUtilMin
     * @return Amorcage
     */
    public function setConditionnementTempUtilMin($conditionnementTempUtilMin)
    {
        $this->conditionnementTempUtilMin = $conditionnementTempUtilMin;

        return $this;
    }

    /**
     * Get conditionnementTempUtilMin
     *
     * @return float
     */
    public function getConditionnementTempUtilMin()
    {
        return $this->conditionnementTempUtilMin;
    }

    /**
     * Set conditionnementTempUtilMax
     *
     * @param float $conditionnementTempUtilMax
     * @return Amorcage
     */
    public function setConditionnementTempUtilMax($conditionnementTempUtilMax)
    {
        $this->conditionnementTempUtilMax = $conditionnementTempUtilMax;

        return $this;
    }

    /**
     * Get conditionnementTempUtilMax
     *
     * @return float
     */
    public function getConditionnementTempUtilMax()
    {
        return $this->conditionnementTempUtilMax;
    }

    /**
     * Set lanceur
     *
     * @param string $lanceur
     * @return Amorcage
     */
    public function setLanceur($lanceur)
    {
        $this->lanceur = $lanceur;

        return $this;
    }

    /**
     * Get lanceur
     *
     * @return string
     */
    public function getLanceur()
    {
        return $this->lanceur;
    }
    
    /**
     * Set commentaireCharg
     *
     * @param string $commentaireCharg
     * @return Amorcage
     */
    public function setCommentaireCharg($commentaireCharg)
    {
        $this->commentaireCharg = $commentaireCharg;

        return $this;
    }

    /**
     * Get commentaireCharg
     *
     * @return string
     */
    public function getCommentaireCharg()
    {
        return $this->commentaireCharg;
    }

    /**
     * Set historique
     *
     * @param string $historique
     * @return Amorcage
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;

        return $this;
    }

    /**
     * Get historique
     *
     * @return string
     */
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * Set securite
     *
     * @param string $securite
     * @return Amorcage
     */
    public function setSecurite($securite)
    {
        $this->securite = $securite;

        return $this;
    }

    /**
     * Get securite
     *
     * @return string
     */
    public function getSecurite()
    {
        return $this->securite;
    }

    /**
     * Set dementelement
     *
     * @param string $dementelement
     * @return Amorcage
     */
    public function setDementelement($dementelement)
    {
        $this->dementelement = $dementelement;

        return $this;
    }

    /**
     * Get dementelement
     *
     * @return string
     */
    public function getDementelement()
    {
        return $this->dementelement;
    }

    /**
     * Set NEDE
     *
     * @param string $nEDE
     * @return Amorcage
     */
    public function setNEDE($nEDE)
    {
        $this->NEDE = $nEDE;

        return $this;
    }

    /**
     * Get NEDE
     *
     * @return string
     */
    public function getNEDE()
    {
        return $this->NEDE;
    }

    /**
     * Set demilitarisationConnue
     *
     * @param boolean $demilitarisationConnue
     * @return Amorcage
     */
    public function setDemilitarisationConnue($demilitarisationConnue)
    {
        $this->demilitarisationConnue = $demilitarisationConnue;

        return $this;
    }

    /**
     * Get demilitarisationConnue
     *
     * @return boolean
     */
    public function getDemilitarisationConnue()
    {
        return $this->demilitarisationConnue;
    }

    /**
     * Set performances
     *
     * @param string $performances
     * @return Amorcage
     */
    public function setPerformances($performances)
    {
        $this->performances = $performances;

        return $this;
    }

    /**
     * Get performances
     *
     * @return string
     */
    public function getPerformances()
    {
        return $this->performances;
    }
    
    /**
     * Set nomUsine
     *
     * @param string $nomUsine
     * @return Amorcage
     */
    public function setNomUsine($nomUsine)
    {
        $this->nomUsine = $nomUsine;

        return $this;
    }

    /**
     * Get nomUsine
     *
     * @return string
     */
    public function getNomUsine()
    {
        return $this->nomUsine;
    }
    
    /**
     * Set codeUsine
     *
     * @param string $codeUsine
     * @return Amorcage
     */
    public function setCodeUsine($codeUsine)
    {
        $this->codeUsine = $codeUsine;

        return $this;
    }

    /**
     * Get codeUsine
     *
     * @return string
     */
    public function getCodeUsine()
    {
        return $this->codeUsine;
    }
    
    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Amorcage
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Add pays
     *
     * @param \FeodBundle\Entity\Pays $pays
     * @return Amorcage
     */
    public function addPay(\FeodBundle\Entity\Pays $pays)
    {
        $this->pays[] = $pays;

        return $this;
    }

    /**
     * Remove pays
     *
     * @param \FeodBundle\Entity\Pays $pays
     */
    public function removePay(\FeodBundle\Entity\Pays $pays)
    {
        $this->pays->removeElement($pays);
    }

    /**
     * Get pays
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Add paysAcquereur
     *
     * @param \FeodBundle\Entity\Pays $paysAcquereur
     * @return Amorcage
     */
    public function addPaysAcquereur(\FeodBundle\Entity\Pays $paysAcquereur)
    {
        $this->paysAcquereur[] = $paysAcquereur;

        return $this;
    }

    /**
     * Remove paysAcquereur
     *
     * @param \FeodBundle\Entity\Pays $paysAcquereur
     */
    public function removePaysAcquereur(\FeodBundle\Entity\Pays $paysAcquereur)
    {
        $this->paysAcquereur->removeElement($paysAcquereur);
    }

    /**
     * Get paysAcquereur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaysAcquereur()
    {
        return $this->paysAcquereur;
    }

    /**
     * Add retrouveEn
     *
     * @param \FeodBundle\Entity\Pays $retrouveEn
     * @return Amorcage
     */
    public function addRetrouveEn(\FeodBundle\Entity\Pays $retrouveEn)
    {
        $this->retrouveEn[] = $retrouveEn;

        return $this;
    }

    /**
     * Remove retrouveEn
     *
     * @param \FeodBundle\Entity\Pays $retrouveEn
     */
    public function removeRetrouveEn(\FeodBundle\Entity\Pays $retrouveEn)
    {
        $this->retrouveEn->removeElement($retrouveEn);
    }

    /**
     * Get retrouveEn
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRetrouveEn()
    {
        return $this->retrouveEn;
    }

    /**
     * Add conditionnementTypeEmballage
     *
     * @param \FeodBundle\Entity\Emballage $conditionnementTypeEmballage
     * @return Amorcage
     */
    public function addConditionnementTypeEmballage(\FeodBundle\Entity\Emballage $conditionnementTypeEmballage)
    {
        $this->conditionnementTypeEmballage[] = $conditionnementTypeEmballage;

        return $this;
    }

    /**
     * Remove conditionnementTypeEmballage
     *
     * @param \FeodBundle\Entity\Emballage $conditionnementTypeEmballage
     */
    public function removeConditionnementTypeEmballage(\FeodBundle\Entity\Emballage $conditionnementTypeEmballage)
    {
        $this->conditionnementTypeEmballage->removeElement($conditionnementTypeEmballage);
    }

    /**
     * Get conditionnementTypeEmballage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConditionnementTypeEmballage()
    {
        return $this->conditionnementTypeEmballage;
    }

    /**
     * Add conditionnementTypeCloisonnement
     *
     * @param \FeodBundle\Entity\Cloison $conditionnementTypeCloisonnement
     * @return Amorcage
     */
    public function addConditionnementTypeCloisonnement(\FeodBundle\Entity\Cloison $conditionnementTypeCloisonnement)
    {
        $this->conditionnementTypeCloisonnement[] = $conditionnementTypeCloisonnement;

        return $this;
    }

    /**
     * Remove conditionnementTypeCloisonnement
     *
     * @param \FeodBundle\Entity\Cloison $conditionnementTypeCloisonnement
     */
    public function removeConditionnementTypeCloisonnement(\FeodBundle\Entity\Cloison $conditionnementTypeCloisonnement)
    {
        $this->conditionnementTypeCloisonnement->removeElement($conditionnementTypeCloisonnement);
    }

    /**
     * Get conditionnementTypeCloisonnement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConditionnementTypeCloisonnement()
    {
        return $this->conditionnementTypeCloisonnement;
    }

    /**
     * Set conditionnementClasseDangerStockage
     *
     * @param \FeodBundle\Entity\ClasseDangerStockage $conditionnementClasseDangerStockage
     * @return Amorcage
     */
    public function setConditionnementClasseDangerStockage(
        \FeodBundle\Entity\ClasseDangerStockage $conditionnementClasseDangerStockage = null
    ) {
        $this->conditionnementClasseDangerStockage = $conditionnementClasseDangerStockage;

        return $this;
    }

    /**
     * Get conditionnementClasseDangerStockage
     *
     * @return \FeodBundle\Entity\ClasseDangerStockage
     */
    public function getConditionnementClasseDangerStockage()
    {
        return $this->conditionnementClasseDangerStockage;
    }

    /**
     * Set conditionnementGroupeComptabiliteStockage
     *
     * @param \FeodBundle\Entity\GroupeComptabiliteStockage $conditionnementGroupeComptabiliteStockage
     * @return Amorcage
     */
    public function setConditionnementGroupeComptabiliteStockage(\FeodBundle\Entity\GroupeComptabiliteStockage $conditionnementGroupeComptabiliteStockage = null)
    {
        $this->conditionnementGroupeComptabiliteStockage = $conditionnementGroupeComptabiliteStockage;

        return $this;
    }

    /**
     * Get conditionnementGroupeComptabiliteStockage
     *
     * @return \FeodBundle\Entity\GroupeComptabiliteStockage
     */
    public function getConditionnementGroupeComptabiliteStockage()
    {
        return $this->conditionnementGroupeComptabiliteStockage;
    }

    /**
     * Set DREP
     *
     * @param \FeodBundle\Entity\DREP $dREP
     * @return Amorcage
     */
    public function setDREP(\FeodBundle\Entity\DREP $dREP = null)
    {
        $this->DREP = $dREP;

        return $this;
    }

    /**
     * Get DREP
     *
     * @return \FeodBundle\Entity\DREP
     */
    public function getDREP()
    {
        return $this->DREP;
    }

    /**
     * Set DRAM
     *
     * @param \FeodBundle\Entity\DRAM $dRAM
     * @return Amorcage
     */
    public function setDRAM(\FeodBundle\Entity\DRAM $dRAM = null)
    {
        $this->DRAM = $dRAM;

        return $this;
    }

    /**
     * Get DRAM
     *
     * @return \FeodBundle\Entity\DRAM
     */
    public function getDRAM()
    {
        return $this->DRAM;
    }

    /**
     * Set createurFiche
     *
     * @param \UserBundle\Entity\User $createurFiche
     * @return Amorcage
     */
    public function setCreateurFiche(\UserBundle\Entity\User $createurFiche = null)
    {
        $this->createurFiche = $createurFiche;

        return $this;
    }

    /**
     * Get createurFiche
     *
     * @return \UserBundle\Entity\User
     */
    public function getCreateurFiche()
    {
        return $this->createurFiche;
    }

    /**
     * Set modificateurFiche
     *
     * @param \UserBundle\Entity\User $modificateurFiche
     * @return Amorcage
     */
    public function setModificateurFiche(\UserBundle\Entity\User $modificateurFiche = null)
    {
        $this->modificateurFiche = $modificateurFiche;

        return $this;
    }

    /**
     * Get modificateurFiche
     *
     * @return \UserBundle\Entity\User
     */
    public function getModificateurFiche()
    {
        return $this->modificateurFiche;
    }

    /**
     * Set fiabiliteSource
     *
     * @param \FeodBundle\Entity\FiabiliteSource $fiabiliteSource
     * @return Amorcage
     */
    public function setFiabiliteSource(\FeodBundle\Entity\FiabiliteSource $fiabiliteSource = null)
    {
        $this->fiabiliteSource = $fiabiliteSource;

        return $this;
    }

    /**
     * Get fiabiliteSource
     *
     * @return \FeodBundle\Entity\FiabiliteSource
     */
    public function getFiabiliteSource()
    {
        return $this->fiabiliteSource;
    }

    /**
     * Set coherenceInformation
     *
     * @param \FeodBundle\Entity\CoherenceInformation $coherenceInformation
     * @return Amorcage
     */
    public function setCoherenceInformation(\FeodBundle\Entity\CoherenceInformation $coherenceInformation = null)
    {
        $this->coherenceInformation = $coherenceInformation;

        return $this;
    }

    /**
     * Get coherenceInformation
     *
     * @return \FeodBundle\Entity\CoherenceInformation
     */
    public function getCoherenceInformation()
    {
        return $this->coherenceInformation;
    }

    /**
     * Set validateur
     *
     * @param \UserBundle\Entity\User $validateur
     * @return Amorcage
     */
    public function setValidateur(\UserBundle\Entity\User $validateur = null)
    {
        $this->validateur = $validateur;

        return $this;
    }

    /**
     * Get validateur
     *
     * @return \UserBundle\Entity\User
     */
    public function getValidateur()
    {
        return $this->validateur;
    }

    /**
     * Add collectionTravail
     *
     * @param \FeodBundle\Entity\UnitesMUNEX $collectionTravail
     * @return Amorcage
     */
    public function addCollectionTravail(\FeodBundle\Entity\UnitesMUNEX $collectionTravail)
    {
        $this->collectionTravail[] = $collectionTravail;

        return $this;
    }

    /**
     * Remove collectionTravail
     *
     * @param \FeodBundle\Entity\UnitesMUNEX $collectionTravail
     */
    public function removeCollectionTravail(\FeodBundle\Entity\UnitesMUNEX $collectionTravail)
    {
        $this->collectionTravail->removeElement($collectionTravail);
    }

    /**
     * Get collectionTravail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCollectionTravail()
    {
        return $this->collectionTravail;
    }

    /**
     * Add collectionTerrain
     *
     * @param \FeodBundle\Entity\UnitesMUNEX $collectionTerrain
     * @return Amorcage
     */
    public function addCollectionTerrain(\FeodBundle\Entity\UnitesMUNEX $collectionTerrain)
    {
        $this->collectionTerrain[] = $collectionTerrain;

        return $this;
    }

    /**
     * Remove collectionTerrain
     *
     * @param \FeodBundle\Entity\UnitesMUNEX $collectionTerrain
     */
    public function removeCollectionTerrain(\FeodBundle\Entity\UnitesMUNEX $collectionTerrain)
    {
        $this->collectionTerrain->removeElement($collectionTerrain);
    }

    /**
     * Get collectionTerrain
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCollectionTerrain()
    {
        return $this->collectionTerrain;
    }

    /**
     * Add SecuriteExterne
     *
     * @param \FeodBundle\Entity\FuseeSecuExterne $SecuriteExterne
     * @return Amorcage
     */
    public function addSecuriteExterne(\FeodBundle\Entity\FuseeSecuExterne $SecuriteExterne)
    {
        $this->SecuriteExterne[] = $SecuriteExterne;

        return $this;
    }

    /**
     * Remove SecuriteExterne
     *
     * @param \FeodBundle\Entity\FuseeSecuExterne $SecuriteExterne
     */
    public function removeSecuriteExterne(\FeodBundle\Entity\FuseeSecuExterne $SecuriteExterne)
    {
        $this->SecuriteExterne->removeElement($SecuriteExterne);
    }

    /**
     * Get SecuriteExterne
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSecuriteExterne()
    {
        return $this->SecuriteExterne;
    }
    
    /**
     * Add SecuriteInterne
     *
     * @param \FeodBundle\Entity\FuseeSecuInterne $SecuriteInterne
     * @return Amorcage
     */
    public function addSecuriteInterne(\FeodBundle\Entity\FuseeSecuInterne $SecuriteInterne)
    {
        $this->SecuriteInterne[] = $SecuriteInterne;

        return $this;
    }

    /**
     * Remove SecuriteInterne
     *
     * @param \FeodBundle\Entity\FuseeSecuInterne $SecuriteInterne
     */
    public function removeSecuriteInterne(\FeodBundle\Entity\FuseeSecuInterne $SecuriteInterne)
    {
        $this->SecuriteInterne->removeElement($SecuriteInterne);
    }

    /**
     * Get SecuriteInterne
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSecuriteInterne()
    {
        return $this->SecuriteInterne;
    }
    
   
    /**
     * Set statut
     *
     * @param integer $statut
     * @return Amorcage
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer
     */
    public function getStatut()
    {
        return $this->statut;
    }

    public function getClassName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add images
     *
     * @param \FeodBundle\Entity\AmorcageImage $images
     * @return Amorcage
     */
    public function addImage(\FeodBundle\Entity\AmorcageImage $images)
    {
        $this->images[] = $images;
        $images->setAmorcage($this);

        return $this;
    }

    /**
     * Remove images
     *
     * @param \FeodBundle\Entity\Image $images
     */
    public function removeImage(\FeodBundle\Entity\AmorcageImage $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set images
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImages(\Doctrine\Common\Collections\ArrayCollection $images)
    {
        foreach ($images as $image) {
            var_dump($image->getId());
            $image->setAmorcage($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->images = $images;
    }
    
    /**
     * Add imagesMarquages
     *
     * @param \FeodBundle\Entity\AmorcageImageMarquage $imagesMarquages
     * @return Amorcage
     */
    public function addImagesMarquage(\FeodBundle\Entity\AmorcageImageMarquage $imagesMarquages)
    {
        $this->imagesMarquages[] = $imagesMarquages;
        $imagesMarquages->setAmorcage($this);

        return $this;
    }

    /**
     * Remove imagesMarquages
     *
     * @param \FeodBundle\Entity\AmorcageImageMarquage $imagesMarquages
     */
    public function removeImagesMarquage(\FeodBundle\Entity\AmorcageImageMarquage $imagesMarquages)
    {
        $this->imagesMarquages->removeElement($imagesMarquages);
    }

    /**
     * Get imagesMarquages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagesMarquages()
    {
        return $this->imagesMarquages;
    }
    
    /**
     * Set imagesMarquages
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImagesMarquages(\Doctrine\Common\Collections\ArrayCollection $imagesMarquages)
    {
        foreach ($imagesMarquages as $image) {
            var_dump($image->getId());
            $image->setAmorcage($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesMarquages = $imagesMarquages;
    }

    /**
     * Add imagesFonctionnement
     *
     * @param \FeodBundle\Entity\AmorcageImageFonctionnement $imagesFonctionnement
     * @return Amorcage
     */
    public function addImagesFonctionnement(\FeodBundle\Entity\AmorcageImageFonctionnement $imagesFonctionnement)
    {
        $this->imagesFonctionnement[] = $imagesFonctionnement;
        $imagesFonctionnement->setAmorcage($this);

        return $this;
    }

    /**
     * Remove imagesFonctionnement
     *
     * @param \FeodBundle\Entity\AmorcageImageFonctionnement $imagesFonctionnement
     */
    public function removeImagesFonctionnement(\FeodBundle\Entity\AmorcageImageFonctionnement $imagesFonctionnement)
    {
        $this->imagesFonctionnement->removeElement($imagesFonctionnement);
    }

    /**
     * Get imagesFonctionnement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagesFonctionnement()
    {
        return $this->imagesFonctionnement;
    }
    
    /**
     * Set imagesFonctionnement
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImagesFonctionnement(\Doctrine\Common\Collections\ArrayCollection $imagesFonctionnement)
    {
        foreach ($imagesFonctionnement as $image) {
            var_dump($image->getId());
            $image->setAmorcage($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesFonctionnement = $imagesFonctionnement;
    }

    /**
     * Add imagesConditionnement
     *
     * @param \FeodBundle\Entity\AmorcageImageConditionnement $imagesConditionnement
     * @return Amorcage
     */
    public function addImagesConditionnement(\FeodBundle\Entity\AmorcageImageConditionnement $imagesConditionnement)
    {
        $this->imagesConditionnement[] = $imagesConditionnement;
        $imagesConditionnement->setAmorcage($this);

        return $this;
    }

    /**
     * Remove imagesConditionnement
     *
     * @param \FeodBundle\Entity\AmorcageImageConditionnement $imagesConditionnement
     */
    public function removeImagesConditionnement(\FeodBundle\Entity\AmorcageImageConditionnement $imagesConditionnement)
    {
        $this->imagesConditionnement->removeElement($imagesConditionnement);
    }

    /**
     * Get imagesConditionnement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagesConditionnement()
    {
        return $this->imagesConditionnement;
    }
    
    /**
     * Set imagesConditionnement
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImagesConditionnement(\Doctrine\Common\Collections\ArrayCollection $imagesConditionnement)
    {
        foreach ($imagesConditionnement as $image) {
            var_dump($image->getId());
            $image->setAmorcage($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesConditionnement = $imagesConditionnement;
    }

    /**
     * Add imagesVecteur
     *
     * @param \FeodBundle\Entity\AmorcageImageVecteur $imagesVecteur
     * @return Amorcage
     */
    public function addImagesVecteur(\FeodBundle\Entity\AmorcageImageVecteur $imagesVecteur)
    {
        $this->imagesVecteur[] = $imagesVecteur;
        $imagesVecteur->setAmorcage($this);

        return $this;
    }

    /**
     * Remove imagesVecteur
     *
     * @param \FeodBundle\Entity\AmorcageImageVecteur $imagesVecteur
     */
    public function removeImagesVecteur(\FeodBundle\Entity\AmorcageImageVecteur $imagesVecteur)
    {
        $this->imagesVecteur->removeElement($imagesVecteur);
    }

    /**
     * Get imagesVecteur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagesVecteur()
    {
        return $this->imagesVecteur;
    }
    
    /**
     * Set imagesVecteur
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImagesVecteur(\Doctrine\Common\Collections\ArrayCollection $imagesVecteur)
    {
        foreach ($imagesVecteur as $image) {
            var_dump($image->getId());
            $image->setAmorcage($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesVecteur = $imagesVecteur;
    }

    /**
     * Add imagesTraitement
     *
     * @param \FeodBundle\Entity\AmorcageImageTraitement $imagesTraitement
     * @return Amorcage
     */
    public function addImagesTraitement(\FeodBundle\Entity\AmorcageImageTraitement $imagesTraitement)
    {
        $this->imagesTraitement[] = $imagesTraitement;
        $imagesTraitement->setAmorcage($this);

        return $this;
    }

    /**
     * Remove imagesTraitement
     *
     * @param \FeodBundle\Entity\AmorcageImageTraitement $imagesTraitement
     */
    public function removeImagesTraitement(\FeodBundle\Entity\AmorcageImageTraitement $imagesTraitement)
    {
        $this->imagesTraitement->removeElement($imagesTraitement);
    }

    /**
     * Get imagesTraitement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagesTraitement()
    {
        return $this->imagesTraitement;
    }
    
    /**
     * Set imagesTraitement
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImagesTraitement(\Doctrine\Common\Collections\ArrayCollection $imagesTraitement)
    {
        foreach ($imagesTraitement as $image) {
            var_dump($image->getId());
            $image->setAmorcage($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesTraitement = $imagesTraitement;
    }


    /**
     * Add origineInfos
     *
     * @param \FeodBundle\Entity\OrigineInfos $origineInfos
     * @return Amorcage
     */
    public function addOrigineInfo(\FeodBundle\Entity\OrigineInfos $origineInfos)
    {
        $this->origineInfos[] = $origineInfos;

        return $this;
    }

    /**
     * Remove origineInfos
     *
     * @param \FeodBundle\Entity\OrigineInfos $origineInfos
     */
    public function removeOrigineInfo(\FeodBundle\Entity\OrigineInfos $origineInfos)
    {
        $this->origineInfos->removeElement($origineInfos);
    }

    /**
     * Get origineInfos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrigineInfos()
    {
        return $this->origineInfos;
    }

    /**
     * Add imagesDimensions
     *
     * @param \FeodBundle\Entity\AmorcageImageDimensions $imagesDimensions
     * @return Amorcage
     */
    public function addImagesDimension(\FeodBundle\Entity\AmorcageImageDimensions $imagesDimensions)
    {
        $this->imagesDimensions[] = $imagesDimensions;
        $imagesDimensions->setAmorcage($this);

        return $this;
    }

    /**
     * Remove imagesDimensions
     *
     * @param \FeodBundle\Entity\AmorcageImageDimensions $imagesDimensions
     */
    public function removeImagesDimension(\FeodBundle\Entity\AmorcageImageDimensions $imagesDimensions)
    {
        $this->imagesDimensions->removeElement($imagesDimensions);
    }

    /**
     * Get imagesDimensions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagesDimensions()
    {
        return $this->imagesDimensions;
    }
    
    /**
     * Set imagesDimensions
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImagesDimensions(\Doctrine\Common\Collections\ArrayCollection $imagesDimensions)
    {
        foreach ($imagesDimensions as $image) {
            var_dump($image->getId());
            $image->setAmorcage($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesDimensions = $imagesDimensions;
    }

    
    public function getFuseeTypeAmorcage() { return $this->FuseeTypeAmorcage; }
    public function setFuseeTypeAmorcage($var) { $this->FuseeTypeAmorcage = $var; }
    
    public function getFuseeTypeMunition() { return $this->FuseeTypeMunition; }
    public function setFuseeTypeMunition($var) { $this->FuseeTypeMunition = $var; }
        
        public function getUnitePoidsFusee() { return $this->UnitePoidsFusee; }
	public function setUnitePoidsFusee($var) { $this->UnitePoidsFusee = $var; }
        
        public function getNaturePrincipaleCorps() { return $this->NaturePrincipaleCorps; }
	public function setNaturePrincipaleCorps($var) { $this->NaturePrincipaleCorps = $var; }
        
        public function getNatureSecondaireCorps() { return $this->NatureSecondaireCorps; }
	public function setNatureSecondaireCorps($var) { $this->NatureSecondaireCorps = $var; }
        

        
        public function getPoidsMunCalcule() { return $this->PoidsMunCalcule; }
	public function setPoidsMunCalcule($var) { $this->PoidsMunCalcule = $var; }

        
        public function getUniteQMA() { return $this->UniteQMA; }
	public function setUniteQMA($var) { $this->UniteQMA = $var; }
        
        public function getFormeFusee() { return $this->FormeFusee; }
	public function setFormeFusee($var) { $this->FormeFusee = $var; }
        
        public function getLongueurFusee() { return $this->LongueurFusee; }
	public function setLongueurFusee($var) { $this->LongueurFusee = $var; }
        
        public function getLargeurFusee() { return $this->LargeurFusee; }
	public function setLargeurFusee($var) { $this->LargeurFusee = $var; }
        
        public function getDiametreFusee() { return $this->DiametreFusee; }
	public function setDiametreFusee($var) { $this->DiametreFusee = $var; }

        
        public function getMarquageFroidCorps() { return $this->MarquageFroidCorps; }
	public function setMarquageFroidCorps($var) { $this->MarquageFroidCorps = $var; }
        
        public function getInscriptionCorps() { return $this->InscriptionCorps; }
	public function setInscriptionCorps($var) { $this->InscriptionCorps = $var; }

        
        public function getCouleurInscCorps() { return $this->CouleurInscCorps; }
	public function setCouleurInscCorps($var) { $this->CouleurInscCorps = $var; }
        
        public function getTypeInscCorps() { return $this->TypeInscCorps; }
	public function setTypeInscCorps($var) { $this->TypeInscCorps = $var; }
        
        public function getAntiManipulation() { return $this->AntiManipulation; }
	public function setAntiManipulation($var) { $this->AntiManipulation = $var; }
        
        public function getAntiDemontage() { return $this->AntiDemontage; }
	public function setAntiDemontage($var) { $this->AntiDemontage = $var; }
    
        public function getAntiDestruction() { return $this->AntiDestruction; }
	public function setAntiDestruction($var) { $this->AntiDestruction = $var; }
        
        public function getTypeAutoDestruction() { return $this->TypeAutoDestruction; }
	public function setTypeAutoDestruction($var) { $this->TypeAutoDestruction = $var; }
        
        public function getDelaiAutodestruction() { return $this->DelaiAutodestruction; }
	public function setDelaiAutodestruction($var) { $this->DelaiAutodestruction = $var; }
        
        public function getAutoNeutra() { return $this->AutoNeutra; }
	public function setAutoNeutra($var) { $this->AutoNeutra = $var; }
        
        public function getDelaiAutoNeutralisation() { return $this->DelaiAutoNeutralisation; }
	public function setDelaiAutoNeutralisation($var) { $this->DelaiAutoNeutralisation = $var; }
        
        public function getPositionnement() { return $this->Positionnement; }
	public function setPositionnement($var) { $this->Positionnement = $var; }
         
        public function getTypeFonctionnement() { return $this->TypeFonctionnement; }
	public function setTypeFonctionnement($var) { $this->TypeFonctionnement = $var; }
        
        public function getIndicateurArmement() { return $this->IndicateurArmement; }
	public function setIndicateurArmement($var) { $this->IndicateurArmement = $var; }
        
        public function getTypeIndicateurArmement() { return $this->TypeIndicateurArmement; }
	public function setTypeIndicateurArmement($var) { $this->TypeIndicateurArmement = $var; }
        
        public function getPositionIndicateurArmement() { return $this->PositionIndicateurArmement; }
	public function setPositionIndicateurArmement($var) { $this->PositionIndicateurArmement = $var; }
        
        public function getDispositifArmementExterieur() { return $this->DispositifArmementExterieur; }
	public function setDispositifArmementExterieur($var) { $this->DispositifArmementExterieur = $var; }
        
        public function getTypeDAE() { return $this->TypeDAE; }
	public function setTypeDAE($var) { $this->TypeDAE = $var; }
        
        public function getMunitionsAssociees() { return $this->MunitionsAssociees; }
	public function setMunitionsAssociees($var) { $this->MunitionsAssociees = $var; }
        
        public function getTravauxAttenuation() { return $this->TravauxAttenuation; }
	public function setTravauxAttenuation($var) { $this->TravauxAttenuation = $var; }
        
        public function getNeutralisationDestruction() { return $this->NeutralisationDestruction; }
	public function setNeutralisationDestruction($var) { $this->NeutralisationDestruction = $var; }
        
    
        /**
     * Set nbrRelais
     *
     * @param integer $nbrRelais
     * @return Amorcage
     */
    public function setNbrRelais($nbrRelais)
    {
        $this->nbrRelais = $nbrRelais;

        return $this;
    }

    /**
     * Get nbrRelais
     *
     * @return integer
     */
    public function getNbrRelais()
    {
        return $this->nbrRelais;
    }
    
    /**
     * Set nbrAmorce
     *
     * @param integer $nbrAmorce
     * @return Amorcage
     */
    public function setNbrAmorce($nbrAmorce)
    {
        $this->nbrAmorce = $nbrAmorce;

        return $this;
    }

    /**
     * Get nbrAmorce
     *
     * @return integer
     */
    public function getNbrAmorce()
    {
        return $this->nbrAmorce;
    }
    
    /**
     * Set nbrDetonateur
     *
     * @param integer $nbrDetonateur
     * @return Amorcage
     */
    public function setNbrDetonateur($nbrDetonateur)
    {
        $this->nbrDetonateur = $nbrDetonateur;

        return $this;
    }

    /**
     * Get nbrDetonateur
     *
     * @return integer
     */
    public function getNbrDetonateur()
    {
        return $this->nbrDetonateur;
    }
    
        public function __toString()
    {
        return $this->nomine;
    }


    /**
     * Set amorcageId
     *
     * @param integer $amorcageId
     * @return Amorcage
     */
    public function setAmorcageId($amorcageId)
    {
        $this->amorcageId = $amorcageId;

        return $this;
    }

    /**
     * Get amorcageId
     *
     * @return integer 
     */
    public function getAmorcageId()
    {
        return $this->amorcageId;
    }

    /**
     * Set copieExistante
     *
     * @param string $copieExistante
     * @return Amorcage
     */
    public function setCopieExistante($copieExistante)
    {
        $this->copieExistante = $copieExistante;

        return $this;
    }

    /**
     * Get copieExistante
     *
     * @return string 
     */
    public function getCopieExistante()
    {
        return $this->copieExistante;
    }

    /**
     * Set poids
     *
     * @param float $poids
     * @return Amorcage
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set poidsChargeMili
     *
     * @param float $poidsChargeMili
     * @return Amorcage
     */
    public function setPoidsChargeMili($poidsChargeMili)
    {
        $this->poidsChargeMili = $poidsChargeMili;

        return $this;
    }

    /**
     * Get poidsChargeMili
     *
     * @return float 
     */
    public function getPoidsChargeMili()
    {
        return $this->poidsChargeMili;
    }

    /**
     * Set poidsChargeCalcule
     *
     * @param float $poidsChargeCalcule
     * @return Amorcage
     */
    public function setPoidsChargeCalcule($poidsChargeCalcule)
    {
        $this->poidsChargeCalcule = $poidsChargeCalcule;

        return $this;
    }

    /**
     * Get poidsChargeCalcule
     *
     * @return float 
     */
    public function getPoidsChargeCalcule()
    {
        return $this->poidsChargeCalcule;
    }

    /**
     * Set uniteSI
     *
     * @param string $uniteSI
     * @return Amorcage
     */
    public function setUniteSI($uniteSI)
    {
        $this->uniteSI = $uniteSI;

        return $this;
    }

    /**
     * Get uniteSI
     *
     * @return string 
     */
    public function getUniteSI()
    {
        return $this->uniteSI;
    }

    /**
     * Set poidsAmorce
     *
     * @param float $poidsAmorce
     * @return Amorcage
     */
    public function setPoidsAmorce($poidsAmorce)
    {
        $this->poidsAmorce = $poidsAmorce;

        return $this;
    }

    /**
     * Get poidsAmorce
     *
     * @return float 
     */
    public function getPoidsAmorce()
    {
        return $this->poidsAmorce;
    }

    /**
     * Set poidsDeto
     *
     * @param float $poidsDeto
     * @return Amorcage
     */
    public function setPoidsDeto($poidsDeto)
    {
        $this->poidsDeto = $poidsDeto;

        return $this;
    }

    /**
     * Get poidsDeto
     *
     * @return float 
     */
    public function getPoidsDeto()
    {
        return $this->poidsDeto;
    }

    /**
     * Set poidsRelais
     *
     * @param float $poidsRelais
     * @return Amorcage
     */
    public function setPoidsRelais($poidsRelais)
    {
        $this->poidsRelais = $poidsRelais;

        return $this;
    }

    /**
     * Get poidsRelais
     *
     * @return float 
     */
    public function getPoidsRelais()
    {
        return $this->poidsRelais;
    }

    /**
     * Set hauteurVisible
     *
     * @param float $hauteurVisible
     * @return Amorcage
     */
    public function setHauteurVisible($hauteurVisible)
    {
        $this->hauteurVisible = $hauteurVisible;

        return $this;
    }

    /**
     * Get hauteurVisible
     *
     * @return float 
     */
    public function getHauteurVisible()
    {
        return $this->hauteurVisible;
    }

    /**
     * Set couleurPrincipale
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurPrincipale
     * @return Amorcage
     */
    public function setCouleurPrincipale(\FeodBundle\Entity\CouleurFond $couleurPrincipale = null)
    {
        $this->couleurPrincipale = $couleurPrincipale;

        return $this;
    }

    /**
     * Get couleurPrincipale
     *
     * @return \FeodBundle\Entity\CouleurFond 
     */
    public function getCouleurPrincipale()
    {
        return $this->couleurPrincipale;
    }

    /**
     * Set couleurSecondaire
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurSecondaire
     * @return Amorcage
     */
    public function setCouleurSecondaire(\FeodBundle\Entity\CouleurFond $couleurSecondaire = null)
    {
        $this->couleurSecondaire = $couleurSecondaire;

        return $this;
    }

    /**
     * Get couleurSecondaire
     *
     * @return \FeodBundle\Entity\CouleurFond 
     */
    public function getCouleurSecondaire()
    {
        return $this->couleurSecondaire;
    }

    /**
     * Set nBExploAlter
     *
     * @param integer $nBExploAlter
     * @return Amorcage
     */
    public function setNBExploAlter($nBExploAlter)
    {
        $this->nBExploAlter = $nBExploAlter;

        return $this;
    }

    /**
     * Get nBExploAlter
     *
     * @return integer 
     */
    public function getNBExploAlter()
    {
        return $this->nBExploAlter;
    }

    /**
     * Set poidsExploAlter1
     *
     * @param float $poidsExploAlter1
     * @return Amorcage
     */
    public function setPoidsExploAlter1($poidsExploAlter1)
    {
        $this->poidsExploAlter1 = $poidsExploAlter1;

        return $this;
    }

    /**
     * Get poidsExploAlter1
     *
     * @return float 
     */
    public function getPoidsExploAlter1()
    {
        return $this->poidsExploAlter1;
    }

    /**
     * Set poidsExploAlter2
     *
     * @param float $poidsExploAlter2
     * @return Amorcage
     */
    public function setPoidsExploAlter2($poidsExploAlter2)
    {
        $this->poidsExploAlter2 = $poidsExploAlter2;

        return $this;
    }

    /**
     * Get poidsExploAlter2
     *
     * @return float 
     */
    public function getPoidsExploAlter2()
    {
        return $this->poidsExploAlter2;
    }

    /**
     * Set nBChimAlter
     *
     * @param integer $nBChimAlter
     * @return Amorcage
     */
    public function setNBChimAlter($nBChimAlter)
    {
        $this->nBChimAlter = $nBChimAlter;

        return $this;
    }

    /**
     * Get nBChimAlter
     *
     * @return integer 
     */
    public function getNBChimAlter()
    {
        return $this->nBChimAlter;
    }

    /**
     * Set poidsChim
     *
     * @param float $poidsChim
     * @return Amorcage
     */
    public function setPoidsChim($poidsChim)
    {
        $this->poidsChim = $poidsChim;

        return $this;
    }

    /**
     * Get poidsChim
     *
     * @return float 
     */
    public function getPoidsChim()
    {
        return $this->poidsChim;
    }

    /**
     * Set poidsChimAlter1
     *
     * @param float $poidsChimAlter1
     * @return Amorcage
     */
    public function setPoidsChimAlter1($poidsChimAlter1)
    {
        $this->poidsChimAlter1 = $poidsChimAlter1;

        return $this;
    }

    /**
     * Get poidsChimAlter1
     *
     * @return float 
     */
    public function getPoidsChimAlter1()
    {
        return $this->poidsChimAlter1;
    }

    /**
     * Set poidsChimAlter2
     *
     * @param float $poidsChimAlter2
     * @return Amorcage
     */
    public function setPoidsChimAlter2($poidsChimAlter2)
    {
        $this->poidsChimAlter2 = $poidsChimAlter2;

        return $this;
    }

    /**
     * Get poidsChimAlter2
     *
     * @return float 
     */
    public function getPoidsChimAlter2()
    {
        return $this->poidsChimAlter2;
    }

    /**
     * Set ExplosifAssocies
     *
     * @param \FeodBundle\Entity\Explosif $explosifAssocies
     * @return Amorcage
     */
    public function setExplosifAssocies(\FeodBundle\Entity\Explosif $explosifAssocies = null)
    {
        $this->ExplosifAssocies = $explosifAssocies;

        return $this;
    }

    /**
     * Get ExplosifAssocies
     *
     * @return \FeodBundle\Entity\Explosif 
     */
    public function getExplosifAssocies()
    {
        return $this->ExplosifAssocies;
    }

    /**
     * Set ExplosifAssociesAlter1
     *
     * @param \FeodBundle\Entity\Explosif $explosifAssociesAlter1
     * @return Amorcage
     */
    public function setExplosifAssociesAlter1(\FeodBundle\Entity\Explosif $explosifAssociesAlter1 = null)
    {
        $this->ExplosifAssociesAlter1 = $explosifAssociesAlter1;

        return $this;
    }

    /**
     * Get ExplosifAssociesAlter1
     *
     * @return \FeodBundle\Entity\Explosif 
     */
    public function getExplosifAssociesAlter1()
    {
        return $this->ExplosifAssociesAlter1;
    }

    /**
     * Set ExplosifAssociesAlter2
     *
     * @param \FeodBundle\Entity\Explosif $explosifAssociesAlter2
     * @return Amorcage
     */
    public function setExplosifAssociesAlter2(\FeodBundle\Entity\Explosif $explosifAssociesAlter2 = null)
    {
        $this->ExplosifAssociesAlter2 = $explosifAssociesAlter2;

        return $this;
    }

    /**
     * Get ExplosifAssociesAlter2
     *
     * @return \FeodBundle\Entity\Explosif 
     */
    public function getExplosifAssociesAlter2()
    {
        return $this->ExplosifAssociesAlter2;
    }

    /**
     * Set ChimiqueAssocies
     *
     * @param \FeodBundle\Entity\Chimique $chimiqueAssocies
     * @return Amorcage
     */
    public function setChimiqueAssocies(\FeodBundle\Entity\Chimique $chimiqueAssocies = null)
    {
        $this->ChimiqueAssocies = $chimiqueAssocies;

        return $this;
    }

    /**
     * Get ChimiqueAssocies
     *
     * @return \FeodBundle\Entity\Chimique 
     */
    public function getChimiqueAssocies()
    {
        return $this->ChimiqueAssocies;
    }

    /**
     * Set ChimiqueAssociesAlter1
     *
     * @param \FeodBundle\Entity\Chimique $chimiqueAssociesAlter1
     * @return Amorcage
     */
    public function setChimiqueAssociesAlter1(\FeodBundle\Entity\Chimique $chimiqueAssociesAlter1 = null)
    {
        $this->ChimiqueAssociesAlter1 = $chimiqueAssociesAlter1;

        return $this;
    }

    /**
     * Get ChimiqueAssociesAlter1
     *
     * @return \FeodBundle\Entity\Chimique 
     */
    public function getChimiqueAssociesAlter1()
    {
        return $this->ChimiqueAssociesAlter1;
    }

    /**
     * Set ChimiqueAssociesAlter2
     *
     * @param \FeodBundle\Entity\Chimique $chimiqueAssociesAlter2
     * @return Amorcage
     */
    public function setChimiqueAssociesAlter2(\FeodBundle\Entity\Chimique $chimiqueAssociesAlter2 = null)
    {
        $this->ChimiqueAssociesAlter2 = $chimiqueAssociesAlter2;

        return $this;
    }

    /**
     * Get ChimiqueAssociesAlter2
     *
     * @return \FeodBundle\Entity\Chimique 
     */
    public function getChimiqueAssociesAlter2()
    {
        return $this->ChimiqueAssociesAlter2;
    }

    /**
     * Add AmorcageEnergie
     *
     * @param \FeodBundle\Entity\AmorcageEnergie $amorcageEnergie
     * @return Amorcage
     */
    public function addAmorcageEnergie(\FeodBundle\Entity\AmorcageEnergie $amorcageEnergie)
    {
        $this->AmorcageEnergie[] = $amorcageEnergie;

        return $this;
    }

    /**
     * Remove AmorcageEnergie
     *
     * @param \FeodBundle\Entity\AmorcageEnergie $amorcageEnergie
     */
    public function removeAmorcageEnergie(\FeodBundle\Entity\AmorcageEnergie $amorcageEnergie)
    {
        $this->AmorcageEnergie->removeElement($amorcageEnergie);
    }

    /**
     * Get AmorcageEnergie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAmorcageEnergie()
    {
        return $this->AmorcageEnergie;
    }

    /**
     * Add AmorcageDeclenchement
     *
     * @param \FeodBundle\Entity\AmorcageDeclenchement $amorcageDeclenchement
     * @return Amorcage
     */
    public function addAmorcageDeclenchement(\FeodBundle\Entity\AmorcageDeclenchement $amorcageDeclenchement)
    {
        $this->AmorcageDeclenchement[] = $amorcageDeclenchement;

        return $this;
    }

    /**
     * Remove AmorcageDeclenchement
     *
     * @param \FeodBundle\Entity\AmorcageDeclenchement $amorcageDeclenchement
     */
    public function removeAmorcageDeclenchement(\FeodBundle\Entity\AmorcageDeclenchement $amorcageDeclenchement)
    {
        $this->AmorcageDeclenchement->removeElement($amorcageDeclenchement);
    }

    /**
     * Get AmorcageDeclenchement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAmorcageDeclenchement()
    {
        return $this->AmorcageDeclenchement;
    }

    /**
     * Set AmorcageModeAction
     *
     * @param \FeodBundle\Entity\AmorcageModeAction $amorcageModeAction
     * @return Amorcage
     */
    public function setAmorcageModeAction(\FeodBundle\Entity\AmorcageModeAction $amorcageModeAction = null)
    {
        $this->AmorcageModeAction = $amorcageModeAction;

        return $this;
    }

    /**
     * Get AmorcageModeAction
     *
     * @return \FeodBundle\Entity\AmorcageModeAction 
     */
    public function getAmorcageModeAction()
    {
        return $this->AmorcageModeAction;
    }

    /**
     * Add AmorcageDelais
     *
     * @param \FeodBundle\Entity\AmorcageDelais $amorcageDelais
     * @return Amorcage
     */
    public function addAmorcageDelai(\FeodBundle\Entity\AmorcageDelais $amorcageDelais)
    {
        $this->AmorcageDelais[] = $amorcageDelais;

        return $this;
    }

    /**
     * Remove AmorcageDelais
     *
     * @param \FeodBundle\Entity\AmorcageDelais $amorcageDelais
     */
    public function removeAmorcageDelai(\FeodBundle\Entity\AmorcageDelais $amorcageDelais)
    {
        $this->AmorcageDelais->removeElement($amorcageDelais);
    }

    /**
     * Get AmorcageDelais
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAmorcageDelais()
    {
        return $this->AmorcageDelais;
    }

    /**
     * Add imagesChargement
     *
     * @param \FeodBundle\Entity\AmorcageImageChargement $imagesChargement
     * @return Amorcage
     */
    public function addImagesChargement(\FeodBundle\Entity\AmorcageImageChargement $imagesChargement)
    {
        $this->imagesChargement[] = $imagesChargement;
		$imagesChargement->setAmorcage($this);

        return $this;
    }

    /**
     * Remove imagesChargement
     *
     * @param \FeodBundle\Entity\AmorcageImageChargement $imagesChargement
     */
    public function removeImagesChargement(\FeodBundle\Entity\AmorcageImageChargement $imagesChargement)
    {
        $this->imagesChargement->removeElement($imagesChargement);
    }

    /**
     * Get imagesChargement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagesChargement()
    {
        return $this->imagesChargement;
    }
	
	/**
     * Set imagesChargement
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImagesChargement(\Doctrine\Common\Collections\ArrayCollection $imagesChargement)
    {
        foreach ($imagesChargement as $image) {
            var_dump($image->getId());
            $image->setAmorcage($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesChargement = $imagesChargement;
    }
}
