<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * Missiles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\MissilesRepository")
 */
class Missiles extends Munition
{
	
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="IdMissiles", type="string", length=100)
     */
    private $IdMissiles;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="NomMissile", type="string", length=255)
     */
    private $NomMissile;
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MissileType")
         * @ORM\JoinTable(name="missiles_missiletype",
        *  joinColumns={@ORM\JoinColumn(name="missiles_id", referencedColumnName="id")},
        *  inverseJoinColumns={@ORM\JoinColumn(name="missiletype_id", referencedColumnName="id", unique=true )}
        * )
        */
	private $TypeMissile;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureEnveloppe")
	 */
	private $NatureEnveloppe;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="CalibreDiametre", type="float")
     */
    private $CalibreDiametre;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UniteDistance")
	 */
	private $UniteCalibre;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="CalibreCalcul", type="float")
     */
    private $CalibreCalcul;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="TempsAutodestruction", type="float")
     */
    private $TempsAutodestruction;
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\TypeGuidage")
         * @ORM\JoinTable(name="missiles_typeguidage",
        *  joinColumns={@ORM\JoinColumn(name="missiles_id", referencedColumnName="id")},
        *  inverseJoinColumns={@ORM\JoinColumn(name="typeguidage_id", referencedColumnName="id", unique=true )}
        * )
        */
	private $TypeGuidage;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\LoiNavigation")
	 */
	private $LoiDeNavigation;
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\TechnologieGuidage")
         * @ORM\JoinTable(name="missiles_technologieguidage",
        *  joinColumns={@ORM\JoinColumn(name="missiles_id", referencedColumnName="id")},
        *  inverseJoinColumns={@ORM\JoinColumn(name="technologieguidage_id", referencedColumnName="id", unique=true )}
        * )
        */
	private $TechnologieGuidage;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\MissileDomaineAcquisition")
	 */
	private $DomaineAcquisition;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="IndicateurArmement", type="boolean")
     */
    private $IndicateurArmement;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="CopieExistante", type="string", length=255)
     */
    private $CopieExistante;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="SystemeArme", type="string", length=255)
     */
    private $SystemeArme;
    
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureChargeMili")
         * @ORM\JoinTable(name="missiles_naturechargemili",
        *  joinColumns={@ORM\JoinColumn(name="missiles_id", referencedColumnName="id")},
        *  inverseJoinColumns={@ORM\JoinColumn(name="naturechargemili_id", referencedColumnName="id", unique=true )}
        * )
        */
	private $NatureChargeMili;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsCharge", type="float")
     */
    private $PoidsCharge;
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
	 * @ORM\Column(nullable=true, name="PoidsChargePropu", type="float")
     */
    private $PoidsChargePropu;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCP")
	 */
	private $TypeChargePropu;

	/**
	* @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif")
	*/
	private $NatureChargePropuEjec;

	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargePropuEjec", type="float")
     */
    private $PoidsChargePropuEjec;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCP")
	 */
	private $TypeChargePropuEjec;

	/**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif")
    */
	private $NatureChargePropuAcc;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargePropuAcc", type="float")
     */
    private $PoidsChargePropuAcc;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCP")
	 */
	private $TypeChargePropuAcc;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\MissileEffetCharge")
	 */
	private $EffetChargeMissile;

	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargeDispersion", type="float")
     */
    private $PoidsChargeDispersion;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="NomSousMunition", type="string", length=255)
     */
    private $NomSousMunition;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="NombreSSMun", type="float")
     */
    private $NombreSSMun;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="ChargeTandem", type="boolean")
     */
    private $ChargeTandem;
	
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargeTandem", type="float")
     */
    private $PoidsChargeTandem;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurTotale", type="float")
     */
    private $LongueurTotale;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="Poids", type="float")
     */
    private $Poids;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeOgive")
	 */
	private $FormeOgive;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreTete", type="float")
     */
    private $DiametreTete;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurTete", type="float")
     */
    private $LongueurTete;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="PresenceRadome", type="boolean")
     */
    private $PresenceRadome;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreTrappe", type="integer")
     */
    private $NombreTrappe;
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\FormeTrappe")
         * @ORM\JoinTable(name="missiles_formetrappe",
        *  joinColumns={@ORM\JoinColumn(name="missiles_id", referencedColumnName="id")},
        *  inverseJoinColumns={@ORM\JoinColumn(name="formetrappe_id", referencedColumnName="id", unique=true )}
        * )
        */
	private $FormeTrappe;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurCharge", type="float")
     */
    private $LongueurCharge;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreCharge", type="float")
     */
    private $DiametreCharge;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="PriseExterne", type="string", length=255)
     */
    private $PriseExterne;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombrePrise", type="integer")
     */
    private $NombrePrise;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DistanceTuyerePrise", type="float")
     */
    private $DistanceTuyerePrise;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\MissileTypeEmpennage")
	 */
	private $TypeEmpennage;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurEmpennage", type="float")
     */
    private $LongueurEmpennage;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreAilette", type="integer")
     */
    private $NombreAilette;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeAilettes")
	 */
	private $FormeAilettes;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurAilette", type="float")
     */
    private $LongueurAilette;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LargeurAilette", type="float")
     */
    private $LargeurAilette;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FixationAilettes")
	 */
	private $FixationAilettes;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DistanceOgiveGouverne", type="float")
     */
    private $DistanceOgiveGouverne;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreGouverne", type="integer")
     */
    private $NombreGouverne;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeAilettes")
	 */
	private $FormeGouverne;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DistanceOgiveGouverne2", type="float")
     */
    private $DistanceOgiveGouverne2;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreGouverne2", type="integer")
     */
    private $NombreGouverne2;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeAilettes")
	 */
	private $FormeGouverne2;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametrePropulseur", type="float")
     */
    private $DiametrePropulseur;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurPropulseur", type="float")
     */
    private $LongueurPropulseur;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="PropulseurEjection", type="boolean")
     */
    private $PropulseurEjection;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurTete;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreBandeTete", type="integer")
     */
    private $NombreBandeTete;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Symboles")
	 */
	private $SymbolesTete;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandeTete;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
	 */
	private $TypeInscriptionTete;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurInscriptionTete;
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
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurCorps;
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SymboleOgive")
         * @ORM\JoinTable(name="missiles_symboleogive",
        *  joinColumns={@ORM\JoinColumn(name="missiles_id", referencedColumnName="id")},
        *  inverseJoinColumns={@ORM\JoinColumn(name="symboleogive_id", referencedColumnName="id", unique=true )}
        * )
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
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurPropulseur;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreBandePropulseur", type="integer")
     */
    private $NombreBandePropulseur;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Symboles")
	 */
	private $SymbolePropulseur;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandePropulseur;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
	 */
	private $TypeInscriptionPropulseur;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurInscriptionPropulseur;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="InscriptionPropulseur", type="string", length=255)
     */
    private $InscriptionPropulseur;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageFroidPropulseur", type="string", length=255)
     */
    private $MarquageFroidPropulseur;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="NomFusee", type="string", length=255)
     */
    private $NomFusee;
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionFusee")
         * @ORM\JoinTable(name="missiles_positionfusee",
        *  joinColumns={@ORM\JoinColumn(name="missiles_id", referencedColumnName="id")},
        *  inverseJoinColumns={@ORM\JoinColumn(name="positionfusee_id", referencedColumnName="id", unique=true )}
        * )
        */
	private $PositionFusee;
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\DeclenchementFusee")
         * @ORM\JoinTable(name="missiles_declenchementfusee",
        *  joinColumns={@ORM\JoinColumn(name="missiles_id", referencedColumnName="id")},
        *  inverseJoinColumns={@ORM\JoinColumn(name="declenchementfusee_id", referencedColumnName="id", unique=true )}
        * )
        */
	private $DeclenchementFusee;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="PiezoElec", type="boolean")
     */
    private $PiezoElec;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="Vecteur", type="string", length=255)
     */
    private $Vecteur;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="NeutralisationDestruction", type="string", length=255)
     */
    private $NeutralisationDestruction;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="DiffusionExterne", type="string", length=255)
     */
    private $DiffusionExterne;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="Coiffe", type="string", length=255)
     */
    private $Coiffe;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreTete", type="integer")
     */
    private $NombreTete;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DistanceOgive", type="float")
     */
    private $DistanceOgive;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DistanceTuyere", type="float")
     */
    private $DistanceTuyere;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreAvant", type="integer")
     */
    private $NombreAvant;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NombreArriere", type="integer")
     */
    private $NombreArriere;
	public function getIdMissiles() { return $this->IdMissiles; }
	public function setIdMissiles($var) { $this->IdMissiles = $var; }
	
	public function getNomMissile() { return $this->NomMissile; }
	public function setNomMissile($var) { $this->NomMissile = $var; }
	
	public function getTypeMissile() { return $this->TypeMissile; }
	public function setTypeMissile($var) { $this->TypeMissile = $var; }
	
	public function getNatureEnveloppe() { return $this->NatureEnveloppe; }
	public function setNatureEnveloppe($var) { $this->NatureEnveloppe = $var; }
	
	public function getCalibreDiametre() { return $this->CalibreDiametre; }
	public function setCalibreDiametre($var) { $this->CalibreDiametre = $var; }
	
	public function getUniteCalibre() { return $this->UniteCalibre; }
	public function setUniteCalibre($var) { $this->UniteCalibre = $var; }
	
	public function getCalibreCalcul() { return $this->CalibreCalcul; }
	public function setCalibreCalcul($var) { $this->CalibreCalcul = $var; }
	
	public function getTempsAutodestruction() { return $this->TempsAutodestruction; }
	public function setTempsAutodestruction($var) { $this->TempsAutodestruction = $var; }
	
	public function getTypeGuidage() { return $this->TypeGuidage; }
	public function setTypeGuidage($var) { $this->TypeGuidage = $var; }
	
	public function getLoiDeNavigation() { return $this->LoiDeNavigation; }
	public function setLoiDeNavigation($var) { $this->LoiDeNavigation = $var; }
	
	public function getTechnologieGuidage() { return $this->TechnologieGuidage; }
	public function setTechnologieGuidage($var) { $this->TechnologieGuidage = $var; }
	
	public function getDomaineAcquisition() { return $this->DomaineAcquisition; }
	public function setDomaineAcquisition($var) { $this->DomaineAcquisition = $var; }
	
	public function getIndicateurArmement() { return $this->IndicateurArmement; }
	public function setIndicateurArmement($var) { $this->IndicateurArmement = $var; }
	
	public function getCopieExistante() { return $this->CopieExistante; }
	public function setCopieExistante($var) { $this->CopieExistante = $var; }
        
    public function getSystemeArme() { return $this->SystemeArme; }
	public function setSystemeArme($var) { $this->SystemeArme = $var; }
	
	public function getNatureChargeMili() { return $this->NatureChargeMili; }
	public function setNatureChargeMili($var) { $this->NatureChargeMili = $var; }
	
	public function getPoidsCharge() { return $this->PoidsCharge; }
	public function setPoidsCharge($var) { $this->PoidsCharge = $var; }
	
	public function getUniteQMA() { return $this->UniteQMA; }
	public function setUniteQMA($var) { $this->UniteQMA = $var; }
	
	public function getPoidsChargeCalcule() { return $this->PoidsChargeCalcule; }
	public function setPoidsChargeCalcule($var) { $this->PoidsChargeCalcule = $var; }
	
	public function getPoidsChargePropu() { return $this->PoidsChargePropu; }
	public function setPoidsChargePropu($var) { $this->PoidsChargePropu = $var; }
	
	public function getTypeChargePropu() { return $this->TypeChargePropu; }
	public function setTypeChargePropu($var) { $this->TypeChargePropu = $var; }
	
	public function getPoidsChargePropuEjec() { return $this->PoidsChargePropuEjec; }
	public function setPoidsChargePropuEjec($var) { $this->PoidsChargePropuEjec = $var; }
	
	public function getTypeChargePropuEjec() { return $this->TypeChargePropuEjec; }
	public function setTypeChargePropuEjec($var) { $this->TypeChargePropuEjec = $var; }
	
	public function getPoidsChargePropuAcc() { return $this->PoidsChargePropuAcc; }
	public function setPoidsChargePropuAcc($var) { $this->PoidsChargePropu = $var; }
	
	public function getTypeChargePropuAcc() { return $this->TypeChargePropuAcc; }
	public function setTypeChargePropuAcc($var) { $this->TypeChargePropuAcc = $var; }
	
	public function getEffetChargeMissile() { return $this->EffetChargeMissile; }
	public function setEffetChargeMissile($var) { $this->EffetChargeMissile = $var; }
	
	
	public function getPoidsChargeDispersion() { return $this->PoidsChargeDispersion; }
	public function setPoidsChargeDispersion($var) { $this->PoidsChargeDispersion = $var; }
	
	public function getNomSousMunition() { return $this->NomSousMunition; }
	public function setNomSousMunition($var) { $this->NomSousMunition = $var; }
	
	public function getNombreSSMun() { return $this->NombreSSMun; }
	public function setNombreSSMun($var) { $this->NombreSSMun = $var; }
	
	public function getChargeTandem() { return $this->ChargeTandem; }
	public function setChargeTandem($var) { $this->ChargeTandem = $var; }
	
	public function getPoidsChargeTandem() { return $this->PoidsChargeTandem; }
	public function setPoidsChargeTandem($var) { $this->PoidsChargeTandem = $var; }
	
	public function getLongueurTotale() { return $this->LongueurTotale; }
	public function setLongueurTotale($var) { $this->LongueurTotale = $var; }
	
	public function getPoids() { return $this->Poids; }
	public function setPoids($var) { $this->Poids = $var; }
	
	public function getFormeOgive() { return $this->FormeOgive; }
	public function setFormeOgive($var) { $this->FormeOgive = $var; }
	
	public function getDiametreTete() { return $this->DiametreTete; }
	public function setDiametreTete($var) { $this->DiametreTete = $var; }
	
	public function getLongueurTete() { return $this->LongueurTete; }
	public function setLongueurTete($var) { $this->LongueurTete = $var; }
	
	public function getPresenceRadome() { return $this->PresenceRadome; }
	public function setPresenceRadome($var) { $this->PresenceRadome = $var; }
	
	public function getNombreTrappe() { return $this->NombreTrappe; }
	public function setNombreTrappe($var) { $this->NombreTrappe = $var; }
	
	public function getFormeTrappe() { return $this->FormeTrappe; }
	public function setFormeTrappe($var) { $this->FormeTrappe = $var; }
	
	public function getLongueurCharge() { return $this->LongueurCharge; }
	public function setLongueurCharge($var) { $this->LongueurCharge = $var; }
	
	public function getDiametreCharge() { return $this->DiametreCharge; }
	public function setDiametreCharge($var) { $this->DiametreCharge = $var; }
	
	public function getPriseExterne() { return $this->PriseExterne; }
	public function setPriseExterne($var) { $this->PriseExterne = $var; }
	
	public function getNombrePrise() { return $this->NombrePrise; }
	public function setNombrePrise($var) { $this->NombrePrise = $var; }
	
	public function getDistanceTuyerePrise() { return $this->DistanceTuyerePrise; }
	public function setDistanceTuyerePrise($var) { $this->DistanceTuyerePrise = $var; }
	
	public function getTypeEmpennage() { return $this->TypeEmpennage; }
	public function setTypeEmpennage($var) { $this->TypeEmpennage = $var; }
	
	public function getLongueurEmpennage() { return $this->LongueurEmpennage; }
	public function setLongueurEmpennage($var) { $this->LongueurEmpennage = $var; }
	
	public function getNombreAilette() { return $this->NombreAilette; }
	public function setNombreAilette($var) { $this->NombreAilette = $var; }
	
	public function getFormeAilettes() { return $this->FormeAilettes; }
	public function setFormeAilettes($var) { $this->FormeAilettes = $var; }
	
	public function getLongueurAilette() { return $this->LongueurAilette; }
	public function setLongueurAilette($var) { $this->LongueurAilette = $var; }
	
	public function getLargeurAilette() { return $this->LargeurAilette; }
	public function setLargeurAilette($var) { $this->LargeurAilette = $var; }
	
	public function getFixationAilettes() { return $this->FixationAilettes; }
	public function setFixationAilettes($var) { $this->FixationAilettes = $var; }
	
	public function getDistanceOgiveGouverne() { return $this->DistanceOgiveGouverne; }
	public function setDistanceOgiveGouverne($var) { $this->DistanceOgiveGouverne = $var; }
	
	public function getNombreGouverne() { return $this->NombreGouverne; }
	public function setNombreGouverne($var) { $this->NombreGouverne = $var; }
	
	public function getFormeGouverne() { return $this->FormeGouverne; }
	public function setFormeGouverne($var) { $this->FormeGouverne = $var; }
	
	public function getDistanceOgiveGouverne2() { return $this->DistanceOgiveGouverne2; }
	public function setDistanceOgiveGouverne2($var) { $this->DistanceOgiveGouverne2 = $var; }
	
	public function getNombreGouverne2() { return $this->NombreGouverne2; }
	public function setNombreGouverne2($var) { $this->NombreGouverne2 = $var; }
	
	public function getFormeGouverne2() { return $this->FormeGouverne2; }
	public function setFormeGouverne2($var) { $this->FormeGouverne2 = $var; }
	
	public function getDiametrePropulseur() { return $this->DiametrePropulseur; }
	public function setDiametrePropulseur($var) { $this->DiametrePropulseur = $var; }
	
	public function getLongueurPropulseur() { return $this->LongueurPropulseur; }
	public function setLongueurPropulseur($var) { $this->LongueurPropulseur = $var; }
	
	public function getPropulseurEjection() { return $this->PropulseurEjection; }
	public function setPropulseurEjection($var) { $this->PropulseurEjection = $var; }
	
	public function getCouleurTete() { return $this->CouleurTete; }
	public function setCouleurTete($var) { $this->CouleurTete = $var; }
	
	public function getNombreBandeTete() { return $this->NombreBandeTete; }
	public function setNombreBandeTete($var) { $this->NombreBandeTete = $var; }
	
	public function getSymbolesTete() { return $this->SymbolesTete; }
	public function setSymbolesTete($var) { $this->SymbolesTete = $var; }
	
	public function getCouleurBandeTete() { return $this->CouleurBandeTete; }
	public function setCouleurBandeTete($var) { $this->CouleurBandeTete = $var; }
	
	public function getTypeInscriptionTete() { return $this->TypeInscriptionTete; }
	public function setTypeInscriptionTete($var) { $this->TypeInscriptionTete = $var; }
	
	public function getCouleurInscriptionTete() { return $this->CouleurInscriptionTete; }
	public function setCouleurInscriptionTete($var) { $this->CouleurInscriptionTete = $var; }
	
	public function getInscriptionOgive() { return $this->InscriptionOgive; }
	public function setInscriptionOgive($var) { $this->InscriptionOgive = $var; }
	
	public function getMarquageFroidOgive() { return $this->MarquageFroidOgive; }
	public function setMarquageFroidOgive($var) { $this->MarquageFroidOgive = $var; }
	
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
	
	public function getCouleurPropulseur() { return $this->CouleurPropulseur; }
	public function setCouleurPropulseur($var) { $this->CouleurPropulseur = $var; }
	
	public function getNombreBandePropulseur() { return $this->NombreBandePropulseur; }
	public function setNombreBandePropulseur($var) { $this->NombreBandePropulseur = $var; }
	
	public function getSymbolePropulseur() { return $this->SymbolePropulseur; }
	public function setSymbolePropulseur($var) { $this->SymbolePropulseur = $var; }
	
	public function getCouleurBandePropulseur() { return $this->CouleurBandePropulseur; }
	public function setCouleurBandePropulseur($var) { $this->CouleurBandePropulseur = $var; }
	
	public function getTypeInscriptionPropulseur() { return $this->TypeInscriptionPropulseur; }
	public function setTypeInscriptionPropulseur($var) { $this->TypeInscriptionPropulseur = $var; }
	
	public function getCouleurInscriptionPropulseur() { return $this->CouleurInscriptionPropulseur; }
	public function setCouleurInscriptionPropulseur($var) { $this->CouleurInscriptionPropulseur = $var; }
	
	public function getInscriptionPropulseur() { return $this->InscriptionPropulseur; }
	public function setInscriptionPropulseur($var) { $this->InscriptionPropulseur = $var; }
	
	public function getMarquageFroidPropulseur() { return $this->MarquageFroidPropulseur; }
	public function setMarquageFroidPropulseur($var) { $this->MarquageFroidPropulseur = $var; }
	
	public function getNomFusee() { return $this->NomFusee; }
	public function setNomFusee($var) { $this->NomFusee = $var; }
	
	public function getPositionFusee() { return $this->PositionFusee; }
	public function setPositionFusee($var) { $this->PositionFusee = $var; }
	
	public function getDeclenchementFusee() { return $this->DeclenchementFusee; }
	public function setDeclenchementFusee($var) { $this->DeclenchementFusee = $var; }
	
	public function getPiezoElec() { return $this->PiezoElec; }
	public function setPiezoElec($var) { $this->PiezoElec = $var; }
	
	public function getVecteur() { return $this->Vecteur; }
	public function setVecteur($var) { $this->Vecteur = $var; }
	
	public function getNeutralisationDestruction() { return $this->NeutralisationDestruction; }
	public function setNeutralisationDestruction($var) { $this->NeutralisationDestruction = $var; }
	
	public function getDiffusionExterne() { return $this->DiffusionExterne; }
	public function setDiffusionExterne($var) { $this->DiffusionExterne = $var; }
	
	public function getCoiffe() { return $this->Coiffe; }
	public function setCoiffe($var) { $this->Coiffe = $var; }
	
	public function getNombreTete() { return $this->NombreTete; }
	public function setNombreTete($var) { $this->NombreTete = $var; }
	
	public function getDistanceOgive() { return $this->DistanceOgive; }
	public function setDistanceOgive($var) { $this->DistanceOgive = $var; }
	
	public function getDistanceTuyere() { return $this->DistanceTuyere; }
	public function setDistanceTuyere($var) { $this->DistanceTuyere = $var; }
	
	public function getNombreAvant() { return $this->NombreAvant; }
	public function setNombreAvant($var) { $this->NombreAvant = $var; }
	
	public function getNombreArriere() { return $this->NombreArriere; }
	public function setNombreArriere($var) { $this->NombreArriere = $var; }
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->TypeMissile = new \Doctrine\Common\Collections\ArrayCollection();
        $this->TypeGuidage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->TechnologieGuidage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->NatureChargeMili = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FormeTrappe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->SymboleCorps = new \Doctrine\Common\Collections\ArrayCollection();
        $this->PositionFusee = new \Doctrine\Common\Collections\ArrayCollection();
        $this->DeclenchementFusee = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add TypeMissile
     *
     * @param \FeodBundle\Entity\MissileType $typeMissile
     * @return Missiles
     */
    public function addTypeMissile(\FeodBundle\Entity\MissileType $typeMissile)
    {
        $this->TypeMissile[] = $typeMissile;

        return $this;
    }

    /**
     * Remove TypeMissile
     *
     * @param \FeodBundle\Entity\MissileType $typeMissile
     */
    public function removeTypeMissile(\FeodBundle\Entity\MissileType $typeMissile)
    {
        $this->TypeMissile->removeElement($typeMissile);
    }

    /**
     * Add TypeGuidage
     *
     * @param \FeodBundle\Entity\TypeGuidage $typeGuidage
     * @return Missiles
     */
    public function addTypeGuidage(\FeodBundle\Entity\TypeGuidage $typeGuidage)
    {
        $this->TypeGuidage[] = $typeGuidage;

        return $this;
    }

    /**
     * Remove TypeGuidage
     *
     * @param \FeodBundle\Entity\TypeGuidage $typeGuidage
     */
    public function removeTypeGuidage(\FeodBundle\Entity\TypeGuidage $typeGuidage)
    {
        $this->TypeGuidage->removeElement($typeGuidage);
    }

    /**
     * Add TechnologieGuidage
     *
     * @param \FeodBundle\Entity\TechnologieGuidage $technologieGuidage
     * @return Missiles
     */
    public function addTechnologieGuidage(\FeodBundle\Entity\TechnologieGuidage $technologieGuidage)
    {
        $this->TechnologieGuidage[] = $technologieGuidage;

        return $this;
    }

    /**
     * Remove TechnologieGuidage
     *
     * @param \FeodBundle\Entity\TechnologieGuidage $technologieGuidage
     */
    public function removeTechnologieGuidage(\FeodBundle\Entity\TechnologieGuidage $technologieGuidage)
    {
        $this->TechnologieGuidage->removeElement($technologieGuidage);
    }

    /**
     * Add NatureChargeMili
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeMili
     * @return Missiles
     */
    public function addNatureChargeMili(\FeodBundle\Entity\NatureChargeMili $natureChargeMili)
    {
        $this->NatureChargeMili[] = $natureChargeMili;

        return $this;
    }

    /**
     * Remove NatureChargeMili
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeMili
     */
    public function removeNatureChargeMili(\FeodBundle\Entity\NatureChargeMili $natureChargeMili)
    {
        $this->NatureChargeMili->removeElement($natureChargeMili);
    }

    /**
     * Set NatureChargePropuEjec
     *
     * @param \FeodBundle\Entity\Explosif $natureChargePropuEjec
     * @return Missiles
     */
    public function setNatureChargePropuEjec(\FeodBundle\Entity\Explosif $natureChargePropuEjec = null)
    {
        $this->NatureChargePropuEjec = $natureChargePropuEjec;

        return $this;
    }

    /**
     * Get NatureChargePropuEjec
     *
     * @return \FeodBundle\Entity\Explosif 
     */
    public function getNatureChargePropuEjec()
    {
        return $this->NatureChargePropuEjec;
    }

    /**
     * Set NatureChargePropuAcc
     *
     * @param \FeodBundle\Entity\Explosif $natureChargePropuAcc
     * @return Missiles
     */
    public function setNatureChargePropuAcc(\FeodBundle\Entity\Explosif $natureChargePropuAcc = null)
    {
        $this->NatureChargePropuAcc = $natureChargePropuAcc;

        return $this;
    }

    /**
     * Get NatureChargePropuAcc
     *
     * @return \FeodBundle\Entity\Explosif 
     */
    public function getNatureChargePropuAcc()
    {
        return $this->NatureChargePropuAcc;
    }

    /**
     * Add FormeTrappe
     *
     * @param \FeodBundle\Entity\FormeTrappe $formeTrappe
     * @return Missiles
     */
    public function addFormeTrappe(\FeodBundle\Entity\FormeTrappe $formeTrappe)
    {
        $this->FormeTrappe[] = $formeTrappe;

        return $this;
    }

    /**
     * Remove FormeTrappe
     *
     * @param \FeodBundle\Entity\FormeTrappe $formeTrappe
     */
    public function removeFormeTrappe(\FeodBundle\Entity\FormeTrappe $formeTrappe)
    {
        $this->FormeTrappe->removeElement($formeTrappe);
    }

    /**
     * Add SymboleCorps
     *
     * @param \FeodBundle\Entity\SymboleOgive $symboleCorps
     * @return Missiles
     */
    public function addSymboleCorp(\FeodBundle\Entity\SymboleOgive $symboleCorps)
    {
        $this->SymboleCorps[] = $symboleCorps;

        return $this;
    }

    /**
     * Remove SymboleCorps
     *
     * @param \FeodBundle\Entity\SymboleOgive $symboleCorps
     */
    public function removeSymboleCorp(\FeodBundle\Entity\SymboleOgive $symboleCorps)
    {
        $this->SymboleCorps->removeElement($symboleCorps);
    }

    /**
     * Add PositionFusee
     *
     * @param \FeodBundle\Entity\PositionFusee $positionFusee
     * @return Missiles
     */
    public function addPositionFusee(\FeodBundle\Entity\PositionFusee $positionFusee)
    {
        $this->PositionFusee[] = $positionFusee;

        return $this;
    }

    /**
     * Remove PositionFusee
     *
     * @param \FeodBundle\Entity\PositionFusee $positionFusee
     */
    public function removePositionFusee(\FeodBundle\Entity\PositionFusee $positionFusee)
    {
        $this->PositionFusee->removeElement($positionFusee);
    }

    /**
     * Add DeclenchementFusee
     *
     * @param \FeodBundle\Entity\DeclenchementFusee $declenchementFusee
     * @return Missiles
     */
    public function addDeclenchementFusee(\FeodBundle\Entity\DeclenchementFusee $declenchementFusee)
    {
        $this->DeclenchementFusee[] = $declenchementFusee;

        return $this;
    }

    /**
     * Remove DeclenchementFusee
     *
     * @param \FeodBundle\Entity\DeclenchementFusee $declenchementFusee
     */
    public function removeDeclenchementFusee(\FeodBundle\Entity\DeclenchementFusee $declenchementFusee)
    {
        $this->DeclenchementFusee->removeElement($declenchementFusee);
    }
}
