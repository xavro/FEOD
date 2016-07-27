<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * Artillerie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\ArtillerieRepository")
 */
class Artillerie extends Munition
{

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="idArtillerie", type="string", length=100)
     */
    private $idArtillerie;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="copieExistante", type="string", length=255)
     */
    private $copieExistante;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="calibre", type="float")
     */
    private $calibre;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="calibreCalcul", type="float")
     */
    private $calibreCalcul;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="calibreReel", type="float")
     */
    private $calibreReel;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametreTraceur", type="float")
     */
    private $diametreTraceur;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longTraceur", type="float")
     */
    private $longTraceur;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombreCeintures", type="integer")
     */
    private $nombreCeintures;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="distanceCeinture", type="float")
     */
    private $distanceCeinture;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="largeurCeinture1", type="float")
     */
    private $largeurCeinture1;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="largeurCeinture2", type="float")
     */
    private $largeurCeinture2;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="largeurCeinture", type="float")
     */
    private $largeurCeinture;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="distCeintCulot", type="float")
     */
    private $distCeintCulot;

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
     * @var string
     *
     * @ORM\Column(nullable=true, name="uniteSI", type="string", length=20)
     */
    private $uniteSI;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargePropu", type="float")
     */
    private $poidsChargePropu;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="chargeTandem", type="boolean")
     */
    private $chargeTandem;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsChargeTandem", type="float")
     */
    private $poidsChargeTandem;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="lgTotavecFusee", type="float")
     */
    private $lgTotavecFusee;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="hautProjectile", type="float")
     */
    private $hautProjectile;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="lgTotsansFusee", type="float")
     */
    private $lgTotsansFusee;
    
    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="lgTotavecFuseeDouille", type="float")
     */
    private $lgTotavecFuseeDouille;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poids", type="float")
     */
    private $poids;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="standOFF", type="float")
     */
    private $standOFF;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="bagueCalage", type="boolean")
     */
    private $bagueCalage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="bagueDeRaccordement", type="float")
     */
    private $bagueDeRaccordement;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="puitsDeFusee", type="boolean")
     */
    private $puitsDeFusee;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametreDelOeil", type="float")
     */
    private $diametreDelOeil;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="hauteurDeLaGaine", type="float")
     */
    private $hauteurDeLaGaine;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametreExterieurDeLaGaine1", type="float")
     */
    private $diametreExterieurDeLaGaine1;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametreExterieurDeLaGaine2", type="float")
     */
    private $diametreExterieurDeLaGaine2;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombreDeRenflement", type="integer")
     */
    private $nombreDeRenflement;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="largeurRenflement1", type="float")
     */
    private $largeurRenflement1;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="largeurRenflement2", type="float")
     */
    private $largeurRenflement2;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longueurSabot", type="float")
     */
    private $longueurSabot;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="puitsCulot", type="boolean")
     */
    private $puitsCulot;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametrePuitsCulot", type="float")
     */
    private $diametrePuitsCulot;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NBGorges", type="integer")
     */
    private $nBGorges;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="distCulotGorge", type="float")
     */
    private $distCulotGorge;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametreJupe", type="float")
     */
    private $diametreJupe;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longueurJupe", type="float")
     */
    private $longueurJupe;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longEmpennage", type="float")
     */
    private $longEmpennage;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbAilettes", type="integer")
     */
    private $nbAilettes;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longAilette", type="float")
     */
    private $longAilette;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="largAilette", type="float")
     */
    private $largAilette;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="orifices", type="boolean")
     */
    private $orifices;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="inscriptionOgive", type="string", length=255)
     */
    private $inscriptionOgive;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageFroidOgive", type="string", length=255)
     */
    private $marquageFroidOgive;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbBandesOgive", type="integer")
     * @Assert\Range(min = 0,max = 5)
     */
    private $nbBandesOgive;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="inscriptionCorps", type="string", length=255)
     */
    private $inscriptionCorps;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageFroidCorps", type="string", length=255)
     */
    private $marquageFroidCorps;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="NbBandesCorps", type="integer")
     */
    private $nbBandesCorps;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="inscriptionCulot", type="string", length=255)
     */
    private $inscriptionCulot;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquagePeintureCulot", type="string", length=255)
     */
    private $marquagePeintureCulot;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquageFroidCulot", type="string", length=255)
     */
    private $marquageFroidCulot;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="nomFusee1", type="string", length=255)
     */
    private $nomFusee1;

    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="nombreOrifice", type="integer")
     */
    private $nombreOrifice;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="corpsDiametre", type="float")
     */
    private $corpsDiametre;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="marquage", type="string", length=255)
     */
    private $marquage;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\TypeObus")
   * @ORM\JoinTable(name="artillerie_typeobus",
   *  joinColumns={@ORM\JoinColumn(name="artillerie_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="typeobus_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $typeObus;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UniteDistance")
   */
  private $uniteDistance;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Enveloppe")
   */
  private $natureEnveloppe;
  /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="autoDestruction", type="boolean")
     */
  private $autoDestruction;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCeinture")
   */
  private $typeCeinture;
  
    /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCeinture")
   */
  private $typeCeinture1;
  
    /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeCeinture")
   */
  private $typeCeinture2;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\MatiereCeinture")
   */
  private $matiereCeinture;
  
    /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\MatiereCeinture")
   */
  private $matiereCeinture1;
  
    /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\MatiereCeinture")
   */
  private $matiereCeinture2;
  
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\NatureChargeMili")
   * @ORM\JoinTable(name="artillerie_naturechargemili",
   *  joinColumns={@ORM\JoinColumn(name="artillerie_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="naturechargemili_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $natureChargeMili;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UnitesMasseVolume")
   */
  private $uniteQMA;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeOgive")
   */
  private $formeOgive;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeGaine")
   */
  private $typeGaine;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeDeGaine")
   */
  private $formeDeGaine;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeCorps")
   */
  private $formeCorps;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeDeRenflement")
   */
  private $typeDeRenflement1;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionDeRenflement")
   */
  private $positionDeRenflement1;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeDeRenflement")
   */
  private $typeDeRenflement2;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionDeRenflement")
   */
  private $positionDeRenflement2;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeSabot")
   */
  private $typeSabot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeCulot")
   */
  private $formeCulot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypePlaque")
   */
  private $typePlaque;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeEmpennage")
   */
  private $typeEmpennage;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeAilettes")
   */
  private $formeAilettes;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionOrifice")
   * @ORM\JoinTable(name="artillerie_positionorifice",
   *  joinColumns={@ORM\JoinColumn(name="artillerie_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionorifice_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionOrifice;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Obturation")
   */
  private $obturation;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\ElementsAerodynamiques")
   */
  private $typeElemAeroAV;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeElemAero")
   */
  private $formeElemAeroAV;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionElemAeroAV")
   */
  private $positionElemAeroAV;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\ElementsAerodynamiques")
   */
  private $typeElemAeroAR;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeElemAero")
   */
  private $formeElemAeroAR;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionElemAeroAR")
   */
  private $positionElemAeroAR;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurOgive;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SymboleOgive")
   * @ORM\JoinTable(name="artillerie_symboleogive",
   *  joinColumns={@ORM\JoinColumn(name="artillerie_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="symboleogive_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $symboleOgive;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
   */
  private $typeInscOgive;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurInscOgive;
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
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurCorps;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SymboleOgive")
   * @ORM\JoinTable(name="artillerie_symbolecorps",
   *  joinColumns={@ORM\JoinColumn(name="artillerie_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="symboleogive_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $symboleCorps;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
   */
  private $typeInscCorps;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurInscCorps;
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
  private $couleurCulot;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\SymboleOgive")
   * @ORM\JoinTable(name="artillerie_symboleculot",
   *  joinColumns={@ORM\JoinColumn(name="artillerie_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="symboleogive_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $symboleCulot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeMarquage")
   */
  private $typeInscCulot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurInscCulot;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurBandeCulot1;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\PositionFusee")
   * @ORM\JoinTable(name="artillerie_positionfusee",
   *  joinColumns={@ORM\JoinColumn(name="artillerie_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="positionfusee_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $positionFusee;
  
    /** @var boolean
     *
     * @ORM\Column(nullable=true, name="Encartouche", type="boolean")
     */
    private $Encartouche;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->typeObus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->natureChargeMili = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positionOrifice = new \Doctrine\Common\Collections\ArrayCollection();
        $this->symboleOgive = new \Doctrine\Common\Collections\ArrayCollection();
        $this->symboleCorps = new \Doctrine\Common\Collections\ArrayCollection();
        $this->symboleCulot = new \Doctrine\Common\Collections\ArrayCollection();
        $this->positionFusee = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function filename($calibre = null, $info = null)
    {
        if ($this->calibreReel !== null) {
            $calibre = $this->calibreReel.'mm';
        }
        return parent::fileName($calibre);
    }

    /**
     * Set idArtillerie
     *
     * @param string $idArtillerie
     * @return Artillerie
     */
    public function setIdArtillerie($idArtillerie)
    {
        $this->idArtillerie = $idArtillerie;

        return $this;
    }

    /**
     * Get idArtillerie
     *
     * @return string
     */
    public function getIdArtillerie()
    {
        return $this->idArtillerie;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Artillerie
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
     * Set calibre
     *
     * @param float $calibre
     * @return Artillerie
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
     * Set calibreCalcul
     *
     * @param float $calibreCalcul
     * @return Artillerie
     */
    public function setCalibreCalcul($calibreCalcul)
    {
        $this->calibreCalcul = $calibreCalcul;

        return $this;
    }

    /**
     * Get calibreCalcul
     *
     * @return float
     */
    public function getCalibreCalcul()
    {
        return $this->calibreCalcul;
    }

    /**
     * Set calibreReel
     *
     * @param float $calibreReel
     * @return Artillerie
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
     * Set diametreTraceur
     *
     * @param float $diametreTraceur
     * @return Artillerie
     */
    public function setDiametreTraceur($diametreTraceur)
    {
        $this->diametreTraceur = $diametreTraceur;

        return $this;
    }

    /**
     * Get diametreTraceur
     *
     * @return float
     */
    public function getDiametreTraceur()
    {
        return $this->diametreTraceur;
    }

    /**
     * Set longTraceur
     *
     * @param float $longTraceur
     * @return Artillerie
     */
    public function setLongTraceur($longTraceur)
    {
        $this->longTraceur = $longTraceur;

        return $this;
    }

    /**
     * Get longTraceur
     *
     * @return float
     */
    public function getLongTraceur()
    {
        return $this->longTraceur;
    }

    /**
     * Set nombreCeintures
     *
     * @param integer $nombreCeintures
     * @return Artillerie
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
     * Set distanceCeinture
     *
     * @param float $distanceCeinture
     * @return Artillerie
     */
    public function setDistanceCeinture($distanceCeinture)
    {
        $this->distanceCeinture = $distanceCeinture;

        return $this;
    }

    /**
     * Get distanceCeinture
     *
     * @return float
     */
    public function getDistanceCeinture()
    {
        return $this->distanceCeinture;
    }

    /**
     * Set largeurCeinture1
     *
     * @param float $largeurCeinture1
     * @return Artillerie
     */
    public function setLargeurCeinture1($largeurCeinture1)
    {
        $this->largeurCeinture1 = $largeurCeinture1;

        return $this;
    }

    /**
     * Get largeurCeinture1
     *
     * @return float
     */
    public function getLargeurCeinture1()
    {
        return $this->largeurCeinture1;
    }

    /**
     * Set largeurCeinture2
     *
     * @param float $largeurCeinture2
     * @return Artillerie
     */
    public function setLargeurCeinture2($largeurCeinture2)
    {
        $this->largeurCeinture2 = $largeurCeinture2;

        return $this;
    }

    /**
     * Get largeurCeinture2
     *
     * @return float
     */
    public function getLargeurCeinture2()
    {
        return $this->largeurCeinture2;
    }

    /**
     * Set largeurCeinture
     *
     * @param float $largeurCeinture
     * @return Artillerie
     */
    public function setLargeurCeinture($largeurCeinture)
    {
        $this->largeurCeinture = $largeurCeinture;

        return $this;
    }

    /**
     * Get largeurCeinture
     *
     * @return float
     */
    public function getLargeurCeinture()
    {
        return $this->largeurCeinture;
    }

    /**
     * Set distCeintCulot
     *
     * @param float $distCeintCulot
     * @return Artillerie
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
     * Set poidsChargeMili
     *
     * @param float $poidsChargeMili
     * @return Artillerie
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
     * @return Artillerie
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
     * @return Artillerie
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
     * Set poidsChargePropu
     *
     * @param float $poidsChargePropu
     * @return Artillerie
     */
    public function setPoidsChargePropu($poidsChargePropu)
    {
        $this->poidsChargePropu = $poidsChargePropu;

        return $this;
    }

    /**
     * Get poidsChargePropu
     *
     * @return float
     */
    public function getPoidsChargePropu()
    {
        return $this->poidsChargePropu;
    }

    /**
     * Set chargeTandem
     *
     * @param boolean $chargeTandem
     * @return Artillerie
     */
    public function setChargeTandem($chargeTandem)
    {
        $this->chargeTandem = $chargeTandem;

        return $this;
    }

    /**
     * Get chargeTandem
     *
     * @return boolean
     */
    public function getChargeTandem()
    {
        return $this->chargeTandem;
    }

    /**
     * Set poidsChargeTandem
     *
     * @param float $poidsChargeTandem
     * @return Artillerie
     */
    public function setPoidsChargeTandem($poidsChargeTandem)
    {
        $this->poidsChargeTandem = $poidsChargeTandem;

        return $this;
    }

    /**
     * Get poidsChargeTandem
     *
     * @return float
     */
    public function getPoidsChargeTandem()
    {
        return $this->poidsChargeTandem;
    }

    /**
     * Set lgTotavecFusee
     *
     * @param float $lgTotavecFusee
     * @return Artillerie
     */
    public function setLgTotavecFusee($lgTotavecFusee)
    {
        $this->lgTotavecFusee = $lgTotavecFusee;

        return $this;
    }

    /**
     * Get lgTotavecFusee
     *
     * @return float
     */
    public function getLgTotavecFusee()
    {
        return $this->lgTotavecFusee;
    }
    
    /**
     * Set lgTotavecFuseeDouille
     *
     * @param float $lgTotavecFuseeDouille
     * @return Artillerie
     */
    public function setLgTotavecFuseeDouille($lgTotavecFuseeDouille)
    {
        $this->lgTotavecFuseeDouille = $lgTotavecFuseeDouille;

        return $this;
    }

    /**
     * Get lgTotavecFuseeDouille
     *
     * @return float
     */
    public function getLgTotavecFuseeDouille()
    {
        return $this->lgTotavecFuseeDouille;
    }

    /**
     * Set lgTotsansFusee
     *
     * @param float $lgTotsansFusee
     * @return Artillerie
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
     * Set hautProjectile
     *
     * @param float $hautProjectile
     * @return Artillerie
     */
    public function setHautProjectile($hautProjectile)
    {
        $this->hautProjectile = $hautProjectile;

        return $this;
    }

    /**
     * Get hautProjectile
     *
     * @return float
     */
    public function getHautProjectile()
    {
        return $this->hautProjectile;
    }

    /**
     * Set poids
     *
     * @param float $poids
     * @return Artillerie
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
     * Set standOFF
     *
     * @param float $standOFF
     * @return Artillerie
     */
    public function setStandOFF($standOFF)
    {
        $this->standOFF = $standOFF;

        return $this;
    }

    /**
     * Get standOFF
     *
     * @return float
     */
    public function getStandOFF()
    {
        return $this->standOFF;
    }

    /**
     * Set bagueCalage
     *
     * @param boolean $bagueCalage
     * @return Artillerie
     */
    public function setBagueCalage($bagueCalage)
    {
        $this->bagueCalage = $bagueCalage;

        return $this;
    }

    /**
     * Get bagueCalage
     *
     * @return boolean
     */
    public function getBagueCalage()
    {
        return $this->bagueCalage;
    }

    /**
     * Set bagueDeRaccordement
     *
     * @param float $bagueDeRaccordement
     * @return Artillerie
     */
    public function setBagueDeRaccordement($bagueDeRaccordement)
    {
        $this->bagueDeRaccordement = $bagueDeRaccordement;

        return $this;
    }

    /**
     * Get bagueDeRaccordement
     *
     * @return float
     */
    public function getBagueDeRaccordement()
    {
        return $this->bagueDeRaccordement;
    }

    /**
     * Set puitsDeFusee
     *
     * @param boolean $puitsDeFusee
     * @return Artillerie
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
     * Set diametreDelOeil
     *
     * @param float $diametreDelOeil
     * @return Artillerie
     */
    public function setDiametreDelOeil($diametreDelOeil)
    {
        $this->diametreDelOeil = $diametreDelOeil;

        return $this;
    }

    /**
     * Get diametreDelOeil
     *
     * @return float
     */
    public function getDiametreDelOeil()
    {
        return $this->diametreDelOeil;
    }

    /**
     * Set hauteurDeLaGaine
     *
     * @param float $hauteurDeLaGaine
     * @return Artillerie
     */
    public function setHauteurDeLaGaine($hauteurDeLaGaine)
    {
        $this->hauteurDeLaGaine = $hauteurDeLaGaine;

        return $this;
    }

    /**
     * Get hauteurDeLaGaine
     *
     * @return float
     */
    public function getHauteurDeLaGaine()
    {
        return $this->hauteurDeLaGaine;
    }

    /**
     * Set diametreExterieurDeLaGaine1
     *
     * @param float $diametreExterieurDeLaGaine1
     * @return Artillerie
     */
    public function setDiametreExterieurDeLaGaine1($diametreExterieurDeLaGaine1)
    {
        $this->diametreExterieurDeLaGaine1 = $diametreExterieurDeLaGaine1;

        return $this;
    }

    /**
     * Get diametreExterieurDeLaGaine1
     *
     * @return float
     */
    public function getDiametreExterieurDeLaGaine1()
    {
        return $this->diametreExterieurDeLaGaine1;
    }

    /**
     * Set diametreExterieurDeLaGaine2
     *
     * @param float $diametreExterieurDeLaGaine2
     * @return Artillerie
     */
    public function setDiametreExterieurDeLaGaine2($diametreExterieurDeLaGaine2)
    {
        $this->diametreExterieurDeLaGaine2 = $diametreExterieurDeLaGaine2;

        return $this;
    }

    /**
     * Get diametreExterieurDeLaGaine2
     *
     * @return float
     */
    public function getDiametreExterieurDeLaGaine2()
    {
        return $this->diametreExterieurDeLaGaine2;
    }

    /**
     * Set nombreDeRenflement
     *
     * @param integer $nombreDeRenflement
     * @return Artillerie
     */
    public function setNombreDeRenflement($nombreDeRenflement)
    {
        $this->nombreDeRenflement = $nombreDeRenflement;

        return $this;
    }

    /**
     * Get nombreDeRenflement
     *
     * @return integer
     */
    public function getNombreDeRenflement()
    {
        return $this->nombreDeRenflement;
    }

    /**
     * Set largeurRenflement1
     *
     * @param float $largeurRenflement1
     * @return Artillerie
     */
    public function setLargeurRenflement1($largeurRenflement1)
    {
        $this->largeurRenflement1 = $largeurRenflement1;

        return $this;
    }

    /**
     * Get largeurRenflement1
     *
     * @return float
     */
    public function getLargeurRenflement1()
    {
        return $this->largeurRenflement1;
    }

    /**
     * Set largeurRenflement2
     *
     * @param float $largeurRenflement2
     * @return Artillerie
     */
    public function setLargeurRenflement2($largeurRenflement2)
    {
        $this->largeurRenflement2 = $largeurRenflement2;

        return $this;
    }

    /**
     * Get largeurRenflement2
     *
     * @return float
     */
    public function getLargeurRenflement2()
    {
        return $this->largeurRenflement2;
    }

    /**
     * Set longueurSabot
     *
     * @param float $longueurSabot
     * @return Artillerie
     */
    public function setLongueurSabot($longueurSabot)
    {
        $this->longueurSabot = $longueurSabot;

        return $this;
    }

    /**
     * Get longueurSabot
     *
     * @return float
     */
    public function getLongueurSabot()
    {
        return $this->longueurSabot;
    }

    /**
     * Set puitsCulot
     *
     * @param boolean $puitsCulot
     * @return Artillerie
     */
    public function setPuitsCulot($puitsCulot)
    {
        $this->puitsCulot = $puitsCulot;

        return $this;
    }

    /**
     * Get puitsCulot
     *
     * @return boolean
     */
    public function getPuitsCulot()
    {
        return $this->puitsCulot;
    }

    /**
     * Set diametrePuitsCulot
     *
     * @param float $diametrePuitsCulot
     * @return Artillerie
     */
    public function setDiametrePuitsCulot($diametrePuitsCulot)
    {
        $this->diametrePuitsCulot = $diametrePuitsCulot;

        return $this;
    }

    /**
     * Get diametrePuitsCulot
     *
     * @return float
     */
    public function getDiametrePuitsCulot()
    {
        return $this->diametrePuitsCulot;
    }

    /**
     * Set nBGorges
     *
     * @param integer $nBGorges
     * @return Artillerie
     */
    public function setNBGorges($nBGorges)
    {
        $this->nBGorges = $nBGorges;

        return $this;
    }

    /**
     * Get nBGorges
     *
     * @return integer
     */
    public function getNBGorges()
    {
        return $this->nBGorges;
    }

    /**
     * Set distCulotGorge
     *
     * @param float $distCulotGorge
     * @return Artillerie
     */
    public function setDistCulotGorge($distCulotGorge)
    {
        $this->distCulotGorge = $distCulotGorge;

        return $this;
    }

    /**
     * Get distCulotGorge
     *
     * @return float
     */
    public function getDistCulotGorge()
    {
        return $this->distCulotGorge;
    }

    /**
     * Set diametreJupe
     *
     * @param float $diametreJupe
     * @return Artillerie
     */
    public function setDiametreJupe($diametreJupe)
    {
        $this->diametreJupe = $diametreJupe;

        return $this;
    }

    /**
     * Get diametreJupe
     *
     * @return float
     */
    public function getDiametreJupe()
    {
        return $this->diametreJupe;
    }

    /**
     * Set longueurJupe
     *
     * @param float $longueurJupe
     * @return Artillerie
     */
    public function setLongueurJupe($longueurJupe)
    {
        $this->longueurJupe = $longueurJupe;

        return $this;
    }

    /**
     * Get longueurJupe
     *
     * @return float
     */
    public function getLongueurJupe()
    {
        return $this->longueurJupe;
    }

    /**
     * Set longEmpennage
     *
     * @param float $longEmpennage
     * @return Artillerie
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
     * @return Artillerie
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
     * @param integer $longAilette
     * @return Artillerie
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
     * Set largAilette
     *
     * @param float $largAilette
     * @return Artillerie
     */
    public function setLargAilette($largAilette)
    {
        $this->largAilette = $largAilette;

        return $this;
    }

    /**
     * Get largAilette
     *
     * @return float
     */
    public function getLargAilette()
    {
        return $this->largAilette;
    }

    /**
     * Set orifices
     *
     * @param boolean $orifices
     * @return Artillerie
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
     * Set inscriptionOgive
     *
     * @param string $inscriptionOgive
     * @return Artillerie
     */
    public function setInscriptionOgive($inscriptionOgive)
    {
        $this->inscriptionOgive = $inscriptionOgive;

        return $this;
    }

    /**
     * Get inscriptionOgive
     *
     * @return string
     */
    public function getInscriptionOgive()
    {
        return $this->inscriptionOgive;
    }

    /**
     * Set marquageFroidOgive
     *
     * @param string $marquageFroidOgive
     * @return Artillerie
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
     * Set nbBandesOgive
     *
     * @param integer $nbBandesOgive
     * @return Artillerie
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
     * Set inscriptionCorps
     *
     * @param string $inscriptionCorps
     * @return Artillerie
     */
    public function setInscriptionCorps($inscriptionCorps)
    {
        $this->inscriptionCorps = $inscriptionCorps;

        return $this;
    }

    /**
     * Get inscriptionCorps
     *
     * @return string
     */
    public function getInscriptionCorps()
    {
        return $this->inscriptionCorps;
    }

    /**
     * Set marquageFroidCorps
     *
     * @param string $marquageFroidCorps
     * @return Artillerie
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
     * Set nbBandesCorps
     *
     * @param integer $nbBandesCorps
     * @return Artillerie
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
     * Set inscriptionCulot
     *
     * @param string $inscriptionCulot
     * @return Artillerie
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
     * Set marquagePeintureCulot
     *
     * @param string $marquagePeintureCulot
     * @return Artillerie
     */
    public function setMarquagePeintureCulot($marquagePeintureCulot)
    {
        $this->marquagePeintureCulot = $marquagePeintureCulot;

        return $this;
    }

    /**
     * Get marquagePeintureCulot
     *
     * @return string
     */
    public function getMarquagePeintureCulot()
    {
        return $this->marquagePeintureCulot;
    }

    /**
     * Set marquageFroidCulot
     *
     * @param string $marquageFroidCulot
     * @return Artillerie
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
     * Set nomFusee1
     *
     * @param string $nomFusee1
     * @return Artillerie
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
     * Set nombreOrifice
     *
     * @param integer $nombreOrifice
     * @return Artillerie
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
     * Set corpsDiametre
     *
     * @param float $corpsDiametre
     * @return Artillerie
     */
    public function setCorpsDiametre($corpsDiametre)
    {
        $this->corpsDiametre = $corpsDiametre;

        return $this;
    }

    /**
     * Get corpsDiametre
     *
     * @return float
     */
    public function getCorpsDiametre()
    {
        return $this->corpsDiametre;
    }

    /**
     * Set marquage
     *
     * @param string $marquage
     * @return Artillerie
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
     * Add typeObus
     *
     * @param \FeodBundle\Entity\TypeObus $typeObus
     * @return Artillerie
     */
    public function addTypeObus(\FeodBundle\Entity\TypeObus $typeObus)
    {
        $this->typeObus[] = $typeObus;

        return $this;
    }

    /**
     * Remove typeObus
     *
     * @param \FeodBundle\Entity\TypeObus $typeObus
     */
    public function removeTypeObus(\FeodBundle\Entity\TypeObus $typeObus)
    {
        $this->typeObus->removeElement($typeObus);
    }

    /**
     * Get typeObus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeObus()
    {
        return $this->typeObus;
    }

    /**
     * Set uniteDistance
     *
     * @param \FeodBundle\Entity\UniteDistance $uniteDistance
     * @return Artillerie
     */
    public function setUniteDistance(\FeodBundle\Entity\UniteDistance $uniteDistance = null)
    {
        $this->uniteDistance = $uniteDistance;

        return $this;
    }

    /**
     * Get uniteDistance
     *
     * @return \FeodBundle\Entity\UniteDistance
     */
    public function getUniteDistance()
    {
        return $this->uniteDistance;
    }

    /**
     * Set natureEnveloppe
     *
     * @param \FeodBundle\Entity\Enveloppe $natureEnveloppe
     * @return Artillerie
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
     * Set typeCeinture
     *
     * @param \FeodBundle\Entity\TypeCeinture $typeCeinture
     * @return Artillerie
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
     * Set typeCeinture1
     *
     * @param \FeodBundle\Entity\TypeCeinture $typeCeinture1
     * @return Artillerie
     */
    public function setTypeCeinture1(\FeodBundle\Entity\TypeCeinture $typeCeinture1 = null)
    {
        $this->typeCeinture1 = $typeCeinture1;

        return $this;
    }

    /**
     * Get typeCeinture1
     *
     * @return \FeodBundle\Entity\TypeCeinture
     */
    public function getTypeCeinture1()
    {
        return $this->typeCeinture1;
    }
    
    /**
     * Set typeCeinture2
     *
     * @param \FeodBundle\Entity\TypeCeinture $typeCeinture2
     * @return Artillerie
     */
    public function setTypeCeinture2(\FeodBundle\Entity\TypeCeinture $typeCeinture2 = null)
    {
        $this->typeCeinture2 = $typeCeinture2;

        return $this;
    }

    /**
     * Get typeCeinture2
     *
     * @return \FeodBundle\Entity\TypeCeinture
     */
    public function getTypeCeinture2()
    {
        return $this->typeCeinture2;
    }

    /**
     * Set matiereCeinture
     *
     * @param \FeodBundle\Entity\MatiereCeinture $matiereCeinture
     * @return Artillerie
     */
    public function setMatiereCeinture(\FeodBundle\Entity\MatiereCeinture $matiereCeinture = null)
    {
        $this->matiereCeinture = $matiereCeinture;

        return $this;
    }

    /**
     * Get matiereCeinture
     *
     * @return \FeodBundle\Entity\MatiereCeinture
     */
    public function getMatiereCeinture()
    {
        return $this->matiereCeinture;
    }
    
    /**
     * Set matiereCeinture1
     *
     * @param \FeodBundle\Entity\MatiereCeinture $matiereCeinture1
     * @return Artillerie
     */
    public function setMatiereCeinture1(\FeodBundle\Entity\MatiereCeinture $matiereCeinture1 = null)
    {
        $this->matiereCeinture1 = $matiereCeinture1;

        return $this;
    }

    /**
     * Get matiereCeinture1
     *
     * @return \FeodBundle\Entity\MatiereCeinture
     */
    public function getMatiereCeinture1()
    {
        return $this->matiereCeinture1;
    }
    
    /**
     * Set matiereCeinture2
     *
     * @param \FeodBundle\Entity\MatiereCeinture $matiereCeinture2
     * @return Artillerie
     */
    public function setMatiereCeinture2(\FeodBundle\Entity\MatiereCeinture $matiereCeinture2 = null)
    {
        $this->matiereCeinture2 = $matiereCeinture2;

        return $this;
    }

    /**
     * Get matiereCeinture2
     *
     * @return \FeodBundle\Entity\MatiereCeinture
     */
    public function getMatiereCeinture2()
    {
        return $this->matiereCeinture2;
    }

    /**
     * Add natureChargeMili
     *
     * @param \FeodBundle\Entity\NatureChargeMili $natureChargeMili
     * @return Artillerie
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
     * @return Artillerie
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
     * Set formeOgive
     *
     * @param \FeodBundle\Entity\FormeOgive $formeOgive
     * @return Artillerie
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
     * Set typeGaine
     *
     * @param \FeodBundle\Entity\TypeGaine $typeGaine
     * @return Artillerie
     */
    public function setTypeGaine(\FeodBundle\Entity\TypeGaine $typeGaine = null)
    {
        $this->typeGaine = $typeGaine;

        return $this;
    }

    /**
     * Get typeGaine
     *
     * @return \FeodBundle\Entity\TypeGaine
     */
    public function getTypeGaine()
    {
        return $this->typeGaine;
    }

    /**
     * Set formeDeGaine
     *
     * @param \FeodBundle\Entity\FormeDeGaine $formeDeGaine
     * @return Artillerie
     */
    public function setFormeDeGaine(\FeodBundle\Entity\FormeDeGaine $formeDeGaine = null)
    {
        $this->formeDeGaine = $formeDeGaine;

        return $this;
    }

    /**
     * Get formeDeGaine
     *
     * @return \FeodBundle\Entity\FormeDeGaine
     */
    public function getFormeDeGaine()
    {
        return $this->formeDeGaine;
    }

    /**
     * Set formeCorps
     *
     * @param \FeodBundle\Entity\FormeCorps $formeCorps
     * @return Artillerie
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
     * Set typeDeRenflement1
     *
     * @param \FeodBundle\Entity\TypeDeRenflement $typeDeRenflement1
     * @return Artillerie
     */
    public function setTypeDeRenflement1(\FeodBundle\Entity\TypeDeRenflement $typeDeRenflement1 = null)
    {
        $this->typeDeRenflement1 = $typeDeRenflement1;

        return $this;
    }

    /**
     * Get typeDeRenflement1
     *
     * @return \FeodBundle\Entity\TypeDeRenflement
     */
    public function getTypeDeRenflement1()
    {
        return $this->typeDeRenflement1;
    }

    /**
     * Set positionDeRenflement1
     *
     * @param \FeodBundle\Entity\PositionDeRenflement $positionDeRenflement1
     * @return Artillerie
     */
    public function setPositionDeRenflement1(\FeodBundle\Entity\PositionDeRenflement $positionDeRenflement1 = null)
    {
        $this->positionDeRenflement1 = $positionDeRenflement1;

        return $this;
    }

    /**
     * Get positionDeRenflement1
     *
     * @return \FeodBundle\Entity\PositionDeRenflement
     */
    public function getPositionDeRenflement1()
    {
        return $this->positionDeRenflement1;
    }

    /**
     * Set typeDeRenflement2
     *
     * @param \FeodBundle\Entity\TypeDeRenflement $typeDeRenflement2
     * @return Artillerie
     */
    public function setTypeDeRenflement2(\FeodBundle\Entity\TypeDeRenflement $typeDeRenflement2 = null)
    {
        $this->typeDeRenflement2 = $typeDeRenflement2;

        return $this;
    }

    /**
     * Get typeDeRenflement2
     *
     * @return \FeodBundle\Entity\TypeDeRenflement
     */
    public function getTypeDeRenflement2()
    {
        return $this->typeDeRenflement2;
    }

    /**
     * Set positionDeRenflement2
     *
     * @param \FeodBundle\Entity\PositionDeRenflement $positionDeRenflement2
     * @return Artillerie
     */
    public function setPositionDeRenflement2(\FeodBundle\Entity\PositionDeRenflement $positionDeRenflement2 = null)
    {
        $this->positionDeRenflement2 = $positionDeRenflement2;

        return $this;
    }

    /**
     * Get positionDeRenflement2
     *
     * @return \FeodBundle\Entity\PositionDeRenflement
     */
    public function getPositionDeRenflement2()
    {
        return $this->positionDeRenflement2;
    }

    /**
     * Set typeSabot
     *
     * @param \FeodBundle\Entity\TypeSabot $typeSabot
     * @return Artillerie
     */
    public function setTypeSabot(\FeodBundle\Entity\TypeSabot $typeSabot = null)
    {
        $this->typeSabot = $typeSabot;

        return $this;
    }

    /**
     * Get typeSabot
     *
     * @return \FeodBundle\Entity\TypeSabot
     */
    public function getTypeSabot()
    {
        return $this->typeSabot;
    }

    /**
     * Set formeCulot
     *
     * @param \FeodBundle\Entity\FormeCulot $formeCulot
     * @return Artillerie
     */
    public function setFormeCulot(\FeodBundle\Entity\FormeCulot $formeCulot = null)
    {
        $this->formeCulot = $formeCulot;

        return $this;
    }

    /**
     * Get formeCulot
     *
     * @return \FeodBundle\Entity\FormeCulot
     */
    public function getFormeCulot()
    {
        return $this->formeCulot;
    }

    /**
     * Set typePlaque
     *
     * @param \FeodBundle\Entity\TypePlaque $typePlaque
     * @return Artillerie
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
     * Set typeEmpennage
     *
     * @param \FeodBundle\Entity\TypeEmpennage $typeEmpennage
     * @return Artillerie
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
     * Set formeAilettes
     *
     * @param \FeodBundle\Entity\FormeAilettes $formeAilettes
     * @return Artillerie
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
     * Add positionOrifice
     *
     * @param \FeodBundle\Entity\PositionOrifice $positionOrifice
     * @return Artillerie
     */
    public function addPositionOrifice(\FeodBundle\Entity\PositionOrifice $positionOrifice)
    {
        $this->positionOrifice[] = $positionOrifice;

        return $this;
    }

    /**
     * Remove positionOrifice
     *
     * @param \FeodBundle\Entity\PositionOrifice $positionOrifice
     */
    public function removePositionOrifice(\FeodBundle\Entity\PositionOrifice $positionOrifice)
    {
        $this->positionOrifice->removeElement($positionOrifice);
    }

    /**
     * Get positionOrifice
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPositionOrifice()
    {
        return $this->positionOrifice;
    }

    /**
     * Set obturation
     *
     * @param \FeodBundle\Entity\Obturation $obturation
     * @return Artillerie
     */
    public function setObturation(\FeodBundle\Entity\Obturation $obturation = null)
    {
        $this->obturation = $obturation;

        return $this;
    }

    /**
     * Get obturation
     *
     * @return \FeodBundle\Entity\Obturation
     */
    public function getObturation()
    {
        return $this->obturation;
    }

    /**
     * Set typeElemAeroAV
     *
     * @param \FeodBundle\Entity\ElementsAerodynamiques $typeElemAeroAV
     * @return Artillerie
     */
    public function setTypeElemAeroAV(\FeodBundle\Entity\ElementsAerodynamiques $typeElemAeroAV = null)
    {
        $this->typeElemAeroAV = $typeElemAeroAV;

        return $this;
    }

    /**
     * Get typeElemAeroAV
     *
     * @return \FeodBundle\Entity\ElementsAerodynamiques
     */
    public function getTypeElemAeroAV()
    {
        return $this->typeElemAeroAV;
    }

    /**
     * Set formeElemAeroAV
     *
     * @param \FeodBundle\Entity\FormeElemAero $formeElemAeroAV
     * @return Artillerie
     */
    public function setFormeElemAeroAV(\FeodBundle\Entity\FormeElemAero $formeElemAeroAV = null)
    {
        $this->formeElemAeroAV = $formeElemAeroAV;

        return $this;
    }

    /**
     * Get formeElemAeroAV
     *
     * @return \FeodBundle\Entity\FormeElemAero
     */
    public function getFormeElemAeroAV()
    {
        return $this->formeElemAeroAV;
    }

    /**
     * Set positionElemAeroAV
     *
     * @param \FeodBundle\Entity\PositionElemAeroAV $positionElemAeroAV
     * @return Artillerie
     */
    public function setPositionElemAeroAV(\FeodBundle\Entity\PositionElemAeroAV $positionElemAeroAV = null)
    {
        $this->positionElemAeroAV = $positionElemAeroAV;

        return $this;
    }

    /**
     * Get positionElemAeroAV
     *
     * @return \FeodBundle\Entity\PositionElemAeroAV
     */
    public function getPositionElemAeroAV()
    {
        return $this->positionElemAeroAV;
    }

    /**
     * Set typeElemAeroAR
     *
     * @param \FeodBundle\Entity\ElementsAerodynamiques $typeElemAeroAR
     * @return Artillerie
     */
    public function setTypeElemAeroAR(\FeodBundle\Entity\ElementsAerodynamiques $typeElemAeroAR = null)
    {
        $this->typeElemAeroAR = $typeElemAeroAR;

        return $this;
    }

    /**
     * Get typeElemAeroAR
     *
     * @return \FeodBundle\Entity\ElementsAerodynamiques
     */
    public function getTypeElemAeroAR()
    {
        return $this->typeElemAeroAR;
    }

    /**
     * Set formeElemAeroAR
     *
     * @param \FeodBundle\Entity\FormeElemAero $formeElemAeroAR
     * @return Artillerie
     */
    public function setFormeElemAeroAR(\FeodBundle\Entity\FormeElemAero $formeElemAeroAR = null)
    {
        $this->formeElemAeroAR = $formeElemAeroAR;

        return $this;
    }

    /**
     * Get formeElemAeroAR
     *
     * @return \FeodBundle\Entity\FormeElemAero
     */
    public function getFormeElemAeroAR()
    {
        return $this->formeElemAeroAR;
    }

    /**
     * Set positionElemAeroAR
     *
     * @param \FeodBundle\Entity\PositionElemAeroAR $positionElemAeroAR
     * @return Artillerie
     */
    public function setPositionElemAeroAR(\FeodBundle\Entity\PositionElemAeroAR $positionElemAeroAR = null)
    {
        $this->positionElemAeroAR = $positionElemAeroAR;

        return $this;
    }

    /**
     * Get positionElemAeroAR
     *
     * @return \FeodBundle\Entity\PositionElemAeroAR
     */
    public function getPositionElemAeroAR()
    {
        return $this->positionElemAeroAR;
    }

    /**
     * Set couleurOgive
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurOgive
     * @return Artillerie
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
     * Add symboleOgive
     *
     * @param \FeodBundle\Entity\SymboleOgive $symboleOgive
     * @return Artillerie
     */
    public function addSymboleOgive(\FeodBundle\Entity\SymboleOgive $symboleOgive)
    {
        $this->symboleOgive[] = $symboleOgive;

        return $this;
    }

    /**
     * Remove symboleOgive
     *
     * @param \FeodBundle\Entity\SymboleOgive $symboleOgive
     */
    public function removeSymboleOgive(\FeodBundle\Entity\SymboleOgive $symboleOgive)
    {
        $this->symboleOgive->removeElement($symboleOgive);
    }

    /**
     * Get symboleOgive
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSymboleOgive()
    {
        return $this->symboleOgive;
    }

    /**
     * Set typeInscOgive
     *
     * @param \FeodBundle\Entity\TypeMarquage $typeInscOgive
     * @return Artillerie
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
     * Set couleurInscOgive
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurInscOgive
     * @return Artillerie
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
     * Set couleurBandeOgive1
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeOgive1
     * @return Artillerie
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
     * @return Artillerie
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
     * @return Artillerie
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
     * @return Artillerie
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
     * Set couleurCorps
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurCorps
     * @return Artillerie
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
     * Add symboleCorps
     *
     * @param \FeodBundle\Entity\SymboleOgive $symboleCorps
     * @return Artillerie
     */
    public function addSymboleCorp(\FeodBundle\Entity\SymboleOgive $symboleCorps)
    {
        $this->symboleCorps[] = $symboleCorps;

        return $this;
    }

    /**
     * Remove symboleCorps
     *
     * @param \FeodBundle\Entity\SymboleOgive $symboleCorps
     */
    public function removeSymboleCorp(\FeodBundle\Entity\SymboleOgive $symboleCorps)
    {
        $this->symboleCorps->removeElement($symboleCorps);
    }

    /**
     * Get symboleCorps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSymboleCorps()
    {
        return $this->symboleCorps;
    }

    /**
     * Set typeInscCorps
     *
     * @param \FeodBundle\Entity\TypeMarquage $typeInscCorps
     * @return Artillerie
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
     * Set couleurInscCorps
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurInscCorps
     * @return Artillerie
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
     * Set couleurBandeCorps1
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeCorps1
     * @return Artillerie
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
     * @return Artillerie
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
     * @return Artillerie
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
     * @return Artillerie
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
     * Set couleurCulot
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurCulot
     * @return Artillerie
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
     * Add symboleCulot
     *
     * @param \FeodBundle\Entity\SymboleOgive $symboleCulot
     * @return Artillerie
     */
    public function addSymboleCulot(\FeodBundle\Entity\SymboleOgive $symboleCulot)
    {
        $this->symboleCulot[] = $symboleCulot;

        return $this;
    }

    /**
     * Remove symboleCulot
     *
     * @param \FeodBundle\Entity\SymboleOgive $symboleCulot
     */
    public function removeSymboleCulot(\FeodBundle\Entity\SymboleOgive $symboleCulot)
    {
        $this->symboleCulot->removeElement($symboleCulot);
    }

    /**
     * Get symboleCulot
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSymboleCulot()
    {
        return $this->symboleCulot;
    }

    /**
     * Set typeInscCulot
     *
     * @param \FeodBundle\Entity\TypeMarquage $typeInscCulot
     * @return Artillerie
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
     * Set couleurInscCulot
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurInscCulot
     * @return Artillerie
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
     * Set couleurBandeCulot1
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurBandeCulot1
     * @return Artillerie
     */
    public function setCouleurBandeCulot1(\FeodBundle\Entity\CouleurFond $couleurBandeCulot1 = null)
    {
        $this->couleurBandeCulot1 = $couleurBandeCulot1;

        return $this;
    }

    /**
     * Get couleurBandeCulot1
     *
     * @return \FeodBundle\Entity\CouleurFond
     */
    public function getCouleurBandeCulot1()
    {
        return $this->couleurBandeCulot1;
    }

    /**
     * Add positionFusee
     *
     * @param \FeodBundle\Entity\PositionFusee $positionFusee
     * @return Artillerie
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
     * Set autoDestruction
     *
     * @param boolean $autoDestruction
     * @return Artillerie
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
    
    public function getEncartouche() { return $this->Encartouche; }
    public function setEncartouche($var) { $this->Encartouche = $var; }

    /**
     * Set natureChargeDispersion
     *
     * @param \FeodBundle\Entity\Explosif $natureChargeDispersion
     * @return Artillerie
     */
    public function setNatureChargeDispersion(\FeodBundle\Entity\Explosif $natureChargeDispersion = null)
    {
        $this->natureChargeDispersion = $natureChargeDispersion;

        return $this;
    }

    /**
     * Set natureChargeTandem
     *
     * @param \FeodBundle\Entity\Explosif $natureChargeTandem
     * @return Artillerie
     */
    public function setNatureChargeTandem(\FeodBundle\Entity\Explosif $natureChargeTandem = null)
    {
        $this->natureChargeTandem = $natureChargeTandem;

        return $this;
    }
}
