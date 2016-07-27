<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emballage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Emballage
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
     * @ORM\Column(name="emballage", type="string", length=255)
     */
    private $emballage;


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
     * Set emballage
     *
     * @param string $emballage
     * @return Emballage
     */
    public function setEmballage($emballage)
    {
        $this->emballage = $emballage;

        return $this;
    }

    /**
     * Get emballage
     *
     * @return string
     */
    public function getEmballage()
    {
        return $this->emballage;
    }

    public function __toString()
    {
        return $this->emballage;
    }
}
