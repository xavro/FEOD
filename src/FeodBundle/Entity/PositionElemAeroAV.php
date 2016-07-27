<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionElemAeroAV
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PositionElemAeroAV
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
     * @ORM\Column(name="positionElemAeroAV", type="string", length=255)
     */
    private $positionElemAeroAV;


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
     * Set positionElemAeroAV
     *
     * @param string $positionElemAeroAV
     * @return PositionElemAeroAV
     */
    public function setPositionElemAeroAV($positionElemAeroAV)
    {
        $this->positionElemAeroAV = $positionElemAeroAV;

        return $this;
    }

    /**
     * Get positionElemAeroAV
     *
     * @return string
     */
    public function getPositionElemAeroAV()
    {
        return $this->positionElemAeroAV;
    }

    public function __toString()
    {
        return $this->positionElemAeroAV;
    }
}
