<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionElemAero
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PositionElemAero
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
     * @ORM\Column(name="positionElemAero", type="string", length=255)
     */
    private $positionElemAero;


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
     * Set positionElemAero
     *
     * @param string $positionElemAero
     * @return PositionElemAero
     */
    public function setPositionElemAero($positionElemAero)
    {
        $this->positionElemAero = $positionElemAero;

        return $this;
    }

    /**
     * Get positionElemAero
     *
     * @return string
     */
    public function getPositionElemAero()
    {
        return $this->positionElemAero;
    }

    public function __toString()
    {
        return $this->positionElemAero;
    }
}
