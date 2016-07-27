<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmorcageEnergie
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AmorcageEnergie

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
     * @ORM\Column(name="Energie", type="string", length=50)
     */
    private $Energie;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->Energie;
    }

    /**
     * Set Energie
     *
     * @param string $energie
     * @return AmorcageEnergie
     */
    public function setEnergie($energie)
    {
        $this->Energie = $energie;

        return $this;
    }

    /**
     * Get Energie
     *
     * @return string 
     */
    public function getEnergie()
    {
        return $this->Energie;
    }
}
