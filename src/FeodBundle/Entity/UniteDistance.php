<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UniteDistance
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UniteDistance
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
     * @ORM\Column(name="uniteDistance", type="string", length=255)
     */
    private $uniteDistance;


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
     * Set uniteDistance
     *
     * @param string $uniteDistance
     * @return UniteDistance
     */
    public function setUniteDistance($uniteDistance)
    {
        $this->uniteDistance = $uniteDistance;

        return $this;
    }

    /**
     * Get uniteDistance
     *
     * @return string
     */
    public function getUniteDistance()
    {
        return $this->uniteDistance;
    }

    public function __toString()
    {
        return $this->uniteDistance;
    }
}
