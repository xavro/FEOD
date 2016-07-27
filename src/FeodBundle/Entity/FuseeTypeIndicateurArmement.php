<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeTypeIndicateurArmement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeTypeIndicateurArmement

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
     * @ORM\Column(name="TypeIndicateurArmement", type="string", length=50)
     */
    private $TypeIndicateurArmement;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTypeIndicateurArmement($TypeIndicateurArmement)
    {
        $this->TypeIndicateurArmement = $TypeIndicateurArmement;

        return $this;
    }

    public function getTypeIndicateurArmement()
    {
        return $this->TypeIndicateurArmement;
    }

    public function __toString()
    {
        return $this->TypeIndicateurArmement;
    }
}
