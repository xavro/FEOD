<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DispositifSecurite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DispositifSecurite
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
     * @ORM\Column(name="dispositifSecurite", type="string", length=255)
     */
    private $dispositifSecurite;


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
     * Set dispositifSecurite
     *
     * @param string $dispositifSecurite
     * @return DispositifSecurite
     */
    public function setDispositifSecurite($dispositifSecurite)
    {
        $this->dispositifSecurite = $dispositifSecurite;

        return $this;
    }

    /**
     * Get dispositifSecurite
     *
     * @return string
     */
    public function getDispositifSecurite()
    {
        return $this->dispositifSecurite;
    }

    public function __toString()
    {
        return $this->dispositifSecurite;
    }
}
