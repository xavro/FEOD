<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmorcageDeclenchement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AmorcageDeclenchement

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
     * @ORM\Column(name="Declenchements", type="string", length=50)
     */
    private $Declenchements;
    
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
        return $this->Declenchements;
    }

    /**
     * Set Declenchements
     *
     * @param string $declenchements
     * @return AmorcageDeclenchement
     */
    public function setDeclenchements($declenchements)
    {
        $this->Declenchements = $declenchements;

        return $this;
    }

    /**
     * Get Declenchements
     *
     * @return string 
     */
    public function getDeclenchements()
    {
        return $this->Declenchements;
    }
}
