<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enveloppe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Enveloppe
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
     * @ORM\Column(name="enveloppe", type="string", length=255)
     */
    private $enveloppe;


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
     * Set enveloppe
     *
     * @param string $enveloppe
     * @return Enveloppe
     */
    public function setEnveloppe($enveloppe)
    {
        $this->enveloppe = $enveloppe;

        return $this;
    }

    /**
     * Get enveloppe
     *
     * @return string
     */
    public function getEnveloppe()
    {
        return $this->enveloppe;
    }

    public function __toString()
    {
        return $this->enveloppe;
    }
}
