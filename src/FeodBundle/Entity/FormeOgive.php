<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormeOgive
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FormeOgive
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
     * @ORM\Column(name="formeOgive", type="string", length=255)
     */
    private $formeOgive;


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
     * Set formeOgive
     *
     * @param string $formeOgive
     * @return FormeOgive
     */
    public function setFormeOgive($formeOgive)
    {
        $this->formeOgive = $formeOgive;

        return $this;
    }

    /**
     * Get formeOgive
     *
     * @return string
     */
    public function getFormeOgive()
    {
        return $this->formeOgive;
    }

    public function __toString()
    {
        return $this->formeOgive;
    }
}
