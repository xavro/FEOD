<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Munition
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\MunitionRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"munition" = "Munition", "mines" = "Mines",
 *      "artillerie"="Artillerie", "mortier"="Mortier","missiles" = "Missiles", "roquettes" = "Roquettes", "bombes" = "Bombes", "grenades" = "Grenades", "sousMunitions" = "SousMunitions", "amorcage" = "Amorcage" , "minesMarines" = "MinesMarines"})
 *
 */
class Munition
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
     * @ORM\Column(name="munitionId", type="integer", nullable=true)
     */
    private $munitionId;

    /**
     * @Assert\Valid()
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Image", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $images;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ImageMarquages", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesMarquages;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ImageFonctionnement", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesFonctionnement;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ImageConditionnement", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesConditionnement;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ImageVecteur", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesVecteur;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ImageTraitement", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesTraitement;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ImageChargement", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesChargement;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ImageDimensions", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesDimensions;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ImageFusees", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $imagesFusees;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Files", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $file;

    /**
     * @Assert\Valid()
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Videos", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $videos;

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
     * @ORM\JoinTable(name="munition_pays",
     *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="pays_id", referencedColumnName="id", unique=true )}
     * )
     */
     private $pays;
     /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Pays")
     * @ORM\JoinTable(name="munition_pays_acq",
     *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="pays_id", referencedColumnName="id", unique=true )}
     * )
     */
     private $paysAcquereur;
     /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Pays")
     * @ORM\JoinTable(name="munition_retrouv_en",
     *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="pays_id", referencedColumnName="id", unique=true )}
     * )
     */
     private $retrouveEn;

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
    * @ORM\JoinTable(name="munition_emballage",
    *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="emballage_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $conditionnementTypeEmballage;
    /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Cloison")
    * @ORM\JoinTable(name="munition_cloison",
    *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
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
    * @ORM\JoinTable(name="munition_origineinfos",
    *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
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
    * @ORM\JoinTable(name="munition_collectiontravail",
    *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="unitesmunex_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $collectionTravail;
    /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\UnitesMUNEX")
    * @ORM\JoinTable(name="munition_collectionterrain",
    *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="unitesmunex_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $collectionTerrain;
    
   /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\FuseeSecuExterne")
    * @ORM\JoinTable(name="fusees_SecuriteExterne",
    *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="FuseeSecuExterne_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $SecuriteExterne;
    
   /**
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\FuseeSecuInterne")
    * @ORM\JoinTable(name="fusees_SecuriteInterne",
    *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
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
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsProjectile", type="float")
     */
    private $poidsProjectile;
	
	/**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsDouille", type="float")
     */
    private $poidsDouille;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\AmorcageAssocies", mappedBy="AmorcageAssocies", cascade={"persist","remove"})
     */
    private $AmorcageAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif", inversedBy="MunitionExploAssocies", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ExplosifAssocies_munition", referencedColumnName="id")
    */
    private $ExplosifAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif", inversedBy="MunitionExploAlter1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ExplosifAssociesAlter1_munition", referencedColumnName="id")
    */
    private $ExplosifAssociesAlter1;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif", inversedBy="MunitionExploAlter2", cascade={"persist"})
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
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chimique", inversedBy="MunitionChimAssocies", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ChimiqueAssocies_munition", referencedColumnName="id")
    */
    private $ChimiqueAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chimique", inversedBy="MunitionChimAlter1", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ChimiqueAssociesAlter1_munition", referencedColumnName="id")
    */
    private $ChimiqueAssociesAlter1;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chimique", inversedBy="MunitionChimAlter2", cascade={"persist"})
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
	
	/**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureChargeInerte")
     */
    private $natureChargeInerte;
	
	/**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeDispersion", type="float")
     */
    private $poidsChargeDispersion;
	
	/**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif")
     */
    private $natureChargeDispersion;
	
	 /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif")
   */
  private $natureChargePropu;
  
    /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif")
   */
  private $natureChargeTandem;
	
	/**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\EffetChargement")
     * @ORM\JoinTable(name="munition_effetchargement",
     *  joinColumns={@ORM\JoinColumn(name="munition_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="effetchargement_id", referencedColumnName="id", unique=true )}
     * )
     */
    private $effetChargement;

      /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="TravauxAttenuation", type="text")
     */
    private $TravauxAttenuation;


/********************* Constructor **************************/
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
        $this->AmorcageAssocies = new \Doctrine\Common\Collections\ArrayCollection();
		$this->effetChargement = new \Doctrine\Common\Collections\ArrayCollection();
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

	
/************************************** déclarations des fonctions *****************************************/
	
    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * Set munitionId
     *
     * @param integer $munitionId
     * @return Munition
     */
    public function setMunitionId($munitionId)
    {
        $this->munitionId = $munitionId;

        return $this;
    }

    /**
     * Get munitionId
     *
     * @return integer
     */
    public function getMunitionId()
    {
        return $this->munitionId;
    }

    /**
     * Set nomine
     *
     * @param string $nomine
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * @param \FeodBundle\Entity\Image $images
     * @return Munition
     */
    public function addImage(\FeodBundle\Entity\Image $images)
    {
        $this->images[] = $images;
        $images->setMunition($this);

        return $this;
    }

    /**
     * Remove images
     *
     * @param \FeodBundle\Entity\Image $images
     */
    public function removeImage(\FeodBundle\Entity\Image $images)
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
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->images = $images;
    }
    
    /**
     * Add imagesMarquages
     *
     * @param \FeodBundle\Entity\ImageMarquages $imagesMarquages
     * @return Munition
     */
    public function addImagesMarquage(\FeodBundle\Entity\ImageMarquages $imagesMarquages)
    {
        $this->imagesMarquages[] = $imagesMarquages;
        $imagesMarquages->setMunition($this);

        return $this;
    }

    /**
     * Remove imagesMarquages
     *
     * @param \FeodBundle\Entity\ImageMarquages $imagesMarquages
     */
    public function removeImagesMarquage(\FeodBundle\Entity\ImageMarquages $imagesMarquages)
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
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesMarquages = $imagesMarquages;
    }

    /**
     * Add imagesFonctionnement
     *
     * @param \FeodBundle\Entity\ImageFonctionnement $imagesFonctionnement
     * @return Munition
     */
    public function addImagesFonctionnement(\FeodBundle\Entity\ImageFonctionnement $imagesFonctionnement)
    {
        $this->imagesFonctionnement[] = $imagesFonctionnement;
        $imagesFonctionnement->setMunition($this);

        return $this;
    }

    /**
     * Remove imagesFonctionnement
     *
     * @param \FeodBundle\Entity\ImageFonctionnement $imagesFonctionnement
     */
    public function removeImagesFonctionnement(\FeodBundle\Entity\ImageFonctionnement $imagesFonctionnement)
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
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesFonctionnement = $imagesFonctionnement;
    }

    /**
     * Add imagesConditionnement
     *
     * @param \FeodBundle\Entity\ImageConditionnement $imagesConditionnement
     * @return Munition
     */
    public function addImagesConditionnement(\FeodBundle\Entity\ImageConditionnement $imagesConditionnement)
    {
        $this->imagesConditionnement[] = $imagesConditionnement;
        $imagesConditionnement->setMunition($this);

        return $this;
    }

    /**
     * Remove imagesConditionnement
     *
     * @param \FeodBundle\Entity\ImageConditionnement $imagesConditionnement
     */
    public function removeImagesConditionnement(\FeodBundle\Entity\ImageConditionnement $imagesConditionnement)
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
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesConditionnement = $imagesConditionnement;
    }

    /**
     * Add imagesVecteur
     *
     * @param \FeodBundle\Entity\ImageVecteur $imagesVecteur
     * @return Munition
     */
    public function addImagesVecteur(\FeodBundle\Entity\ImageVecteur $imagesVecteur)
    {
        $this->imagesVecteur[] = $imagesVecteur;
        $imagesVecteur->setMunition($this);

        return $this;
    }

    /**
     * Remove imagesVecteur
     *
     * @param \FeodBundle\Entity\ImageVecteur $imagesVecteur
     */
    public function removeImagesVecteur(\FeodBundle\Entity\ImageVecteur $imagesVecteur)
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
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesVecteur = $imagesVecteur;
    }

    /**
     * Add imagesTraitement
     *
     * @param \FeodBundle\Entity\ImageTraitement $imagesTraitement
     * @return Munition
     */
    public function addImagesTraitement(\FeodBundle\Entity\ImageTraitement $imagesTraitement)
    {
        $this->imagesTraitement[] = $imagesTraitement;
        $imagesTraitement->setMunition($this);

        return $this;
    }

    /**
     * Remove imagesTraitement
     *
     * @param \FeodBundle\Entity\ImageTraitement $imagesTraitement
     */
    public function removeImagesTraitement(\FeodBundle\Entity\ImageTraitement $imagesTraitement)
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
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesTraitement = $imagesTraitement;
    }
    
    /**
     * Add imagesChargement
     *
     * @param \FeodBundle\Entity\ImageChargement $imagesChargement
     * @return Munition
     */
    public function addImagesChargement(\FeodBundle\Entity\ImageChargement $imagesChargement)
    {
        $this->imagesChargement[] = $imagesChargement;
        $imagesChargement->setMunition($this);

        return $this;
    }

    /**
     * Remove imagesChargement
     *
     * @param \FeodBundle\Entity\ImageChargement $imagesChargement
     */
    public function removeImagesChargement(\FeodBundle\Entity\ImageChargement $imagesChargement)
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
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesChargement = $imagesChargement;
    }


    /**
     * Add origineInfos
     *
     * @param \FeodBundle\Entity\OrigineInfos $origineInfos
     * @return Munition
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
     * @param \FeodBundle\Entity\ImageDimensions $imagesDimensions
     * @return Munition
     */
    public function addImagesDimension(\FeodBundle\Entity\ImageDimensions $imagesDimensions)
    {
        $this->imagesDimensions[] = $imagesDimensions;
        $imagesDimensions->setMunition($this);

        return $this;
    }

    /**
     * Remove imagesDimensions
     *
     * @param \FeodBundle\Entity\ImageDimensions $imagesDimensions
     */
    public function removeImagesDimension(\FeodBundle\Entity\ImageDimensions $imagesDimensions)
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
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesDimensions = $imagesDimensions;
    }

    /**
     * Add imagesFusees
     *
     * @param \FeodBundle\Entity\ImageFusees $imagesFusees
     * @return Munition
     */
    public function addImagesFusee(\FeodBundle\Entity\ImageFusees $imagesFusees)
    {
        $this->imagesFusees[] = $imagesFusees;
        $imagesFusees->setMunition($this);

        return $this;
    }

    /**
     * Remove imagesFusees
     *
     * @param \FeodBundle\Entity\ImageFusees $imagesFusees
     */
    public function removeImagesFusee(\FeodBundle\Entity\ImageFusees $imagesFusees)
    {
        $this->imagesFusees->removeElement($imagesFusees);
    }

    /**
     * Get imagesFusees
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagesFusees()
    {
        return $this->imagesFusees;
    }
    
    
    /**
     * Set imagesFusees
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setImagesFusees(\Doctrine\Common\Collections\ArrayCollection $imagesFusees)
    {
        foreach ($imagesFusees as $image) {
            var_dump($image->getId());
            $image->setMunition($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->imagesFusees = $imagesFusees;
    }
	
	/**
     * Set poidsProjectile
     *
     * @param float $poidsProjectile
     * @return Munition
     */
    public function setPoidsProjectile($poidsProjectile)
    {
        $this->poidsProjectile = $poidsProjectile;

        return $this;
    }

    /**
     * Get poidsProjectile
     *
     * @return float
     */
    public function getPoidsProjectile()
    {
        return $this->poidsProjectile;
    }
	
	/**
     * Set poidsDouille
     *
     * @param float $poidsDouille
     * @return Munition
     */
    public function setPoidsDouille($poidsDouille)
    {
        $this->poidsDouille = $poidsDouille;

        return $this;
    }

    /**
     * Get poidsDouille
     *
     * @return float
     */
    public function getPoidsDouille()
    {
        return $this->poidsDouille;
    }
    
    /**
     * Add file
     *
     * @param \FeodBundle\Entity\Files $file
     * @return Munition
     */
    public function addFile(\FeodBundle\Entity\Files $file)
    {
        $this->file[] = $file;
        $file->setMunition($this);

        return $this;
    }

    /**
     * Remove file
     *
     * @param \FeodBundle\Entity\Files $file
     */
    public function removeFile(\FeodBundle\Entity\Files $file)
    {
        $this->file->removeElement($file);
    }

    /**
     * Get file
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFile()
    {
        return $this->file;
    }
    
    
    /**
     * Set file
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setFile(\Doctrine\Common\Collections\ArrayCollection $file)
    {
        foreach ($file as $file) {
            var_dump($file->getId());
            $file->setMunition($this);
            $file->setFamille($this->getClassName());
        }
        exit;

        $this->file = $file;
    }


    /**
     * Add AmorcageAssocies
     *
     * @param \FeodBundle\Entity\AmorcageAssocies $amorcageAssocies
     * @return Munition
     */
    public function addAmorcageAssocy(\FeodBundle\Entity\AmorcageAssocies $amorcageAssocies)
    {
        $this->AmorcageAssocies[] = $amorcageAssocies;
        $amorcageAssocies->setAmorcageAssocies($this);

        return $this;
    }

    /**
     * Remove AmorcageAssocies
     *
     * @param \FeodBundle\Entity\AmorcageAssocies $amorcageAssocies
     */
    public function removeAmorcageAssocy(\FeodBundle\Entity\AmorcageAssocies $amorcageAssocies)
    {
        $this->AmorcageAssocies->removeElement($amorcageAssocies);
    }

    /**
     * Get AmorcageAssocies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAmorcageAssocies()
    {
        return $this->AmorcageAssocies;
    }


    /**
     * Set ExplosifAssocies
     *
     * @param \FeodBundle\Entity\Explosif $explosifAssocies
     * @return Munition
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
     * @return Munition
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
     * @return Munition
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
     * Set nBExploAlter
     *
     * @param integer $nBExploAlter
     * @return Munition
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
     * Set nBChimAlter
     *
     * @param integer $nBChimAlter
     * @return Munition
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
     * Set ChimiqueAssociesAlter1
     *
     * @param \FeodBundle\Entity\Chimique $chimiqueAssociesAlter1
     * @return Munition
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
     * @return Munition
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
     * Set poidsExploAlter1
     *
     * @param float $poidsExploAlter1
     * @return Munition
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
     * @return Munition
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
     * Set poidsChimAlter1
     *
     * @param float $poidsChimAlter1
     * @return Munition
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
     * @return Munition
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
     * Set ChimiqueAssocies
     *
     * @param \FeodBundle\Entity\Chimique $chimiqueAssocies
     * @return Munition
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
     * Set poidsChim
     *
     * @param float $poidsChim
     * @return Munition
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
     * Set natureChargeInerte
     *
     * @param \FeodBundle\Entity\NatureChargeInerte $natureChargeInerte
     * @return Munition
     */
    public function setNatureChargeInerte(\FeodBundle\Entity\NatureChargeInerte $natureChargeInerte = null)
    {
        $this->natureChargeInerte = $natureChargeInerte;

        return $this;
    }

    /**
     * Get natureChargeInerte
     *
     * @return \FeodBundle\Entity\NatureChargeInerte 
     */
    public function getNatureChargeInerte()
    {
        return $this->natureChargeInerte;
    }
	
	/**
     * Set poidsChargeDispersion
     *
     * @param float $poidsChargeDispersion
     * @return Munition
     */
    public function setPoidsChargeDispersion($poidsChargeDispersion)
    {
        $this->poidsChargeDispersion = $poidsChargeDispersion;

        return $this;
    }

    /**
     * Get poidsChargeDispersion
     *
     * @return float
     */
    public function getPoidsChargeDispersion()
    {
        return $this->poidsChargeDispersion;
    }
	
	/**
     * Add natureChargeDispersion
     *
     * @param \FeodBundle\Entity\Explosif $natureChargeDispersion
     * @return Munition
     */
    public function addNatureChargeDispersion(\FeodBundle\Entity\Explosif $natureChargeDispersion)
    {
        $this->natureChargeDispersion[] = $natureChargeDispersion;

        return $this;
    }

    /**
     * Remove natureChargeDispersion
     *
     * @param \FeodBundle\Entity\Explosif $natureChargeDispersion
     */
    public function removeNatureChargeDispersion(\FeodBundle\Entity\Explosif $natureChargeDispersion)
    {
        $this->natureChargeDispersion->removeElement($natureChargeDispersion);
    }

    /**
     * Get natureChargeDispersion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNatureChargeDispersion()
    {
        return $this->natureChargeDispersion;
    }
	
	/**
     * Set natureChargeDispersion
     *
     * @param \FeodBundle\Entity\Explosif $natureChargeDispersion
     * @return Munition
     */
    public function setNatureChargeDispersion(\FeodBundle\Entity\Explosif $natureChargeDispersion = null)
    {
        $this->natureChargeDispersion = $natureChargeDispersion;

        return $this;
    }
	
	/**
     * Add effetChargement
     *
     * @param \FeodBundle\Entity\EffetChargement $effetChargement
     * @return Munition
     */
    public function addEffetChargement(\FeodBundle\Entity\EffetChargement $effetChargement)
    {
        $this->effetChargement[] = $effetChargement;

        return $this;
    }

    /**
     * Remove effetChargement
     *
     * @param \FeodBundle\Entity\EffetChargement $effetChargement
     */
    public function removeEffetChargement(\FeodBundle\Entity\EffetChargement $effetChargement)
    {
        $this->effetChargement->removeElement($effetChargement);
    }

    /**
     * Get effetChargement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEffetChargement()
    {
        return $this->effetChargement;
    }

    /**
     * Set natureChargePropu
     *
     * @param \FeodBundle\Entity\Explosif $natureChargePropu
     * @return Munition
     */
    public function setNatureChargePropu(\FeodBundle\Entity\Explosif $natureChargePropu = null)
    {
        $this->natureChargePropu = $natureChargePropu;

        return $this;
    }

    /**
     * Get natureChargePropu
     *
     * @return \FeodBundle\Entity\Explosif 
     */
    public function getNatureChargePropu()
    {
        return $this->natureChargePropu;
    }


    /**
     * Set natureChargeTandem
     *
     * @param \FeodBundle\Entity\Explosif $natureChargeTandem
     * @return Munition
     */
    public function setNatureChargeTandem(\FeodBundle\Entity\Explosif $natureChargeTandem = null)
    {
        $this->natureChargeTandem = $natureChargeTandem;

        return $this;
    }

    /**
     * Get natureChargeTandem
     *
     * @return \FeodBundle\Entity\Explosif 
     */
    public function getNatureChargeTandem()
    {
        return $this->natureChargeTandem;
    }

    /**
     * Set TravauxAttenuation
     *
     * @param string $travauxAttenuation
     * @return MinesMarines
     */
    public function setTravauxAttenuation($travauxAttenuation)
    {
        $this->TravauxAttenuation = $travauxAttenuation;

        return $this;
    }

    /**
     * Get TravauxAttenuation
     *
     * @return string 
     */
    public function getTravauxAttenuation()
    {
        return $this->TravauxAttenuation;
    }


    /**
     * Add videos
     *
     * @param \FeodBundle\Entity\Videos $videos
     * @return Munition
     */
    public function addVideo(\FeodBundle\Entity\Videos $videos)
    {
        $this->videos[] = $videos;
		$videos->SetMunition($this);

        return $this;
    }

    /**
     * Remove videos
     *
     * @param \FeodBundle\Entity\Videos $videos
     */
    public function removeVideo(\FeodBundle\Entity\Videos $videos)
    {
        $this->videos->removeElement($videos);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVideos()
    {
        return $this->videos;
    }
}
