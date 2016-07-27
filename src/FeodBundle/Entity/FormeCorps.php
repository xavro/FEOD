<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormeCorps
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FormeCorps
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
     * @ORM\Column(name="formeCorps", type="string", length=255)
     */
    private $formeCorps;


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
     * Set formeCorps
     *
     * @param string $formeCorps
     * @return FormeCorps
     */
    public function setFormeCorps($formeCorps)
    {
        $this->formeCorps = $formeCorps;

        return $this;
    }

    /**
     * Get formeCorps
     *
     * @return string
     */
    public function getFormeCorps()
    {
        return $this->formeCorps;
    }

    public function __toString()
    {
        return $this->formeCorps;
    }
}
