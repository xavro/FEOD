<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var boolean
     *
     * @ORM\Column(nullable=true, type="boolean")
     */
    private $connected;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Veuillez entrer votre nom.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *      min = 2,
     *      max = 255,
     *      minMessage = "Votre nom doit etre d'au moins {{ limit }} charactères",
     *      maxMessage = "Votre nom est trop long.",
     *      groups={"Registration", "Profile"}
     * )
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=10, nullable=true)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="trigramme", type="string", length=5, nullable=true)
     */
    private $trigramme;

    /**
     * @var string
     *
     * @ORM\Column(name="anneeService", type="string", length=255, nullable=true)
     */
    private $anneeService;

    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=255, nullable=true)
     */
    private $unite;
    
    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="armee", type="string", length=10, nullable=true)
     */
    private $armee;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255, nullable=true)
     */
    private $fonction;
    
    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Qualification", cascade={"persist"})
     */
    private $qualification1;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Qualification", cascade={"persist"})
     */
    private $qualification2;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Qualification", cascade={"persist"})
     */
    private $qualification3;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Qualification", cascade={"persist"})
     */
    private $qualification4;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Qualification", cascade={"persist"})
     */
    private $qualification5;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Qualifications", cascade={"persist"})
     */
    private $qualifications;


    public function __construct()
    {
        parent::__construct();
        $this->locked=true;
        $this->enabled=true;
        $this->connected = false;
    }
    
     /**
     * Gets the expire login time.
     *
     * @return \DateTime
     */
    public function getExpiresAt() {
        return $this->expiresAt;
    }

    /**
    * @ORM\PreUpdate()
    * @ORM\PrePersist()
    */
    public function preSave()
    {
        if ($this->username === null) {
            $this->username = strtolower($this->prenom).'.'.strtolower($this->nom);
        }
        if ($this->email === null) {
            $this->email = $this->username;
        }
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
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return User
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set trigramme
     *
     * @param string $trigramme
     * @return User
     */
    public function setTrigramme($trigramme)
    {
        $this->trigramme = $trigramme;

        return $this;
    }

    /**
     * Get trigramme
     *
     * @return string
     */
    public function getTrigramme()
    {
        return $this->trigramme;
    }

    /**
     * Set anneeService
     *
     * @param string $anneeService
     * @return User
     */
    public function setAnneeService($anneeService)
    {
        $this->anneeService = $anneeService;

        return $this;
    }

    /**
     * Get anneeService
     *
     * @return string
     */
    public function getAnneeService()
    {
        return $this->anneeService;
    }

    /**
     * Set unite
     *
     * @param string $unite
     * @return User
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }
    
        /**
     * Set site
     *
     * @param string $site
     * @return User
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set armee
     *
     * @param string $armee
     * @return User
     */
    public function setArmee($armee)
    {
        $this->armee = $armee;

        return $this;
    }

    /**
     * Get armee
     *
     * @return string
     */
    public function getArmee()
    {
        return $this->armee;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return User
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set qualifications
     *
     * @param \UserBundle\Entity\Qualifications $qualifications
     * @return User
     */
    public function setQualifications(\UserBundle\Entity\Qualifications $qualifications = null)
    {
        $this->qualifications = $qualifications;

        return $this;
    }

    /**
     * Get qualifications
     *
     * @return \UserBundle\Entity\Qualifications
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }
    
    /**
     * Set qualification1
     *
     * @param \UserBundle\Entity\Qualification $qualification1
     * @return User
     */
    public function setQualification1(\UserBundle\Entity\Qualification $qualification1 = null)
    {
        $this->qualification1 = $qualification1;

        return $this;
    }

    /**
     * Get qualification1
     *
     * @return \UserBundle\Entity\Qualification
     */
    public function getQualification1()
    {
        return $this->qualification1;
    }

    /**
     * Set qualification2
     *
     * @param \UserBundle\Entity\Qualification $qualification2
     * @return User
     */
    public function setQualification2(\UserBundle\Entity\Qualification $qualification2 = null)
    {
        $this->qualification2 = $qualification2;

        return $this;
    }

    /**
     * Get qualification2
     *
     * @return \UserBundle\Entity\Qualification
     */
    public function getQualification2()
    {
        return $this->qualification2;
    }

    /**
     * Set qualification3
     *
     * @param \UserBundle\Entity\Qualification $qualification3
     * @return User
     */
    public function setQualification3(\UserBundle\Entity\Qualification $qualification3 = null)
    {
        $this->qualification3 = $qualification3;

        return $this;
    }

    /**
     * Get qualification3
     *
     * @return \UserBundle\Entity\Qualification
     */
    public function getQualification3()
    {
        return $this->qualification3;
    }

    /**
     * Set qualification4
     *
     * @param \UserBundle\Entity\Qualification $qualification4
     * @return User
     */
    public function setQualification4(\UserBundle\Entity\Qualification $qualification4 = null)
    {
        $this->qualification4 = $qualification4;

        return $this;
    }

    /**
     * Get qualification4
     *
     * @return \UserBundle\Entity\Qualification
     */
    public function getQualification4()
    {
        return $this->qualification4;
    }

    /**
     * Set qualification5
     *
     * @param \UserBundle\Entity\Qualification $qualification5
     * @return User
     */
    public function setQualification5(\UserBundle\Entity\Qualification $qualification5 = null)
    {
        $this->qualification5 = $qualification5;

        return $this;
    }

    /**
     * Get qualification5
     *
     * @return \UserBundle\Entity\Qualification
     */
    public function getQualification5()
    {
        return $this->qualification5;
    }

    /**
     * Set connected
     * @param type $boolean
     * @return \UserBundle\Entity\User
     */
    public function setConnected($boolean)
    {
        $this->connected = $boolean;

        return $this;
    }
    
    /**
     * 
     * @return boolean
     */
    public function isConnected()
    {
        return $this->connected;
    }

}
