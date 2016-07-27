<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnveloppeMine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EnveloppeMine
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
     * @ORM\Column(name="enveloppeMine", type="string", length=255)
     */
    private $enveloppeMine;


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
     * Set enveloppeMine
     *
     * @param string $enveloppeMine
     * @return EnveloppeMine
     */
    public function setEnveloppeMine($enveloppeMine)
    {
        $this->enveloppeMine = $enveloppeMine;

        return $this;
    }

    /**
     * Get enveloppeMine
     *
     * @return string
     */
    public function getEnveloppeMine()
    {
        return $this->enveloppeMine;
    }

    public function __toString()
    {
        return $this->enveloppeMine;
    }
}
