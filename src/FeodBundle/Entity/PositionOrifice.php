<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionOrifice
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PositionOrifice
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
     * @ORM\Column(name="positionOrifice", type="string", length=255)
     */
    private $positionOrifice;


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
     * Set positionOrifice
     *
     * @param string $positionOrifice
     * @return PositionOrifice
     */
    public function setPositionOrifice($positionOrifice)
    {
        $this->positionOrifice = $positionOrifice;

        return $this;
    }

    /**
     * Get positionOrifice
     *
     * @return string
     */
    public function getPositionOrifice()
    {
        return $this->positionOrifice;
    }

    public function __toString()
    {
        return $this->positionOrifice;
    }
}
