<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ChimiqueAssocies
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ChimiqueAssocies
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
     * @var float
     *
     * @ORM\Column(nullable=true, name="poids", type="float")
     */
    private $poids;
  
    /**
     * @var string
     *
     * @ORM\Column(nullable=true, name="Commentaires", type="text")
     */
    private $commentaires;

    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Munition", inversedBy="ChimiqueAssocies", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ChimiqueAssocies_munition", referencedColumnName="id")
    */
    private $ChimiqueAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Chimique")
    */
    private $NomChimique;


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
     * @return ChimiqueAssocies
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
     * Set NomChimique
     *
     * @param \FeodBundle\Entity\Chimique $nomChimique
     * @return ChimiqueAssocies
     */
    public function setNomChimique(\FeodBundle\Entity\Chimique $nomChimique = null)
    {
        $this->NomChimique = $nomChimique;

        return $this;
    }

    /**
     * Get NomChimique
     *
     * @return \FeodBundle\Entity\Chimique 
     */
    public function getNomChimique()
    {
        return $this->NomChimique;
    }

    /**
     * Set ChimiqueAssocies
     *
     * @param \FeodBundle\Entity\Munition $amorcageAssocies
     * @return ChimiqueAssocies
     */
    public function setChimiqueAssocies(\FeodBundle\Entity\Munition $amorcageAssocies = null)
    {
        $this->ChimiqueAssocies = $amorcageAssocies;

        return $this;
    }

    /**
     * Get ChimiqueAssocies
     *
     * @return \FeodBundle\Entity\Munition 
     */
    public function getChimiqueAssocies()
    {
        return $this->ChimiqueAssocies;
    }

    /**
     * Set poids
     *
     * @param float $poids
     * @return ChimiqueAssocies
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
}
