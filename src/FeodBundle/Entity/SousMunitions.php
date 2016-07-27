<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * SousMunitions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\SousMunitionsRepository")
 */
class SousMunitions extends Munition
{
	
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeSousMunition")
	 */
	private $TypeSousMunition;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="Alias", type="string", length=255)
     */
    private $Alias;
    
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SousMunitionEmploi")
         * @ORM\JoinTable(name="sousmunitions_sousmunitionemploi",
         *  joinColumns={@ORM\JoinColumn(name="sousmunitions_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="sousmunitionemploi_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $SousMunitionEmploi;
        
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Initiation")
         * @ORM\JoinTable(name="sousmunitions_initiation",
         *  joinColumns={@ORM\JoinColumn(name="sousmunitions_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="initiation_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $Initiation;
        
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="AntiManipulation", type="boolean")
     */
    private $AntiManipulation;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="AutoDestruction", type="boolean")
     */
    private $AutoDestruction;
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="DelaiAutoDestruction", type="string", length=255)
     */
    private $DelaiAutoDestruction;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="AutoNeutralisation", type="boolean")
     */
    private $AutoNeutralisation;
    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="DelaiAutoNeutralisation", type="string", length=255)
     */
    private $DelaiAutoNeutralisation;
    
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureEnveloppe")
         * @ORM\JoinTable(name="sousmunitions_natureenveloppe",
         *  joinColumns={@ORM\JoinColumn(name="sousmunitions_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="natureenveloppe_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $NatureEnveloppe;
        
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\SousMunitionAccessoires")
	 */
	private $SousMunitionAccessoires;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\SousMunitionModeDeFonctionnement")
	 */
	private $ModeDeFonctionnement;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\SousMunitionPrincipeDeFonctionnement")
	 */
	private $PrincipeDeFonctionnement;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\SousMunitionPrincipeArmement")
	 */
	private $PrincipeArmement;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="IndicateurArmement", type="boolean")
     */
    private $IndicateurArmement;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\SousMunitionTypeIndicateur")
	 */
	private $TypeIndicateur;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\SousMunitionPositionIndicateur")
	 */
	private $PositionIndicateur;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="HauteurEjection", type="float")
     */
    private $HauteurEjection;
    
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SousMunitionStabilisation")
         * @ORM\JoinTable(name="sousmunitions_sousmunitionstabilisation",
         *  joinColumns={@ORM\JoinColumn(name="sousmunitions_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="sousmunitionstabilisation_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $Stabilisation;
        
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="SystemeGuidage", type="boolean")
     */
    private $SystemeGuidage;
    
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\TechnologieGuidage")
         * @ORM\JoinTable(name="sousmunitions_technologieguidage",
         *  joinColumns={@ORM\JoinColumn(name="sousmunitions_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="technologieguidage_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $TypeGuidage;
        
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="ChargeTandem", type="boolean")
     */
    private $ChargeTandem;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="PropulsionAdditionnelle", type="boolean")
     */
    private $PropulsionAdditionnelle;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="CopieExistante", type="string", length=255)
     */
    private $CopieExistante;
    
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureCharge")
         * @ORM\JoinTable(name="sousmunitions_naturecharge",
         *  joinColumns={@ORM\JoinColumn(name="sousmunitions_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="naturecharge_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $NatureChargementPrincipal;
        
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargeMili", type="float")
     */
    private $PoidsChargeMili;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UnitesMasseVolume")
	 */
	private $UniteQMA;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargeCalcule", type="float")
     */
    private $PoidsChargeCalcule;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="EjectionDeLaChargeMilitaire", type="boolean")
     */
    private $EjectionDeLaChargeMilitaire;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreDetonateur", type="integer")
     */
    private $NombreDetonateur;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreAmorce", type="integer")
     */
    private $NombreAmorce;

	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargePropu", type="float")
     */
    private $PoidsChargePropu;
    
        
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargeTandem", type="float")
     */
    private $PoidsChargeTandem;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeCorps")
	 */
	private $FormeGenerale;
        
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SousMunitionAspectExterieur")
         * @ORM\JoinTable(name="sousmunitions_sousmunitionaspectexterieur",
         *  joinColumns={@ORM\JoinColumn(name="sousmunitions_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="sousmunitionaspectexterieur_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $AspectExterieur;
        
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="HauteurNonLargue", type="float")
     */
    private $HauteurNonLargue;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurNonLargue", type="float")
     */
    private $LongueurNonLargue;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LargeurNonLargue", type="float")
     */
    private $LargeurNonLargue;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreNonLargue", type="float")
     */
    private $DiametreNonLargue;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsNonLargue", type="float")
     */
    private $PoidsNonLargue;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="HauteurLargue", type="float")
     */
    private $HauteurLargue;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurLargue", type="float")
     */
    private $LongueurLargue;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LargeurLargue", type="float")
     */
    private $LargeurLargue;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreLargue", type="float")
     */
    private $DiametreLargue;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="CouleurCorps", type="string", length=255)
     */
    private $CouleurCorps;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
    private $CouleurPrincipale;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
    private $CouleurSecondaire;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
	 */
	private $TypeDeMarquage;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageEnCouleur", type="string", length=255)
     */
    private $MarquageEnCouleur;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageAFroid", type="string", length=255)
     */
    private $MarquageAFroid;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageEnRelief", type="string", length=255)
     */
    private $MarquageEnRelief;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreDeBande", type="integer")
     */
    private $NombreDeBande;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $BandeCouleur1;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $BandeCouleur2;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $BandeCouleur3;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $BandeCouleur4;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
        private $CouleurStabilisateur;
        
          /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionFusee")
   * @ORM\JoinTable(name="sousmunitions_positionfusee",
   *  joinColumns={@ORM\JoinColumn(name="sousmunitions_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionfusee_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionFusee;
  
  	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\ModeStabilisation")
	 */
	private $ModeStabilisation;
        
        /**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeEmpennage")
	 */
	private $TypeEmpennage;
        
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="LongEmp", type="float")
     */
    private $LongEmp;
    
    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbAilettes", type="integer")
     */
    private $NbAilettes;
  
    	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeAilettes")
	 */
	private $TypeAilette;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeAilettes")
	 */
	private $FormeAilette;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongAilette", type="float")
     */
    private $LongAilette;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LargAilette", type="float")
     */
    private $LargAilette;
      /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="nomFusee1", type="string", length=255)
     */
    private $nomFusee1;
    

	public function getTypeSousMunition() { return $this->TypeSousMunition; }
	public function setTypeSousMunition($var) { $this->TypeSousMunition = $var; }
	
	public function getAlias() { return $this->Alias; }
	public function setAlias($var) { $this->Alias = $var; }
	
	public function getSousMunitionEmploi() { return $this->SousMunitionEmploi; }
	public function setSousMunitionEmploi($var) { $this->SousMunitionEmploi = $var; }
	
	public function getInitiation() { return $this->Initiation; }
	public function setInitiation($var) { $this->Initiation = $var; }
	
	public function getAntiManipulation() { return $this->AntiManipulation; }
	public function setAntiManipulation($var) { $this->AntiManipulation = $var; }
	
	public function getAutoDestruction() { return $this->AutoDestruction; }
	public function setAutoDestruction($var) { $this->AutoDestruction = $var; }
	
	public function getAutoNeutralisation() { return $this->AutoNeutralisation; }
	public function setAutoNeutralisation($var) { $this->AutoNeutralisation = $var; }
	
	public function getNatureEnveloppe() { return $this->NatureEnveloppe; }
	public function setNatureEnveloppe($var) { $this->NatureEnveloppe = $var; }
	
	public function getSousMunitionAccessoires() { return $this->SousMunitionAccessoires; }
	public function setSousMunitionAccessoires($var) { $this->SousMunitionAccessoires = $var; }
	
	public function getModeDeFonctionnement() { return $this->ModeDeFonctionnement; }
	public function setModeDeFonctionnement($var) { $this->ModeDeFonctionnement = $var; }
	
	public function getPrincipeDeFonctionnement() { return $this->PrincipeDeFonctionnement; }
	public function setPrincipeDeFonctionnement($var) { $this->PrincipeDeFonctionnement = $var; }
	
	public function getPrincipeArmement() { return $this->PrincipeArmement; }
	public function setPrincipeArmement($var) { $this->PrincipeArmement = $var; }
	
	public function getIndicateurArmement() { return $this->IndicateurArmement; }
	public function setIndicateurArmement($var) { $this->IndicateurArmement = $var; }
	
	public function getTypeIndicateur() { return $this->TypeIndicateur; }
	public function setTypeIndicateur($var) { $this->TypeIndicateur = $var; }
	
	public function getPositionIndicateur() { return $this->PositionIndicateur; }
	public function setPositionIndicateur($var) { $this->PositionIndicateur = $var; }
	
	public function getHauteurEjection() { return $this->HauteurEjection; }
	public function setHauteurEjection($var) { $this->HauteurEjection = $var; }
	
	public function getStabilisation() { return $this->Stabilisation; }
	public function setStabilisation($var) { $this->Stabilisation = $var; }
	
	public function getSystemeGuidage() { return $this->SystemeGuidage; }
	public function setSystemeGuidage($var) { $this->SystemeGuidage = $var; }
	
	public function getTypeGuidage() { return $this->TypeGuidage; }
	public function setTypeGuidage($var) { $this->TypeGuidage = $var; }
	
	public function getChargeTandem() { return $this->ChargeTandem; }
	public function setChargeTandem($var) { $this->ChargeTandem = $var; }
	
	public function getPropulsionAdditionnelle() { return $this->PropulsionAdditionnelle; }
	public function setPropulsionAdditionnelle($var) { $this->PropulsionAdditionnelle = $var; }
	
	public function getCopieExistante() { return $this->CopieExistante; }
	public function setCopieExistante($var) { $this->CopieExistante = $var; }
	
	public function getNatureChargementPrincipal() { return $this->NatureChargementPrincipal; }
	public function setNatureChargementPrincipal($var) { $this->NatureChargementPrincipal = $var; }
	
	public function getPoidsChargeMili() { return $this->PoidsChargeMili; }
	public function setPoidsChargeMili($var) { $this->PoidsChargeMili = $var; }
	
	public function getUniteQMA() { return $this->UniteQMA; }
	public function setUniteQMA($var) { $this->UniteQMA = $var; }
	
	public function getPoidsChargeCalcule() { return $this->PoidsChargeCalcule; }
	public function setPoidsChargeCalcule($var) { $this->PoidsChargeCalcule = $var; }
	
	public function getEjectionDeLaChargeMilitaire() { return $this->EjectionDeLaChargeMilitaire; }
	public function setEjectionDeLaChargeMilitaire($var) { $this->EjectionDeLaChargeMilitaire = $var; }
	
	public function getNombreDetonateur() { return $this->NombreDetonateur; }
	public function setNombreDetonateur($var) { $this->NombreDetonateur = $var; }
	
	public function getNombreAmorce() { return $this->NombreAmorce; }
	public function setNombreAmorce($var) { $this->NombreAmorce = $var; }
	
	public function getPoidsChargePropu() { return $this->PoidsChargePropu; }
	public function setPoidsChargePropu($var) { $this->PoidsChargePropu = $var; }
	
	public function getPoidsChargeTandem() { return $this->PoidsChargeTandem; }
	public function setPoidsChargeTandem($var) { $this->PoidsChargeTandem = $var; }
	
	public function getFormeGenerale() { return $this->FormeGenerale; }
	public function setFormeGenerale($var) { $this->FormeGenerale = $var; }
	
	public function getAspectExterieur() { return $this->AspectExterieur; }
	public function setAspectExterieur($var) { $this->AspectExterieur = $var; }
	
	public function getHauteurNonLargue() { return $this->HauteurNonLargue; }
	public function setHauteurNonLargue($var) { $this->HauteurNonLargue = $var; }
	
	public function getLongueurNonLargue() { return $this->LongueurNonLargue; }
	public function setLongueurNonLargue($var) { $this->LongueurNonLargue = $var; }
	
	public function getLargeurNonLargue() { return $this->LargeurNonLargue; }
	public function setLargeurNonLargue($var) { $this->LargeurNonLargue = $var; }
	
	public function getDiametreNonLargue() { return $this->DiametreNonLargue; }
	public function setDiametreNonLargue($var) { $this->DiametreNonLargue = $var; }
	
	public function getPoidsNonLargue() { return $this->PoidsNonLargue; }
	public function setPoidsNonLargue($var) { $this->PoidsNonLargue = $var; }
	
	public function getHauteurLargue() { return $this->HauteurLargue; }
	public function setHauteurLargue($var) { $this->HauteurLargue = $var; }
	
	public function getLongueurLargue() { return $this->LongueurLargue; }
	public function setLongueurLargue($var) { $this->LongueurLargue = $var; }
	
	public function getLargeurLargue() { return $this->LargeurLargue; }
	public function setLargeurLargue($var) { $this->LargeurLargue = $var; }
	
	public function getDiametreLargue() { return $this->DiametreLargue; }
	public function setDiametreLargue($var) { $this->DiametreLargue = $var; }
	
	public function getCouleurCorps() { return $this->CouleurCorps; }
	public function setCouleurCorps($var) { $this->CouleurCorps = $var; }
	
	public function getCouleurPrincipale() { return $this->CouleurPrincipale; }
	public function setCouleurPrincipale($var) { $this->CouleurPrincipale = $var; }
	
	public function getCouleurSecondaire() { return $this->CouleurSecondaire; }
	public function setCouleurSecondaire($var) { $this->CouleurSecondaire = $var; }
	
	public function getTypeDeMarquage() { return $this->TypeDeMarquage; }
	public function setTypeDeMarquage($var) { $this->TypeDeMarquage = $var; }
	
	public function getMarquageEnCouleur() { return $this->MarquageEnCouleur; }
	public function setMarquageEnCouleur($var) { $this->MarquageEnCouleur = $var; }
	
	public function getMarquageAFroid() { return $this->MarquageAFroid; }
	public function setMarquageAFroid($var) { $this->MarquageAFroid = $var; }
	
	public function getMarquageEnRelief() { return $this->MarquageEnRelief; }
	public function setMarquageEnRelief($var) { $this->MarquageEnRelief = $var; }
	
	public function getNombreDeBande() { return $this->NombreDeBande; }
	public function setNombreDeBande($var) { $this->NombreDeBande = $var; }
	
	public function getBandeCouleur1() { return $this->BandeCouleur1; }
	public function setBandeCouleur1($var) { $this->BandeCouleur1 = $var; }
	
	public function getBandeCouleur2() { return $this->BandeCouleur2; }
	public function setBandeCouleur2($var) { $this->BandeCouleur2 = $var; }
	
	public function getBandeCouleur3() { return $this->BandeCouleur3; }
	public function setBandeCouleur3($var) { $this->BandeCouleur3 = $var; }
	
	public function getBandeCouleur4() { return $this->BandeCouleur4; }
	public function setBandeCouleur4($var) { $this->BandeCouleur4 = $var; }
	
	public function getCouleurStabilisateur() { return $this->CouleurStabilisateur; }
	public function setCouleurStabilisateur($var) { $this->CouleurStabilisateur = $var; }
        
        public function getModeStabilisation() { return $this->ModeStabilisation; }
	public function setModeStabilisation($var) { $this->ModeStabilisation = $var; }
        
        public function getTypeEmpennage() { return $this->TypeEmpennage; }
	public function setTypeEmpennage($var) { $this->TypeEmpennage = $var; }
        
        public function getLongEmp() { return $this->LongEmp; }
	public function setLongEmp($var) { $this->LongEmp = $var; }
        
        public function getNbAilettes() { return $this->NbAilettes; }
	public function setNbAilettes($var) { $this->NbAilettes = $var; }
	
	public function getTypeAilette() { return $this->TypeAilette; }
	public function setTypeAilette($var) { $this->TypeAilette = $var; }
	
	public function getFormeAilette() { return $this->FormeAilette; }
	public function setFormeAilette($var) { $this->FormeAilette = $var; }
	
	public function getLongAilette() { return $this->LongAilette; }
	public function setLongAilette($var) { $this->LongAilette = $var; }
	
	public function getLargAilette() { return $this->LargAilette; }
	public function setLargAilette($var) { $this->LargAilette = $var; }
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->SousMunitionEmploi = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Initiation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->NatureEnveloppe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Stabilisation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->TypeGuidage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->NatureChargementPrincipal = new \Doctrine\Common\Collections\ArrayCollection();
        $this->NatureChargeTandem = new \Doctrine\Common\Collections\ArrayCollection();
        $this->AspectExterieur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positionFusee = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nomFusee1
     *
     * @param string $nomFusee1
     * @return SousMunitions
     */
    public function setNomFusee1($nomFusee1)
    {
        $this->nomFusee1 = $nomFusee1;

        return $this;
    }

    /**
     * Get nomFusee1
     *
     * @return string 
     */
    public function getNomFusee1()
    {
        return $this->nomFusee1;
    }

    /**
     * Add SousMunitionEmploi
     *
     * @param \FeodBundle\Entity\SousMunitionEmploi $sousMunitionEmploi
     * @return SousMunitions
     */
    public function addSousMunitionEmploi(\FeodBundle\Entity\SousMunitionEmploi $sousMunitionEmploi)
    {
        $this->SousMunitionEmploi[] = $sousMunitionEmploi;

        return $this;
    }

    /**
     * Remove SousMunitionEmploi
     *
     * @param \FeodBundle\Entity\SousMunitionEmploi $sousMunitionEmploi
     */
    public function removeSousMunitionEmploi(\FeodBundle\Entity\SousMunitionEmploi $sousMunitionEmploi)
    {
        $this->SousMunitionEmploi->removeElement($sousMunitionEmploi);
    }

    /**
     * Add Initiation
     *
     * @param \FeodBundle\Entity\Initiation $initiation
     * @return SousMunitions
     */
    public function addInitiation(\FeodBundle\Entity\Initiation $initiation)
    {
        $this->Initiation[] = $initiation;

        return $this;
    }

    /**
     * Remove Initiation
     *
     * @param \FeodBundle\Entity\Initiation $initiation
     */
    public function removeInitiation(\FeodBundle\Entity\Initiation $initiation)
    {
        $this->Initiation->removeElement($initiation);
    }

    /**
     * Add NatureEnveloppe
     *
     * @param \FeodBundle\Entity\NatureEnveloppe $natureEnveloppe
     * @return SousMunitions
     */
    public function addNatureEnveloppe(\FeodBundle\Entity\NatureEnveloppe $natureEnveloppe)
    {
        $this->NatureEnveloppe[] = $natureEnveloppe;

        return $this;
    }

    /**
     * Remove NatureEnveloppe
     *
     * @param \FeodBundle\Entity\NatureEnveloppe $natureEnveloppe
     */
    public function removeNatureEnveloppe(\FeodBundle\Entity\NatureEnveloppe $natureEnveloppe)
    {
        $this->NatureEnveloppe->removeElement($natureEnveloppe);
    }

    /**
     * Add Stabilisation
     *
     * @param \FeodBundle\Entity\SousMunitionStabilisation $stabilisation
     * @return SousMunitions
     */
    public function addStabilisation(\FeodBundle\Entity\SousMunitionStabilisation $stabilisation)
    {
        $this->Stabilisation[] = $stabilisation;

        return $this;
    }

    /**
     * Remove Stabilisation
     *
     * @param \FeodBundle\Entity\SousMunitionStabilisation $stabilisation
     */
    public function removeStabilisation(\FeodBundle\Entity\SousMunitionStabilisation $stabilisation)
    {
        $this->Stabilisation->removeElement($stabilisation);
    }

    /**
     * Add TypeGuidage
     *
     * @param \FeodBundle\Entity\TechnologieGuidage $typeGuidage
     * @return SousMunitions
     */
    public function addTypeGuidage(\FeodBundle\Entity\TechnologieGuidage $typeGuidage)
    {
        $this->TypeGuidage[] = $typeGuidage;

        return $this;
    }

    /**
     * Remove TypeGuidage
     *
     * @param \FeodBundle\Entity\TechnologieGuidage $typeGuidage
     */
    public function removeTypeGuidage(\FeodBundle\Entity\TechnologieGuidage $typeGuidage)
    {
        $this->TypeGuidage->removeElement($typeGuidage);
    }

    /**
     * Add NatureChargementPrincipal
     *
     * @param \FeodBundle\Entity\NatureCharge $natureChargementPrincipal
     * @return SousMunitions
     */
    public function addNatureChargementPrincipal(\FeodBundle\Entity\NatureCharge $natureChargementPrincipal)
    {
        $this->NatureChargementPrincipal[] = $natureChargementPrincipal;

        return $this;
    }

    /**
     * Remove NatureChargementPrincipal
     *
     * @param \FeodBundle\Entity\NatureCharge $natureChargementPrincipal
     */
    public function removeNatureChargementPrincipal(\FeodBundle\Entity\NatureCharge $natureChargementPrincipal)
    {
        $this->NatureChargementPrincipal->removeElement($natureChargementPrincipal);
    }

    /**
     * Add NatureChargeTandem
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeTandem
     * @return SousMunitions
     */
    public function addNatureChargeTandem(\FeodBundle\Entity\NatureChargeMili $natureChargeTandem)
    {
        $this->NatureChargeTandem[] = $natureChargeTandem;

        return $this;
    }

    /**
     * Remove NatureChargeTandem
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeTandem
     */
    public function removeNatureChargeTandem(\FeodBundle\Entity\NatureChargeMili $natureChargeTandem)
    {
        $this->NatureChargeTandem->removeElement($natureChargeTandem);
    }

    /**
     * Add AspectExterieur
     *
     * @param \FeodBundle\Entity\SousMunitionAspectExterieur $aspectExterieur
     * @return SousMunitions
     */
    public function addAspectExterieur(\FeodBundle\Entity\SousMunitionAspectExterieur $aspectExterieur)
    {
        $this->AspectExterieur[] = $aspectExterieur;

        return $this;
    }

    /**
     * Remove AspectExterieur
     *
     * @param \FeodBundle\Entity\SousMunitionAspectExterieur $aspectExterieur
     */
    public function removeAspectExterieur(\FeodBundle\Entity\SousMunitionAspectExterieur $aspectExterieur)
    {
        $this->AspectExterieur->removeElement($aspectExterieur);
    }

    /**
     * Add positionFusee
     *
     * @param \FeodBundle\Entity\PositionFusee $positionFusee
     * @return SousMunitions
     */
    public function addPositionFusee(\FeodBundle\Entity\PositionFusee $positionFusee)
    {
        $this->positionFusee[] = $positionFusee;

        return $this;
    }

    /**
     * Remove positionFusee
     *
     * @param \FeodBundle\Entity\PositionFusee $positionFusee
     */
    public function removePositionFusee(\FeodBundle\Entity\PositionFusee $positionFusee)
    {
        $this->positionFusee->removeElement($positionFusee);
    }

    /**
     * Get positionFusee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPositionFusee()
    {
        return $this->positionFusee;
    }

    /**
     * Set DelaiAutoDestruction
     *
     * @param string $delaiAutoDestruction
     * @return SousMunitions
     */
    public function setDelaiAutoDestruction($delaiAutoDestruction)
    {
        $this->DelaiAutoDestruction = $delaiAutoDestruction;

        return $this;
    }

    /**
     * Get DelaiAutoDestruction
     *
     * @return string 
     */
    public function getDelaiAutoDestruction()
    {
        return $this->DelaiAutoDestruction;
    }

    /**
     * Set DelaiAutoNeutralisation
     *
     * @param string $delaiAutoNeutralisation
     * @return SousMunitions
     */
    public function setDelaiAutoNeutralisation($delaiAutoNeutralisation)
    {
        $this->DelaiAutoNeutralisation = $delaiAutoNeutralisation;

        return $this;
    }

    /**
     * Get DelaiAutoNeutralisation
     *
     * @return string 
     */
    public function getDelaiAutoNeutralisation()
    {
        return $this->DelaiAutoNeutralisation;
    }
}
