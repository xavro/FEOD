<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmorcageDelais
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AmorcageDelais

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
     * @ORM\Column(name="Delais", type="string", length=50)
     */
    private $Delais;
    
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
        return $this->Delais;
    }

    /**
     * Set Delais
     *
     * @param string $delais
     * @return AmorcageDelais
     */
    public function setDelais($delais)
    {
        $this->Delais = $delais;

        return $this;
    }

    /**
     * Get Delais
     *
     * @return string 
     */
    public function getDelais()
    {
        return $this->Delais;
    }
}
