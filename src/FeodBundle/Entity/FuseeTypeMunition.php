<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeTypeMunition
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeTypeMunition

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
     * @ORM\Column(name="TypeMunition", type="string", length=50)
     */
    private $TypeMunition;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTypeMunition($TypeMunition)
    {
        $this->TypeMunition = $TypeMunition;

        return $this;
    }

    public function getTypeMunition()
    {
        return $this->TypeMunition;
    }

    public function __toString()
    {
        return $this->TypeMunition;
    }
}
