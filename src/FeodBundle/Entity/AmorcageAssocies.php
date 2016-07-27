<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AmorcageAssocies
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AmorcageAssocies
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
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\DeclenchementFusee")
   */
  private $DeclenchementFusee;
  
    /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\PositionFusee")
   */
  private $positionFusee;
  
  /**
   * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\TypeFusee")
   */
  private $typeFusee;
  
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="Commentaires", type="text")
     */
    private $commentaires;

    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Munition", inversedBy="AmorcageAssocies", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="AmorcageAssocies_munition", referencedColumnName="id")
    */
    private $AmorcageAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Amorcage")
    */
    private $NomAmorcage;


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
     * @return AmorcageAssocies
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
     * Set NomAmorcage
     *
     * @param \FeodBundle\Entity\Amorcage $nomAmorcage
     * @return AmorcageAssocies
     */
    public function setNomAmorcage(\FeodBundle\Entity\Amorcage $nomAmorcage = null)
    {
        $this->NomAmorcage = $nomAmorcage;

        return $this;
    }

    /**
     * Get NomAmorcage
     *
     * @return \FeodBundle\Entity\Amorcage 
     */
    public function getNomAmorcage()
    {
        return $this->NomAmorcage;
    }

    /**
     * Set AmorcageAssocies
     *
     * @param \FeodBundle\Entity\Munition $amorcageAssocies
     * @return AmorcageAssocies
     */
    public function setAmorcageAssocies(\FeodBundle\Entity\Munition $amorcageAssocies = null)
    {
        $this->AmorcageAssocies = $amorcageAssocies;

        return $this;
    }

    /**
     * Get AmorcageAssocies
     *
     * @return \FeodBundle\Entity\Munition 
     */
    public function getAmorcageAssocies()
    {
        return $this->AmorcageAssocies;
    }

    /**
     * Set positionFusee
     *
     * @param \FeodBundle\Entity\PositionFusee $positionFusee
     * @return AmorcageAssocies
     */
    public function setPositionFusee(\FeodBundle\Entity\PositionFusee $positionFusee = null)
    {
        $this->positionFusee = $positionFusee;

        return $this;
    }

    /**
     * Get positionFusee
     *
     * @return \FeodBundle\Entity\PositionFusee 
     */
    public function getPositionFusee()
    {
        return $this->positionFusee;
    }
    
    /**
     * Set DeclenchementFusee
     *
     * @param \FeodBundle\Entity\DeclenchementFusee $DeclenchementFusee
     * @return AmorcageAssocies
     */
    public function setDeclenchementFusee(\FeodBundle\Entity\DeclenchementFusee $DeclenchementFusee = null)
    {
        $this->DeclenchementFusee = $DeclenchementFusee;

        return $this;
    }

    /**
     * Get DeclenchementFusee
     *
     * @return \FeodBundle\Entity\DeclenchementFusee 
     */
    public function getDeclenchementFusee()
    {
        return $this->DeclenchementFusee;
    }
    
    /**
     * Set typeFusee
     *
     * @param \FeodBundle\Entity\TypeFusee $typeFusee
     * @return AmorcageAssocies
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
}
