<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccrochageAeronef
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AccrochageAeronef

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
     * @ORM\Column(name="AccrochageAeronef", type="string", length=50)
     */
    private $AccrochageAeronef;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set AccrochageAeronef
     *
     * @param string $accrochageAeronef
     * @return AccrochageAeronef
     */
    public function setAccrochageAeronef($accrochageAeronef)
    {
        $this->AccrochageAeronef = $accrochageAeronef;

        return $this;
    }

    /**
     * Get AccrochageAeronef
     *
     * @return string 
     */
    public function getAccrochageAeronef()
    {
        return $this->AccrochageAeronef;
    }
}
