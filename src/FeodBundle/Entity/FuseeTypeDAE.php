<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeTypeDAE
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeTypeDAE

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
     * @ORM\Column(name="TypeDAE", type="string", length=50)
     */
    private $TypeDAE;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTypeDAE($TypeDAE)
    {
        $this->TypeDAE = $TypeDAE;

        return $this;
    }

    public function getTypeDAE()
    {
        return $this->TypeDAE;
    }

    public function __toString()
    {
        return $this->TypeDAE;
    }
}
