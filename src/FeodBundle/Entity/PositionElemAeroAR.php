<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionElemAeroAR
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PositionElemAeroAR
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
     * @ORM\Column(name="positionElemAeroAR", type="string", length=255)
     */
    private $positionElemAeroAR;


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
     * Set positionElemAeroAR
     *
     * @param string $positionElemAeroAR
     * @return PositionElemAeroAR
     */
    public function setPositionElemAeroAR($positionElemAeroAR)
    {
        $this->positionElemAeroAR = $positionElemAeroAR;

        return $this;
    }

    /**
     * Get positionElemAeroAR
     *
     * @return string
     */
    public function getPositionElemAeroAR()
    {
        return $this->positionElemAeroAR;
    }

    public function __toString()
    {
        return $this->positionElemAeroAR;
    }
}
