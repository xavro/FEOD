<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionDeRenflement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PositionDeRenflement
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
     * @ORM\Column(name="positionDeRenflement", type="string", length=255)
     */
    private $positionDeRenflement;


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
     * Set positionDeRenflement
     *
     * @param string $positionDeRenflement
     * @return PositionDeRenflement
     */
    public function setPositionDeRenflement($positionDeRenflement)
    {
        $this->positionDeRenflement = $positionDeRenflement;

        return $this;
    }

    /**
     * Get positionDeRenflement
     *
     * @return string
     */
    public function getPositionDeRenflement()
    {
        return $this->positionDeRenflement;
    }

    public function __toString()
    {
        return $this->positionDeRenflement;
    }
}
