<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionMarquage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PositionMarquage
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
     * @ORM\Column(name="positionMarquage", type="string", length=255)
     */
    private $positionMarquage;


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
     * Set positionMarquage
     *
     * @param string $positionMarquage
     * @return PositionMarquage
     */
    public function setPositionMarquage($positionMarquage)
    {
        $this->positionMarquage = $positionMarquage;

        return $this;
    }

    /**
     * Get positionMarquage
     *
     * @return string
     */
    public function getPositionMarquage()
    {
        return $this->positionMarquage;
    }

    public function __toString()
    {
        return $this->positionMarquage;
    }
}
