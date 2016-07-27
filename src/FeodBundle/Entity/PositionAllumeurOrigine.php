<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionAllumeurOrigine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PositionAllumeurOrigine
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
     * @ORM\Column(name="typeAllumeur", type="string", length=255)
     */
    private $positionAllumeurOrigine;


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
     * Set positionAllumeurOrigine
     *
     * @param string $positionAllumeurOrigine
     * @return PositionAllumeurOrigine
     */
    public function setPositionAllumeurOrigine($positionAllumeurOrigine)
    {
        $this->positionAllumeurOrigine = $positionAllumeurOrigine;

        return $this;
    }

    /**
     * Get positionAllumeurOrigine
     *
     * @return string 
     */
    public function getPositionAllumeurOrigine()
    {
        return $this->positionAllumeurOrigine;
    }
      public function __toString()
    {
        return $this->positionAllumeurOrigine;
    }
}
