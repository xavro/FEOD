<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ExplosifAssocies
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ExplosifAssocies
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
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Munition", inversedBy="ExplosifAssocies", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true, name="ExplosifAssocies_munition", referencedColumnName="id")
    */
    private $ExplosifAssocies;
    
    /**
    * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Explosif")
    */
    private $NomExplosif;


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
     * Set poids
     *
     * @param float $poids
     * @return ExplosifAssocies
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
     * Set commentaires
     *
     * @param string $commentaires
     * @return ExplosifAssocies
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
     * Set ExplosifAssocies
     *
     * @param \FeodBundle\Entity\Munition $explosifAssocies
     * @return ExplosifAssocies
     */
    public function setExplosifAssocies(\FeodBundle\Entity\Munition $explosifAssocies = null)
    {
        $this->ExplosifAssocies = $explosifAssocies;

        return $this;
    }

    /**
     * Get ExplosifAssocies
     *
     * @return \FeodBundle\Entity\Munition 
     */
    public function getExplosifAssocies()
    {
        return $this->ExplosifAssocies;
    }

    /**
     * Set NomExplosif
     *
     * @param \FeodBundle\Entity\Explosif $nomExplosif
     * @return ExplosifAssocies
     */
    public function setNomExplosif(\FeodBundle\Entity\Explosif $nomExplosif = null)
    {
        $this->NomExplosif = $nomExplosif;

        return $this;
    }

    /**
     * Get NomExplosif
     *
     * @return \FeodBundle\Entity\Explosif 
     */
    public function getNomExplosif()
    {
        return $this->NomExplosif;
    }
}
