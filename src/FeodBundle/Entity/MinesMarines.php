<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use FeodBundle\Entity\Munition;

/**
 * MinesMarines
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="FeodBundle\Repository\MinesMarinesRepository")
 */
class MinesMarines extends Munition
{

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="commandeADistance", type="boolean")
     */
    private $commandeADistance;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="compteurNavire", type="boolean")
     */
    private $compteurNavire;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="TypeCommandeDistance", type="string", length=255)
     */
    private $TypeCommandeDistance;
    
     /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="TypeAntiDemontage", type="string", length=255)
     */
    private $TypeAntiDemontage;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="TypeAntiRelevage", type="string", length=255)
     */
    private $TypeAntiRelevage;
    
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="compteurNavireCommentaire", type="string", length=255)
     */
    private $compteurNavireCommentaire;

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
     * @ORM\Column(nullable=true, name="ProfondeurMouillage", type="float")
     */
    private $profondeurMouillage;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="ProfondeurImmersionFlotteur", type="float")
     */
    private $profondeurImmersionFlotteur;

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
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="autoDestruction", type="boolean")
     */
    private $autoDestruction;

    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="TypeAutoDes", type="string", length=255)
     */
    private $TypeAutoDes;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="HauteurNonLargue", type="float")
     */
    private $HauteurNonLargue;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="diametreHaut", type="float")
     */
    private $diametreHaut;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longueur", type="float")
     */
    private $longueurCorps;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="longueurAccessoires", type="float")
     */
    private $longueurAccessoires;

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
     * @ORM\Column(nullable=true, name="poidsFlotteur", type="float")
     */
    private $poidsFlotteur;

    /**
     * @var float
     *
     * @ORM\Column(nullable=true, name="poidsCrapaud", type="float")
     */
    private $poidsCrapaud;

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
     * @ORM\Column(nullable=true, name="PorteDetonateur", type="boolean")
     */
    private $PorteDetonateur;

    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, name="BoiteAmorces", type="boolean")
     */
    private $BoiteAmorces;

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
     * @ORM\Column(nullable=true, name="copieExistante", type="string", length=255)
     */
    private $copieExistante;


    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionDispositifTransport")
     */
    private $positionDispositifTransport;
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMMouilleur")
   * @ORM\JoinTable(name="minesmarines_mmMouilleur",
   *  joinColumns={@ORM\JoinColumn(name="minesmarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMMouilleur_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMMouilleur;
  
    /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMCible")
   * @ORM\JoinTable(name="minesmarines_mmcible",
   *  joinColumns={@ORM\JoinColumn(name="minesMarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMCible_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMCible;
  
      /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMSensibilite")
   * @ORM\JoinTable(name="minesmarines_mmsensibilite",
   *  joinColumns={@ORM\JoinColumn(name="minesMarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMSensibilite_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMSensibilite;
  
        /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMInfluence")
   * @ORM\JoinTable(name="minesmarines_mminfluence",
   *  joinColumns={@ORM\JoinColumn(name="minesMarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMInfluence_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMInfluence;
  
          /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMContact")
   * @ORM\JoinTable(name="minesmarines_mmcontact",
   *  joinColumns={@ORM\JoinColumn(name="minesMarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMContact_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMContact;
  
            /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMMiseDeFeu")
   * @ORM\JoinTable(name="minesmarines_mmmisedefeu",
   *  joinColumns={@ORM\JoinColumn(name="minesMarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMMiseDeFeu_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMMiseDeFeu;
  
              /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMAppendicesOrin")
   * @ORM\JoinTable(name="minesmarines_mmappendicesOrinHS",
   *  joinColumns={@ORM\JoinColumn(name="minesMarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMAppendicesOrin_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMAppendicesOrinHS;
  
                /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMAppendicesOrin")
   * @ORM\JoinTable(name="minesmarines_mmappendicesOrinHI",
   *  joinColumns={@ORM\JoinColumn(name="minesMarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMAppendicesOrin_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMAppendicesOrinHI;
  
              /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\MMAppendicesMineFond")
   * @ORM\JoinTable(name="minesmarines_mmappendicesMineFond",
   *  joinColumns={@ORM\JoinColumn(name="minesMarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="MMAppendicesMineFond_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $MMAppendicesMineFond;
  
  /**
   * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\TypeMineMarine")
   * @ORM\JoinTable(name="minesmarines_TypeMineMarine",
   *  joinColumns={@ORM\JoinColumn(name="minesmarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="TypeMineMarine_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $typeMineMarine;
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
   * @ORM\JoinTable(name="minesmarines_dispositifsecurite",
   *  joinColumns={@ORM\JoinColumn(name="minesmarines_id", referencedColumnName="id")},
   *  inverseJoinColumns={@ORM\JoinColumn(name="dispositifsecurite_id", referencedColumnName="id", unique=true )}
   * )
   */
  private $dispositifSecurite;

  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Detectabilite")
   */
  private $detectabilite;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FormeMine")
   */
  private $FormeGenerale;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\UniteMasse")
   */
  private $unitePoidsMine;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Enveloppe")
   */
  private $natureEnveloppe;
  
    /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\MMPriseImmersion")
   */
  private $PriseImmersion;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeSupport")
   */
  private $typeSupport;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeDispositifTransport")
   */
  private $typeDispositifTransport;
  
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
  private $couleurPrincipaleAlternative;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $couleurSecondaireAlternative;
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CouleurFond")
   */
  private $bandesCouleur;
	/**
	 * @var string
	 *
	 * @ORM\Column(nullable=true, name="CommentaireBandesCouleur", type="string", length=255)
	 */
  private $commentaireBandesCouleur;
  
    /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeRemplissage")
   */
  private $typeRemplissage;
  
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
   * @var string
   *
   * @ORM\Column(nullable=true, name="PoleSuperieur", type="string", length=255)
   */
  private $PoleSuperieur;
  
    /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="PoleInferieur", type="string", length=255)
   */
  private $PoleInferieur;
  
   /**
   * @var integer
   *
   * @ORM\Column(nullable=true, name="HSNombreCornes", type="integer")
   */
  private $HSNombreCornes;
  
   /**
   * @var integer
   *
   * @ORM\Column(nullable=true, name="HINombreCornes", type="integer")
   */
  private $HINombreCornes;
  
   /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="HSAppendicesPosDim", type="string", length=255)
   */
  private $HSAppendicesPosDim;
  
   /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="HIAppendicesPosDim", type="string", length=255)
   */
  private $HIAppendicesPosDim;
  
   /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="CommentaireAppMineFond", type="string", length=255)
   */
  private $CommentaireAppMineFond;
  
  /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="CommentaireDA", type="string", length=255)
   */
  private $CommentaireDA;
  
  /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="CeintureMediane", type="string", length=255)
   */
  private $CeintureMediane;
  
    /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="MMSensibilites", type="string", length=255)
   */
  private $MMSensibilites;
  
   /**
    * @var boolean
    *
    * @ORM\Column(nullable=true, name="DispositifSabordage", type="boolean")
    */
   private $DispositifSabordage;
   
   /**
    * @var boolean
    *
    * @ORM\Column(nullable=true, name="DispositifSterilisation", type="boolean")
    */
   private $DispositifSterilisation;
   
  /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="TypeDispoSabordage", type="string", length=255)
   */
  private $TypeDispoSabordage;
  
    /**
   * @var string
   *
   * @ORM\Column(nullable=true, name="DelaiSterilisation", type="string", length=255)
   */
  private $DelaiSterilisation;
 
/***********************************************************************************/ 
  /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->dispositifSecurite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->declenchement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMMouilleur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMCible = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMSensibilite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMInfluence = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMContact = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMMiseDeFeu = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMAppendicesOrinHS = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMAppendicesOrinHI = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MMAppendicesMineFond = new \Doctrine\Common\Collections\ArrayCollection();
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

	
/******************************************************************************/	
    /**
     * Set commandeADistance
     *
     * @param boolean $commandeADistance
     * @return MinesMarines
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
     * Set compteurNavire
     *
     * @param boolean $compteurNavire
     * @return MinesMarines
     */
    public function setCompteurNavire($compteurNavire)
    {
        $this->compteurNavire = $compteurNavire;

        return $this;
    }

    /**
     * Get compteurNavire
     *
     * @return boolean
     */
    public function getCompteurNavire()
    {
        return $this->compteurNavire;
    }

    /**
     * Set compteurNavireCommentaire
     *
     * @param boolean $compteurNavireCommentaire
     * @return MinesMarines
     */
    public function setCompteurNavireCommentaire($compteurNavireCommentaire)
    {
        $this->compteurNavireCommentaire = $compteurNavireCommentaire;

        return $this;
    }

    /**
     * Get compteurNavireCommentaire
     *
     * @return boolean
     */
    public function getCompteurNavireCommentaire()
    {
        return $this->compteurNavireCommentaire;
    }

    /**
     * Set antiRelevage
     *
     * @param boolean $antiRelevage
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set profondeurMouillage
     *
     * @param float $profondeurMouillage
     * @return MinesMarines
     */
    public function setProfondeurMouillage($profondeurMouillage)
    {
        $this->profondeurMouillage = $profondeurMouillage;

        return $this;
    }

    /**
     * Get profondeurMouillage
     *
     * @return float
     */
    public function getProfondeurMouillage()
    {
        return $this->profondeurMouillage;
    }

    /**
     * Set profondeurImmersionFlotteur
     *
     * @param float $profondeurImmersionFlotteur
     * @return MinesMarines
     */
    public function setProfondeurImmersionFlotteur($profondeurImmersionFlotteur)
    {
        $this->profondeurImmersionFlotteur = $profondeurImmersionFlotteur;

        return $this;
    }

    /**
     * Get profondeurImmersionFlotteur
     *
     * @return float
     */
    public function getProfondeurImmersionFlotteur()
    {
        return $this->profondeurImmersionFlotteur;
    }

    /**
     * Set poidsChargeMili
     *
     * @param float $poidsChargeMili
     * @return MinesMarines
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
     * Set autoNeutra
     *
     * @param boolean $autoNeutra
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set TypeAutoDes
     *
     * @param string $TypeAutoDes
     * @return MinesMarines
     */
    public function setTypeAutoDes($TypeAutoDes)
    {
        $this->TypeAutoDes = $TypeAutoDes;

        return $this;
    }

    /**
     * Get TypeAutoDes
     *
     * @return string
     */
    public function getTypeAutoDes()
    {
        return $this->TypeAutoDes;
    }

    /**
     * Set HauteurNonLargue
     *
     * @param float $HauteurNonLargue
     * @return MinesMarines
     */
    public function setHauteurNonLargue($HauteurNonLargue)
    {
        $this->HauteurNonLargue = $HauteurNonLargue;

        return $this;
    }

    /**
     * Get HauteurNonLargue
     *
     * @return float
     */
    public function getHauteurNonLargue()
    {
        return $this->HauteurNonLargue;
    }

    /**
     * Set diametreHaut
     *
     * @param float $diametreHaut
     * @return MinesMarines
     */
    public function setDiametreHaut($diametreHaut)
    {
        $this->diametreHaut = $diametreHaut;

        return $this;
    }

    /**
     * Get diametreHaut
     *
     * @return float
     */
    public function getDiametreHaut()
    {
        return $this->diametreHaut;
    }

    /**
     * Set longueurCorps
     *
     * @param float $longueurCorps
     * @return MinesMarines
     */
    public function setLongueurCorps($longueurCorps)
    {
        $this->longueurCorps = $longueurCorps;

        return $this;
    }

    /**
     * Get longueurCorps
     *
     * @return float
     */
    public function getLongueurCorps()
    {
        return $this->longueurCorps;
    }

    /**
     * Set longueurAccessoires
     *
     * @param float $longueurAccessoires
     * @return MinesMarines
     */
    public function setLongueurAccessoires($longueurAccessoires)
    {
        $this->longueurAccessoires = $longueurAccessoires;

        return $this;
    }

    /**
     * Get longueurAccessoires
     *
     * @return float
     */
    public function getLongueurAccessoires()
    {
        return $this->longueurAccessoires;
    }

    /**
     * Set largeur
     *
     * @param float $largeur
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set poidsFlotteur
     *
     * @param float $poidsFlotteur
     * @return MinesMarines
     */
    public function setPoidsFlotteur($poidsFlotteur)
    {
        $this->poidsFlotteur = $poidsFlotteur;

        return $this;
    }

    /**
     * Get poidsFlotteur
     *
     * @return float
     */
    public function getPoidsFlotteur()
    {
        return $this->poidsFlotteur;
    }

    /**
     * Set poidsCrapaud
     *
     * @param float $poidsCrapaud
     * @return MinesMarines
     */
    public function setPoidsCrapaud($poidsCrapaud)
    {
        $this->poidsCrapaud = $poidsCrapaud;

        return $this;
    }

    /**
     * Get poidsCrapaud
     *
     * @return float
     */
    public function getPoidsCrapaud()
    {
        return $this->poidsCrapaud;
    }

    /**
     * Set poidsMineCalcule
     *
     * @param float $poidsMineCalcule
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set PorteDetonateur
     *
     * @param boolean $PorteDetonateur
     * @return MinesMarines
     */
    public function setPresenceDispositifTransport($PorteDetonateur)
    {
        $this->PorteDetonateur = $PorteDetonateur;

        return $this;
    }

    /**
     * Get PorteDetonateur
     *
     * @return boolean
     */
    public function getPresenceDispositifTransport()
    {
        return $this->PorteDetonateur;
    }

    /**
     * Set positionDispositifTransport
     *
     * @param string $positionDispositifTransport
     * @return MinesMarines
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
     * Set nombrePuitAmorcage
     *
     * @param integer $nombrePuitAmorcage
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set delaiArmement
     *
     * @param string $delaiArmement
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set typeMine
     *
     * @param \FeodBundle\Entity\TypeMine $typeMine
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set detectabilite
     *
     * @param \FeodBundle\Entity\Detectabilite $detectabilite
     * @return MinesMarines
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
     * Set unitePoidsMine
     *
     * @param \FeodBundle\Entity\UniteMasse $unitePoidsMine
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set chargeAmovible
     *
     * @param boolean $chargeAmovible
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set nbrAllumeur
     *
     * @param integer $nbrAllumeur
     * @return MinesMarines
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
     * Set PresenceAllumeurPiegeage
     *
     * @param boolean $presenceAllumeurPiegeage
     * @return MinesMarines
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
     * Set commentaireBandesCouleur
     *
     * @param string $commentaireBandesCouleur
     * @return MinesMarines
     */
    public function setCommentaireBandesCouleur($commentaireBandesCouleur)
    {
        $this->commentaireBandesCouleur = $commentaireBandesCouleur;

        return $this;
    }

    /**
     * Get commentaireBandesCouleur
     *
     * @return string 
     */
    public function getCommentaireBandesCouleur()
    {
        return $this->commentaireBandesCouleur;
    }

    /**
     * Set typeAllumeur
     *
     * @param \FeodBundle\Entity\TypeAllumeur $typeAllumeur
     * @return MinesMarines
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
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set FormeGenerale
     *
     * @param \FeodBundle\Entity\FormeMine $formeGenerale
     * @return MinesMarines
     */
    public function setFormeGenerale(\FeodBundle\Entity\FormeMine $formeGenerale = null)
    {
        $this->FormeGenerale = $formeGenerale;

        return $this;
    }

    /**
     * Get FormeGenerale
     *
     * @return \FeodBundle\Entity\FormeMine 
     */
    public function getFormeGenerale()
    {
        return $this->FormeGenerale;
    }

    /**
     * Set couleurPrincipaleAlternative
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurPrincipaleAlternative
     * @return MinesMarines
     */
    public function setCouleurPrincipaleAlternative(\FeodBundle\Entity\CouleurFond $couleurPrincipaleAlternative = null)
    {
        $this->couleurPrincipaleAlternative = $couleurPrincipaleAlternative;

        return $this;
    }

    /**
     * Get couleurPrincipaleAlternative
     *
     * @return \FeodBundle\Entity\CouleurFond 
     */
    public function getCouleurPrincipaleAlternative()
    {
        return $this->couleurPrincipaleAlternative;
    }

    /**
     * Set couleurSecondaireAlternative
     *
     * @param \FeodBundle\Entity\CouleurFond $couleurSecondaireAlternative
     * @return MinesMarines
     */
    public function setCouleurSecondaireAlternative(\FeodBundle\Entity\CouleurFond $couleurSecondaireAlternative = null)
    {
        $this->couleurSecondaireAlternative = $couleurSecondaireAlternative;

        return $this;
    }

    /**
     * Get couleurSecondaireAlternative
     *
     * @return \FeodBundle\Entity\CouleurFond 
     */
    public function getCouleurSecondaireAlternative()
    {
        return $this->couleurSecondaireAlternative;
    }

    /**
     * Set bandesCouleur
     *
     * @param \FeodBundle\Entity\CouleurFond $bandesCouleur
     * @return MinesMarines
     */
    public function setBandesCouleur(\FeodBundle\Entity\CouleurFond $bandesCouleur = null)
    {
        $this->bandesCouleur = $bandesCouleur;

        return $this;
    }

    /**
     * Get bandesCouleur
     *
     * @return \FeodBundle\Entity\CouleurFond 
     */
    public function getBandesCouleur()
    {
        return $this->bandesCouleur;
    }

    /**
     * Set typeRemplissage
     *
     * @param \FeodBundle\Entity\TypeRemplissage $typeRemplissage
     * @return MinesMarines
     */
    public function setTypeRemplissage(\FeodBundle\Entity\TypeRemplissage $typeRemplissage = null)
    {
        $this->typeRemplissage = $typeRemplissage;

        return $this;
    }

    /**
     * Get typeRemplissage
     *
     * @return \FeodBundle\Entity\TypeRemplissage 
     */
    public function getTypeRemplissage()
    {
        return $this->typeRemplissage;
    }

    /**
     * Set PoleSuperieur
     *
     * @param string $poleSuperieur
     * @return MinesMarines
     */
    public function setPoleSuperieur($poleSuperieur)
    {
        $this->PoleSuperieur = $poleSuperieur;

        return $this;
    }

    /**
     * Get PoleSuperieur
     *
     * @return string 
     */
    public function getPoleSuperieur()
    {
        return $this->PoleSuperieur;
    }

    /**
     * Set HSNombreCornes
     *
     * @param integer $hSNombreCornes
     * @return MinesMarines
     */
    public function setHSNombreCornes($hSNombreCornes)
    {
        $this->HSNombreCornes = $hSNombreCornes;

        return $this;
    }

    /**
     * Get HSNombreCornes
     *
     * @return integer 
     */
    public function getHSNombreCornes()
    {
        return $this->HSNombreCornes;
    }

    /**
     * Set HINombreCornes
     *
     * @param integer $hINombreCornes
     * @return MinesMarines
     */
    public function setHINombreCornes($hINombreCornes)
    {
        $this->HINombreCornes = $hINombreCornes;

        return $this;
    }

    /**
     * Get HINombreCornes
     *
     * @return integer 
     */
    public function getHINombreCornes()
    {
        return $this->HINombreCornes;
    }

    /**
     * Set HSAppendicesPosDim
     *
     * @param string $hSAppendicesPosDim
     * @return MinesMarines
     */
    public function setHSAppendicesPosDim($hSAppendicesPosDim)
    {
        $this->HSAppendicesPosDim = $hSAppendicesPosDim;

        return $this;
    }

    /**
     * Get HSAppendicesPosDim
     *
     * @return string 
     */
    public function getHSAppendicesPosDim()
    {
        return $this->HSAppendicesPosDim;
    }

    /**
     * Set HIAppendicesPosDim
     *
     * @param string $hIAppendicesPosDim
     * @return MinesMarines
     */
    public function setHIAppendicesPosDim($hIAppendicesPosDim)
    {
        $this->HIAppendicesPosDim = $hIAppendicesPosDim;

        return $this;
    }

    /**
     * Get HIAppendicesPosDim
     *
     * @return string 
     */
    public function getHIAppendicesPosDim()
    {
        return $this->HIAppendicesPosDim;
    }

    /**
     * Set CommentaireAppMineFond
     *
     * @param string $commentaireAppMineFond
     * @return MinesMarines
     */
    public function setCommentaireAppMineFond($commentaireAppMineFond)
    {
        $this->CommentaireAppMineFond = $commentaireAppMineFond;

        return $this;
    }

    /**
     * Get CommentaireAppMineFond
     *
     * @return string 
     */
    public function getCommentaireAppMineFond()
    {
        return $this->CommentaireAppMineFond;
    }

    /**
     * Set PorteDetonateur
     *
     * @param boolean $porteDetonateur
     * @return MinesMarines
     */
    public function setPorteDetonateur($porteDetonateur)
    {
        $this->PorteDetonateur = $porteDetonateur;

        return $this;
    }

    /**
     * Get PorteDetonateur
     *
     * @return boolean 
     */
    public function getPorteDetonateur()
    {
        return $this->PorteDetonateur;
    }

    /**
     * Set BoiteAmorce
     *
     * @param boolean $boiteAmorce
     * @return MinesMarines
     */
    public function setBoiteAmorce($boiteAmorce)
    {
        $this->BoiteAmorce = $boiteAmorce;

        return $this;
    }

    /**
     * Get BoiteAmorce
     *
     * @return boolean 
     */
    public function getBoiteAmorce()
    {
        return $this->BoiteAmorce;
    }

    /**
     * Set CommentaireDA
     *
     * @param string $commentaireDA
     * @return MinesMarines
     */
    public function setCommentaireDA($commentaireDA)
    {
        $this->CommentaireDA = $commentaireDA;

        return $this;
    }

    /**
     * Get CommentaireDA
     *
     * @return string 
     */
    public function getCommentaireDA()
    {
        return $this->CommentaireDA;
    }

    /**
     * Set nomAllumeur
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeur
     * @return MinesMarines
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
     * Set nomAllumeur1
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeur1
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set nomAllumeurMine
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeurMine
     * @return MinesMarines
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
     * Set nomAllumeurMine1
     *
     * @param \FeodBundle\Entity\Amorcage $nomAllumeurMine1
     * @return MinesMarines
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
     * @return MinesMarines
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
     * Set CeintureMediane
     *
     * @param string $ceintureMediane
     * @return MinesMarines
     */
    public function setCeintureMediane($ceintureMediane)
    {
        $this->CeintureMediane = $ceintureMediane;

        return $this;
    }

    /**
     * Get CeintureMediane
     *
     * @return string 
     */
    public function getCeintureMediane()
    {
        return $this->CeintureMediane;
    }

    /**
     * Set TypeCommandeDistance
     *
     * @param string $typeCommandeDistance
     * @return MinesMarines
     */
    public function setTypeCommandeDistance($typeCommandeDistance)
    {
        $this->TypeCommandeDistance = $typeCommandeDistance;

        return $this;
    }

    /**
     * Get TypeCommandeDistance
     *
     * @return string 
     */
    public function getTypeCommandeDistance()
    {
        return $this->TypeCommandeDistance;
    }

    /**
     * Set TypeAntiDemontage
     *
     * @param string $typeAntiDemontage
     * @return MinesMarines
     */
    public function setTypeAntiDemontage($typeAntiDemontage)
    {
        $this->TypeAntiDemontage = $typeAntiDemontage;

        return $this;
    }

    /**
     * Get TypeAntiDemontage
     *
     * @return string 
     */
    public function getTypeAntiDemontage()
    {
        return $this->TypeAntiDemontage;
    }

    /**
     * Set TypeAntiRelevage
     *
     * @param string $typeAntiRelevage
     * @return MinesMarines
     */
    public function setTypeAntiRelevage($typeAntiRelevage)
    {
        $this->TypeAntiRelevage = $typeAntiRelevage;

        return $this;
    }

    /**
     * Get TypeAntiRelevage
     *
     * @return string 
     */
    public function getTypeAntiRelevage()
    {
        return $this->TypeAntiRelevage;
    }

    /**
     * Set DispositifSabordage
     *
     * @param boolean $dispositifSabordage
     * @return MinesMarines
     */
    public function setDispositifSabordage($dispositifSabordage)
    {
        $this->DispositifSabordage = $dispositifSabordage;

        return $this;
    }

    /**
     * Get DispositifSabordage
     *
     * @return boolean 
     */
    public function getDispositifSabordage()
    {
        return $this->DispositifSabordage;
    }

    /**
     * Set DispositifSterilisation
     *
     * @param boolean $dispositifSterilisation
     * @return MinesMarines
     */
    public function setDispositifSterilisation($dispositifSterilisation)
    {
        $this->DispositifSterilisation = $dispositifSterilisation;

        return $this;
    }

    /**
     * Get DispositifSterilisation
     *
     * @return boolean 
     */
    public function getDispositifSterilisation()
    {
        return $this->DispositifSterilisation;
    }

    /**
     * Set TypeDispoSabordage
     *
     * @param string $typeDispoSabordage
     * @return MinesMarines
     */
    public function setTypeDispoSabordage($typeDispoSabordage)
    {
        $this->TypeDispoSabordage = $typeDispoSabordage;

        return $this;
    }

    /**
     * Get TypeDispoSabordage
     *
     * @return string 
     */
    public function getTypeDispoSabordage()
    {
        return $this->TypeDispoSabordage;
    }

    /**
     * Set MMSensibilites
     *
     * @param string $mMSensibilites
     * @return MinesMarines
     */
    public function setMMSensibilites($mMSensibilites)
    {
        $this->MMSensibilites = $mMSensibilites;

        return $this;
    }

    /**
     * Get MMSensibilites
     *
     * @return string 
     */
    public function getMMSensibilites()
    {
        return $this->MMSensibilites;
    }

    /**
     * Add MMMouilleur
     *
     * @param \FeodBundle\Entity\MMMouilleur $mMMouilleur
     * @return MinesMarines
     */
    public function addMMMouilleur(\FeodBundle\Entity\MMMouilleur $mMMouilleur)
    {
        $this->MMMouilleur[] = $mMMouilleur;

        return $this;
    }

    /**
     * Remove MMMouilleur
     *
     * @param \FeodBundle\Entity\MMMouilleur $mMMouilleur
     */
    public function removeMMMouilleur(\FeodBundle\Entity\MMMouilleur $mMMouilleur)
    {
        $this->MMMouilleur->removeElement($mMMouilleur);
    }

    /**
     * Get MMMouilleur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMMouilleur()
    {
        return $this->MMMouilleur;
    }

    /**
     * Add MMCible
     *
     * @param \FeodBundle\Entity\MMCible $mMCible
     * @return MinesMarines
     */
    public function addMMCible(\FeodBundle\Entity\MMCible $mMCible)
    {
        $this->MMCible[] = $mMCible;

        return $this;
    }

    /**
     * Remove MMCible
     *
     * @param \FeodBundle\Entity\MMCible $mMCible
     */
    public function removeMMCible(\FeodBundle\Entity\MMCible $mMCible)
    {
        $this->MMCible->removeElement($mMCible);
    }

    /**
     * Get MMCible
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMCible()
    {
        return $this->MMCible;
    }

    /**
     * Add MMSensibilite
     *
     * @param \FeodBundle\Entity\MMSensibilite $mMSensibilite
     * @return MinesMarines
     */
    public function addMMSensibilite(\FeodBundle\Entity\MMSensibilite $mMSensibilite)
    {
        $this->MMSensibilite[] = $mMSensibilite;

        return $this;
    }

    /**
     * Remove MMSensibilite
     *
     * @param \FeodBundle\Entity\MMSensibilite $mMSensibilite
     */
    public function removeMMSensibilite(\FeodBundle\Entity\MMSensibilite $mMSensibilite)
    {
        $this->MMSensibilite->removeElement($mMSensibilite);
    }

    /**
     * Get MMSensibilite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMSensibilite()
    {
        return $this->MMSensibilite;
    }

    /**
     * Add MMInfluence
     *
     * @param \FeodBundle\Entity\MMInfluence $mMInfluence
     * @return MinesMarines
     */
    public function addMMInfluence(\FeodBundle\Entity\MMInfluence $mMInfluence)
    {
        $this->MMInfluence[] = $mMInfluence;

        return $this;
    }

    /**
     * Remove MMInfluence
     *
     * @param \FeodBundle\Entity\MMInfluence $mMInfluence
     */
    public function removeMMInfluence(\FeodBundle\Entity\MMInfluence $mMInfluence)
    {
        $this->MMInfluence->removeElement($mMInfluence);
    }

    /**
     * Get MMInfluence
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMInfluence()
    {
        return $this->MMInfluence;
    }

    /**
     * Add MMContact
     *
     * @param \FeodBundle\Entity\MMContact $mMContact
     * @return MinesMarines
     */
    public function addMMContact(\FeodBundle\Entity\MMContact $mMContact)
    {
        $this->MMContact[] = $mMContact;

        return $this;
    }

    /**
     * Remove MMContact
     *
     * @param \FeodBundle\Entity\MMContact $mMContact
     */
    public function removeMMContact(\FeodBundle\Entity\MMContact $mMContact)
    {
        $this->MMContact->removeElement($mMContact);
    }

    /**
     * Get MMContact
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMContact()
    {
        return $this->MMContact;
    }

    /**
     * Add MMMiseDeFeu
     *
     * @param \FeodBundle\Entity\MMMiseDeFeu $mMMiseDeFeu
     * @return MinesMarines
     */
    public function addMMMiseDeFeu(\FeodBundle\Entity\MMMiseDeFeu $mMMiseDeFeu)
    {
        $this->MMMiseDeFeu[] = $mMMiseDeFeu;

        return $this;
    }

    /**
     * Remove MMMiseDeFeu
     *
     * @param \FeodBundle\Entity\MMMiseDeFeu $mMMiseDeFeu
     */
    public function removeMMMiseDeFeu(\FeodBundle\Entity\MMMiseDeFeu $mMMiseDeFeu)
    {
        $this->MMMiseDeFeu->removeElement($mMMiseDeFeu);
    }

    /**
     * Get MMMiseDeFeu
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMMiseDeFeu()
    {
        return $this->MMMiseDeFeu;
    }

    /**
     * Add MMAppendicesOrinHS
     *
     * @param \FeodBundle\Entity\MMAppendicesOrin $mMAppendicesOrinHS
     * @return MinesMarines
     */
    public function addMMAppendicesOrinH(\FeodBundle\Entity\MMAppendicesOrin $mMAppendicesOrinHS)
    {
        $this->MMAppendicesOrinHS[] = $mMAppendicesOrinHS;

        return $this;
    }

    /**
     * Remove MMAppendicesOrinHS
     *
     * @param \FeodBundle\Entity\MMAppendicesOrin $mMAppendicesOrinHS
     */
    public function removeMMAppendicesOrinH(\FeodBundle\Entity\MMAppendicesOrin $mMAppendicesOrinHS)
    {
        $this->MMAppendicesOrinHS->removeElement($mMAppendicesOrinHS);
    }

    /**
     * Get MMAppendicesOrinHS
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMAppendicesOrinHS()
    {
        return $this->MMAppendicesOrinHS;
    }

    /**
     * Add MMAppendicesOrinHI
     *
     * @param \FeodBundle\Entity\MMAppendicesOrin $mMAppendicesOrinHI
     * @return MinesMarines
     */
    public function addMMAppendicesOrinHI(\FeodBundle\Entity\MMAppendicesOrin $mMAppendicesOrinHI)
    {
        $this->MMAppendicesOrinHI[] = $mMAppendicesOrinHI;

        return $this;
    }

    /**
     * Remove MMAppendicesOrinHI
     *
     * @param \FeodBundle\Entity\MMAppendicesOrin $mMAppendicesOrinHI
     */
    public function removeMMAppendicesOrinHI(\FeodBundle\Entity\MMAppendicesOrin $mMAppendicesOrinHI)
    {
        $this->MMAppendicesOrinHI->removeElement($mMAppendicesOrinHI);
    }

    /**
     * Get MMAppendicesOrinHI
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMAppendicesOrinHI()
    {
        return $this->MMAppendicesOrinHI;
    }

    /**
     * Add MMAppendicesMineFond
     *
     * @param \FeodBundle\Entity\MMAppendicesMineFond $mMAppendicesMineFond
     * @return MinesMarines
     */
    public function addMMAppendicesMineFond(\FeodBundle\Entity\MMAppendicesMineFond $mMAppendicesMineFond)
    {
        $this->MMAppendicesMineFond[] = $mMAppendicesMineFond;

        return $this;
    }

    /**
     * Remove MMAppendicesMineFond
     *
     * @param \FeodBundle\Entity\MMAppendicesMineFond $mMAppendicesMineFond
     */
    public function removeMMAppendicesMineFond(\FeodBundle\Entity\MMAppendicesMineFond $mMAppendicesMineFond)
    {
        $this->MMAppendicesMineFond->removeElement($mMAppendicesMineFond);
    }

    /**
     * Get MMAppendicesMineFond
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMMAppendicesMineFond()
    {
        return $this->MMAppendicesMineFond;
    }

    /**
     * Set DelaiSterilisation
     *
     * @param string $delaiSterilisation
     * @return MinesMarines
     */
    public function setDelaiSterilisation($delaiSterilisation)
    {
        $this->DelaiSterilisation = $delaiSterilisation;

        return $this;
    }

    /**
     * Get DelaiSterilisation
     *
     * @return string 
     */
    public function getDelaiSterilisation()
    {
        return $this->DelaiSterilisation;
    }

    /**
     * Set PriseImmersion
     *
     * @param \FeodBundle\Entity\MMPriseImmersion $priseImmersion
     * @return MinesMarines
     */
    public function setPriseImmersion(\FeodBundle\Entity\MMPriseImmersion $priseImmersion = null)
    {
        $this->PriseImmersion = $priseImmersion;

        return $this;
    }

    /**
     * Get PriseImmersion
     *
     * @return \FeodBundle\Entity\MMPriseImmersion 
     */
    public function getPriseImmersion()
    {
        return $this->PriseImmersion;
    }

    /**
     * Add typeMineMarine
     *
     * @param \FeodBundle\Entity\TypeMineMarine $typeMineMarine
     * @return MinesMarines
     */
    public function addTypeMineMarine(\FeodBundle\Entity\TypeMineMarine $typeMineMarine)
    {
        $this->typeMineMarine[] = $typeMineMarine;

        return $this;
    }

    /**
     * Remove typeMineMarine
     *
     * @param \FeodBundle\Entity\TypeMineMarine $typeMineMarine
     */
    public function removeTypeMineMarine(\FeodBundle\Entity\TypeMineMarine $typeMineMarine)
    {
        $this->typeMineMarine->removeElement($typeMineMarine);
    }

    /**
     * Get typeMineMarine
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypeMineMarine()
    {
        return $this->typeMineMarine;
    }

    /**
     * Set PoleInferieur
     *
     * @param string $poleInferieur
     * @return MinesMarines
     */
    public function setPoleInferieur($poleInferieur)
    {
        $this->PoleInferieur = $poleInferieur;

        return $this;
    }

    /**
     * Get PoleInferieur
     *
     * @return string 
     */
    public function getPoleInferieur()
    {
        return $this->PoleInferieur;
    }

    /**
     * Set BoiteAmorces
     *
     * @param boolean $boiteAmorces
     * @return MinesMarines
     */
    public function setBoiteAmorces($boiteAmorces)
    {
        $this->BoiteAmorces = $boiteAmorces;

        return $this;
    }

    /**
     * Get BoiteAmorces
     *
     * @return boolean 
     */
    public function getBoiteAmorces()
    {
        return $this->BoiteAmorces;
    }

    /**
     * Add dispositifSecurite
     *
     * @param \FeodBundle\Entity\DispositifSecurite $dispositifSecurite
     * @return MinesMarines
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

}
