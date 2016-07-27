<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeTypeFonctionnement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeTypeFonctionnement

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
     * @ORM\Column(name="TypeDeFonctionnement", type="string", length=50)
     */
    private $TypeDeFonctionnement;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTypeDeFonctionnement($TypeDeFonctionnement)
    {
        $this->TypeDeFonctionnement = $TypeDeFonctionnement;

        return $this;
    }

    public function getTypeDeFonctionnement()
    {
        return $this->TypeDeFonctionnement;
    }

    public function __toString()
    {
        return $this->TypeDeFonctionnement;
    }
}
