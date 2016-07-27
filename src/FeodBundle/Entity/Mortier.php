<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * Mortier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\MortierRepository")
 */
class Mortier extends Munition
{

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="calibre", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $calibre;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="calibreCalcule", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $calibreCalcule;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="calibreReel", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $calibreReel;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="lgTotsansFusee", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $lgTotsansFusee;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poids", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $poids;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="puitsDeFusee", type="boolean")
     */
    private $puitsDeFusee;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametreDeLOeil", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $diametreDeLOeil;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="bague", type="boolean")
     */
    private $bague;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="typeBague", type="integer")
     */
    private $typeBague;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="ogiveVisee", type="boolean")
     */
    private $ogiveVisee;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="renflement", type="boolean")
     */
    private $renflement;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombreRenflements", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nombreRenflements;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="preCeinture", type="boolean")
     */
    private $preCeinture;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombreCeintures", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nombreCeintures;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="distCeintCulot", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $distCeintCulot;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="orifices", type="boolean")
     */
    private $orifices;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombreOrifice", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nombreOrifice;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="distOrifiCulot", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $distOrifiCulot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypePlaque")
   */
  private $typePlaque;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbreTuyeres", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nbreTuyeres;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="empennage", type="boolean")
     */
    private $empennage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longEmpennage", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $longEmpennage;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbAilettes", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nbAilettes;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longAilette", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $longAilette;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="bandesOgive", type="boolean")
     */
    private $bandesOgive;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbBandesOgive", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nbBandesOgive;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="inscriptionOgive", type="boolean")
     */
    private $inscriptionOgive;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="bandesCorps", type="boolean")
     */
    private $bandesCorps;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbBandesCorps", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nbBandesCorps;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="inscriptionCorps", type="boolean")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $inscriptionCorps;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="inscriptionCulot", type="string", length=255)
     */
    private $inscriptionCulot;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageFroidOgive", type="string", length=255)
     */
    private $marquageFroidOgive;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageFroidCorps", type="string", length=255)
     */
    private $marquageFroidCorps;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageFroidCulot", type="string", length=255)
     */
    private $marquageFroidCulot;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageFroidEmpennage", type="string", length=255)
     */
    private $marquageFroidEmpennage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeMili", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $poidsChargeMili;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeCalcule", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $poidsChargeCalcule;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="uniteSI", type="string", length=255)
     */
    private $uniteSI;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeDisp", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $poidsChargeDisp;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="chargeCartPropu", type="float")
     */
    private $chargeCartPropu;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbGargousses", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nbGargousses;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsGargousse", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $poidsGargousse;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="copieExistante", type="string", length=255)
     */
    private $copieExistante;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="natureChargeHE", type="string", length=255)
     */
    private $natureChargeHE;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="nidaCrasse", type="boolean")
     */
    private $nidaCrasse;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbreNids", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nbreNids;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="manchon", type="boolean")
     */
    private $manchon;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diamManchon", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $diamManchon;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longManchon", type="float")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $longManchon;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbreEventMa", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nbreEventMa;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="ogiveFusee", type="string", length=255)
     */
    private $ogiveFusee;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="ogiveFusee1", type="string", length=255)
     */
    private $ogiveFusee1;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="ogiveFusee2", type="string", length=255)
     */
    private $ogiveFusee2;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="ogiveFusee3", type="string", length=255)
     */
    private $ogiveFusee3;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="ogiveFusee4", type="string", length=255)
     */
    private $ogiveFusee4;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="cartouche", type="boolean")
     */
    private $cartouche;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="chargeAdd", type="boolean")
     */
    private $chargeAdd;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="relais", type="boolean")
     */
    private $relais;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombrePlots", type="integer")
     * @Assert\GreaterThanOrEqual(value=0)
     */
    private $nombrePlots;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="diffusionExterne", type="string", length=255)
     */
    private $diffusionExterne;


    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquage", type="string", length=255)
     */
    private $marquage;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMortier")
   */
  private $typeMortier;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Guidage")
   */
  private $guidage;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UniteDistance")
   */
  private $uniteCalibre;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCeinture")
   */
  private $typeCeinture;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Enveloppe")
   */
  private $natureEnveloppe;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeCorps")
   */
  private $formeCorps;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeOgive")
   */
  private $formeOgive;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeDeRenflement")
   */
  private $typeRenflement;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Ceintures")
   */
  private $ceintures;
  /**
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeEmpennage")
   */
  private $typeEmpennage;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurCulot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurInscCulot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
   */
  private $typeInscCulot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurOgive;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurInscOgive;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
   */
  private $typeInscOgive;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurCorps;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurInscCorps;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
   */
  private $typeInscCorps;
  
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureChargeMili")
   * @ORM\JoinTable(name="mortier_naturechargemili",
   *  joinColumns={@ORM\JoinColumn(name="mortier_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="naturechargemili_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $natureChargeMili;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UnitesMasseVolume")
   */
  private $uniteQMA;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\EffetChargeDispersion")
   */
  private $effetChargeDisp;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chargement")
   */
  private $chargement;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeAilettes")
   */
  private $formeAilettes;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeAilettes")
   */
  private $typeAilettes;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Position")
   */
  private $positionMan;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
  private $typeFusee;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
  private $typeFusee1;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
  private $typeFusee2;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
  private $typeFusee3;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
  private $typeFusee4;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Assemblage")
   */
  private $assemblage;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeCorps1;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeCorps2;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeCorps3;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeCorps4;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeOgive1;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeOgive2;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeOgive3;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeOgive4;
  
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
        $this->natureChargeMili = new \Doctrine\Common\Collections\ArrayCollection();
        $this->effetChargement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getNotNullData() {
        $data=parent::getNotNullData();
        foreach($this as $key => $value) {
            if ($value instanceof \Doctrine\Common\Collections\ArrayCollection) {
                if(!$value->isEmpty()){
                    $data[$key]=$value;
                }
            }else{
                if(!is_null($value) && !is_bool($value)){
                    $data[$key]=$value;
                }
            }
        }
       return $data;
    }

    public function filename($calibre = null, $info = null)
    {
        return parent::fileName($this->calibreCalcule.'mm');
    }

    /**
     * Set calibre
     *
     * @param float $calibre
     * @return Mortier
     */
    public function setCalibre($calibre)
    {
        $this->calibre = $calibre;

        return $this;
    }

    /**
     * Get calibre
     *
     * @return float
     */
    public function getCalibre()
    {
        return $this->calibre;
    }

    /**
     * Set calibreCalcule
     *
     * @param float $calibreCalcule
     * @return Mortier
     */
    public function setCalibreCalcule($calibreCalcule)
    {
        $this->calibreCalcule = $calibreCalcule;

        return $this;
    }

    /**
     * Get calibreCalcule
     *
     * @return float
     */
    public function getCalibreCalcule()
    {
        return $this->calibreCalcule;
    }

    /**
     * Set calibreReel
     *
     * @param float $calibreReel
     * @return Mortier
     */
    public function setCalibreReel($calibreReel)
    {
        $this->calibreReel = $calibreReel;

        return $this;
    }

    /**
     * Get calibreReel
     *
     * @return float
     */
    public function getCalibreReel()
    {
        return $this->calibreReel;
    }

    /**
     * Set lgTotsansFusee
     *
     * @param float $lgTotsansFusee
     * @return Mortier
     */
    public function setLgTotsansFusee($lgTotsansFusee)
    {
        $this->lgTotsansFusee = $lgTotsansFusee;

        return $this;
    }

    /**
     * Get lgTotsansFusee
     *
     * @return float
     */
    public function getLgTotsansFusee()
    {
        return $this->lgTotsansFusee;
    }

    /**
     * Set poids
     *
     * @param float $poids
     * @return Mortier
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
     * Set puitsDeFusee
     *
     * @param boolean $puitsDeFusee
     * @return Mortier
     */
    public function setPuitsDeFusee($puitsDeFusee)
    {
        $this->puitsDeFusee = $puitsDeFusee;

        return $this;
    }

    /**
     * Get puitsDeFusee
     *
     * @return boolean
     */
    public function getPuitsDeFusee()
    {
        return $this->puitsDeFusee;
    }

    /**
     * Set diametreDeLOeil
     *
     * @param float $diametreDeLOeil
     * @return Mortier
     */
    public function setDiametreDeLOeil($diametreDeLOeil)
    {
        $this->diametreDeLOeil = $diametreDeLOeil;

        return $this;
    }

    /**
     * Get diametreDeLOeil
     *
     * @return float
     */
    public function getDiametreDeLOeil()
    {
        return $this->diametreDeLOeil;
    }

    /**
     * Set bague
     *
     * @param boolean $bague
     * @return Mortier
     */
    public function setBague($bague)
    {
        $this->bague = $bague;

        return $this;
    }

    /**
     * Get bague
     *
     * @return boolean
     */
    public function getBague()
    {
        return $this->bague;
    }

    /**
     * Set typeBague
     *
     * @param integer $typeBague
     * @return Mortier
     */
    public function setTypeBague($typeBague)
    {
        $this->typeBague = $typeBague;

        return $this;
    }

    /**
     * Get typeBague
     *
     * @return integer
     */
    public function getTypeBague()
    {
        return $this->typeBague;
    }

    /**
     * Set ogiveVisee
     *
     * @param boolean $ogiveVisee
     * @return Mortier
     */
    public function setOgiveVisee($ogiveVisee)
    {
        $this->ogiveVisee = $ogiveVisee;

        return $this;
    }

    /**
     * Get ogiveVisee
     *
     * @return boolean
     */
    public function getOgiveVisee()
    {
        return $this->ogiveVisee;
    }

    /**
     * Set renflement
     *
     * @param boolean $renflement
     * @return Mortier
     */
    public function setRenflement($renflement)
    {
        $this->renflement = $renflement;

        return $this;
    }

    /**
     * Get renflement
     *
     * @return boolean
     */
    public function getRenflement()
    {
        return $this->renflement;
    }

    /**
     * Set nombreRenflements
     *
     * @param integer $nombreRenflements
     * @return Mortier
     */
    public function setNombreRenflements($nombreRenflements)
    {
        $this->nombreRenflements = $nombreRenflements;

        return $this;
    }

    /**
     * Get nombreRenflements
     *
     * @return integer
     */
    public function getNombreRenflements()
    {
        return $this->nombreRenflements;
    }

    /**
     * Set preCeinture
     *
     * @param boolean $preCeinture
     * @return Mortier
     */
    public function setPreCeinture($preCeinture)
    {
        $this->preCeinture = $preCeinture;

        return $this;
    }

    /**
     * Get preCeinture
     *
     * @return boolean
     */
    public function getPreCeinture()
    {
        return $this->preCeinture;
    }

    /**
     * Set nombreCeintures
     *
     * @param integer $nombreCeintures
     * @return Mortier
     */
    public function setNombreCeintures($nombreCeintures)
    {
        $this->nombreCeintures = $nombreCeintures;

        return $this;
    }

    /**
     * Get nombreCeintures
     *
     * @return integer
     */
    public function getNombreCeintures()
    {
        return $this->nombreCeintures;
    }

    /**
     * Set distCeintCulot
     *
     * @param float $distCeintCulot
     * @return Mortier
     */
    public function setDistCeintCulot($distCeintCulot)
    {
        $this->distCeintCulot = $distCeintCulot;

        return $this;
    }

    /**
     * Get distCeintCulot
     *
     * @return float
     */
    public function getDistCeintCulot()
    {
        return $this->distCeintCulot;
    }

    /**
     * Set orifices
     *
     * @param boolean $orifices
     * @return Mortier
     */
    public function setOrifices($orifices)
    {
        $this->orifices = $orifices;

        return $this;
    }

    /**
     * Get orifices
     *
     * @return boolean
     */
    public function getOrifices()
    {
        return $this->orifices;
    }

    /**
     * Set nombreOrifice
     *
     * @param integer $nombreOrifice
     * @return Mortier
     */
    public function setNombreOrifice($nombreOrifice)
    {
        $this->nombreOrifice = $nombreOrifice;

        return $this;
    }

    /**
     * Get nombreOrifice
     *
     * @return integer
     */
    public function getNombreOrifice()
    {
        return $this->nombreOrifice;
    }

    /**
     * Set distOrifiCulot
     *
     * @param float $distOrifiCulot
     * @return Mortier
     */
    public function setDistOrifiCulot($distOrifiCulot)
    {
        $this->distOrifiCulot = $distOrifiCulot;

        return $this;
    }

    /**
     * Get distOrifiCulot
     *
     * @return float
     */
    public function getDistOrifiCulot()
    {
        return $this->distOrifiCulot;
    }

    /**
     * Set nbreTuyeres
     *
     * @param integer $nbreTuyeres
     * @return Mortier
     */
    public function setNbreTuyeres($nbreTuyeres)
    {
        $this->nbreTuyeres = $nbreTuyeres;

        return $this;
    }

    /**
     * Get nbreTuyeres
     *
     * @return integer
     */
    public function getNbreTuyeres()
    {
        return $this->nbreTuyeres;
    }

    /**
     * Set empennage
     *
     * @param boolean $empennage
     * @return Mortier
     */
    public function setEmpennage($empennage)
    {
        $this->empennage = $empennage;

        return $this;
    }

    /**
     * Get empennage
     *
     * @return boolean
     */
    public function getEmpennage()
    {
        return $this->empennage;
    }

    /**
     * Set longEmpennage
     *
     * @param float $longEmpennage
     * @return Mortier
     */
    public function setLongEmpennage($longEmpennage)
    {
        $this->longEmpennage = $longEmpennage;

        return $this;
    }

    /**
     * Get longEmpennage
     *
     * @return float
     */
    public function getLongEmpennage()
    {
        return $this->longEmpennage;
    }

    /**
     * Set nbAilettes
     *
     * @param integer $nbAilettes
     * @return Mortier
     */
    public function setNbAilettes($nbAilettes)
    {
        $this->nbAilettes = $nbAilettes;

        return $this;
    }

    /**
     * Get nbAilettes
     *
     * @return integer
     */
    public function getNbAilettes()
    {
        return $this->nbAilettes;
    }

    /**
     * Set longAilette
     *
     * @param float $longAilette
     * @return Mortier
     */
    public function setLongAilette($longAilette)
    {
        $this->longAilette = $longAilette;

        return $this;
    }

    /**
     * Get longAilette
     *
     * @return float
     */
    public function getLongAilette()
    {
        return $this->longAilette;
    }

    /**
     * Set bandesOgive
     *
     * @param boolean $bandesOgive
     * @return Mortier
     */
    public function setBandesOgive($bandesOgive)
    {
        $this->bandesOgive = $bandesOgive;

        return $this;
    }

    /**
     * Get bandesOgive
     *
     * @return boolean
     */
    public function getBandesOgive()
    {
        return $this->bandesOgive;
    }

    /**
     * Set nbBandesOgive
     *
     * @param integer $nbBandesOgive
     * @return Mortier
     */
    public function setNbBandesOgive($nbBandesOgive)
    {
        $this->nbBandesOgive = $nbBandesOgive;

        return $this;
    }

    /**
     * Get nbBandesOgive
     *
     * @return integer
     */
    public function getNbBandesOgive()
    {
        return $this->nbBandesOgive;
    }

    /**
     * Set inscriptionOgive
     *
     * @param boolean $inscriptionOgive
     * @return Mortier
     */
    public function setInscriptionOgive($inscriptionOgive)
    {
        $this->inscriptionOgive = $inscriptionOgive;

        return $this;
    }

    /**
     * Get inscriptionOgive
     *
     * @return boolean
     */
    public function getInscriptionOgive()
    {
        return $this->inscriptionOgive;
    }

    /**
     * Set bandesCorps
     *
     * @param boolean $bandesCorps
     * @return Mortier
     */
    public function setBandesCorps($bandesCorps)
    {
        $this->bandesCorps = $bandesCorps;

        return $this;
    }

    /**
     * Get bandesCorps
     *
     * @return boolean
     */
    public function getBandesCorps()
    {
        return $this->bandesCorps;
    }

    /**
     * Set nbBandesCorps
     *
     * @param integer $nbBandesCorps
     * @return Mortier
     */
    public function setNbBandesCorps($nbBandesCorps)
    {
        $this->nbBandesCorps = $nbBandesCorps;

        return $this;
    }

    /**
     * Get nbBandesCorps
     *
     * @return integer
     */
    public function getNbBandesCorps()
    {
        return $this->nbBandesCorps;
    }

    /**
     * Set inscriptionCorps
     *
     * @param boolean $inscriptionCorps
     * @return Mortier
     */
    public function setInscriptionCorps($inscriptionCorps)
    {
        $this->inscriptionCorps = $inscriptionCorps;

        return $this;
    }

    /**
     * Get inscriptionCorps
     *
     * @return boolean
     */
    public function getInscriptionCorps()
    {
        return $this->inscriptionCorps;
    }

    /**
     * Set inscriptionCulot
     *
     * @param string $inscriptionCulot
     * @return Mortier
     */
    public function setInscriptionCulot($inscriptionCulot)
    {
        $this->inscriptionCulot = $inscriptionCulot;

        return $this;
    }

    /**
     * Get inscriptionCulot
     *
     * @return string
     */
    public function getInscriptionCulot()
    {
        return $this->inscriptionCulot;
    }

    /**
     * Set marquageFroidOgive
     *
     * @param string $marquageFroidOgive
     * @return Mortier
     */
    public function setMarquageFroidOgive($marquageFroidOgive)
    {
        $this->marquageFroidOgive = $marquageFroidOgive;

        return $this;
    }

    /**
     * Get marquageFroidOgive
     *
     * @return string
     */
    public function getMarquageFroidOgive()
    {
        return $this->marquageFroidOgive;
    }

    /**
     * Set marquageFroidCorps
     *
     * @param string $marquageFroidCorps
     * @return Mortier
     */
    public function setMarquageFroidCorps($marquageFroidCorps)
    {
        $this->marquageFroidCorps = $marquageFroidCorps;

        return $this;
    }

    /**
     * Get marquageFroidCorps
     *
     * @return string
     */
    public function getMarquageFroidCorps()
    {
        return $this->marquageFroidCorps;
    }

    /**
     * Set marquageFroidCulot
     *
     * @param string $marquageFroidCulot
     * @return Mortier
     */
    public function setMarquageFroidCulot($marquageFroidCulot)
    {
        $this->marquageFroidCulot = $marquageFroidCulot;

        return $this;
    }

    /**
     * Get marquageFroidCulot
     *
     * @return string
     */
    public function getMarquageFroidCulot()
    {
        return $this->marquageFroidCulot;
    }

    /**
     * Set marquageFroidEmpennage
     *
     * @param string $marquageFroidEmpennage
     * @return Mortier
     */
    public function setMarquageFroidEmpennage($marquageFroidEmpennage)
    {
        $this->marquageFroidEmpennage = $marquageFroidEmpennage;

        return $this;
    }

    /**
     * Get marquageFroidEmpennage
     *
     * @return string
     */
    public function getMarquageFroidEmpennage()
    {
        return $this->marquageFroidEmpennage;
    }

    /**
     * Set poidsChargeMili
     *
     * @param float $poidsChargeMili
     * @return Mortier
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
     * @return Mortier
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
     * @return Mortier
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
     * Set poidsChargeDisp
     *
     * @param float $poidsChargeDisp
     * @return Mortier
     */
    public function setPoidsChargeDisp($poidsChargeDisp)
    {
        $this->poidsChargeDisp = $poidsChargeDisp;

        return $this;
    }

    /**
     * Get poidsChargeDisp
     *
     * @return float
     */
    public function getPoidsChargeDisp()
    {
        return $this->poidsChargeDisp;
    }

    /**
     * Set chargeCartPropu
     *
     * @param float $chargeCartPropu
     * @return Mortier
     */
    public function setChargeCartPropu($chargeCartPropu)
    {
        $this->chargeCartPropu = $chargeCartPropu;

        return $this;
    }

    /**
     * Get chargeCartPropu
     *
     * @return float
     */
    public function getChargeCartPropu()
    {
        return $this->chargeCartPropu;
    }

    /**
     * Set nbGargousses
     *
     * @param integer $nbGargousses
     * @return Mortier
     */
    public function setNbGargousses($nbGargousses)
    {
        $this->nbGargousses = $nbGargousses;

        return $this;
    }

    /**
     * Get nbGargousses
     *
     * @return integer
     */
    public function getNbGargousses()
    {
        return $this->nbGargousses;
    }

    /**
     * Set poidsGargousse
     *
     * @param float $poidsGargousse
     * @return Mortier
     */
    public function setPoidsGargousse($poidsGargousse)
    {
        $this->poidsGargousse = $poidsGargousse;

        return $this;
    }

    /**
     * Get poidsGargousse
     *
     * @return float
     */
    public function getPoidsGargousse()
    {
        return $this->poidsGargousse;
    }

    /**
     * Set natureChargeHE
     *
     * @param string $natureChargeHE
     * @return Mortier
     */
    public function setNatureChargeHE($natureChargeHE)
    {
        $this->natureChargeHE = $natureChargeHE;

        return $this;
    }

    /**
     * Get natureChargeHE
     *
     * @return string
     */
    public function getNatureChargeHE()
    {
        return $this->natureChargeHE;
    }

    /**
     * Set nidaCrasse
     *
     * @param boolean $nidaCrasse
     * @return Mortier
     */
    public function setNidaCrasse($nidaCrasse)
    {
        $this->nidaCrasse = $nidaCrasse;

        return $this;
    }

    /**
     * Get nidaCrasse
     *
     * @return boolean
     */
    public function getNidaCrasse()
    {
        return $this->nidaCrasse;
    }

    /**
     * Set nbreNids
     *
     * @param integer $nbreNids
     * @return Mortier
     */
    public function setNbreNids($nbreNids)
    {
        $this->nbreNids = $nbreNids;

        return $this;
    }

    /**
     * Get nbreNids
     *
     * @return integer
     */
    public function getNbreNids()
    {
        return $this->nbreNids;
    }

    /**
     * Set manchon
     *
     * @param boolean $manchon
     * @return Mortier
     */
    public function setManchon($manchon)
    {
        $this->manchon = $manchon;

        return $this;
    }

    /**
     * Get manchon
     *
     * @return boolean
     */
    public function getManchon()
    {
        return $this->manchon;
    }

    /**
     * Set diamManchon
     *
     * @param float $diamManchon
     * @return Mortier
     */
    public function setDiamManchon($diamManchon)
    {
        $this->diamManchon = $diamManchon;

        return $this;
    }

    /**
     * Get diamManchon
     *
     * @return float
     */
    public function getDiamManchon()
    {
        return $this->diamManchon;
    }

    /**
     * Set longManchon
     *
     * @param float $longManchon
     * @return Mortier
     */
    public function setLongManchon($longManchon)
    {
        $this->longManchon = $longManchon;

        return $this;
    }

    /**
     * Get longManchon
     *
     * @return float
     */
    public function getLongManchon()
    {
        return $this->longManchon;
    }

    /**
     * Set nbreEventMa
     *
     * @param integer $nbreEventMa
     * @return Mortier
     */
    public function setNbreEventMa($nbreEventMa)
    {
        $this->nbreEventMa = $nbreEventMa;

        return $this;
    }

    /**
     * Get nbreEventMa
     *
     * @return integer
     */
    public function getNbreEventMa()
    {
        return $this->nbreEventMa;
    }

    /**
     * Set ogiveFusee
     *
     * @param string $ogiveFusee
     * @return Mortier
     */
    public function setOgiveFusee($ogiveFusee)
    {
        $this->ogiveFusee = $ogiveFusee;

        return $this;
    }

    /**
     * Get ogiveFusee
     *
     * @return string
     */
    public function getOgiveFusee()
    {
        return $this->ogiveFusee;
    }

    /**
     * Set ogiveFusee1
     *
     * @param string $ogiveFusee1
     * @return Mortier
     */
    public function setOgiveFusee1($ogiveFusee1)
    {
        $this->ogiveFusee1 = $ogiveFusee1;

        return $this;
    }

    /**
     * Get ogiveFusee1
     *
     * @return string
     */
    public function getOgiveFusee1()
    {
        return $this->ogiveFusee1;
    }

    /**
     * Set ogiveFusee2
     *
     * @param string $ogiveFusee2
     * @return Mortier
     */
    public function setOgiveFusee2($ogiveFusee2)
    {
        $this->ogiveFusee2 = $ogiveFusee2;

        return $this;
    }

    /**
     * Get ogiveFusee2
     *
     * @return string
     */
    public function getOgiveFusee2()
    {
        return $this->ogiveFusee2;
    }

    /**
     * Set ogiveFusee3
     *
     * @param string $ogiveFusee3
     * @return Mortier
     */
    public function setOgiveFusee3($ogiveFusee3)
    {
        $this->ogiveFusee3 = $ogiveFusee3;

        return $this;
    }

    /**
     * Get ogiveFusee3
     *
     * @return string
     */
    public function getOgiveFusee3()
    {
        return $this->ogiveFusee3;
    }

    /**
     * Set ogiveFusee4
     *
     * @param string $ogiveFusee4
     * @return Mortier
     */
    public function setOgiveFusee4($ogiveFusee4)
    {
        $this->ogiveFusee4 = $ogiveFusee4;

        return $this;
    }

    /**
     * Get ogiveFusee4
     *
     * @return string
     */
    public function getOgiveFusee4()
    {
        return $this->ogiveFusee4;
    }

    /**
     * Set cartouche
     *
     * @param boolean $cartouche
     * @return Mortier
     */
    public function setCartouche($cartouche)
    {
        $this->cartouche = $cartouche;

        return $this;
    }

    /**
     * Get cartouche
     *
     * @return boolean
     */
    public function getCartouche()
    {
        return $this->cartouche;
    }

    /**
     * Set chargeAdd
     *
     * @param boolean $chargeAdd
     * @return Mortier
     */
    public function setChargeAdd($chargeAdd)
    {
        $this->chargeAdd = $chargeAdd;

        return $this;
    }

    /**
     * Get chargeAdd
     *
     * @return boolean
     */
    public function getChargeAdd()
    {
        return $this->chargeAdd;
    }

    /**
     * Set relais
     *
     * @param boolean $relais
     * @return Mortier
     */
    public function setRelais($relais)
    {
        $this->relais = $relais;

        return $this;
    }

    /**
     * Get relais
     *
     * @return boolean
     */
    public function getRelais()
    {
        return $this->relais;
    }

    /**
     * Set nombrePlots
     *
     * @param integer $nombrePlots
     * @return Mortier
     */
    public function setNombrePlots($nombrePlots)
    {
        $this->nombrePlots = $nombrePlots;

        return $this;
    }

    /**
     * Get nombrePlots
     *
     * @return integer
     */
    public function getNombrePlots()
    {
        return $this->nombrePlots;
    }

    /**
     * Set diffusionExterne
     *
     * @param string $diffusionExterne
     * @return Mortier
     */
    public function setDiffusionExterne($diffusionExterne)
    {
        $this->diffusionExterne = $diffusionExterne;

        return $this;
    }

    /**
     * Get diffusionExterne
     *
     * @return string
     */
    public function getDiffusionExterne()
    {
        return $this->diffusionExterne;
    }

    /**
     * Set marquage
     *
     * @param string $marquage
     * @return Mortier
     */
    public function setMarquage($marquage)
    {
        $this->marquage = $marquage;

        return $this;
    }

    /**
     * Get marquage
     *
     * @return string
     */
    public function getMarquage()
    {
        return $this->marquage;
    }

    /**
     * Set typePlaque
     *
     * @param \FeodBundle\Entity\TypePlaque $typePlaque
     * @return Mortier
     */
    public function setTypePlaque(\FeodBundle\Entity\TypePlaque $typePlaque = null)
    {
        $this->typePlaque = $typePlaque;

        return $this;
    }

    /**
     * Get typePlaque
     *
     * @return \FeodBundle\Entity\TypePlaque
     */
    public function getTypePlaque()
    {
        return $this->typePlaque;
    }

    /**
     * Set typeMortier
     *
     * @param \FeodBundle\Entity\TypeMortier $typeMortier
     * @return Mortier
     */
    public function setTypeMortier(\FeodBundle\Entity\TypeMortier $typeMortier = null)
    {
        $this->typeMortier = $typeMortier;

        return $this;
    }

    /**
     * Get typeMortier
     *
     * @return \FeodBundle\Entity\TypeMortier
     */
    public function getTypeMortier()
    {
        return $this->typeMortier;
    }

    /**
     * Set guidage
     *
     * @param \FeodBundle\Entity\Guidage $guidage
     * @return Mortier
     */
    public function setGuidage(\FeodBundle\Entity\Guidage $guidage = null)
    {
        $this->guidage = $guidage;

        return $this;
    }

    /**
     * Get guidage
     *
     * @return \FeodBundle\Entity\Guidage
     */
    public function getGuidage()
    {
        return $this->guidage;
    }

    /**
     * Set uniteCalibre
     *
     * @param \FeodBundle\Entity\UniteDistance $uniteCalibre
     * @return Mortier
     */
    public function setUniteCalibre(\FeodBundle\Entity\UniteDistance $uniteCalibre = null)
    {
        $this->uniteCalibre = $uniteCalibre;

        return $this;
    }

    /**
     * Get uniteCalibre
     *
     * @return \FeodBundle\Entity\UniteDistance
     */
    public function getUniteCalibre()
    {
        return $this->uniteCalibre;
    }

    /**
     * Set typeCeinture
     *
     * @param \FeodBundle\Entity\TypeCeinture $typeCeinture
     * @return Mortier
     */
    public function setTypeCeinture(\FeodBundle\Entity\TypeCeinture $typeCeinture = null)
    {
        $this->typeCeinture = $typeCeinture;

        return $this;
    }

    /**
     * Get typeCeinture
     *
     * @return \FeodBundle\Entity\TypeCeinture
     */
    public function getTypeCeinture()
    {
        return $this->typeCeinture;
    }

    /**
     * Set natureEnveloppe
     *
     * @param \FeodBundle\Entity\Enveloppe $natureEnveloppe
     * @return Mortier
     */
    public function setNatureEnveloppe(\FeodBundle\Entity\Enveloppe $natureEnveloppe = null)
    {
        $this->natureEnveloppe = $natureEnveloppe;

        return $this;
    }

    /**
     * Get natureEnveloppe
     *
     * @return \FeodBundle\Entity\Enveloppe
     */
    public function getNatureEnveloppe()
    {
        return $this->natureEnveloppe;
    }

    /**
     * Set formeCorps
     *
     * @param \FeodBundle\Entity\FormeCorps $formeCorps
     * @return Mortier
     */
    public function setFormeCorps(\FeodBundle\Entity\FormeCorps $formeCorps = null)
    {
        $this->formeCorps = $formeCorps;

        return $this;
    }

    /**
     * Get formeCorps
     *
     * @return \FeodBundle\Entity\FormeCorps
     */
    public function getFormeCorps()
    {
        return $this->formeCorps;
    }

    /**
     * Set formeOgive
     *
     * @param \FeodBundle\Entity\FormeOgive $formeOgive
     * @return Mortier
     */
    public function setFormeOgive(\FeodBundle\Entity\FormeOgive $formeOgive = null)
    {
        $this->formeOgive = $formeOgive;

        return $this;
    }

    /**
     * Get formeOgive
     *
     * @return \FeodBundle\Entity\FormeOgive
     */
    public function getFormeOgive()
    {
        return $this->formeOgive;
    }

    /**
     * Set typeRenflement
     *
     * @param \FeodBundle\Entity\TypeDeRenflement $typeRenflement
     * @return Mortier
     */
    public function setTypeRenflement(\FeodBundle\Entity\TypeDeRenflement $typeRenflement = null)
    {
        $this->typeRenflement = $typeRenflement;

        return $this;
    }

    /**
     * Get typeDeRenflement
     *
     * @return \FeodBundle\Entity\TypeDeRenflement
     */
    public function getTypeRenflement()
    {
        return $this->typeRenflement;
    }

    /**
     * Set ceintures
     *
     * @param \FeodBundle\Entity\Ceintures $ceintures
     * @return Mortier
     */
    public function setCeintures(\FeodBundle\Entity\Ceintures $ceintures = null)
    {
        $this->ceintures = $ceintures;

        return $this;
    }

    /**
     * Get ceintures
     *
     * @return \FeodBundle\Entity\Ceintures
     */
    public function getCeintures()
    {
        return $this->ceintures;
    }

    /**
     * Set typeEmpennage
     *
     * @param \FeodBundle\Entity\TypeEmpennage $typeEmpennage
     * @return Mortier
     */
    public function setTypeEmpennage(\FeodBundle\Entity\TypeEmpennage $typeEmpennage = null)
    {
        $this->typeEmpennage = $typeEmpennage;

        return $this;
    }

    /**
     * Get typeEmpennage
     *
     * @return \FeodBundle\Entity\TypeEmpennage
     */
    public function getTypeEmpennage()
    {
        return $this->typeEmpennage;
    }

    /**
     * Set couleurCulot
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurCulot
     * @return Mortier
     */
    public function setCouleurCulot(\FeodBundle\Entity\CouleurFond $couleurCulot = null)
    {
        $this->couleurCulot = $couleurCulot;

        return $this;
    }

    /**
     * Get couleurCulot
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurCulot()
    {
        return $this->couleurCulot;
    }

    /**
     * Set couleurInscCulot
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurInscCulot
     * @return Mortier
     */
    public function setCouleurInscCulot(\FeodBundle\Entity\CouleurFond $couleurInscCulot = null)
    {
        $this->couleurInscCulot = $couleurInscCulot;

        return $this;
    }

    /**
     * Get couleurInscCulot
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurInscCulot()
    {
        return $this->couleurInscCulot;
    }

    /**
     * Set typeInscCulot
     *
     * @param \FeodBundle\Entity\TypeMarquage $typeInscCulot
     * @return Mortier
     */
    public function setTypeInscCulot(\FeodBundle\Entity\TypeMarquage $typeInscCulot = null)
    {
        $this->typeInscCulot = $typeInscCulot;

        return $this;
    }

    /**
     * Get typeInscCulot
     *
     * @return \FeodBundle\Entity\TypeMarquage
     */
    public function getTypeInscCulot()
    {
        return $this->typeInscCulot;
    }

    /**
     * Set couleurOgive
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurOgive
     * @return Mortier
     */
    public function setCouleurOgive(\FeodBundle\Entity\CouleurFond $couleurOgive = null)
    {
        $this->couleurOgive = $couleurOgive;

        return $this;
    }

    /**
     * Get couleurOgive
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurOgive()
    {
        return $this->couleurOgive;
    }

    /**
     * Set couleurInscOgive
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurInscOgive
     * @return Mortier
     */
    public function setCouleurInscOgive(\FeodBundle\Entity\CouleurFond $couleurInscOgive = null)
    {
        $this->couleurInscOgive = $couleurInscOgive;

        return $this;
    }

    /**
     * Get couleurInscOgive
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurInscOgive()
    {
        return $this->couleurInscOgive;
    }

    /**
     * Set typeInscOgive
     *
     * @param \FeodBundle\Entity\TypeMarquage $typeInscOgive
     * @return Mortier
     */
    public function setTypeInscOgive(\FeodBundle\Entity\TypeMarquage $typeInscOgive = null)
    {
        $this->typeInscOgive = $typeInscOgive;

        return $this;
    }

    /**
     * Get typeInscOgive
     *
     * @return \FeodBundle\Entity\TypeMarquage
     */
    public function getTypeInscOgive()
    {
        return $this->typeInscOgive;
    }

    /**
     * Set couleurCorps
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurCorps
     * @return Mortier
     */
    public function setCouleurCorps(\FeodBundle\Entity\CouleurFond $couleurCorps = null)
    {
        $this->couleurCorps = $couleurCorps;

        return $this;
    }

    /**
     * Get couleurCorps
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurCorps()
    {
        return $this->couleurCorps;
    }

    /**
     * Set couleurInscCorps
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurInscCorps
     * @return Mortier
     */
    public function setCouleurInscCorps(\FeodBundle\Entity\CouleurFond $couleurInscCorps = null)
    {
        $this->couleurInscCorps = $couleurInscCorps;

        return $this;
    }

    /**
     * Get couleurInscCorps
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurInscCorps()
    {
        return $this->couleurInscCorps;
    }

    /**
     * Set typeInscCorps
     *
     * @param \FeodBundle\Entity\TypeMarquage $typeInscCorps
     * @return Mortier
     */
    public function setTypeInscCorps(\FeodBundle\Entity\TypeMarquage $typeInscCorps = null)
    {
        $this->typeInscCorps = $typeInscCorps;

        return $this;
    }

    /**
     * Get typeInscCorps
     *
     * @return \FeodBundle\Entity\TypeMarquage
     */
    public function getTypeInscCorps()
    {
        return $this->typeInscCorps;
    }

    /**
     * Add natureChargeMili
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeMili
     * @return Mortier
     */
    public function addNatureChargeMili(\FeodBundle\Entity\NatureChargeMili $natureChargeMili)
    {
        $this->natureChargeMili[] = $natureChargeMili;

        return $this;
    }

    /**
     * Remove natureChargeMili
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeMili
     */
    public function removeNatureChargeMili(\FeodBundle\Entity\NatureChargeMili $natureChargeMili)
    {
        $this->natureChargeMili->removeElement($natureChargeMili);
    }

    /**
     * Get natureChargeMili
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNatureChargeMili()
    {
        return $this->natureChargeMili;
    }

    /**
     * Set uniteQMA
     *
     * @param \FeodBundle\Entity\UnitesMasseVolume $uniteQMA
     * @return Mortier
     */
    public function setUniteQMA(\FeodBundle\Entity\UnitesMasseVolume $uniteQMA = null)
    {
        $this->uniteQMA = $uniteQMA;

        return $this;
    }

    /**
     * Get uniteQMA
     *
     * @return \FeodBundle\Entity\UnitesMasseVolume
     */
    public function getUniteQMA()
    {
        return $this->uniteQMA;
    }

    /**
     * Set effetChargeDisp
     *
     * @param \FeodBundle\Entity\EffetChargeDispersion $effetChargeDisp
     * @return Mortier
     */
    public function setEffetChargeDisp(\FeodBundle\Entity\EffetChargeDispersion $effetChargeDisp = null)
    {
        $this->effetChargeDisp = $effetChargeDisp;

        return $this;
    }

    /**
     * Get effetChargeDisp
     *
     * @return \FeodBundle\Entity\EffetChargeDispersion
     */
    public function getEffetChargeDisp()
    {
        return $this->effetChargeDisp;
    }

    /**
     * Set chargement
     *
     * @param \FeodBundle\Entity\Chargement $chargement
     * @return Mortier
     */
    public function setChargement(\FeodBundle\Entity\Chargement $chargement = null)
    {
        $this->chargement = $chargement;

        return $this;
    }

    /**
     * Get chargement
     *
     * @return \FeodBundle\Entity\Chargement
     */
    public function getChargement()
    {
        return $this->chargement;
    }

    /**
     * Set formeAilettes
     *
     * @param \FeodBundle\Entity\FormeAilettes $formeAilettes
     * @return Mortier
     */
    public function setFormeAilettes(\FeodBundle\Entity\FormeAilettes $formeAilettes = null)
    {
        $this->formeAilettes = $formeAilettes;

        return $this;
    }

    /**
     * Get formeAilettes
     *
     * @return \FeodBundle\Entity\FormeAilettes
     */
    public function getFormeAilettes()
    {
        return $this->formeAilettes;
    }

    /**
     * Set typeAilettes
     *
     * @param \FeodBundle\Entity\TypeAilettes $typeAilettes
     * @return Mortier
     */
    public function setTypeAilettes(\FeodBundle\Entity\TypeAilettes $typeAilettes = null)
    {
        $this->typeAilettes = $typeAilettes;

        return $this;
    }

    /**
     * Get typeAilettes
     *
     * @return \FeodBundle\Entity\TypeAilettes
     */
    public function getTypeAilettes()
    {
        return $this->typeAilettes;
    }

    /**
     * Set positionMan
     *
     * @param \FeodBundle\Entity\Position $positionMan
     * @return Mortier
     */
    public function setPositionMan(\FeodBundle\Entity\Position $positionMan = null)
    {
        $this->positionMan = $positionMan;

        return $this;
    }

    /**
     * Get positionMan
     *
     * @return \FeodBundle\Entity\Position
     */
    public function getPositionMan()
    {
        return $this->positionMan;
    }

    /**
     * Set typeFusee
     *
     * @param \FeodBundle\Entity\TypeFusee $typeFusee
     * @return Mortier
     */
    public function setTypeFusee(\FeodBundle\Entity\TypeFusee $typeFusee = null)
    {
        $this->typeFusee = $typeFusee;

        return $this;
    }

    /**
     * Get typeFusee
     *
     * @return \FeodBundle\Entity\TypeFusee
     */
    public function getTypeFusee()
    {
        return $this->typeFusee;
    }

    /**
     * Set typeFusee1
     *
     * @param \FeodBundle\Entity\TypeFusee $typeFusee1
     * @return Mortier
     */
    public function setTypeFusee1(\FeodBundle\Entity\TypeFusee $typeFusee1 = null)
    {
        $this->typeFusee1 = $typeFusee1;

        return $this;
    }

    /**
     * Get typeFusee1
     *
     * @return \FeodBundle\Entity\TypeFusee
     */
    public function getTypeFusee1()
    {
        return $this->typeFusee1;
    }

    /**
     * Set typeFusee2
     *
     * @param \FeodBundle\Entity\TypeFusee $typeFusee2
     * @return Mortier
     */
    public function setTypeFusee2(\FeodBundle\Entity\TypeFusee $typeFusee2 = null)
    {
        $this->typeFusee2 = $typeFusee2;

        return $this;
    }

    /**
     * Get typeFusee2
     *
     * @return \FeodBundle\Entity\TypeFusee
     */
    public function getTypeFusee2()
    {
        return $this->typeFusee2;
    }

    /**
     * Set typeFusee3
     *
     * @param \FeodBundle\Entity\TypeFusee $typeFusee3
     * @return Mortier
     */
    public function setTypeFusee3(\FeodBundle\Entity\TypeFusee $typeFusee3 = null)
    {
        $this->typeFusee3 = $typeFusee3;

        return $this;
    }

    /**
     * Get typeFusee3
     *
     * @return \FeodBundle\Entity\TypeFusee
     */
    public function getTypeFusee3()
    {
        return $this->typeFusee3;
    }

    /**
     * Set typeFusee4
     *
     * @param \FeodBundle\Entity\TypeFusee $typeFusee4
     * @return Mortier
     */
    public function setTypeFusee4(\FeodBundle\Entity\TypeFusee $typeFusee4 = null)
    {
        $this->typeFusee4 = $typeFusee4;

        return $this;
    }

    /**
     * Get typeFusee4
     *
     * @return \FeodBundle\Entity\TypeFusee
     */
    public function getTypeFusee4()
    {
        return $this->typeFusee4;
    }

    /**
     * Set assemblage
     *
     * @param \FeodBundle\Entity\Assemblage $assemblage
     * @return Mortier
     */
    public function setAssemblage(\FeodBundle\Entity\Assemblage $assemblage = null)
    {
        $this->assemblage = $assemblage;

        return $this;
    }

    /**
     * Get assemblage
     *
     * @return \FeodBundle\Entity\Assemblage
     */
    public function getAssemblage()
    {
        return $this->assemblage;
    }

    /**
     * Set couleurBandeCorps1
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeCorps1
     * @return Mortier
     */
    public function setCouleurBandeCorps1(\FeodBundle\Entity\CouleurFond $couleurBandeCorps1 = null)
    {
        $this->couleurBandeCorps1 = $couleurBandeCorps1;

        return $this;
    }

    /**
     * Get couleurBandeCorps1
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeCorps1()
    {
        return $this->couleurBandeCorps1;
    }

    /**
     * Set couleurBandeCorps2
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeCorps2
     * @return Mortier
     */
    public function setCouleurBandeCorps2(\FeodBundle\Entity\CouleurFond $couleurBandeCorps2 = null)
    {
        $this->couleurBandeCorps2 = $couleurBandeCorps2;

        return $this;
    }

    /**
     * Get couleurBandeCorps2
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeCorps2()
    {
        return $this->couleurBandeCorps2;
    }

    /**
     * Set couleurBandeCorps3
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeCorps3
     * @return Mortier
     */
    public function setCouleurBandeCorps3(\FeodBundle\Entity\CouleurFond $couleurBandeCorps3 = null)
    {
        $this->couleurBandeCorps3 = $couleurBandeCorps3;

        return $this;
    }

    /**
     * Get couleurBandeCorps3
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeCorps3()
    {
        return $this->couleurBandeCorps3;
    }

    /**
     * Set couleurBandeCorps4
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeCorps4
     * @return Mortier
     */
    public function setCouleurBandeCorps4(\FeodBundle\Entity\CouleurFond $couleurBandeCorps4 = null)
    {
        $this->couleurBandeCorps4 = $couleurBandeCorps4;

        return $this;
    }

    /**
     * Get couleurBandeCorps4
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeCorps4()
    {
        return $this->couleurBandeCorps4;
    }

    /**
     * Set couleurBandeOgive1
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeOgive1
     * @return Mortier
     */
    public function setCouleurBandeOgive1(\FeodBundle\Entity\CouleurFond $couleurBandeOgive1 = null)
    {
        $this->couleurBandeOgive1 = $couleurBandeOgive1;

        return $this;
    }

    /**
     * Get couleurBandeOgive1
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeOgive1()
    {
        return $this->couleurBandeOgive1;
    }

    /**
     * Set couleurBandeOgive2
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeOgive2
     * @return Mortier
     */
    public function setCouleurBandeOgive2(\FeodBundle\Entity\CouleurFond $couleurBandeOgive2 = null)
    {
        $this->couleurBandeOgive2 = $couleurBandeOgive2;

        return $this;
    }

    /**
     * Get couleurBandeOgive2
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeOgive2()
    {
        return $this->couleurBandeOgive2;
    }

    /**
     * Set couleurBandeOgive3
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeOgive3
     * @return Mortier
     */
    public function setCouleurBandeOgive3(\FeodBundle\Entity\CouleurFond $couleurBandeOgive3 = null)
    {
        $this->couleurBandeOgive3 = $couleurBandeOgive3;

        return $this;
    }

    /**
     * Get couleurBandeOgive3
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeOgive3()
    {
        return $this->couleurBandeOgive3;
    }

    /**
     * Set couleurBandeOgive4
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeOgive4
     * @return Mortier
     */
    public function setCouleurBandeOgive4(\FeodBundle\Entity\CouleurFond $couleurBandeOgive4 = null)
    {
        $this->couleurBandeOgive4 = $couleurBandeOgive4;

        return $this;
    }

    /**
     * Get couleurBandeOgive4
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeOgive4()
    {
        return $this->couleurBandeOgive4;
    }
    
    /**
     * Set copieExistante
     *
     * @param string $copieExistante
     * @return Artillerie
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
	
	public function getNomSousMunition() { return $this->NomSousMunition; }
	public function setNomSousMunition($var) { $this->NomSousMunition = $var; }
}
