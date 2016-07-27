<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeModeFonctionnement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeModeFonctionnement

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
     * @ORM\Column(name="ModeFonctionnement", type="string", length=50)
     */
    private $ModeFonctionnement;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setModeFonctionnement($ModeFonctionnement)
    {
        $this->ModeFonctionnement = $ModeFonctionnement;

        return $this;
    }

    public function getModeFonctionnement()
    {
        return $this->ModeFonctionnement;
    }

    public function __toString()
    {
        return $this->ModeFonctionnement;
    }
}
