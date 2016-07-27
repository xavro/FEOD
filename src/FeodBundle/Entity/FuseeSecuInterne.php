<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeSecuInterne
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeSecuInterne

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
     * @ORM\Column(name="SecuriteInterne", type="string", length=50)
     */
    private $SecuriteInterne;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setSecuriteInterne($SecuriteInterne)
    {
        $this->SecuriteInterne = $SecuriteInterne;

        return $this;
    }

    public function getSecuriteInterne()
    {
        return $this->SecuriteInterne;
    }

    public function __toString()
    {
        return $this->SecuriteInterne;
    }
}
