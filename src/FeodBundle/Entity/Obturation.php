<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obturation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Obturation
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
     * @ORM\Column(name="obturation", type="string", length=255)
     */
    private $obturation;


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
     * Set obturation
     *
     * @param string $obturation
     * @return Obturation
     */
    public function setObturation($obturation)
    {
        $this->obturation = $obturation;

        return $this;
    }

    /**
     * Get obturation
     *
     * @return string
     */
    public function getObturation()
    {
        return $this->obturation;
    }

    public function __toString()
    {
        return $this->obturation;
    }
}
