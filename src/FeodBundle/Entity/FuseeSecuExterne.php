<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeSecuExterne
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeSecuExterne

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
     * @ORM\Column(name="SecuriteExterne", type="string", length=50)
     */
    private $SecuriteExterne;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setSecuriteExterne($SecuriteExterne)
    {
        $this->SecuriteExterne = $SecuriteExterne;

        return $this;
    }

    public function getSecuriteExterne()
    {
        return $this->SecuriteExterne;
    }

    public function __toString()
    {
        return $this->SecuriteExterne;
    }
}
