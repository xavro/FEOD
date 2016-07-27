<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesMUNEX
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UnitesMUNEX
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
     * @ORM\Column(name="unitesMUNEX", type="string", length=255)
     */
    private $unitesMUNEX;


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
     * Set unitesMUNEX
     *
     * @param string $unitesMUNEX
     * @return UnitesMUNEX
     */
    public function setUnitesMUNEX($unitesMUNEX)
    {
        $this->unitesMUNEX = $unitesMUNEX;

        return $this;
    }

    /**
     * Get unitesMUNEX
     *
     * @return string
     */
    public function getUnitesMUNEX()
    {
        return $this->unitesMUNEX;
    }

    public function __toString()
    {
        return $this->unitesMUNEX;
    }
}
