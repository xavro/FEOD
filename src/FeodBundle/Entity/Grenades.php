<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * Grenades
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\GrenadesRepository")
 */
class Grenades extends Munition
{
	
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadeType")
	 */
	private $TypeGrenade;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="Alias", type="string", length=255)
     */
    private $Alias;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadeModeFonctionnement")
	 */
	private $ModeFonctionnement;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadeEffet")
	 */
	private $EffetGrenade;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureEnveloppe")
	 */
	private $NatureEnveloppe;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Encartouche", type="boolean")
     */
    private $Encartouche;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreGrenade", type="float")
     */
    private $DiametreGrenade;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeRetard")
	 */
	private $TypeRetard;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="RetardDe", type="float")
     */
    private $RetardDe;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="RetardA", type="float")
     */
    private $RetardA;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadeTypePropulsion")
	 */
	private $TypePropulsion;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadesTypeAutoNeutralisation")
	 */
	private $TypeAutoNeutralisation;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadesTypeAutodestruction")
	 */
	private $TypeAutoDestruction;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="CopieExistante", type="string", length=255)
     */
    private $CopieExistante;
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
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureChargeMili")
	 */
	private $NatureChargementPrin;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="ChargeEclatement", type="boolean")
     */
    private $ChargeEclatement;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="ChargePropulsion", type="boolean")
     */
    private $ChargePropulsion;
	
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsChargePropu", type="float")
     */
    private $PoidsChargePropu;
	
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
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="PropulseurAdditionnel", type="boolean")
     */
    private $PropulseurAdditionnel;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadeForme")
	 */
	private $FormeGrenade;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadesTypeStabilisation")
	 */
	private $TypeStabilisation;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Empennage", type="boolean")
     */
    private $Empennage;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Ailettes", type="boolean")
     */
    private $Ailettes;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="HauteuravecBA", type="float")
     */
    private $HauteuravecBA;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="HauteursansBA", type="float")
     */
    private $HauteursansBA;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="PoidsGrenade", type="float")
     */
    private $PoidsGrenade;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadeAspectExterieur")
	 */
	private $AspectExterieurGrenande;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\GrenadeMatiere")
	 */
	private $MatiereGrenade;
	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreManchon", type="float")
     */
    private $DiametreManchon;
    
    	/**
     * @var float
     *
	 * @ORM\Column(nullable=true, name="DiametreChargePropu", type="float")
     */
    private $DiametreChargePropu;
    
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $EnveloppeCouleurHautGrenade;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurHautGrenade;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurBasGrenade;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="EnveloppeDispersable", type="boolean")
     */
    private $EnveloppeDispersable;
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
     * @var string
     *
		* @ORM\Column(nullable=true, name="MarquageEnCouleur", type="string", length=255)
     */
    private $MarquageEnCouleur;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurMarquage;
	/**
     * @var string
     *
		* @ORM\Column(nullable=true, name="NomAllumeurFuze", type="string", length=255)
     */
    private $NomAllumeurFuze;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
	 */
	private $CouleurAllumeur;
	/**
     * @var integer
     *
	 * @ORM\Column(nullable=true, name="NbBandeCouleur", type="integer")
     */
    private $NbBandeCouleur;
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
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeAmorcage")
	 */
	private $TypeAmorcage;
	/**
	 * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeAmorce")
	 */
	private $TypeAmorce;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Detonateur", type="boolean")
     */
    private $Detonateur;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="AnneauMLArmement", type="boolean")
     */
    private $AnneauMLArmement;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Renforcateur", type="boolean")
     */
    private $Renforcateur;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="DetonateurAmorcage", type="boolean")
     */
    private $DetonateurAmorcage;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Inflammateur", type="boolean")
     */
    private $Inflammateur;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Amorce", type="boolean")
     */
    private $Amorce;
	/**
     * @var boolean
     *
	 * @ORM\Column(nullable=true, name="Relais", type="boolean")
     */
    private $Relais;
	public function getTypeGrenade() { return $this->TypeGrenade; }
	public function setTypeGrenade($var) { $this->TypeGrenade = $var; }
	
	public function getAlias() { return $this->Alias; }
	public function setAlias($var) { $this->Alias = $var; }
	
	public function getModeFonctionnement() { return $this->ModeFonctionnement; }
	public function setModeFonctionnement($var) { $this->ModeFonctionnement = $var; }
	
	public function getEffetGrenade() { return $this->EffetGrenade; }
	public function setEffetGrenade($var) { $this->EffetGrenade = $var; }
	
	public function getNatureEnveloppe() { return $this->NatureEnveloppe; }
	public function setNatureEnveloppe($var) { $this->NatureEnveloppe = $var; }
	
	public function getEncartouche() { return $this->Encartouche; }
	public function setEncartouche($var) { $this->Encartouche = $var; }
	
	public function getDiametreGrenade() { return $this->DiametreGrenade; }
	public function setDiametreGrenade($var) { $this->DiametreGrenade = $var; }
	
	public function getTypeRetard() { return $this->TypeRetard; }
	public function setTypeRetard($var) { $this->TypeRetard = $var; }
	
	public function getRetardDe() { return $this->RetardDe; }
	public function setRetardDe($var) { $this->RetardDe = $var; }
	
	public function getRetardA() { return $this->RetardA; }
	public function setRetardA($var) { $this->RetardA = $var; }
	
	public function getTypePropulsion() { return $this->TypePropulsion; }
	public function setTypePropulsion($var) { $this->TypePropulsion = $var; }
	
	public function getTypeAutoNeutralisation() { return $this->TypeAutoNeutralisation; }
	public function setTypeAutoNeutralisation($var) { $this->TypeAutoNeutralisation = $var; }
	
	public function getTypeAutoDestruction() { return $this->TypeAutoDestruction; }
	public function setTypeAutoDestruction($var) { $this->TypeAutoDestruction = $var; }
	
	public function getCopieExistante() { return $this->CopieExistante; }
	public function setCopieExistante($var) { $this->CopieExistante = $var; }
	
	public function getPoidsChargeMili() { return $this->PoidsChargeMili; }
	public function setPoidsChargeMili($var) { $this->PoidsChargeMili = $var; }
	
	public function getUniteQMA() { return $this->UniteQMA; }
	public function setUniteQMA($var) { $this->UniteQMA = $var; }
	
	public function getPoidsChargeCalcule() { return $this->PoidsChargeCalcule; }
	public function setPoidsChargeCalcule($var) { $this->PoidsChargeCalcule = $var; }
	
	public function getNatureChargementPrin() { return $this->NatureChargementPrin; }
	public function setNatureChargementPrin($var) { $this->NatureChargementPrin = $var; }
	
	public function getChargeEclatement() { return $this->ChargeEclatement; }
	public function setChargeEclatement($var) { $this->ChargeEclatement = $var; }
	
	public function getChargePropulsion() { return $this->ChargePropulsion; }
	public function setChargePropulsion($var) { $this->ChargePropulsion = $var; }
	
	public function getChargeTandem() { return $this->ChargeTandem; }
	public function setChargeTandem($var) { $this->ChargeTandem = $var; }
	
	public function getPoidsChargeTandem() { return $this->PoidsChargeTandem; }
	public function setPoidsChargeTandem($var) { $this->PoidsChargeTandem = $var; }
	
	public function getPoidsChargePropu() { return $this->PoidsChargePropu; }
	public function setPoidsChargePropu($var) { $this->PoidsChargePropu = $var; }
	
	public function getPropulseurAdditionnel() { return $this->PropulseurAdditionnel; }
	public function setPropulseurAdditionnel($var) { $this->PropulseurAdditionnel = $var; }
	
	public function getFormeGrenade() { return $this->FormeGrenade; }
	public function setFormeGrenade($var) { $this->FormeGrenade = $var; }
	
	public function getTypeStabilisation() { return $this->TypeStabilisation; }
	public function setTypeStabilisation($var) { $this->TypeStabilisation = $var; }
	
	public function getEmpennage() { return $this->Empennage; }
	public function setEmpennage($var) { $this->Empennage = $var; }
	
	public function getAilettes() { return $this->Ailettes; }
	public function setAilettes($var) { $this->Ailettes = $var; }
	
	public function getHauteuravecBA() { return $this->HauteuravecBA; }
	public function setHauteuravecBA($var) { $this->HauteuravecBA = $var; }
	
	public function getHauteursansBA() { return $this->HauteursansBA; }
	public function setHauteursansBA($var) { $this->HauteursansBA = $var; }
	
	public function getPoidsGrenade() { return $this->PoidsGrenade; }
	public function setPoidsGrenade($var) { $this->PoidsGrenade = $var; }
	
	public function getAspectExterieurGrenande() { return $this->AspectExterieurGrenande; }
	public function setAspectExterieurGrenande($var) { $this->AspectExterieurGrenande = $var; }
	
	public function getMatiereGrenade() { return $this->MatiereGrenade; }
	public function setMatiereGrenade($var) { $this->MatiereGrenade = $var; }
	
	public function getDiametreManchon() { return $this->DiametreManchon; }
	public function setDiametreManchon($var) { $this->DiametreManchon = $var; }
        
        public function getDiametreChargePropu() { return $this->DiametreChargePropu; }
	public function setDiametreChargePropu($var) { $this->DiametreChargePropu = $var; }
	
	public function getEnveloppeCouleurHautGrenade() { return $this->EnveloppeCouleurHautGrenade; }
	public function setEnveloppeCouleurHautGrenade($var) { $this->EnveloppeCouleurHautGrenade = $var; }
	
	public function getCouleurHautGrenade() { return $this->CouleurHautGrenade; }
	public function setCouleurHautGrenade($var) { $this->CouleurHautGrenade = $var; }
	
	public function getCouleurBasGrenade() { return $this->CouleurBasGrenade; }
	public function setCouleurBasGrenade($var) { $this->CouleurBasGrenade = $var; }
	
	public function getEnveloppeDispersable() { return $this->EnveloppeDispersable; }
	public function setEnveloppeDispersable($var) { $this->EnveloppeDispersable = $var; }
	
	public function getMarquageAFroid() { return $this->MarquageAFroid; }
	public function setMarquageAFroid($var) { $this->MarquageAFroid = $var; }
	
	public function getMarquageEnRelief() { return $this->MarquageEnRelief; }
	public function setMarquageEnRelief($var) { $this->MarquageEnRelief = $var; }
	
	public function getMarquageEnCouleur() { return $this->MarquageEnCouleur; }
	public function setMarquageEnCouleur($var) { $this->MarquageEnCouleur = $var; }
	
	public function getCouleurMarquage() { return $this->CouleurMarquage; }
	public function setCouleurMarquage($var) { $this->CouleurMarquage = $var; }
	
	public function getNomAllumeurFuze() { return $this->NomAllumeurFuze; }
	public function setNomAllumeurFuze($var) { $this->NomAllumeurFuze = $var; }
	
	public function getCouleurAllumeur() { return $this->CouleurAllumeur; }
	public function setCouleurAllumeur($var) { $this->CouleurAllumeur = $var; }
	
	public function getNbBandeCouleur() { return $this->NbBandeCouleur; }
	public function setNbBandeCouleur($var) { $this->NbBandeCouleur = $var; }
	
	public function getBandeCouleur1() { return $this->BandeCouleur1; }
	public function setBandeCouleur1($var) { $this->BandeCouleur1 = $var; }
	
	public function getBandeCouleur2() { return $this->BandeCouleur2; }
	public function setBandeCouleur2($var) { $this->BandeCouleur2 = $var; }
	
	public function getBandeCouleur3() { return $this->BandeCouleur3; }
	public function setBandeCouleur3($var) { $this->BandeCouleur3 = $var; }
	
	public function getTypeAmorcage() { return $this->TypeAmorcage; }
	public function setTypeAmorcage($var) { $this->TypeAmorcage = $var; }
	
	public function getTypeAmorce() { return $this->TypeAmorce; }
	public function setTypeAmorce($var) { $this->TypeAmorce = $var; }
	
	public function getDetonateur() { return $this->Detonateur; }
	public function setDetonateur($var) { $this->Detonateur = $var; }
	
	public function getAnneauMLArmement() { return $this->AnneauMLArmement; }
	public function setAnneauMLArmement($var) { $this->AnneauMLArmement = $var; }
	
	public function getRenforcateur() { return $this->Renforcateur; }
	public function setRenforcateur($var) { $this->Renforcateur = $var; }
	
	public function getDetonateurAmorcage() { return $this->DetonateurAmorcage; }
	public function setDetonateurAmorcage($var) { $this->DetonateurAmorcage = $var; }
	
	public function getInflammateur() { return $this->Inflammateur; }
	public function setInflammateur($var) { $this->Inflammateur = $var; }
	
	public function getAmorce() { return $this->Amorce; }
	public function setAmorce($var) { $this->Amorce = $var; }
	
	public function getRelais() { return $this->Relais; }
	public function setRelais($var) { $this->Relais = $var; }
	
}