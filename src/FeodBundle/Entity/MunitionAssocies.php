<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MunitionAssocies
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MunitionAssocies
{
    /**
     * @var integer
     *
     * @ORM\Column(nullable=true, name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;
  
    /**
     *  	 
     *  @ORM\ManyToOne(targetEntity="FeodBundle\Entity\FuseeTypeMunition")
     */
    private $FuseeTypeMunition;
  
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="Commentaires", type="text")
     */
    private $commentaires;

    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Amorcage", inversedBy="MunitionAssocies", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="MunitionAssocies_munition", referencedColumnName="id")
    */
    private $MunitionAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Munition")
    */
    private $NomMunition;


    /**
     * Get id
     *
     * @return guid 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set commentaires
     *
     * @param string $commentaires
     * @return MunitionAssocies
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set NomMunition
     *
     * @param \FeodBundle\Entity\Munition $NomMunition
     * @return MunitionAssocies
     */
    public function setNomMunition(\FeodBundle\Entity\Munition $NomMunition = null)
    {
        $this->NomAmorcage = $NomMunition;

        return $this;
    }

    /**
     * Get NomMunition
     *
     * @return \FeodBundle\Entity\Munition 
     */
    public function getNomMunition()
    {
        return $this->NomMunition;
    }

    /**
     * Set MunitionAssocies
     *
     * @param \FeodBundle\Entity\Amorcage $munitionAssocies
     * @return MunitionAssocies
     */
    public function setMunitionAssocies(\FeodBundle\Entity\Amorcage $munitionAssocies = null)
    {
        $this->MunitionAssocies = $munitionAssocies;

        return $this;
    }

    /**
     * Get MunitionAssocies
     *
     * @return \FeodBundle\Entity\Amorcage 
     */
    public function getMunitionAssocies()
    {
        return $this->MunitionAssocies;
    }

    /**
     * Set FuseeTypeMunition
     *
     * @param \FeodBundle\Entity\FuseeTypeMunition $FuseeTypeMunition
     * @return MunitionAssocies
     */
    public function setFuseeTypeMunition(\FeodBundle\Entity\FuseeTypeMunition $FuseeTypeMunition = null)
    {
        $this->FuseeTypeMunition = $FuseeTypeMunition;

        return $this;
    }

    /**
     * Get FuseeTypeMunition
     *
     * @return \FeodBundle\Entity\FuseeTypeMunition 
     */
    public function getFuseeTypeMunition()
    {
        return $this->FuseeTypeMunition;
    }
    
}
