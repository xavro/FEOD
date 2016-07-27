<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UniteMasse
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UniteMasse
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
     * @ORM\Column(name="uniteMasse", type="string", length=255)
     */
    private $uniteMasse;


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
     * Set uniteMasse
     *
     * @param string $uniteMasse
     * @return UniteMasse
     */
    public function setUniteMasse($uniteMasse)
    {
        $this->uniteMasse = $uniteMasse;

        return $this;
    }

    /**
     * Get uniteMasse
     *
     * @return string
     */
    public function getUniteMasse()
    {
        return $this->uniteMasse;
    }

    public function __toString()
    {
        return $this->uniteMasse;
    }
}
