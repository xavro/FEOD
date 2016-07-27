<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * Bombes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\BombesRepository")
 */
class Bombes extends Munition
{
	
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombeGroupe")
	 */
	private $FamilleBombe;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureEnveloppe")
	 */
	private $NatureEnveloppe;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="Poids", type="float")
     */
    private $Poids;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UniteMasse")
	 */
	private $UniteMasse;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsMunCalcule", type="float")
     */
    private $PoidsMunCalcule;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="SystemGuidage", type="boolean")
     */
    private $SystemGuidage;
    /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\TechnologieGuidage")
     * @ORM\JoinTable(name="bombes_technologieguidage",
     *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="technologieguidage_id", referencedColumnName="id", unique=true )}
     * )
     */
	private $TypeGuidage;
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
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureChargeMili")
     * @ORM\JoinTable(name="bombes_naturechargemili",
     *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="naturechargemili_id", referencedColumnName="id", unique=true )}
     * )    
     */
	private $NatureChargeMili;
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
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargeDispersion", type="float")
     */
    private $PoidsChargeDispersion;
    /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\EffetChargement")
     * @ORM\JoinTable(name="bombes_effetchargement",
     *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="effetchargement_id", referencedColumnName="id", unique=true )}
     * )    
     */
	private $EffetChargement;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="ChargeAdd", type="boolean")
     */
    private $ChargeAdd;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Relais", type="boolean")
     */
    private $Relais;
   /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\BombesNatureRelais")
     * @ORM\JoinTable(name="bombes_bombesnaturerelais",
     *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="bombesnaturerelais_id", referencedColumnName="id", unique=true )}
     * )    
     */
	private $NatureRelais;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="RelaisAppoints", type="boolean")
     */
    private $RelaisAppoints;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="ChargeTandem", type="boolean")
     */
    private $ChargeTandem;

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
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LgTotavecFusee", type="float")
     */
    private $LgTotavecFusee;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LgTotsansFusee", type="float")
     */
    private $LgTotsansFusee;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="Diametre", type="float")
     */
    private $Diametre;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombesFormeOgive")
	 */
	private $FormeOgive;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="PuitsDeFusee", type="boolean")
     */
    private $PuitsDeFusee;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="TypePuitsDeFusee", type="float")
     */
    private $TypePuitsDeFusee;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Bague", type="boolean")
     */
    private $Bague;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="TypeBague", type="float")
     */
    private $TypeBague;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombesSystemeOgive")
	 */
	private $SystemeOgive;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeCorps")
	 */
	private $FormeCorps;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombesTypeAccrochage")
	 */
	private $TypeAccrochage;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreAnneaux", type="integer")
     */
    private $NombreAnneaux;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DistanceAnneaux", type="float")
     */
    private $DistanceAnneaux;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LargeurAnneaux", type="float")
     */
    private $LargeurAnneaux;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DistRingCulot", type="float")
     */
    private $DistRingCulot;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombrePuitsLateraux", type="integer")
     */
    private $NombrePuitsLateraux;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeCulot")
	 */
	private $FormeCulot;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombesTypePlaque")
	 */
	private $TypePlaque;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombesTypeEmpennage")
	 */
	private $TypeEmpennage;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongEmpennage", type="float")
     */
    private $LongEmpennage;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NbAilettes", type="integer")
     */
    private $NbAilettes;
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
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombesTypeAilettes")
	 */
	private $TypeAilette;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombesFormeAilettes")
	 */
	private $FormeAilette;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Orifices", type="boolean")
     */
    private $Orifices;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreOrifice", type="integer")
     */
    private $NombreOrifice;
    /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionOrifice")
     * @ORM\JoinTable(name="bombes_positionorifice",
     *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="positionorifice_id", referencedColumnName="id", unique=true )}
     * )    
     */
	private $PositionOrifice;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DistJonction", type="float")
     */
    private $DistJonction;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\ElementsAerodynamiques")
	 */
	private $TypeElemAeroAV;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeElemAero")
	 */
	private $FormeElemAeroAV;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionElemAeroAV")
	 */
	private $PositionElemAeroAV;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurOgive;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombeSymboleCorpsOgives")
	 */
	private $SymboleOgive;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
	 */
	private $TypeInscOgive;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurInscOgive;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="InscriptionOgive", type="string", length=255)
     */
    private $InscriptionOgive;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageFroidOgive", type="string", length=255)
     */
    private $MarquageFroidOgive;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NbBandesOgive", type="integer")
     */
    private $NbBandesOgive;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeOgive1;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeOgive2;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeOgive3;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeOgive4;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurCorps;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\BombeSymboleCorpsOgives")
	 */
	private $SymboleCorps;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
	 */
	private $TypeInscCorps;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurInscCorps;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="InscriptionCorps", type="string", length=255)
     */
    private $InscriptionCorps;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageFroidCorps", type="string", length=255)
     */
    private $MarquageFroidCorps;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NbBandesCorps", type="integer")
     */
    private $NbBandesCorps;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeCorps1;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeCorps2;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeCorps3;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeCorps4;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurEmp;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="SymboleEmp", type="string", length=255)
     */
    private $SymboleEmp;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
	 */
	private $TypeInscEmp;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurInscEmp;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="InscriptionEmp", type="string", length=255)
     */
    private $InscriptionEmp;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageFroidBase", type="string", length=255)
     */
    private $MarquageFroidBase;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NbBandesEmp", type="integer")
     */
    private $NbBandesEmp;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeEmp1;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeEmp2;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeEmp3;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeEmp4;
    /**
     * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionFusee")
     * @ORM\JoinTable(name="bombes_positionfusee",
     *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="positionfusee_id", referencedColumnName="id", unique=true )}
     * )    
     */
	private $PositionFusees;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="TypeFusee", type="string", length=255)
     */
    private $TypeFusee;
	
/**
     * @var string
     *
     * @ORM\Column(nullable=true, name="nomAllumeur", type="string", length=255)
     */
    private $nomAllumeur;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="nomAllumeur1", type="string", length=255)
     */
    private $nomAllumeur1;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="nomAllumeur2", type="string", length=255)
     */
    private $nomAllumeur2;
	
	/**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrAmorce", type="integer")
     */
    private $nbrAmorce;
	
	/**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
    private $typeAllumeur;
    
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
    private $typeAllumeur1;
    
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
    private $typeAllumeur2;
	
	  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionFusee")
   * @ORM\JoinTable(name="bombes_positionallumeurorigine",
   *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionallumeurorigine_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionAllumeurOrigine;
  
    /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionFusee")
   * @ORM\JoinTable(name="bombes_positionallumeurorigine1",
   *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionallumeurorigine_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionAllumeurOrigine1;
  
    /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionFusee")
   * @ORM\JoinTable(name="bombes_positionallumeurorigine2",
   *  joinColumns={@ORM\JoinColumn(name="bombes_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionallumeurorigine_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionAllumeurOrigine2;
  
  	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="NomSousMunition", type="string", length=255)
     */
    private $NomSousMunition;
  
      /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->positionAllumeurOrigine = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positionAllumeurOrigine1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positionAllumeurOrigine2 = new \Doctrine\Common\Collections\ArrayCollection();
    }
  
	
	public function getFamilleBombe() { return $this->FamilleBombe; }
	public function setFamilleBombe($var) { $this->FamilleBombe = $var; }
	
	public function getNatureEnveloppe() { return $this->NatureEnveloppe; }
	public function setNatureEnveloppe($var) { $this->NatureEnveloppe = $var; }
	
	public function getPoids() { return $this->Poids; }
	public function setPoids($var) { $this->Poids = $var; }
	
	public function getUniteMasse() { return $this->UniteMasse; }
	public function setUniteMasse($var) { $this->UniteMasse = $var; }
	
	public function getPoidsMunCalcule() { return $this->PoidsMunCalcule; }
	public function setPoidsMunCalcule($var) { $this->PoidsMunCalcule = $var; }
	
	public function getSystemGuidage() { return $this->SystemGuidage; }
	public function setSystemGuidage($var) { $this->SystemGuidage = $var; }
	
	public function getTypeGuidage() { return $this->TypeGuidage; }
	public function setTypeGuidage($var) { $this->TypeGuidage = $var; }
	
	public function getPropulsionAdditionnelle() { return $this->PropulsionAdditionnelle; }
	public function setPropulsionAdditionnelle($var) { $this->PropulsionAdditionnelle = $var; }
	
	public function getCopieExistante() { return $this->CopieExistante; }
	public function setCopieExistante($var) { $this->CopieExistante = $var; }
	
	public function getNatureChargeMili() { return $this->NatureChargeMili; }
	public function setNatureChargeMili($var) { $this->NatureChargeMili = $var; }
	
	public function getPoidsChargeMili() { return $this->PoidsChargeMili; }
	public function setPoidsChargeMili($var) { $this->PoidsChargeMili = $var; }
	
	public function getUniteQMA() { return $this->UniteQMA; }
	public function setUniteQMA($var) { $this->UniteQMA = $var; }
	
	public function getPoidsChargeCalcule() { return $this->PoidsChargeCalcule; }
	public function setPoidsChargeCalcule($var) { $this->PoidsChargeCalcule = $var; }
	
	public function getPoidsChargeDispersion() { return $this->PoidsChargeDispersion; }
	public function setPoidsChargeDispersion($var) { $this->PoidsChargeDispersion = $var; }
	
	public function getEffetChargement() { return $this->EffetChargement; }
	public function setEffetChargement($var) { $this->EffetChargement = $var; }
	
	public function getChargeAdd() { return $this->ChargeAdd; }
	public function setChargeAdd($var) { $this->ChargeAdd = $var; }
	
	public function getRelais() { return $this->Relais; }
	public function setRelais($var) { $this->Relais = $var; }
	
	public function getNatureRelais() { return $this->NatureRelais; }
	public function setNatureRelais($var) { $this->NatureRelais = $var; }
	
	public function getRelaisAppoints() { return $this->RelaisAppoints; }
	public function setRelaisAppoints($var) { $this->RelaisAppoints = $var; }
	
	public function getChargeTandem() { return $this->ChargeTandem; }
	public function setChargeTandem($var) { $this->ChargeTandem = $var; }
	
	public function getPoidsChargePropu() { return $this->PoidsChargePropu; }
	public function setPoidsChargePropu($var) { $this->PoidsChargePropu = $var; }
	
	
	public function getPoidsChargeTandem() { return $this->PoidsChargeTandem; }
	public function setPoidsChargeTandem($var) { $this->PoidsChargeTandem = $var; }
	
	public function getLgTotavecFusee() { return $this->LgTotavecFusee; }
	public function setLgTotavecFusee($var) { $this->LgTotavecFusee = $var; }
	
	public function getLgTotsansFusee() { return $this->LgTotsansFusee; }
	public function setLgTotsansFusee($var) { $this->LgTotsansFusee = $var; }
	
	public function getDiametre() { return $this->Diametre; }
	public function setDiametre($var) { $this->Diametre = $var; }
	
	public function getFormeOgive() { return $this->FormeOgive; }
	public function setFormeOgive($var) { $this->FormeOgive = $var; }
	
	public function getPuitsDeFusee() { return $this->PuitsDeFusee; }
	public function setPuitsDeFusee($var) { $this->PuitsDeFusee = $var; }
	
	public function getTypePuitsDeFusee() { return $this->TypePuitsDeFusee; }
	public function setTypePuitsDeFusee($var) { $this->TypePuitsDeFusee = $var; }
	
	public function getBague() { return $this->Bague; }
	public function setBague($var) { $this->Bague = $var; }
	
	public function getTypeBague() { return $this->TypeBague; }
	public function setTypeBague($var) { $this->TypeBague = $var; }
	
	public function getSystemeOgive() { return $this->SystemeOgive; }
	public function setSystemeOgive($var) { $this->SystemeOgive = $var; }
	
	public function getFormeCorps() { return $this->FormeCorps; }
	public function setFormeCorps($var) { $this->FormeCorps = $var; }
	
	public function getTypeAccrochage() { return $this->TypeAccrochage; }
	public function setTypeAccrochage($var) { $this->TypeAccrochage = $var; }
	
	public function getNombreAnneaux() { return $this->NombreAnneaux; }
	public function setNombreAnneaux($var) { $this->NombreAnneaux = $var; }
	
	public function getDistanceAnneaux() { return $this->DistanceAnneaux; }
	public function setDistanceAnneaux($var) { $this->DistanceAnneaux = $var; }
	
	public function getLargeurAnneaux() { return $this->LargeurAnneaux; }
	public function setLargeurAnneaux($var) { $this->LargeurAnneaux = $var; }
	
	public function getDistRingCulot() { return $this->DistRingCulot; }
	public function setDistRingCulot($var) { $this->DistRingCulot = $var; }
	
	public function getNombrePuitsLateraux() { return $this->NombrePuitsLateraux; }
	public function setNombrePuitsLateraux($var) { $this->NombrePuitsLateraux = $var; }
	
	public function getFormeCulot() { return $this->FormeCulot; }
	public function setFormeCulot($var) { $this->FormeCulot = $var; }
	
	public function getTypePlaque() { return $this->TypePlaque; }
	public function setTypePlaque($var) { $this->TypePlaque = $var; }
	
	public function getTypeEmpennage() { return $this->TypeEmpennage; }
	public function setTypeEmpennage($var) { $this->TypeEmpennage = $var; }
	
	public function getLongEmpennage() { return $this->LongEmpennage; }
	public function setLongEmpennage($var) { $this->LongEmpennage = $var; }
	
	public function getNbAilettes() { return $this->NbAilettes; }
	public function setNbAilettes($var) { $this->NbAilettes = $var; }
	
	public function getLongAilette() { return $this->LongAilette; }
	public function setLongAilette($var) { $this->LongAilette = $var; }
	
	public function getLargAilette() { return $this->LargAilette; }
	public function setLargAilette($var) { $this->LargAilette = $var; }
	
	public function getTypeAilette() { return $this->TypeAilette; }
	public function setTypeAilette($var) { $this->TypeAilette = $var; }
	
	public function getFormeAilette() { return $this->FormeAilette; }
	public function setFormeAilette($var) { $this->FormeAilette = $var; }
	
	public function getOrifices() { return $this->Orifices; }
	public function setOrifices($var) { $this->Orifices = $var; }
	
	public function getNombreOrifice() { return $this->NombreOrifice; }
	public function setNombreOrifice($var) { $this->NombreOrifice = $var; }
	
	public function getPositionOrifice() { return $this->PositionOrifice; }
	public function setPositionOrifice($var) { $this->PositionOrifice = $var; }
	
	public function getDistJonction() { return $this->DistJonction; }
	public function setDistJonction($var) { $this->DistJonction = $var; }
	
	public function getTypeElemAeroAV() { return $this->TypeElemAeroAV; }
	public function setTypeElemAeroAV($var) { $this->TypeElemAeroAV = $var; }
	
	public function getFormeElemAeroAV() { return $this->FormeElemAeroAV; }
	public function setFormeElemAeroAV($var) { $this->FormeElemAeroAV = $var; }
	
	public function getPositionElemAeroAV() { return $this->PositionElemAeroAV; }
	public function setPositionElemAeroAV($var) { $this->PositionElemAeroAV = $var; }
	
	public function getCouleurOgive() { return $this->CouleurOgive; }
	public function setCouleurOgive($var) { $this->CouleurOgive = $var; }
	
	public function getSymboleOgive() { return $this->SymboleOgive; }
	public function setSymboleOgive($var) { $this->SymboleOgive = $var; }
	
	public function getTypeInscOgive() { return $this->TypeInscOgive; }
	public function setTypeInscOgive($var) { $this->TypeInscOgive = $var; }
	
	public function getCouleurInscOgive() { return $this->CouleurInscOgive; }
	public function setCouleurInscOgive($var) { $this->CouleurInscOgive = $var; }
	
	public function getInscriptionOgive() { return $this->InscriptionOgive; }
	public function setInscriptionOgive($var) { $this->InscriptionOgive = $var; }
	
	public function getMarquageFroidOgive() { return $this->MarquageFroidOgive; }
	public function setMarquageFroidOgive($var) { $this->MarquageFroidOgive = $var; }
	
	public function getNbBandesOgive() { return $this->NbBandesOgive; }
	public function setNbBandesOgive($var) { $this->NbBandesOgive = $var; }
	
	public function getCouleurBandeOgive1() { return $this->CouleurBandeOgive1; }
	public function setCouleurBandeOgive1($var) { $this->CouleurBandeOgive1 = $var; }
	
	public function getCouleurBandeOgive2() { return $this->CouleurBandeOgive2; }
	public function setCouleurBandeOgive2($var) { $this->CouleurBandeOgive2 = $var; }
	
	public function getCouleurBandeOgive3() { return $this->CouleurBandeOgive3; }
	public function setCouleurBandeOgive3($var) { $this->CouleurBandeOgive3 = $var; }
	
	public function getCouleurBandeOgive4() { return $this->CouleurBandeOgive4; }
	public function setCouleurBandeOgive4($var) { $this->CouleurBandeOgive4 = $var; }
	
	public function getCouleurCorps() { return $this->CouleurCorps; }
	public function setCouleurCorps($var) { $this->CouleurCorps = $var; }
	
	public function getSymboleCorps() { return $this->SymboleCorps; }
	public function setSymboleCorps($var) { $this->SymboleCorps = $var; }
	
	public function getTypeInscCorps() { return $this->TypeInscCorps; }
	public function setTypeInscCorps($var) { $this->TypeInscCorps = $var; }
	
	public function getCouleurInscCorps() { return $this->CouleurInscCorps; }
	public function setCouleurInscCorps($var) { $this->CouleurInscCorps = $var; }
	
	public function getInscriptionCorps() { return $this->InscriptionCorps; }
	public function setInscriptionCorps($var) { $this->InscriptionCorps = $var; }
	
	public function getMarquageFroidCorps() { return $this->MarquageFroidCorps; }
	public function setMarquageFroidCorps($var) { $this->MarquageFroidCorps = $var; }
	
	public function getNbBandesCorps() { return $this->NbBandesCorps; }
	public function setNbBandesCorps($var) { $this->NbBandesCorps = $var; }
	
	public function getCouleurBandeCorps1() { return $this->CouleurBandeCorps1; }
	public function setCouleurBandeCorps1($var) { $this->CouleurBandeCorps1 = $var; }
	
	public function getCouleurBandeCorps2() { return $this->CouleurBandeCorps2; }
	public function setCouleurBandeCorps2($var) { $this->CouleurBandeCorps2 = $var; }
	
	public function getCouleurBandeCorps3() { return $this->CouleurBandeCorps3; }
	public function setCouleurBandeCorps3($var) { $this->CouleurBandeCorps3 = $var; }
	
	public function getCouleurBandeCorps4() { return $this->CouleurBandeCorps4; }
	public function setCouleurBandeCorps4($var) { $this->CouleurBandeCorps4 = $var; }
	
	public function getCouleurEmp() { return $this->CouleurEmp; }
	public function setCouleurEmp($var) { $this->CouleurEmp = $var; }
	
	public function getSymboleEmp() { return $this->SymboleEmp; }
	public function setSymboleEmp($var) { $this->SymboleEmp = $var; }
	
	public function getTypeInscEmp() { return $this->TypeInscEmp; }
	public function setTypeInscEmp($var) { $this->TypeInscEmp = $var; }
	
	public function getCouleurInscEmp() { return $this->CouleurInscEmp; }
	public function setCouleurInscEmp($var) { $this->CouleurInscEmp = $var; }
	
	public function getInscriptionEmp() { return $this->InscriptionEmp; }
	public function setInscriptionEmp($var) { $this->InscriptionEmp = $var; }
	
	public function getMarquageFroidBase() { return $this->MarquageFroidBase; }
	public function setMarquageFroidBase($var) { $this->MarquageFroidBase = $var; }
	
	public function getNbBandesEmp() { return $this->NbBandesEmp; }
	public function setNbBandesEmp($var) { $this->NbBandesEmp = $var; }
	
	public function getCouleurBandeEmp1() { return $this->CouleurBandeEmp1; }
	public function setCouleurBandeEmp1($var) { $this->CouleurBandeEmp1 = $var; }
	
	public function getCouleurBandeEmp2() { return $this->CouleurBandeEmp2; }
	public function setCouleurBandeEmp2($var) { $this->CouleurBandeEmp2 = $var; }
	
	public function getCouleurBandeEmp3() { return $this->CouleurBandeEmp3; }
	public function setCouleurBandeEmp3($var) { $this->CouleurBandeEmp3 = $var; }
	
	public function getCouleurBandeEmp4() { return $this->CouleurBandeEmp4; }
	public function setCouleurBandeEmp4($var) { $this->CouleurBandeEmp4 = $var; }
	
	public function getPositionFusees() { return $this->PositionFusees; }
	public function setPositionFusees($var) { $this->PositionFusees = $var; }
	
	public function getTypeFusee() { return $this->TypeFusee; }
	public function setTypeFusee($var) { $this->TypeFusee = $var; }
	
	public function getNomSousMunition() { return $this->NomSousMunition; }
	public function setNomSousMunition($var) { $this->NomSousMunition = $var; }
	
	/**
     * Set nomAllumeur1
     *
     * @param string $nomAllumeur1
     * @return Mines
     */
    public function setNomAllumeur1($nomAllumeur1)
    {
        $this->nomAllumeur1 = $nomAllumeur1;

        return $this;
    }

    /**
     * Get nomAllumeur1
     *
     * @return string 
     */
    public function getNomAllumeur1()
    {
        return $this->nomAllumeur1;
    }

    /**
     * Set nomAllumeur2
     *
     * @param string $nomAllumeur2
     * @return Mines
     */
    public function setNomAllumeur2($nomAllumeur2)
    {
        $this->nomAllumeur2 = $nomAllumeur2;

        return $this;
    }

    /**
     * Get nomAllumeur2
     *
     * @return string 
     */
    public function getNomAllumeur2()
    {
        return $this->nomAllumeur2;
    }
	
	/**
     * Set nomAllumeur
     *
     * @param string $nomAllumeur
     * @return Mines
     */
    public function setNomAllumeur($nomAllumeur)
    {
        $this->nomAllumeur = $nomAllumeur;

        return $this;
    }

    /**
     * Get nomAllumeur
     *
     * @return string
     */
    public function getNomAllumeur()
    {
        return $this->nomAllumeur;
    }
	
	/**
     * Set nbrAmorce
     *
     * @param integer $nbrAmorce
     * @return Mines
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
     * Set typeAllumeur
     *
     * @param \FeodBundle\Entity\TypeFusee $typeAllumeur
     * @return Mines
     */
    public function setTypeAllumeur(\FeodBundle\Entity\TypeFusee $typeAllumeur = null)
    {
        $this->typeAllumeur = $typeAllumeur;

        return $this;
    }

    /**
     * Get typeAllumeur
     *
     * @return \FeodBundle\Entity\TypeFusee 
     */
    public function getTypeAllumeur()
    {
        return $this->typeAllumeur;
    }

    /**
     * Set typeAllumeur1
     *
     * @param \FeodBundle\Entity\TypeFusee $typeAllumeur1
     * @return Mines
     */
    public function setTypeAllumeur1(\FeodBundle\Entity\TypeFusee $typeAllumeur1 = null)
    {
        $this->typeAllumeur1 = $typeAllumeur1;

        return $this;
    }

    /**
     * Get typeAllumeur1
     *
     * @return \FeodBundle\Entity\TypeFusee 
     */
    public function getTypeAllumeur1()
    {
        return $this->typeAllumeur1;
    }

    /**
     * Set typeAllumeur2
     *
     * @param \FeodBundle\Entity\TypeFusee $typeAllumeur2
     * @return Mines
     */
    public function setTypeAllumeur2(\FeodBundle\Entity\TypeFusee $typeAllumeur2 = null)
    {
        $this->typeAllumeur2 = $typeAllumeur2;

        return $this;
    }

    /**
     * Get typeAllumeur2
     *
     * @return \FeodBundle\Entity\TypeFusee 
     */
    public function getTypeAllumeur2()
    {
        return $this->typeAllumeur2;
    }
	
	    /**
     * Add positionAllumeurOrigine
     *
     * @param \FeodBundle\Entity\PositionFusee $positionAllumeurOrigine
     * @return Mines
     */
    public function addPositionAllumeurOrigine(\FeodBundle\Entity\PositionFusee $positionAllumeurOrigine)
    {
        $this->positionAllumeurOrigine[] = $positionAllumeurOrigine;

        return $this;
    }

    /**
     * Remove positionAllumeurOrigine
     *
     * @param \FeodBundle\Entity\PositionFusee $positionAllumeurOrigine
     */
    public function removePositionAllumeurOrigine(\FeodBundle\Entity\PositionFusee $positionAllumeurOrigine)
    {
        $this->positionAllumeurOrigine->removeElement($positionAllumeurOrigine);
    }

    /**
     * Get positionAllumeurOrigine
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPositionAllumeurOrigine()
    {
        return $this->positionAllumeurOrigine;
    }

    /**
	 * Set positionAllumeurOrigine
	 *
     * @param \FeodBundle\Entity\PositionFusee $positionAllumeurOrigine
     */
    public function setPositionAllumeurOrigine($positionAllumeurOrigine)
    {
        $this->positionAllumeurOrigine = $positionAllumeurOrigine;
    }
	
	 /**
     * Add positionAllumeurOrigine1
     *
     * @param \FeodBundle\Entity\PositionFusee $positionAllumeurOrigine1
     * @return Mines
     */
    public function addPositionAllumeurOrigine1(\FeodBundle\Entity\PositionFusee $positionAllumeurOrigine1)
    {
        $this->positionAllumeurOrigine1[] = $positionAllumeurOrigine1;

        return $this;
    }

    /**
     * Remove positionAllumeurOrigine1
     *
     * @param \FeodBundle\Entity\PositionFusee $positionAllumeurOrigine1
     */
    public function removePositionAllumeurOrigine1(\FeodBundle\Entity\PositionFusee $positionAllumeurOrigine1)
    {
        $this->positionAllumeurOrigine1->removeElement($positionAllumeurOrigine1);
    }

    /**
     * Get positionAllumeurOrigine1
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPositionAllumeurOrigine1()
    {
        return $this->positionAllumeurOrigine1;
    }

    /**
     * Add positionAllumeurOrigine2
     *
     * @param \FeodBundle\Entity\PositionFusee $positionAllumeurOrigine2
     * @return Mines
     */
    public function addPositionAllumeurOrigine2(\FeodBundle\Entity\PositionFusee $positionAllumeurOrigine2)
    {
        $this->positionAllumeurOrigine2[] = $positionAllumeurOrigine2;

        return $this;
    }

    /**
     * Remove positionAllumeurOrigine2
     *
     * @param \FeodBundle\Entity\PositionFusee $positionAllumeurOrigine2
     */
    public function removePositionAllumeurOrigine2(\FeodBundle\Entity\PositionFusee $positionAllumeurOrigine2)
    {
        $this->positionAllumeurOrigine2->removeElement($positionAllumeurOrigine2);
    }

    /**
     * Get positionAllumeurOrigine2
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPositionAllumeurOrigine2()
    {
        return $this->positionAllumeurOrigine2;
    }
	
}