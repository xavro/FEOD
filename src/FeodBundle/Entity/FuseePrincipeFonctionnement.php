<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseePrincipeFonctionnement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseePrincipeFonctionnement

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
     * @ORM\Column(name="PrincipeFonctionnement", type="string", length=50)
     */
    private $PrincipeFonctionnement;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setPrincipeFonctionnement($PrincipeFonctionnement)
    {
        $this->PrincipeFonctionnement = $PrincipeFonctionnement;

        return $this;
    }

    public function getPrincipeFonctionnement()
    {
        return $this->PrincipeFonctionnement;
    }

    public function __toString()
    {
        return $this->PrincipeFonctionnement;
    }
}
