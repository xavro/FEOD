<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionFusee
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PositionFusee
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
     * @ORM\Column(name="positionFusee", type="string", length=255)
     */
    private $positionFusee;


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
     * Set positionFusee
     *
     * @param string $positionFusee
     * @return PositionFusee
     */
    public function setPositionFusee($positionFusee)
    {
        $this->positionFusee = $positionFusee;

        return $this;
    }

    /**
     * Get positionFusee
     *
     * @return string
     */
    public function getPositionFusee()
    {
        return $this->positionFusee;
    }

    public function __toString()
    {
        return $this->positionFusee;
    }
}
