<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * Roquettes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\RoquettesRepository")
 */
class Roquettes extends Munition
{
	
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeRoquette")
	 */
	private $TypeRoquette;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TechnologieGuidage")
	 */
	private $Guidage;
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
	 * @ORM\Column(nullable=true, name="PoidsRoq", type="float")
     */
    private $PoidsRoq;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreTeteMili", type="float")
     */
    private $DiametreTeteMili;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreChargePropu", type="float")
     */
    private $DiametreChargePropu;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UniteDistance")
	 */
	private $UniteCalibre;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="Calibre", type="float")
     */
    private $Calibre;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="CalibreCalcul", type="float")
     */
    private $CalibreCalcul;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="CalibreReel", type="float")
     */
    private $CalibreReel;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PorteePratique", type="float")
     */
    private $PorteePratique;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PorteeMax", type="float")
     */
    private $PorteeMax;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="IndicateurArmement", type="boolean")
     */
    private $IndicateurArmement;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="AutoDestruction", type="boolean")
     */
    private $AutoDestruction;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="CopieExistante", type="string", length=255)
     */
    private $CopieExistante;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureEnveloppe")
	 */
	private $NatureEnveloppe;
        
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureChargeMili")
         * @ORM\JoinTable(name="roquettes_naturechargemili",
         *  joinColumns={@ORM\JoinColumn(name="roquettes_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="naturechargemili_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $NatureChargeMili;
        
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureChargeMili")
	 */
	private $NatureChargeHE;
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
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\EffetChargement")
         * @ORM\JoinTable(name="roquettes_effetchargement",
         *  joinColumns={@ORM\JoinColumn(name="roquettes_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="effetchargement_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $EffetChargement;
        
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chargement")
	 */
	private $Chargement;

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
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="ChargeEjection", type="boolean")
     */
    private $ChargeEjection;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargeEjection", type="float")
     */
    private $PoidsChargeEjection;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCP")
	 */
	private $TypeChargeEjection;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\RoquettesFixationChargeEjection")
	 */
	private $FixationChargeEjection;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\RoquettesTypeCorps")
	 */
	private $TypeCorps;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NbTuyereAvant", type="integer")
     */
    private $NbTuyereAvant;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NbTuyereArriere", type="integer")
     */
    private $NbTuyereArriere;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurTeteMili", type="float")
     */
    private $LongueurTeteMili;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurChargePropu", type="float")
     */
    private $LongueurChargePropu;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="LongueurPropu", type="float")
     */
    private $LongueurPropu;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeOgive")
	 */
	private $FormeOgive;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Coiffe", type="boolean")
     */
    private $Coiffe;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCoiffe")
	 */
	private $TypeCoiffe;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="PuitsDeFusee", type="boolean")
     */
    private $PuitsDeFusee;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreOeil", type="float")
     */
    private $DiametreOeil;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeCorps")
	 */
	private $FormeCorps;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Empennage", type="boolean")
     */
    private $Empennage;
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
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\ElementsAerodynamiques")
	 */
	private $TypeElemAeroAV;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeElemAero")
	 */
	private $FormeElemAeroAV;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurOgive;
        
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SymboleOgive")
         * @ORM\JoinTable(name="roquettes_symboleogive",
         *  joinColumns={@ORM\JoinColumn(name="roquettes_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="symboleogive_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $SymboleOgive;
        
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="InscriptionOgive", type="string", length=255)
     */
    private $InscriptionOgive;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurInscOgive;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
	 */
	private $TypeInscOgive;
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
	private $CouleurBandeOgive5;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurCorps;
        
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SymboleOgive")
	 * @ORM\JoinTable(name="roquettes_symbolecorps",
         *  joinColumns={@ORM\JoinColumn(name="roquettes_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="symboleogive_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $SymboleCorps;
        
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
	private $CouleurPropu;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="SymbolePropu", type="string", length=255)
     */
    private $SymbolePropu;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="InscripPropu", type="string", length=255)
     */
    private $InscripPropu;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarqFroidEmpennage", type="string", length=255)
     */
    private $MarqFroidEmpennage;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurInscPropu;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBandePropu;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurEmpennage;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageFroidPropulseur", type="string", length=255)
     */
    private $MarquageFroidPropulseur;
    
	/**
	 * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionFusee")
         * @ORM\JoinTable(name="roquettes_positionfusee",
         *  joinColumns={@ORM\JoinColumn(name="roquettes_id", referencedColumnName="id")},
         *  inverseJoinColumns={@ORM\JoinColumn(name="positionfusee_id", referencedColumnName="id", unique=true )}
         * )
	 */
	private $PositionFusee;
        
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="TypeFusee", type="string", length=255)
     */
    private $TypeFusee;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="NomFusee", type="string", length=255)
     */
    private $NomFusee;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Piezo")
	 */
	private $Piezo;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="Marquage", type="string", length=255)
     */
	 
	/**
     * @var string
     *
     * @ORM\Column(nullable=true, name="SystemeArme", type="string", length=255)
     */
    private $SystemeArme;
	
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="NomSousMunition", type="string", length=255)
     */
    private $NomSousMunition;
	
	public function getTypeRoquette() { return $this->TypeRoquette; }
	public function setTypeRoquette($var) { $this->TypeRoquette = $var; }
	
	public function getGuidage() { return $this->Guidage; }
	public function setGuidage($var) { $this->Guidage = $var; }
	
	public function getLgTotavecFusee() { return $this->LgTotavecFusee; }
	public function setLgTotavecFusee($var) { $this->LgTotavecFusee = $var; }
	
	public function getLgTotsansFusee() { return $this->LgTotsansFusee; }
	public function setLgTotsansFusee($var) { $this->LgTotsansFusee = $var; }
	
	public function getPoidsRoq() { return $this->PoidsRoq; }
	public function setPoidsRoq($var) { $this->PoidsRoq = $var; }
	
	public function getDiametreTeteMili() { return $this->DiametreTeteMili; }
	public function setDiametreTeteMili($var) { $this->DiametreTeteMili = $var; }
	
	public function getDiametreChargePropu() { return $this->DiametreChargePropu; }
	public function setDiametreChargePropu($var) { $this->DiametreChargePropu = $var; }
	
	public function getUniteCalibre() { return $this->UniteCalibre; }
	public function setUniteCalibre($var) { $this->UniteCalibre = $var; }
	
	public function getCalibre() { return $this->Calibre; }
	public function setCalibre($var) { $this->Calibre = $var; }

	public function getCalibreCalcul() { return $this->CalibreCalcul; }
	public function setCalibreCalcul($var) { $this->CalibreCalcul = $var; }
	
	public function getCalibreReel() { return $this->CalibreReel; }
	public function setCalibreReel($var) { $this->CalibreReel = $var; }
	
	public function getPorteePratique() { return $this->PorteePratique; }
	public function setPorteePratique($var) { $this->PorteePratique = $var; }
	
	public function getPorteeMax() { return $this->PorteeMax; }
	public function setPorteeMax($var) { $this->PorteeMax = $var; }
	
	public function getIndicateurArmement() { return $this->IndicateurArmement; }
	public function setIndicateurArmement($var) { $this->IndicateurArmement = $var; }
	
	public function getAutoDestruction() { return $this->AutoDestruction; }
	public function setAutoDestruction($var) { $this->AutoDestruction = $var; }
	
	public function getCopieExistante() { return $this->CopieExistante; }
	public function setCopieExistante($var) { $this->CopieExistante = $var; }
	
	public function getNatureEnveloppe() { return $this->NatureEnveloppe; }
	public function setNatureEnveloppe($var) { $this->NatureEnveloppe = $var; }
	
	public function getNatureChargeMili() { return $this->NatureChargeMili; }
	public function setNatureChargeMili($var) { $this->NatureChargeMili = $var; }
	
	public function getNatureChargeHE() { return $this->NatureChargeHE; }
	public function setNatureChargeHE($var) { $this->NatureChargeHE = $var; }
	
	public function getPoidsChargeMili() { return $this->PoidsChargeMili; }
	public function setPoidsChargeMili($var) { $this->PoidsChargeMili = $var; }
	
	public function getUniteQMA() { return $this->UniteQMA; }
	public function setUniteQMA($var) { $this->UniteQMA = $var; }
	
	public function getPoidsChargeCalcule() { return $this->PoidsChargeCalcule; }
	public function setPoidsChargeCalcule($var) { $this->PoidsChargeCalcule = $var; }
	
	public function getChargeTandem() { return $this->ChargeTandem; }
	public function setChargeTandem($var) { $this->ChargeTandem = $var; }
	
	public function getPoidsChargeTandem() { return $this->PoidsChargeTandem; }
	public function setPoidsChargeTandem($var) { $this->PoidsChargeTandem = $var; }
	
	public function getEffetChargement() { return $this->EffetChargement; }
	public function setEffetChargement($var) { $this->EffetChargement = $var; }
	
	public function getChargement() { return $this->Chargement; }
	public function setChargement($var) { $this->Chargement = $var; }
	
	public function getPoidsChargePropu() { return $this->PoidsChargePropu; }
	public function setPoidsChargePropu($var) { $this->PoidsChargePropu = $var; }
	
	public function getTypeChargePropu() { return $this->TypeChargePropu; }
	public function setTypeChargePropu($var) { $this->TypeChargePropu = $var; }
	
	public function getChargeEjection() { return $this->ChargeEjection; }
	public function setChargeEjection($var) { $this->ChargeEjection = $var; }
	
	public function getPoidsChargeEjection() { return $this->PoidsChargeEjection; }
	public function setPoidsChargeEjection($var) { $this->PoidsChargeEjection = $var; }
	
	public function getTypeChargeEjection() { return $this->TypeChargeEjection; }
	public function setTypeChargeEjection($var) { $this->TypeChargeEjection = $var; }
	
	public function getFixationChargeEjection() { return $this->FixationChargeEjection; }
	public function setFixationChargeEjection($var) { $this->FixationChargeEjection = $var; }
	
	public function getTypeCorps() { return $this->TypeCorps; }
	public function setTypeCorps($var) { $this->TypeCorps = $var; }
	
	public function getNbTuyereAvant() { return $this->NbTuyereAvant; }
	public function setNbTuyereAvant($var) { $this->NbTuyereAvant = $var; }
	
	public function getNbTuyereArriere() { return $this->NbTuyereArriere; }
	public function setNbTuyereArriere($var) { $this->NbTuyereArriere = $var; }
	
	public function getLongueurTeteMili() { return $this->LongueurTeteMili; }
	public function setLongueurTeteMili($var) { $this->LongueurTeteMili = $var; }
	
	public function getLongueurChargePropu() { return $this->LongueurChargePropu; }
	public function setLongueurChargePropu($var) { $this->LongueurChargePropu = $var; }
	
	public function getLongueurPropu() { return $this->LongueurPropu; }
	public function setLongueurPropu($var) { $this->LongueurPropu = $var; }
	
	public function getFormeOgive() { return $this->FormeOgive; }
	public function setFormeOgive($var) { $this->FormeOgive = $var; }
	
	public function getCoiffe() { return $this->Coiffe; }
	public function setCoiffe($var) { $this->Coiffe = $var; }
	
	public function getTypeCoiffe() { return $this->TypeCoiffe; }
	public function setTypeCoiffe($var) { $this->TypeCoiffe = $var; }
	
	public function getPuitsDeFusee() { return $this->PuitsDeFusee; }
	public function setPuitsDeFusee($var) { $this->PuitsDeFusee = $var; }
	
	public function getDiametreOeil() { return $this->DiametreOeil; }
	public function setDiametreOeil($var) { $this->DiametreOeil = $var; }
	
	public function getFormeCorps() { return $this->FormeCorps; }
	public function setFormeCorps($var) { $this->FormeCorps = $var; }
	
	public function getEmpennage() { return $this->Empennage; }
	public function setEmpennage($var) { $this->Empennage = $var; }
	
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
	
	public function getTypeElemAeroAV() { return $this->TypeElemAeroAV; }
	public function setTypeElemAeroAV($var) { $this->TypeElemAeroAV = $var; }
	
	public function getFormeElemAeroAV() { return $this->FormeElemAeroAV; }
	public function setFormeElemAeroAV($var) { $this->FormeElemAeroAV = $var; }
	
	public function getCouleurOgive() { return $this->CouleurOgive; }
	public function setCouleurOgive($var) { $this->CouleurOgive = $var; }
	
	public function getSymboleOgive() { return $this->SymboleOgive; }
	public function setSymboleOgive($var) { $this->SymboleOgive = $var; }
	
	public function getInscriptionOgive() { return $this->InscriptionOgive; }
	public function setInscriptionOgive($var) { $this->InscriptionOgive = $var; }
	
	public function getCouleurInscOgive() { return $this->CouleurInscOgive; }
	public function setCouleurInscOgive($var) { $this->CouleurInscOgive = $var; }
	
	public function getTypeInscOgive() { return $this->TypeInscOgive; }
	public function setTypeInscOgive($var) { $this->TypeInscOgive = $var; }
	
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
	
	public function getCouleurBandeOgive5() { return $this->CouleurBandeOgive5; }
	public function setCouleurBandeOgive5($var) { $this->CouleurBandeOgive5 = $var; }
	
	public function getCouleurCorps() { return $this->CouleurCorps; }
	public function setCouleurCorps($var) { $this->CouleurCorps = $var; }
	
	public function getSymboleCorps() { return $this->SymboleCorps; }
	public function setSymboleCorps($var) { $this->SymboleCorps = $var; }
	
	public function getInscriptionCorps() { return $this->InscriptionCorps; }
	public function setInscriptionCorps($var) { $this->InscriptionCorps = $var; }
	
	public function getCouleurInscCorps() { return $this->CouleurInscCorps; }
	public function setCouleurInscCorps($var) { $this->CouleurInscCorps = $var; }
	
	public function getTypeInscCorps() { return $this->TypeInscCorps; }
	public function setTypeInscCorps($var) { $this->TypeInscCorps = $var; }
	
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
	
	public function getCouleurPropu() { return $this->CouleurPropu; }
	public function setCouleurPropu($var) { $this->CouleurPropu = $var; }
	
	public function getSymbolePropu() { return $this->SymbolePropu; }
	public function setSymbolePropu($var) { $this->SymbolePropu = $var; }
	
	public function getInscripPropu() { return $this->InscripPropu; }
	public function setInscripPropu($var) { $this->InscripPropu = $var; }
	
	public function getMarqFroidEmpennage() { return $this->MarqFroidEmpennage; }
	public function setMarqFroidEmpennage($var) { $this->MarqFroidEmpennage = $var; }
	
	public function getCouleurInscPropu() { return $this->CouleurInscPropu; }
	public function setCouleurInscPropu($var) { $this->CouleurInscPropu = $var; }
	
	public function getCouleurBandePropu() { return $this->CouleurBandePropu; }
	public function setCouleurBandePropu($var) { $this->CouleurBandePropu = $var; }
	
	public function getCouleurEmpennage() { return $this->CouleurEmpennage; }
	public function setCouleurEmpennage($var) { $this->CouleurEmpennage = $var; }
	
	public function getMarquageFroidPropulseur() { return $this->MarquageFroidPropulseur; }
	public function setMarquageFroidPropulseur($var) { $this->MarquageFroidPropulseur = $var; }
	
	public function getPositionFusee() { return $this->PositionFusee; }
	public function setPositionFusee($var) { $this->PositionFusee = $var; }
	
	public function getTypeFusee() { return $this->TypeFusee; }
	public function setTypeFusee($var) { $this->TypeFusee = $var; }
	
	public function getNomFusee() { return $this->NomFusee; }
	public function setNomFusee($var) { $this->NomFusee = $var; }
	
	public function getPiezo() { return $this->Piezo; }
	public function setPiezo($var) { $this->Piezo = $var; }
	
	public function getMarquage() { return $this->Marquage; }
	public function setMarquage($var) { $this->Marquage = $var; }
	
	public function getSystemeArme() { return $this->SystemeArme; }
	public function setSystemeArme($var) { $this->SystemeArme = $var; }
	
	public function getNomSousMunition() { return $this->NomSousMunition; }
	public function setNomSousMunition($var) { $this->NomSousMunition = $var; }
	
}