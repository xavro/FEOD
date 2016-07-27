<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AutoDestruction
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AutoDestruction
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
     * @ORM\Column(name="autoDestruction", type="string", length=255)
     */
    private $autoDestruction;


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
     * Set autoDestruction
     *
     * @param string $autoDestruction
     * @return AutoDestruction
     */
    public function setAutoDestruction($autoDestruction)
    {
        $this->autoDestruction = $autoDestruction;

        return $this;
    }

    /**
     * Get autoDestruction
     *
     * @return string
     */
    public function getAutoDestruction()
    {
        return $this->autoDestruction;
    }

    public function __toString()
    {
        return $this->autoDestruction;
    }
}
