<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeDelaiFonctionnement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeDelaiFonctionnement

{

   /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
   /**
     * @var string
     *
     * @ORM\Column(name="DelaisFonctionnement", type="string", length=50)
     */
    private $DelaisFonctionnement;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setDelaisFonctionnement($DelaisFonctionnement)
    {
        $this->DelaisFonctionnement = $DelaisFonctionnement;

        return $this;
    }

    public function getDelaisFonctionnement()
    {
        return $this->DelaisFonctionnement;
    }

    public function __toString()
    {
        return $this->DelaisFonctionnement;
    }
}
