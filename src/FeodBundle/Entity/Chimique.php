<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chimique
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\ChimiqueRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"chimique" = "Chimique"})
 *
 */
class Chimique
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
     * @ORM\Column(name="chimiqueId", type="integer", nullable=true)
     */
    private $chimiqueId;

    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\ChimiqueImage", mappedBy="chimique",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ChimiqueImage;
    
    /**
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Files", mappedBy="munition",
     *      cascade={"persist","merge","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $file;

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
     * @ORM\JoinTable(name="Chimique_Pays",
     *  joinColumns={@ORM\JoinColumn(name="Chimique_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="Pays_id", referencedColumnName="id", unique=true )}
     * )
     */
     private $pays;
     /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Pays")
     * @ORM\JoinTable(name="Chimique_Pays_acq",
     *  joinColumns={@ORM\JoinColumn(name="Chimique_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="Pays_id", referencedColumnName="id", unique=true )}
     * )
     */
     private $paysAcquereur;
     /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Pays")
     * @ORM\JoinTable(name="Chimique_retrouv_en",
     *  joinColumns={@ORM\JoinColumn(name="Chimique_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="Pays_id", referencedColumnName="id", unique=true )}
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
    * @var boolean
    *
    * @ORM\Column(nullable=true, name="rouge", type="boolean")
    */
    private $rouge;
    
    /**
     *  	 
     *  @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeChimique")
     */
    private $TypeChimique;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poids", type="float")
     */
    private $poids;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="ChimiquesFormule", type="string", length=255)
     */
    private $ChimiquesFormule;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Munition", mappedBy="ChimiqueAssocies", cascade={"persist","remove"})
     */
    private $MunitionChimAssocies;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Munition", mappedBy="ChimiqueAssociesAlter1", cascade={"persist","remove"})
     */
    private $MunitionChimAlter1;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Munition", mappedBy="ChimiqueAssociesAlter2", cascade={"persist","remove"})
     */
    private $MunitionChimAlter2;
	
	/**
     *
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Amorcage", mappedBy="ChimiqueAssocies", cascade={"persist","remove"})
     */
    private $AmorcageChimAssocies;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Amorcage", mappedBy="ChimiqueAssociesAlter1", cascade={"persist","remove"})
     */
    private $AmorcageChimAlter1;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="FeodBundle\Entity\Amorcage", mappedBy="ChimiqueAssociesAlter2", cascade={"persist","remove"})
     */
    private $AmorcageChimAlter2;
    

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
        $this->collectionTravail = new \Doctrine\Common\Collections\ArrayCollection();
        $this->collectionTerrain = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SecuriteExterne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SecuriteInterne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->files = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * Set chimiqueId
     *
     * @param integer $chimiqueId
     * @return Chimique
     */
    public function setChimiqueId($chimiqueId)
    {
        $this->chimiqueId = $chimiqueId;

        return $this;
    }

    /**
     * Get chimiqueId
     *
     * @return integer
     */
    public function getChimiqueId()
    {
        return $this->chimiqueId;
    }

    /**
     * Set nomine
     *
     * @param string $nomine
     * @return Chimique
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
     * Set denominationOTAN
     *
     * @param string $denominationOTAN
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * Add ChimiqueImage
     *
     * @param \FeodBundle\Entity\ChimiqueImage $ChimiqueImage
     * @return Chimique
     */
    public function addChimiqueImage(\FeodBundle\Entity\ChimiqueImage $ChimiqueImage)
    {
        $this->ChimiqueImage[] = $ChimiqueImage;
		$ChimiqueImage->setChimique($this);

        return $this;
    }

    /**
     * Remove ChimiqueImage
     *
     * @param \FeodBundle\Entity\ChimiqueImage $ChimiqueImage
     */
    public function removeChimiqueImage(\FeodBundle\Entity\ChimiqueImage $ChimiqueImage)
    {
        $this->ChimiqueImage->removeElement($ChimiqueImage);
    }

    /**
     * Get ChimiqueImage
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChimiqueImage()
    {
        return $this->ChimiqueImage;
    }
	
	/**
     * Set ChimiqueImage
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setChimiqueImage(\Doctrine\Common\Collections\ArrayCollection $ChimiqueImage)
    {
        foreach ($ChimiqueImage as $image) {
            var_dump($image->getId());
            $image->setChimique($this);
            $image->setFamille($this->getClassName());
        }
        exit;

        $this->ChimiqueImage = $ChimiqueImage;
    }
	
    /**
     * Add pays
     *
     * @param \FeodBundle\Entity\Pays $pays
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * @return Chimique
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
     * Set statut
     *
     * @param integer $statut
     * @return Chimique
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
     * Add file
     *
     * @param \FeodBundle\Entity\Files $file
     * @return Chimique
     */
    public function addFile(\FeodBundle\Entity\Files $file)
    {
        $this->file[] = $file;
        $file->setChimique($this);

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
            $file->setChimique($this);
            $file->setFamille($this->getClassName());
        }
        exit;

        $this->file = $file;
    }
    
    public function getTypeChimique() { return $this->TypeChimique; }
    public function setTypeChimique($var) { $this->TypeChimique = $var; }

    
        public function __toString()
    {
        return $this->nomine;
    }


    /**
     * Set copieExistante
     *
     * @param string $copieExistante
     * @return Chimique
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
     * @return Chimique
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
     * Set ChimiquesFormule
     *
     * @param string $chimiquesFormule
     * @return Chimique
     */
    public function setChimiquesFormule($chimiquesFormule)
    {
        $this->ChimiquesFormule = $chimiquesFormule;

        return $this;
    }

    /**
     * Get ChimiquesFormule
     *
     * @return string 
     */
    public function getChimiquesFormule()
    {
        return $this->ChimiquesFormule;
    }

    /**
     * Add MunitionChimAssocies
     *
     * @param \FeodBundle\Entity\Munition $munitionChimAssocies
     * @return Chimique
     */
    public function addMunitionChimAssocy(\FeodBundle\Entity\Munition $munitionChimAssocies)
    {
        $this->MunitionChimAssocies[] = $munitionChimAssocies;

        return $this;
    }

    /**
     * Remove MunitionChimAssocies
     *
     * @param \FeodBundle\Entity\Munition $munitionChimAssocies
     */
    public function removeMunitionChimAssocy(\FeodBundle\Entity\Munition $munitionChimAssocies)
    {
        $this->MunitionChimAssocies->removeElement($munitionChimAssocies);
    }

    /**
     * Get MunitionChimAssocies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMunitionChimAssocies()
    {
        return $this->MunitionChimAssocies;
    }

    /**
     * Add MunitionChimAlter1
     *
     * @param \FeodBundle\Entity\Munition $munitionChimAlter1
     * @return Chimique
     */
    public function addMunitionChimAlter1(\FeodBundle\Entity\Munition $munitionChimAlter1)
    {
        $this->MunitionChimAlter1[] = $munitionChimAlter1;

        return $this;
    }

    /**
     * Remove MunitionChimAlter1
     *
     * @param \FeodBundle\Entity\Munition $munitionChimAlter1
     */
    public function removeMunitionChimAlter1(\FeodBundle\Entity\Munition $munitionChimAlter1)
    {
        $this->MunitionChimAlter1->removeElement($munitionChimAlter1);
    }

    /**
     * Get MunitionChimAlter1
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMunitionChimAlter1()
    {
        return $this->MunitionChimAlter1;
    }

    /**
     * Add MunitionChimAlter2
     *
     * @param \FeodBundle\Entity\Munition $munitionChimAlter2
     * @return Chimique
     */
    public function addMunitionChimAlter2(\FeodBundle\Entity\Munition $munitionChimAlter2)
    {
        $this->MunitionChimAlter2[] = $munitionChimAlter2;

        return $this;
    }

    /**
     * Remove MunitionChimAlter2
     *
     * @param \FeodBundle\Entity\Munition $munitionChimAlter2
     */
    public function removeMunitionChimAlter2(\FeodBundle\Entity\Munition $munitionChimAlter2)
    {
        $this->MunitionChimAlter2->removeElement($munitionChimAlter2);
    }

    /**
     * Get MunitionChimAlter2
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMunitionChimAlter2()
    {
        return $this->MunitionChimAlter2;
    }

    /**
     * Add AmorcageChimAssocies
     *
     * @param \FeodBundle\Entity\Amorcage $amorcageChimAssocies
     * @return Chimique
     */
    public function addAmorcageChimAssocy(\FeodBundle\Entity\Amorcage $amorcageChimAssocies)
    {
        $this->AmorcageChimAssocies[] = $amorcageChimAssocies;

        return $this;
    }

    /**
     * Remove AmorcageChimAssocies
     *
     * @param \FeodBundle\Entity\Amorcage $amorcageChimAssocies
     */
    public function removeAmorcageChimAssocy(\FeodBundle\Entity\Amorcage $amorcageChimAssocies)
    {
        $this->AmorcageChimAssocies->removeElement($amorcageChimAssocies);
    }

    /**
     * Get AmorcageChimAssocies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAmorcageChimAssocies()
    {
        return $this->AmorcageChimAssocies;
    }

    /**
     * Add AmorcageChimAlter1
     *
     * @param \FeodBundle\Entity\Amorcage $amorcageChimAlter1
     * @return Chimique
     */
    public function addAmorcageChimAlter1(\FeodBundle\Entity\Amorcage $amorcageChimAlter1)
    {
        $this->AmorcageChimAlter1[] = $amorcageChimAlter1;

        return $this;
    }

    /**
     * Remove AmorcageChimAlter1
     *
     * @param \FeodBundle\Entity\Amorcage $amorcageChimAlter1
     */
    public function removeAmorcageChimAlter1(\FeodBundle\Entity\Amorcage $amorcageChimAlter1)
    {
        $this->AmorcageChimAlter1->removeElement($amorcageChimAlter1);
    }

    /**
     * Get AmorcageChimAlter1
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAmorcageChimAlter1()
    {
        return $this->AmorcageChimAlter1;
    }

    /**
     * Add AmorcageChimAlter2
     *
     * @param \FeodBundle\Entity\Amorcage $amorcageChimAlter2
     * @return Chimique
     */
    public function addAmorcageChimAlter2(\FeodBundle\Entity\Amorcage $amorcageChimAlter2)
    {
        $this->AmorcageChimAlter2[] = $amorcageChimAlter2;

        return $this;
    }

    /**
     * Remove AmorcageChimAlter2
     *
     * @param \FeodBundle\Entity\Amorcage $amorcageChimAlter2
     */
    public function removeAmorcageChimAlter2(\FeodBundle\Entity\Amorcage $amorcageChimAlter2)
    {
        $this->AmorcageChimAlter2->removeElement($amorcageChimAlter2);
    }

    /**
     * Get AmorcageChimAlter2
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAmorcageChimAlter2()
    {
        return $this->AmorcageChimAlter2;
    }
}
