<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * munitionSuiviModifications
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class munitionSuiviModifications
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
/******************************** à debugger ? / ok? 14-06-2016 *************************************/
    /**		
	 *
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Munition", inversedBy="munitionSuiviModifications", cascade={"Remove","persist"})
     * @ORM\JoinColumn(name="munition_id", referencedColumnName="id", nullable=false)
	 *
     */
    private $munition;
/****************************************************************************/

    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    */
    private $Modificateur;

    /**
    * @var \DateTime
    *
    * @ORM\Column(nullable=true, name="DateMAJ", type="datetime")
    */
    private $DateMAJ;

    /**
	* @var \Doctrine\Common\Collections\ArrayCollection
	*
    * @ORM\ManyToMany(targetEntity="FeodBundle\Entity\OrigineInfos")
    * @ORM\JoinTable(name="munitionSuiviModifications_OrigineInfos",
    *  joinColumns={@ORM\JoinColumn(name="suiviModifications_id", referencedColumnName="id")},
    *  inverseJoinColumns={@ORM\JoinColumn(name="OrigineInfos_id", referencedColumnName="id", unique=true )}
    * )
    */
    private $OrigineInfos;
	
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FiabiliteSource")
    */
    private $FiabiliteSource;

    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\CoherenceInformation")
    */
    private $CoherenceInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;


    public function __construct()
    {
        $this->DateMAJ = new \DateTime();	// récupération date & heure actuelles
        $this->OrigineInfos = new \Doctrine\Common\Collections\ArrayCollection();	// nouvelle collection OrigineInfos
		
		$this->setModificateur($this->getUser());	// récupération utilisateur actif
		$this->setMunition($this->getMunitionId());		// récupération de l'ID munition

	}
	
	public function prepareSearch()
    {
        $this->DateMAJ = null;
		$this->Modificateur = null;
		$this->munition = null;
		$this->OrigineInfos = null;
		$this->FiabiliteSource = null;
		$this->CoherenceInfo = null;
		$this->commentaire = null;
    }

    public function getNotNullData()
    {
        $data=[];
        foreach ($this as $key => $value) {
            if ($value instanceof \Doctrine\Common\Collections\ArrayCollection) {
                if (!$value->isEmpty()) {
                    $data[$key]=$value;
                }
            } else {
                if (!is_null($value) && !is_bool($value)) {
                    $data[$key]=$value;
                }
            }
        }
        return $data;
    }

    /**
    * On actualise la date de mise à jour
    *
    * @ORM\PreUpdate()
    */
    public function preUpdate()
    {
        $this->DateMAJ=new \DateTime();
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
     * Set munition
     *
     * @param \UserBundle\Entity\User $munition
     * @return munitionSuiviModifications
     */
    public function setMunition(\FeodBundle\Entity\munition $munition)
    {
        $this->munition = $munition;

        return $this;
    }

    /**
     * Get munition
     *
     * @return \FeodBundle\Entity\Munition
     */
    public function getMunition()
    {
        return $this->munition;
    }

    /**
     * Set Modificateur
     *
     * @param \UserBundle\Entity\User $Modificateur
     * @return munitionSuiviModifications
     */
    public function setModificateur(\UserBundle\Entity\User $Modificateur = null)
    {
        $this->Modificateur = $Modificateur;

        return $this;
    }

    /**
     * Get Modificateur
     *
     * @return \UserBundle\Entity\User
     */
    public function getModificateur()
    {
        return $this->Modificateur;
    }

    /**
     * Set DateMAJ
     *
     * @param \DateTime $DateMAJ
     * @return munitionSuiviModifications
     */
    public function setDateMAJ($DateMAJ)
    {
        $this->DateMAJ = $DateMAJ;

        return $this;
    }

    /**
     * Get DateMAJ
     *
     * @return \DateTime
     */
    public function getDateMAJ()
    {
        return $this->DateMAJ;
    }

    /**
     * Set FiabiliteSource
     *
     * @param \FeodBundle\Entity\FiabiliteSource $FiabiliteSource
     * @return munitionSuiviModifications
     */
    public function setFiabiliteSource(\FeodBundle\Entity\FiabiliteSource $FiabiliteSource = null)
    {
        $this->FiabiliteSource = $FiabiliteSource;

        return $this;
    }

    /**
     * Get FiabiliteSource
     *
     * @return \FeodBundle\Entity\FiabiliteSource
     */
    public function getFiabiliteSource()
    {
        return $this->FiabiliteSource;
    }

    /**
     * Set CoherenceInfo
     *
     * @param \FeodBundle\Entity\CoherenceInformation $CoherenceInfo
     * @return munitionSuiviModifications
     */
    public function setCoherenceInfo(\FeodBundle\Entity\CoherenceInformation $CoherenceInfo = null)
    {
        $this->CoherenceInfo = $CoherenceInfo;

        return $this;
    }

    /**
     * Get CoherenceInfo
     *
     * @return \FeodBundle\Entity\CoherenceInformation
     */
    public function getCoherenceInfo()
    {
        return $this->CoherenceInfo;
    }

	 /**
     * Add OrigineInfos
     *
     * @param \FeodBundle\Entity\OrigineInfos $OrigineInfos
     * @return munitionSuiviModifications
     */
    public function addOrigineInfos(\FeodBundle\Entity\OrigineInfos $OrigineInfos)
    {
        $this->OrigineInfos[] = $OrigineInfos;

        return $this;
    }

    /**
     * Remove OrigineInfos
     *
     * @param \FeodBundle\Entity\OrigineInfos $OrigineInfos
     */
    public function removeOrigineInfos(\FeodBundle\Entity\OrigineInfos $OrigineInfos)
    {
        $this->OrigineInfos->removeElement($OrigineInfos);
    }

    /**
     * Get OrigineInfos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrigineInfos()
    {
        return $this->OrigineInfos;
    }

    /**
     * Set OrigineInfos
     *
     * @param \Doctrine\Common\Collections\ArrayCollection
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setOrigineInfos(\Doctrine\Common\Collections\ArrayCollection $OrigineInfos)
    {
        foreach ($OrigineInfos as $origInfo) {
            var_dump($origInfo->getId());
            $origInfo->setMunitionSuiviModifications($this);
        }
        exit;

        $this->OrigineInfos = $origInfo;
    }
    

	
    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return munitionSuiviModifications
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    public function __toString()
    {
        return $this->munitionSuiviModifications;
    }

	
}
