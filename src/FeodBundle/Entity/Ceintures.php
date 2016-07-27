<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ceintures
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ceintures
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
     * @ORM\Column(name="ceintures", type="string", length=255)
     */
    private $ceintures;


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
     * Set ceintures
     *
     * @param string $ceintures
     * @return Ceintures
     */
    public function setCeintures($ceintures)
    {
        $this->ceintures = $ceintures;

        return $this;
    }

    /**
     * Get ceintures
     *
     * @return string
     */
    public function getCeintures()
    {
        return $this->ceintures;
    }

    public function __toString()
    {
        return $this->ceintures;
    }
}
