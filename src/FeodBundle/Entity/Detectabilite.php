<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detectabilite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Detectabilite
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
     * @ORM\Column(name="detectabilite", type="string", length=255)
     */
    private $detectabilite;


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
     * Set detectabilite
     *
     * @param string $detectabilite
     * @return Detectabilite
     */
    public function setDetectabilite($detectabilite)
    {
        $this->detectabilite = $detectabilite;

        return $this;
    }

    /**
     * Get detectabilite
     *
     * @return string
     */
    public function getDetectabilite()
    {
        return $this->detectabilite;
    }

    public function __toString()
    {
        return $this->detectabilite;
    }
}
