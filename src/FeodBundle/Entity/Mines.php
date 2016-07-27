<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * Mines
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\MinesRepository")
 */
class Mines extends Munition
{

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="numero", type="integer")
     */
    private $numero;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="commandeADistance", type="boolean")
     */
    private $commandeADistance;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="compteurDeVehicule", type="boolean")
     */
    private $compteurDeVehicule;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="identifiant", type="string", length=255)
     */
    private $identifiant;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="antiRelevage", type="boolean")
     */
    private $antiRelevage;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="antiDemontage", type="boolean")
     */
    private $antiDemontage;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="chargeAmovible", type="boolean")
     */
    private $chargeAmovible;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeDepotage", type="float")
     */
    private $poidsChargeDepotage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeMili", type="float")
     */
    private $poidsChargeMili;
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeMiliCalcule", type="float")
     */
    private $poidsChargeMiliCalcule;
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Amorcage")
    */
    private $nomAllumeurMine;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Amorcage")
    */
    private $nomAllumeurMine1;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Amorcage")
    */
    private $nomAllumeurMine2;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="autoNeutra", type="boolean")
     */
    private $autoNeutra;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="DelaiAutoNeutralisation", type="string", length=255)
     */
    private $DelaiAutoNeutralisation;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="autoDestruction", type="boolean")
     */
    private $autoDestruction;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="DelaiAutoDestruction", type="string", length=255)
     */
    private $DelaiAutoDestruction;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="hauteurAvecAll", type="float")
     */
    private $hauteurAvecAll;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="hauteurSansAll", type="float")
     */
    private $hauteurSansAll;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longueur", type="float")
     */
    private $longueur;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="largeur", type="float")
     */
    private $largeur;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametre", type="float")
     */
    private $diametre;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsMine", type="float")
     */
    private $poidsMine;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsMineCalcule", type="float")
     */
    private $poidsMineCalcule;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="uniteSI_PdsMineCalcule", type="string", length=255)
     */
    private $uniteSIPdsMineCalcule;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="presenceSupport", type="boolean")
     */
    private $presenceSupport;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="presenceDispositifTransport", type="boolean")
     */
    private $presenceDispositifTransport;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="puitAmorcage", type="boolean")
     */
    private $puitAmorcage;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombrePuitAmorcage", type="integer")
     */
    private $nombrePuitAmorcage;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="alveolePiegeage", type="boolean")
     */
    private $alveolePiegeage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="epaisseurEnveloppe", type="float")
     */
    private $epaisseurEnveloppe;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombreAlveolePiegeage", type="integer")
     */
    private $nombreAlveolePiegeage;
    
    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrAllumeur", type="integer")
     */
    private $nbrAllumeur;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="dispositifVisee", type="boolean")
     */
    private $dispositifVisee;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="bandeCouleurNombre", type="integer")
     */
    private $bandeCouleurNombre;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageAFroidTexte", type="string", length=255)
     */
    private $marquageAFroidTexte;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageEnReliefTexte", type="string", length=255)
     */
    private $marquageEnReliefTexte;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageEnCouleurTexte", type="string", length=255)
     */
    private $marquageEnCouleurTexte;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="quantiteMatiereActive", type="integer")
     */
    private $quantiteMatiereActive;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="QMA_Calculee", type="float")
     */
    private $qMACalculee;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="UniteSI_QMACalculee", type="string", length=255)
     */
    private $uniteSIQMACalculee;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="relaisAmorcage", type="boolean")
     */
    private $relaisAmorcage;
    
    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="PresenceAllumeurPiegeage", type="boolean")
     */
    private $PresenceAllumeurPiegeage;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrRelais", type="integer")
     */
    private $nbrRelais;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="amorce", type="boolean")
     */
    private $amorce;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrAmorce", type="integer")
     */
    private $nbrAmorce;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="detonateur", type="boolean")
     */
    private $detonateur;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrDetonateur", type="integer")
     */
    private $nbrDetonateur;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="inflammateur", type="boolean")
     */
    private $inflammateur;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nbrInflammateur", type="integer")
     */
    private $nbrInflammateur;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="retard", type="boolean")
     */
    private $retard;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="delaiRetard", type="string", length=255)
     */
    private $delaiRetard;

    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Amorcage")
    */
    private $nomAllumeur;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Amorcage")
    */
    private $nomAllumeur1;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Amorcage")
    */
    private $nomAllumeur2;

  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeAllumeur")
   */
    private $typeAllumeur;
    
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeAllumeur")
   */
    private $typeAllumeur1;
    
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeAllumeur")
   */
    private $typeAllumeur2;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="delaiArmement", type="string", length=255)
     */
    private $delaiArmement;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="neutralisationDestructionIME", type="text")
     */
    private $neutralisationDestructionIME;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="diffusionExterne", type="string", length=255)
     */

    private $diffusionExterne;
	
	/**
     * @var string
     *
     * @ORM\Column(nullable=true, name="copieExistante", type="string", length=255)
     */
    private $copieExistante;


    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionDispositifTransport")
     */
    private $positionDispositifTransport;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\ModePose")
   * @ORM\JoinTable(name="mines_modepose",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="modepose_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $modePose;
  
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureChargeMili")
   * @ORM\JoinTable(name="mines_naturechargemili",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="naturechargemili_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $natureChargeMili;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureChargeDispersion")
   * @ORM\JoinTable(name="mines_naturechargedispersion",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="naturechargedispersion_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $natureChargeDepotage;
  
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureChargeMili")
   * @ORM\JoinTable(name="mines_naturechargerelais",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="naturechargerelais_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $natureChargeRelais;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMine")
   */
  private $typeMine;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMine2")
   */
  private $sousTypeMine;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\EffetChargeMili")
   */
  private $EffetChargeMili;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Fabrication")
   */
  private $fabrication;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\DispositifSecurite")
   * @ORM\JoinTable(name="mines_dispositifsecurite",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="dispositifsecurite_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $dispositifSecurite;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Sensibilite")
   */
  private $sensibilite;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\Declenchement")
   * @ORM\JoinTable(name="mines_declenchement",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="declenchement_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $declenchement;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Detectabilite")
   */
  private $detectabilite;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeMine")
   */
  private $formeMine;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UniteMasse")
   */
  private $unitePoidsMine;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Enveloppe")
   */
  private $natureEnveloppe;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeSupport")
   */
  private $typeSupport;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeDispositifTransport")
   */
  private $typeDispositifTransport;
  
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionAllumeurOrigine")
   * @ORM\JoinTable(name="mines_positionallumeurorigine",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionallumeurorigine_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionAllumeurOrigine;
  
    /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionAllumeurOrigine")
   * @ORM\JoinTable(name="mines_positionallumeurorigine1",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionallumeurorigine_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionAllumeurOrigine1;
  
    /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionAllumeurOrigine")
   * @ORM\JoinTable(name="mines_positionallumeurorigine2",
   *  joinColumns={@ORM\JoinColumn(name="mines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionallumeurorigine_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionAllumeurOrigine2;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionMarquage")
   */
  private $positionAlveolePiegeage;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionMarquage")
   */
  private $positionAlveolePiegeage1;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionMarquage")
   */
  private $positionAlveolePiegeage2;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurPrincipale;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurSecondaire;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $bandeCouleur1;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $bandeCouleur2;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $bandeCouleur3;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $bandeCouleur4;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
   */
  private $typeMarquage;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionMarquage")
   */
  private $marquageAFroidPosition;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionMarquage")
   */
  private $marquageEnReliefPosition;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionMarquage")
   */
  private $marquageEnCouleurPosition;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Conditionnement")
   */
  private $conditionnement;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UnitesMasseVolume")
   */
  private $uniteQMA;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureRelais")
   */
  private $natureRelais1;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureRelais")
   */
  private $natureRelais2;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureRelais")
   */
  private $natureRelais3;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\NatureRelais")
   */
  private $natureRelais4;
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->modePose = new \Doctrine\Common\Collections\ArrayCollection();
        $this->natureChargeMili = new \Doctrine\Common\Collections\ArrayCollection();
        $this->natureChargeDepotage = new \Doctrine\Common\Collections\ArrayCollection();
        $this->natureChargeRelais = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dispositifSecurite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->declenchement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positionAllumeurOrigine = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positionAllumeurOrigine1 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positionAllumeurOrigine2 = new \Doctrine\Common\Collections\ArrayCollection();
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
        return parent::fileName($this->poidsChargeMiliCalcule.'kg');
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Mines
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set commandeADistance
     *
     * @param boolean $commandeADistance
     * @return Mines
     */
    public function setCommandeADistance($commandeADistance)
    {
        $this->commandeADistance = $commandeADistance;

        return $this;
    }

    /**
     * Get commandeADistance
     *
     * @return boolean
     */
    public function getCommandeADistance()
    {
        return $this->commandeADistance;
    }

    /**
     * Set compteurDeVehicule
     *
     * @param boolean $compteurDeVehicule
     * @return Mines
     */
    public function setCompteurDeVehicule($compteurDeVehicule)
    {
        $this->compteurDeVehicule = $compteurDeVehicule;

        return $this;
    }

    /**
     * Get compteurDeVehicule
     *
     * @return boolean
     */
    public function getCompteurDeVehicule()
    {
        return $this->compteurDeVehicule;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     * @return Mines
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set antiRelevage
     *
     * @param boolean $antiRelevage
     * @return Mines
     */
    public function setAntiRelevage($antiRelevage)
    {
        $this->antiRelevage = $antiRelevage;

        return $this;
    }

    /**
     * Get antiRelevage
     *
     * @return boolean
     */
    public function getAntiRelevage()
    {
        return $this->antiRelevage;
    }

    /**
     * Set antiDemontage
     *
     * @param boolean $antiDemontage
     * @return Mines
     */
    public function setAntiDemontage($antiDemontage)
    {
        $this->antiDemontage = $antiDemontage;

        return $this;
    }

    /**
     * Get antiDemontage
     *
     * @return boolean
     */
    public function getAntiDemontage()
    {
        return $this->antiDemontage;
    }

    /**
     * Set poidsChargeDepotage
     *
     * @param float $poidsChargeDepotage
     * @return Mines
     */
    public function setPoidsChargeDepotage($poidsChargeDepotage)
    {
        $this->poidsChargeDepotage = $poidsChargeDepotage;

        return $this;
    }

    /**
     * Get poidsChargeDepotage
     *
     * @return float
     */
    public function getPoidsChargeDepotage()
    {
        return $this->poidsChargeDepotage;
    }

    /**
     * Set poidsChargeMili
     *
     * @param float $poidsChargeMili
     * @return Mines
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
     * Set nomAllumeurMine
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeurMine
     * @return Mines
     */
    public function setNomAllumeurMine(\FeodBundle\Entity\Amorcage $nomAllumeurMine = null)
    {
        $this->nomAllumeurMine = $nomAllumeurMine;

        return $this;
    }

    /**
     * Get nomAllumeurMine
     *
     * @return \FeodBundle\Entity\Amorcage 
     */
    public function getNomAllumeurMine()
    {
        return $this->nomAllumeurMine;
    }

    /**
     * Set autoNeutra
     *
     * @param boolean $autoNeutra
     * @return Mines
     */
    public function setAutoNeutra($autoNeutra)
    {
        $this->autoNeutra = $autoNeutra;

        return $this;
    }

    /**
     * Get autoNeutra
     *
     * @return boolean
     */
    public function getAutoNeutra()
    {
        return $this->autoNeutra;
    }

    /**
     * Set DelaiAutoNeutralisation
     *
     * @param integer $DelaiAutoNeutralisation
     * @return Mines
     */
    public function setDelaiAutoNeutralisation($DelaiAutoNeutralisation)
    {
        $this->DelaiAutoNeutralisation = $DelaiAutoNeutralisation;

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

    /**
     * Set autoDestruction
     *
     * @param boolean $autoDestruction
     * @return Mines
     */
    public function setAutoDestruction($autoDestruction)
    {
        $this->autoDestruction = $autoDestruction;

        return $this;
    }

    /**
     * Get autoDestruction
     *
     * @return boolean
     */
    public function getAutoDestruction()
    {
        return $this->autoDestruction;
    }

    /**
     * Set DelaiAutoDestruction
     *
     * @param string $DelaiAutoDestruction
     * @return Mines
     */
    public function setDelaiAutoDestruction($DelaiAutoDestruction)
    {
        $this->DelaiAutoDestruction = $DelaiAutoDestruction;

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
     * Set hauteurAvecAll
     *
     * @param float $hauteurAvecAll
     * @return Mines
     */
    public function setHauteurAvecAll($hauteurAvecAll)
    {
        $this->hauteurAvecAll = $hauteurAvecAll;

        return $this;
    }

    /**
     * Get hauteurAvecAll
     *
     * @return float
     */
    public function getHauteurAvecAll()
    {
        return $this->hauteurAvecAll;
    }

    /**
     * Set hauteurSansAll
     *
     * @param float $hauteurSansAll
     * @return Mines
     */
    public function setHauteurSansAll($hauteurSansAll)
    {
        $this->hauteurSansAll = $hauteurSansAll;

        return $this;
    }

    /**
     * Get hauteurSansAll
     *
     * @return float
     */
    public function getHauteurSansAll()
    {
        return $this->hauteurSansAll;
    }

    /**
     * Set longueur
     *
     * @param float $longueur
     * @return Mines
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur
     *
     * @return float
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set largeur
     *
     * @param float $largeur
     * @return Mines
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return float
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set diametre
     *
     * @param float $diametre
     * @return Mines
     */
    public function setDiametre($diametre)
    {
        $this->diametre = $diametre;

        return $this;
    }

    /**
     * Get diametre
     *
     * @return float
     */
    public function getDiametre()
    {
        return $this->diametre;
    }

    /**
     * Set poidsMine
     *
     * @param float $poidsMine
     * @return Mines
     */
    public function setPoidsMine($poidsMine)
    {
        $this->poidsMine = $poidsMine;

        return $this;
    }

    /**
     * Get poidsMine
     *
     * @return float
     */
    public function getPoidsMine()
    {
        return $this->poidsMine;
    }

    /**
     * Set poidsMineCalcule
     *
     * @param float $poidsMineCalcule
     * @return Mines
     */
    public function setPoidsMineCalcule($poidsMineCalcule)
    {
        $this->poidsMineCalcule = $poidsMineCalcule;

        return $this;
    }

    /**
     * Get poidsMineCalcule
     *
     * @return float
     */
    public function getPoidsMineCalcule()
    {
        return $this->poidsMineCalcule;
    }

    /**
     * Set uniteSIPdsMineCalcule
     *
     * @param string $uniteSIPdsMineCalcule
     * @return Mines
     */
    public function setUniteSIPdsMineCalcule($uniteSIPdsMineCalcule)
    {
        $this->uniteSIPdsMineCalcule = $uniteSIPdsMineCalcule;

        return $this;
    }

    /**
     * Get uniteSIPdsMineCalcule
     *
     * @return string
     */
    public function getUniteSIPdsMineCalcule()
    {
        return $this->uniteSIPdsMineCalcule;
    }

    /**
     * Set presenceSupport
     *
     * @param boolean $presenceSupport
     * @return Mines
     */
    public function setPresenceSupport($presenceSupport)
    {
        $this->presenceSupport = $presenceSupport;

        return $this;
    }

    /**
     * Get presenceSupport
     *
     * @return boolean
     */
    public function getPresenceSupport()
    {
        return $this->presenceSupport;
    }

    /**
     * Set presenceDispositifTransport
     *
     * @param boolean $presenceDispositifTransport
     * @return Mines
     */
    public function setPresenceDispositifTransport($presenceDispositifTransport)
    {
        $this->presenceDispositifTransport = $presenceDispositifTransport;

        return $this;
    }

    /**
     * Get presenceDispositifTransport
     *
     * @return boolean
     */
    public function getPresenceDispositifTransport()
    {
        return $this->presenceDispositifTransport;
    }

    /**
     * Set positionDispositifTransport
     *
     * @param string $positionDispositifTransport
     * @return Mines
     */
    public function setPositionDispositifTransport($positionDispositifTransport)
    {
        $this->positionDispositifTransport = $positionDispositifTransport;

        return $this;
    }

    /**
     * Get positionDispositifTransport
     *
     * @return string
     */
    public function getPositionDispositifTransport()
    {
        return $this->positionDispositifTransport;
    }

    /**
     * Set puitAmorcage
     *
     * @param boolean $puitAmorcage
     * @return Mines
     */
    public function setPuitAmorcage($puitAmorcage)
    {
        $this->puitAmorcage = $puitAmorcage;

        return $this;
    }

    /**
     * Get puitAmorcage
     *
     * @return boolean
     */
    public function getPuitAmorcage()
    {
        return $this->puitAmorcage;
    }

    /**
     * Set nombrePuitAmorcage
     *
     * @param integer $nombrePuitAmorcage
     * @return Mines
     */
    public function setNombrePuitAmorcage($nombrePuitAmorcage)
    {
        $this->nombrePuitAmorcage = $nombrePuitAmorcage;

        return $this;
    }

    /**
     * Get nombrePuitAmorcage
     *
     * @return integer
     */
    public function getNombrePuitAmorcage()
    {
        return $this->nombrePuitAmorcage;
    }

    /**
     * Set alveolePiegeage
     *
     * @param boolean $alveolePiegeage
     * @return Mines
     */
    public function setAlveolePiegeage($alveolePiegeage)
    {
        $this->alveolePiegeage = $alveolePiegeage;

        return $this;
    }

    /**
     * Get alveolePiegeage
     *
     * @return boolean
     */
    public function getAlveolePiegeage()
    {
        return $this->alveolePiegeage;
    }

    /**
     * Set nombreAlveolePiegeage
     *
     * @param integer $nombreAlveolePiegeage
     * @return Mines
     */
    public function setNombreAlveolePiegeage($nombreAlveolePiegeage)
    {
        $this->nombreAlveolePiegeage = $nombreAlveolePiegeage;

        return $this;
    }

    /**
     * Get nombreAlveolePiegeage
     *
     * @return integer
     */
    public function getNombreAlveolePiegeage()
    {
        return $this->nombreAlveolePiegeage;
    }

    /**
     * Set dispositifVisee
     *
     * @param boolean $dispositifVisee
     * @return Mines
     */
    public function setDispositifVisee($dispositifVisee)
    {
        $this->dispositifVisee = $dispositifVisee;

        return $this;
    }

    /**
     * Get dispositifVisee
     *
     * @return boolean
     */
    public function getDispositifVisee()
    {
        return $this->dispositifVisee;
    }

    /**
     * Set bandeCouleurNombre
     *
     * @param integer $bandeCouleurNombre
     * @return Mines
     */
    public function setBandeCouleurNombre($bandeCouleurNombre)
    {
        $this->bandeCouleurNombre = $bandeCouleurNombre;

        return $this;
    }

    /**
     * Get bandeCouleurNombre
     *
     * @return integer
     */
    public function getBandeCouleurNombre()
    {
        return $this->bandeCouleurNombre;
    }

    /**
     * Set marquageAFroidTexte
     *
     * @param string $marquageAFroidTexte
     * @return Mines
     */
    public function setMarquageAFroidTexte($marquageAFroidTexte)
    {
        $this->marquageAFroidTexte = $marquageAFroidTexte;

        return $this;
    }

    /**
     * Get marquageAFroidTexte
     *
     * @return string
     */
    public function getMarquageAFroidTexte()
    {
        return $this->marquageAFroidTexte;
    }

    /**
     * Set marquageEnReliefTexte
     *
     * @param string $marquageEnReliefTexte
     * @return Mines
     */
    public function setMarquageEnReliefTexte($marquageEnReliefTexte)
    {
        $this->marquageEnReliefTexte = $marquageEnReliefTexte;

        return $this;
    }

    /**
     * Get marquageEnReliefTexte
     *
     * @return string
     */
    public function getMarquageEnReliefTexte()
    {
        return $this->marquageEnReliefTexte;
    }

    /**
     * Set marquageEnCouleurTexte
     *
     * @param string $marquageEnCouleurTexte
     * @return Mines
     */
    public function setMarquageEnCouleurTexte($marquageEnCouleurTexte)
    {
        $this->marquageEnCouleurTexte = $marquageEnCouleurTexte;

        return $this;
    }

    /**
     * Get marquageEnCouleurTexte
     *
     * @return string
     */
    public function getMarquageEnCouleurTexte()
    {
        return $this->marquageEnCouleurTexte;
    }

    /**
     * Set quantiteMatiereActive
     *
     * @param integer $quantiteMatiereActive
     * @return Mines
     */
    public function setQuantiteMatiereActive($quantiteMatiereActive)
    {
        $this->quantiteMatiereActive = $quantiteMatiereActive;

        return $this;
    }

    /**
     * Get quantiteMatiereActive
     *
     * @return integer
     */
    public function getQuantiteMatiereActive()
    {
        return $this->quantiteMatiereActive;
    }

    /**
     * Set qMACalculee
     *
     * @param float $qMACalculee
     * @return Mines
     */
    public function setQMACalculee($qMACalculee)
    {
        $this->qMACalculee = $qMACalculee;

        return $this;
    }

    /**
     * Get qMACalculee
     *
     * @return float
     */
    public function getQMACalculee()
    {
        return $this->qMACalculee;
    }

    /**
     * Set uniteSIQMACalculee
     *
     * @param string $uniteSIQMACalculee
     * @return Mines
     */
    public function setUniteSIQMACalculee($uniteSIQMACalculee)
    {
        $this->uniteSIQMACalculee = $uniteSIQMACalculee;

        return $this;
    }

    /**
     * Get uniteSIQMACalculee
     *
     * @return string
     */
    public function getUniteSIQMACalculee()
    {
        return $this->uniteSIQMACalculee;
    }

    /**
     * Set relaisAmorcage
     *
     * @param boolean $relaisAmorcage
     * @return Mines
     */
    public function setRelaisAmorcage($relaisAmorcage)
    {
        $this->relaisAmorcage = $relaisAmorcage;

        return $this;
    }

    /**
     * Get relaisAmorcage
     *
     * @return boolean
     */
    public function getRelaisAmorcage()
    {
        return $this->relaisAmorcage;
    }

    /**
     * Set nbrRelais
     *
     * @param integer $nbrRelais
     * @return Mines
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
     * Set amorce
     *
     * @param boolean $amorce
     * @return Mines
     */
    public function setAmorce($amorce)
    {
        $this->amorce = $amorce;

        return $this;
    }

    /**
     * Get amorce
     *
     * @return boolean
     */
    public function getAmorce()
    {
        return $this->amorce;
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
     * Set detonateur
     *
     * @param boolean $detonateur
     * @return Mines
     */
    public function setDetonateur($detonateur)
    {
        $this->detonateur = $detonateur;

        return $this;
    }

    /**
     * Get detonateur
     *
     * @return boolean
     */
    public function getDetonateur()
    {
        return $this->detonateur;
    }

    /**
     * Set nbrDetonateur
     *
     * @param integer $nbrDetonateur
     * @return Mines
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

    /**
     * Set inflammateur
     *
     * @param boolean $inflammateur
     * @return Mines
     */
    public function setInflammateur($inflammateur)
    {
        $this->inflammateur = $inflammateur;

        return $this;
    }

    /**
     * Get inflammateur
     *
     * @return boolean
     */
    public function getInflammateur()
    {
        return $this->inflammateur;
    }

    /**
     * Set nbrInflammateur
     *
     * @param integer $nbrInflammateur
     * @return Mines
     */
    public function setNbrInflammateur($nbrInflammateur)
    {
        $this->nbrInflammateur = $nbrInflammateur;

        return $this;
    }

    /**
     * Get nbrInflammateur
     *
     * @return integer
     */
    public function getNbrInflammateur()
    {
        return $this->nbrInflammateur;
    }

    /**
     * Set retard
     *
     * @param boolean $retard
     * @return Mines
     */
    public function setRetard($retard)
    {
        $this->retard = $retard;

        return $this;
    }

    /**
     * Get retard
     *
     * @return boolean
     */
    public function getRetard()
    {
        return $this->retard;
    }

    /**
     * Set delaiRetard
     *
     * @param string $delaiRetard
     * @return Mines
     */
    public function setDelaiRetard($delaiRetard)
    {
        $this->delaiRetard = $delaiRetard;

        return $this;
    }

    /**
     * Get delaiRetard
     *
     * @return string
     */
    public function getDelaiRetard()
    {
        return $this->delaiRetard;
    }

    /**
     * Set nomAllumeur
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeur
     * @return Mines
     */
    public function setNomAllumeur(\FeodBundle\Entity\Amorcage $nomAllumeur = null)
    {
        $this->nomAllumeur = $nomAllumeur;

        return $this;
    }

    /**
     * Get nomAllumeur
     *
     * @return \FeodBundle\Entity\Amorcage 
     */
    public function getNomAllumeur()
    {
        return $this->nomAllumeur;
    }


    /**
     * Set delaiArmement
     *
     * @param string $delaiArmement
     * @return Mines
     */
    public function setDelaiArmement($delaiArmement)
    {
        $this->delaiArmement = $delaiArmement;

        return $this;
    }

    /**
     * Get delaiArmement
     *
     * @return string
     */
    public function getDelaiArmement()
    {
        return $this->delaiArmement;
    }

    /**
     * Set neutralisationDestructionIME
     *
     * @param string $neutralisationDestructionIME
     * @return Mines
     */
    public function setNeutralisationDestructionIME($neutralisationDestructionIME)
    {
        $this->neutralisationDestructionIME = $neutralisationDestructionIME;

        return $this;
    }

    /**
     * Get neutralisationDestructionIME
     *
     * @return string
     */
    public function getNeutralisationDestructionIME()
    {
        return $this->neutralisationDestructionIME;
    }

    /**
     * Set diffusionExterne
     *
     * @param string $diffusionExterne
     * @return Mines
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
     * Add modePose
     *
     * @param \FeodBundle\Entity\ModePose $modePose
     * @return Mines
     */
    public function addModePose(\FeodBundle\Entity\ModePose $modePose)
    {
        $this->modePose[] = $modePose;

        return $this;
    }

    /**
     * Remove modePose
     *
     * @param \FeodBundle\Entity\ModePose $modePose
     */
    public function removeModePose(\FeodBundle\Entity\ModePose $modePose)
    {
        $this->modePose->removeElement($modePose);
    }

    /**
     * Get modePose
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModePose()
    {
        return $this->modePose;
    }

    /**
     * Add natureChargeMili
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeMili
     * @return Mines
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
     * Add natureChargeDepotage
     *
     * @param \FeodBundle\Entity\NatureChargeDispersion $natureChargeDepotage
     * @return Mines
     */
    public function addNatureChargeDepotage(\FeodBundle\Entity\NatureChargeDispersion $natureChargeDepotage)
    {
        $this->natureChargeDepotage[] = $natureChargeDepotage;

        return $this;
    }

    /**
     * Remove natureChargeDepotage
     *
     * @param \FeodBundle\Entity\NatureChargeDispersion $natureChargeDepotage
     */
    public function removeNatureChargeDepotage(\FeodBundle\Entity\NatureChargeDispersion $natureChargeDepotage)
    {
        $this->natureChargeDepotage->removeElement($natureChargeDepotage);
    }

    /**
     * Get natureChargeDepotage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNatureChargeDepotage()
    {
        return $this->natureChargeDepotage;
    }

    /**
     * Set typeMine
     *
     * @param \FeodBundle\Entity\TypeMine $typeMine
     * @return Mines
     */
    public function setTypeMine(\FeodBundle\Entity\TypeMine $typeMine = null)
    {
        $this->typeMine = $typeMine;

        return $this;
    }

    /**
     * Get typeMine
     *
     * @return \FeodBundle\Entity\TypeMine
     */
    public function getTypeMine()
    {
        return $this->typeMine;
    }

    /**
     * Set sousTypeMine
     *
     * @param \FeodBundle\Entity\TypeMine2 $sousTypeMine
     * @return Mines
     */
    public function setSousTypeMine(\FeodBundle\Entity\TypeMine2 $sousTypeMine = null)
    {
        $this->sousTypeMine = $sousTypeMine;

        return $this;
    }

    /**
     * Get sousTypeMine
     *
     * @return \FeodBundle\Entity\TypeMine2
     */
    public function getSousTypeMine()
    {
        return $this->sousTypeMine;
    }

    /**
     * Set EffetChargeMili
     *
     * @param \FeodBundle\Entity\EffetChargeMili $effetChargeMili
     * @return Mines
     */
    public function setEffetChargeMili(\FeodBundle\Entity\EffetChargeMili $effetChargeMili = null)
    {
        $this->EffetChargeMili = $effetChargeMili;

        return $this;
    }

    /**
     * Get EffetChargeMili
     *
     * @return \FeodBundle\Entity\EffetChargeMili
     */
    public function getEffetChargeMili()
    {
        return $this->EffetChargeMili;
    }

    /**
     * Set fabrication
     *
     * @param \FeodBundle\Entity\Fabrication $fabrication
     * @return Mines
     */
    public function setFabrication(\FeodBundle\Entity\Fabrication $fabrication = null)
    {
        $this->fabrication = $fabrication;

        return $this;
    }

    /**
     * Get fabrication
     *
     * @return \FeodBundle\Entity\Fabrication
     */
    public function getFabrication()
    {
        return $this->fabrication;
    }

    /**
     * Add dispositifSecurite
     *
     * @param \FeodBundle\Entity\DispositifSecurite $dispositifSecurite
     * @return Mines
     */
    public function addDispositifSecurite(\FeodBundle\Entity\DispositifSecurite $dispositifSecurite)
    {
        $this->dispositifSecurite[] = $dispositifSecurite;

        return $this;
    }

    /**
     * Remove dispositifSecurite
     *
     * @param \FeodBundle\Entity\DispositifSecurite $dispositifSecurite
     */
    public function removeDispositifSecurite(\FeodBundle\Entity\DispositifSecurite $dispositifSecurite)
    {
        $this->dispositifSecurite->removeElement($dispositifSecurite);
    }

    /**
     * Get dispositifSecurite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDispositifSecurite()
    {
        return $this->dispositifSecurite;
    }

    /**
     * Set detectabilite
     *
     * @param \FeodBundle\Entity\Detectabilite $detectabilite
     * @return Mines
     */
    public function setDetectabilite(\FeodBundle\Entity\Detectabilite $detectabilite = null)
    {
        $this->detectabilite = $detectabilite;

        return $this;
    }

    /**
     * Get detectabilite
     *
     * @return \FeodBundle\Entity\Detectabilite
     */
    public function getDetectabilite()
    {
        return $this->detectabilite;
    }

    /**
     * Set formeMine
     *
     * @param \FeodBundle\Entity\FormeMine $formeMine
     * @return Mines
     */
    public function setFormeMine(\FeodBundle\Entity\FormeMine $formeMine = null)
    {
        $this->formeMine = $formeMine;

        return $this;
    }

    /**
     * Get formeMine
     *
     * @return \FeodBundle\Entity\FormeMine
     */
    public function getFormeMine()
    {
        return $this->formeMine;
    }

    /**
     * Set unitePoidsMine
     *
     * @param \FeodBundle\Entity\UniteMasse $unitePoidsMine
     * @return Mines
     */
    public function setUnitePoidsMine(\FeodBundle\Entity\UniteMasse $unitePoidsMine = null)
    {
        $this->unitePoidsMine = $unitePoidsMine;

        return $this;
    }

    /**
     * Get unitePoidsMine
     *
     * @return \FeodBundle\Entity\UniteMasse
     */
    public function getUnitePoidsMine()
    {
        return $this->unitePoidsMine;
    }

    /**
     * Set natureEnveloppe
     *
     * @param \FeodBundle\Entity\Enveloppe $natureEnveloppe
     * @return Mines
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
     * Set typeSupport
     *
     * @param \FeodBundle\Entity\TypeSupport $typeSupport
     * @return Mines
     */
    public function setTypeSupport(\FeodBundle\Entity\TypeSupport $typeSupport = null)
    {
        $this->typeSupport = $typeSupport;

        return $this;
    }

    /**
     * Get typeSupport
     *
     * @return \FeodBundle\Entity\TypeSupport
     */
    public function getTypeSupport()
    {
        return $this->typeSupport;
    }

    /**
     * Set typeDispositifTransport
     *
     * @param \FeodBundle\Entity\TypeDispositifTransport $typeDispositifTransport
     * @return Mines
     */
    public function setTypeDispositifTransport(\FeodBundle\Entity\TypeDispositifTransport $typeDispositifTransport = null)
    {
        $this->typeDispositifTransport = $typeDispositifTransport;

        return $this;
    }

    /**
     * Get typeDispositifTransport
     *
     * @return \FeodBundle\Entity\TypeDispositifTransport
     */
    public function getTypeDispositifTransport()
    {
        return $this->typeDispositifTransport;
    }


    /**
     * Set couleurPrincipale
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurPrincipale
     * @return Mines
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
     * @return Mines
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
     * Set bandeCouleur1
     *
     * @param \FeodBundle\Entity\CouleurFond $bandeCouleur1
     * @return Mines
     */
    public function setBandeCouleur1(\FeodBundle\Entity\CouleurFond $bandeCouleur1 = null)
    {
        $this->bandeCouleur1 = $bandeCouleur1;

        return $this;
    }

    /**
     * Get bandeCouleur1
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getBandeCouleur1()
    {
        return $this->bandeCouleur1;
    }

    /**
     * Set bandeCouleur2
     *
     * @param \FeodBundle\Entity\CouleurFond $bandeCouleur2
     * @return Mines
     */
    public function setBandeCouleur2(\FeodBundle\Entity\CouleurFond $bandeCouleur2 = null)
    {
        $this->bandeCouleur2 = $bandeCouleur2;

        return $this;
    }

    /**
     * Get bandeCouleur2
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getBandeCouleur2()
    {
        return $this->bandeCouleur2;
    }

    /**
     * Set bandeCouleur3
     *
     * @param \FeodBundle\Entity\CouleurFond $bandeCouleur3
     * @return Mines
     */
    public function setBandeCouleur3(\FeodBundle\Entity\CouleurFond $bandeCouleur3 = null)
    {
        $this->bandeCouleur3 = $bandeCouleur3;

        return $this;
    }

    /**
     * Get bandeCouleur3
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getBandeCouleur3()
    {
        return $this->bandeCouleur3;
    }

    /**
     * Set bandeCouleur4
     *
     * @param \FeodBundle\Entity\CouleurFond $bandeCouleur4
     * @return Mines
     */
    public function setBandeCouleur4(\FeodBundle\Entity\CouleurFond $bandeCouleur4 = null)
    {
        $this->bandeCouleur4 = $bandeCouleur4;

        return $this;
    }

    /**
     * Get bandeCouleur4
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getBandeCouleur4()
    {
        return $this->bandeCouleur4;
    }

    /**
     * Set typeMarquage
     *
     * @param \FeodBundle\Entity\TypeMarquage $typeMarquage
     * @return Mines
     */
    public function setTypeMarquage(\FeodBundle\Entity\TypeMarquage $typeMarquage = null)
    {
        $this->typeMarquage = $typeMarquage;

        return $this;
    }

    /**
     * Get typeMarquage
     *
     * @return \FeodBundle\Entity\TypeMarquage
     */
    public function getTypeMarquage()
    {
        return $this->typeMarquage;
    }

    /**
     * Set marquageAFroidPosition
     *
     * @param \FeodBundle\Entity\PositionMarquage $marquageAFroidPosition
     * @return Mines
     */
    public function setMarquageAFroidPosition(\FeodBundle\Entity\PositionMarquage $marquageAFroidPosition = null)
    {
        $this->marquageAFroidPosition = $marquageAFroidPosition;

        return $this;
    }

    /**
     * Get marquageAFroidPosition
     *
     * @return \FeodBundle\Entity\PositionMarquage
     */
    public function getMarquageAFroidPosition()
    {
        return $this->marquageAFroidPosition;
    }

    /**
     * Set marquageEnReliefPosition
     *
     * @param \FeodBundle\Entity\PositionMarquage $marquageEnReliefPosition
     * @return Mines
     */
    public function setMarquageEnReliefPosition(\FeodBundle\Entity\PositionMarquage $marquageEnReliefPosition = null)
    {
        $this->marquageEnReliefPosition = $marquageEnReliefPosition;

        return $this;
    }

    /**
     * Get marquageEnReliefPosition
     *
     * @return \FeodBundle\Entity\PositionMarquage
     */
    public function getMarquageEnReliefPosition()
    {
        return $this->marquageEnReliefPosition;
    }

    /**
     * Set marquageEnCouleurPosition
     *
     * @param \FeodBundle\Entity\PositionMarquage $marquageEnCouleurPosition
     * @return Mines
     */
    public function setMarquageEnCouleurPosition(\FeodBundle\Entity\PositionMarquage $marquageEnCouleurPosition = null)
    {
        $this->marquageEnCouleurPosition = $marquageEnCouleurPosition;

        return $this;
    }

    /**
     * Get marquageEnCouleurPosition
     *
     * @return \FeodBundle\Entity\PositionMarquage
     */
    public function getMarquageEnCouleurPosition()
    {
        return $this->marquageEnCouleurPosition;
    }

    /**
     * Set conditionnement
     *
     * @param \FeodBundle\Entity\Conditionnement $conditionnement
     * @return Mines
     */
    public function setConditionnement(\FeodBundle\Entity\Conditionnement $conditionnement = null)
    {
        $this->conditionnement = $conditionnement;

        return $this;
    }

    /**
     * Get conditionnement
     *
     * @return \FeodBundle\Entity\Conditionnement
     */
    public function getConditionnement()
    {
        return $this->conditionnement;
    }

    /**
     * Set uniteQMA
     *
     * @param \FeodBundle\Entity\UnitesMasseVolume $uniteQMA
     * @return Mines
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
     * Set natureRelais1
     *
     * @param \FeodBundle\Entity\NatureRelais $natureRelais1
     * @return Mines
     */
    public function setNatureRelais1(\FeodBundle\Entity\NatureRelais $natureRelais1 = null)
    {
        $this->natureRelais1 = $natureRelais1;

        return $this;
    }

    /**
     * Get natureRelais1
     *
     * @return \FeodBundle\Entity\NatureRelais
     */
    public function getNatureRelais1()
    {
        return $this->natureRelais1;
    }

    /**
     * Set natureRelais2
     *
     * @param \FeodBundle\Entity\NatureRelais $natureRelais2
     * @return Mines
     */
    public function setNatureRelais2(\FeodBundle\Entity\NatureRelais $natureRelais2 = null)
    {
        $this->natureRelais2 = $natureRelais2;

        return $this;
    }

    /**
     * Get natureRelais2
     *
     * @return \FeodBundle\Entity\NatureRelais
     */
    public function getNatureRelais2()
    {
        return $this->natureRelais2;
    }

    /**
     * Set natureRelais3
     *
     * @param \FeodBundle\Entity\NatureRelais $natureRelais3
     * @return Mines
     */
    public function setNatureRelais3(\FeodBundle\Entity\NatureRelais $natureRelais3 = null)
    {
        $this->natureRelais3 = $natureRelais3;

        return $this;
    }

    /**
     * Get natureRelais3
     *
     * @return \FeodBundle\Entity\NatureRelais
     */
    public function getNatureRelais3()
    {
        return $this->natureRelais3;
    }

    /**
     * Set natureRelais4
     *
     * @param \FeodBundle\Entity\NatureRelais $natureRelais4
     * @return Mines
     */
    public function setNatureRelais4(\FeodBundle\Entity\NatureRelais $natureRelais4 = null)
    {
        $this->natureRelais4 = $natureRelais4;

        return $this;
    }

    /**
     * Get natureRelais4
     *
     * @return \FeodBundle\Entity\NatureRelais
     */
    public function getNatureRelais4()
    {
        return $this->natureRelais4;
    }

    /**
     * Set sensibilite
     *
     * @param \FeodBundle\Entity\Sensibilite $sensibilite
     * @return Mines
     */
    public function setSensibilite(\FeodBundle\Entity\Sensibilite $sensibilite = null)
    {
        $this->sensibilite = $sensibilite;

        return $this;
    }

    /**
     * Get sensibilite
     *
     * @return \FeodBundle\Entity\Sensibilite
     */
    public function getSensibilite()
    {
        return $this->sensibilite;
    }

    /**
     * Set chargeAmovible
     *
     * @param boolean $chargeAmovible
     * @return Mines
     */
    public function setChargeAmovible($chargeAmovible)
    {
        $this->chargeAmovible = $chargeAmovible;

        return $this;
    }

    /**
     * Get chargeAmovible
     *
     * @return boolean
     */
    public function getChargeAmovible()
    {
        return $this->chargeAmovible;
    }

    /**
     * Set poidsChargeMiliCalcule
     *
     * @param float $poidsChargeMiliCalcule
     * @return Mines
     */
    public function setPoidsChargeMiliCalcule($poidsChargeMiliCalcule)
    {
        $this->poidsChargeMiliCalcule = $poidsChargeMiliCalcule;

        return $this;
    }

    /**
     * Get poidsChargeMiliCalcule
     *
     * @return float
     */
    public function getPoidsChargeMiliCalcule()
    {
        return $this->poidsChargeMiliCalcule;
    }

    /**
     * Set epaisseurEnveloppe
     *
     * @param float $epaisseurEnveloppe
     * @return Mines
     */
    public function setEpaisseurEnveloppe($epaisseurEnveloppe)
    {
        $this->epaisseurEnveloppe = $epaisseurEnveloppe;

        return $this;
    }

    /**
     * Get epaisseurEnveloppe
     *
     * @return float
     */
    public function getEpaisseurEnveloppe()
    {
        return $this->epaisseurEnveloppe;
    }

    /**
     * Add positionAllumeurOrigine
     *
     * @param \FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine
     * @return Mines
     */
    public function addPositionAllumeurOrigine(\FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine)
    {
        $this->positionAllumeurOrigine[] = $positionAllumeurOrigine;

        return $this;
    }

    /**
     * Remove positionAllumeurOrigine
     *
     * @param \FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine
     */
    public function removePositionAllumeurOrigine(\FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine)
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
     * @param \FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine
     */
    public function setPositionAllumeurOrigine($positionAllumeurOrigine)
    {
        $this->positionAllumeurOrigine = $positionAllumeurOrigine;
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


    /**
     * Set positionAlveolePiegeage
     *
     * @param \FeodBundle\Entity\PositionMarquage $positionAlveolePiegeage
     * @return Mines
     */
    public function setPositionAlveolePiegeage(\FeodBundle\Entity\PositionMarquage $positionAlveolePiegeage = null)
    {
        $this->positionAlveolePiegeage = $positionAlveolePiegeage;

        return $this;
    }

    /**
     * Get positionAlveolePiegeage
     *
     * @return \FeodBundle\Entity\PositionMarquage 
     */
    public function getPositionAlveolePiegeage()
    {
        return $this->positionAlveolePiegeage;
    }

    /**
     * Set nomAllumeur1
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeur1
     * @return Mines
     */
    public function setNomAllumeur1(\FeodBundle\Entity\Amorcage $nomAllumeur1 = null)
    {
        $this->nomAllumeur1 = $nomAllumeur1;

        return $this;
    }

    /**
     * Get nomAllumeur1
     *
     * @return \FeodBundle\Entity\Amorcage 
     */
    public function getNomAllumeur1()
    {
        return $this->nomAllumeur1;
    }

    /**
     * Set nomAllumeur2
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeur2
     * @return Mines
     */
    public function setNomAllumeur2(\FeodBundle\Entity\Amorcage $nomAllumeur2 = null)
    {
        $this->nomAllumeur2 = $nomAllumeur2;

        return $this;
    }

    /**
     * Get nomAllumeur2
     *
     * @return \FeodBundle\Entity\Amorcage 
     */
    public function getNomAllumeur2()
    {
        return $this->nomAllumeur2;
    }

    /**
     * Set positionAlveolePiegeage1
     *
     * @param \FeodBundle\Entity\PositionMarquage $positionAlveolePiegeage1
     * @return Mines
     */
    public function setPositionAlveolePiegeage1(\FeodBundle\Entity\PositionMarquage $positionAlveolePiegeage1 = null)
    {
        $this->positionAlveolePiegeage1 = $positionAlveolePiegeage1;

        return $this;
    }

    /**
     * Get positionAlveolePiegeage1
     *
     * @return \FeodBundle\Entity\PositionMarquage 
     */
    public function getPositionAlveolePiegeage1()
    {
        return $this->positionAlveolePiegeage1;
    }

    /**
     * Set positionAlveolePiegeage2
     *
     * @param \FeodBundle\Entity\PositionMarquage $positionAlveolePiegeage2
     * @return Mines
     */
    public function setPositionAlveolePiegeage2(\FeodBundle\Entity\PositionMarquage $positionAlveolePiegeage2 = null)
    {
        $this->positionAlveolePiegeage2 = $positionAlveolePiegeage2;

        return $this;
    }

    /**
     * Get positionAlveolePiegeage2
     *
     * @return \FeodBundle\Entity\PositionMarquage 
     */
    public function getPositionAlveolePiegeage2()
    {
        return $this->positionAlveolePiegeage2;
    }

    /**
     * Set typeAllumeur
     *
     * @param \FeodBundle\Entity\TypeAllumeur $typeAllumeur
     * @return Mines
     */
    public function setTypeAllumeur(\FeodBundle\Entity\TypeAllumeur $typeAllumeur = null)
    {
        $this->typeAllumeur = $typeAllumeur;

        return $this;
    }

    /**
     * Get typeAllumeur
     *
     * @return \FeodBundle\Entity\TypeAllumeur 
     */
    public function getTypeAllumeur()
    {
        return $this->typeAllumeur;
    }

    /**
     * Set typeAllumeur1
     *
     * @param \FeodBundle\Entity\TypeAllumeur $typeAllumeur1
     * @return Mines
     */
    public function setTypeAllumeur1(\FeodBundle\Entity\TypeAllumeur $typeAllumeur1 = null)
    {
        $this->typeAllumeur1 = $typeAllumeur1;

        return $this;
    }

    /**
     * Get typeAllumeur1
     *
     * @return \FeodBundle\Entity\TypeAllumeur 
     */
    public function getTypeAllumeur1()
    {
        return $this->typeAllumeur1;
    }

    /**
     * Set typeAllumeur2
     *
     * @param \FeodBundle\Entity\TypeAllumeur $typeAllumeur2
     * @return Mines
     */
    public function setTypeAllumeur2(\FeodBundle\Entity\TypeAllumeur $typeAllumeur2 = null)
    {
        $this->typeAllumeur2 = $typeAllumeur2;

        return $this;
    }

    /**
     * Get typeAllumeur2
     *
     * @return \FeodBundle\Entity\TypeAllumeur 
     */
    public function getTypeAllumeur2()
    {
        return $this->typeAllumeur2;
    }

    /**
     * Set PresenceAllumeurPiegeage
     *
     * @param boolean $presenceAllumeurPiegeage
     * @return Mines
     */
    public function setPresenceAllumeurPiegeage($presenceAllumeurPiegeage)
    {
        $this->PresenceAllumeurPiegeage = $presenceAllumeurPiegeage;

        return $this;
    }

    /**
     * Get PresenceAllumeurPiegeage
     *
     * @return boolean 
     */
    public function getPresenceAllumeurPiegeage()
    {
        return $this->PresenceAllumeurPiegeage;
    }

    /**
     * Set nbrAllumeur
     *
     * @param integer $nbrAllumeur
     * @return Mines
     */
    public function setNbrAllumeur($nbrAllumeur)
    {
        $this->nbrAllumeur = $nbrAllumeur;

        return $this;
    }

    /**
     * Get nbrAllumeur
     *
     * @return integer 
     */
    public function getNbrAllumeur()
    {
        return $this->nbrAllumeur;
    }

    /**
     * Set nomAllumeurMine1
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeurMine1
     * @return Mines
     */
    public function setNomAllumeurMine1(\FeodBundle\Entity\Amorcage $nomAllumeurMine1 = null)
    {
        $this->nomAllumeurMine1 = $nomAllumeurMine1;

        return $this;
    }

    /**
     * Get nomAllumeurMine1
     *
     * @return \FeodBundle\Entity\Amorcage 
     */
    public function getNomAllumeurMine1()
    {
        return $this->nomAllumeurMine1;
    }

    /**
     * Set nomAllumeurMine2
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeurMine2
     * @return Mines
     */
    public function setNomAllumeurMine2(\FeodBundle\Entity\Amorcage $nomAllumeurMine2 = null)
    {
        $this->nomAllumeurMine2 = $nomAllumeurMine2;

        return $this;
    }

    /**
     * Get nomAllumeurMine2
     *
     * @return \FeodBundle\Entity\Amorcage 
     */
    public function getNomAllumeurMine2()
    {
        return $this->nomAllumeurMine2;
    }

    /**
     * Add positionAllumeurOrigine1
     *
     * @param \FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine1
     * @return Mines
     */
    public function addPositionAllumeurOrigine1(\FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine1)
    {
        $this->positionAllumeurOrigine1[] = $positionAllumeurOrigine1;

        return $this;
    }

    /**
     * Remove positionAllumeurOrigine1
     *
     * @param \FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine1
     */
    public function removePositionAllumeurOrigine1(\FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine1)
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
     * @param \FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine2
     * @return Mines
     */
    public function addPositionAllumeurOrigine2(\FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine2)
    {
        $this->positionAllumeurOrigine2[] = $positionAllumeurOrigine2;

        return $this;
    }

    /**
     * Remove positionAllumeurOrigine2
     *
     * @param \FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine2
     */
    public function removePositionAllumeurOrigine2(\FeodBundle\Entity\PositionAllumeurOrigine $positionAllumeurOrigine2)
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

    /**
     * Add natureChargeRelais
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeRelais
     * @return Mines
     */
    public function addNatureChargeRelai(\FeodBundle\Entity\NatureChargeMili $natureChargeRelais)
    {
        $this->natureChargeRelais[] = $natureChargeRelais;

        return $this;
    }

    /**
     * Remove natureChargeRelais
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeRelais
     */
    public function removeNatureChargeRelai(\FeodBundle\Entity\NatureChargeMili $natureChargeRelais)
    {
        $this->natureChargeRelais->removeElement($natureChargeRelais);
    }

    /**
     * Get natureChargeRelais
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNatureChargeRelais()
    {
        return $this->natureChargeRelais;
    }

    /**
     * Add declenchement
     *
     * @param \FeodBundle\Entity\Declenchement $declenchement
     * @return Mines
     */
    public function addDeclenchement(\FeodBundle\Entity\Declenchement $declenchement)
    {
        $this->declenchement[] = $declenchement;

        return $this;
    }

    /**
     * Remove declenchement
     *
     * @param \FeodBundle\Entity\Declenchement $declenchement
     */
    public function removeDeclenchement(\FeodBundle\Entity\Declenchement $declenchement)
    {
        $this->declenchement->removeElement($declenchement);
    }

    /**
     * Get declenchement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDeclenchement()
    {
        return $this->declenchement;
    }
}
