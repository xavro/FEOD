<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseePositionnement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseePositionnement

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
     * @ORM\Column(name="Positionnement", type="string", length=50)
     */
    private $Positionnement;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setPositionnement($Positionnement)
    {
        $this->Positionnement = $Positionnement;

        return $this;
    }

    public function getPositionnement()
    {
        return $this->Positionnement;
    }

    public function __toString()
    {
        return $this->Positionnement;
    }
}
