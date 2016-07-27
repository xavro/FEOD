<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SymboleOgive
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SymboleOgive
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
     * @ORM\Column(name="symboleOgive", type="string", length=255)
     */
    private $symboleOgive;


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
     * Set symboleOgive
     *
     * @param string $symboleOgive
     * @return SymboleOgive
     */
    public function setSymboleOgive($symboleOgive)
    {
        $this->symboleOgive = $symboleOgive;

        return $this;
    }

    /**
     * Get symboleOgive
     *
     * @return string
     */
    public function getSymboleOgive()
    {
        return $this->symboleOgive;
    }

    public function __toString()
    {
        return $this->symboleOgive;
    }
}
