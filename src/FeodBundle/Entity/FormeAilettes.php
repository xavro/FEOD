<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormeAilettes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FormeAilettes
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
     * @ORM\Column(name="formeAilettes", type="string", length=255)
     */
    private $formeAilettes;


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
     * Set formeAilettes
     *
     * @param string $formeAilettes
     * @return FormeAilettes
     */
    public function setFormeAilettes($formeAilettes)
    {
        $this->formeAilettes = $formeAilettes;

        return $this;
    }

    /**
     * Get formeAilettes
     *
     * @return string
     */
    public function getFormeAilettes()
    {
        return $this->formeAilettes;
    }

    public function __toString()
    {
        return $this->formeAilettes;
    }
}
