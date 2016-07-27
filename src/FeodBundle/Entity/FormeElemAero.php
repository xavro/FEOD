<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormeElemAero
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FormeElemAero
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
     * @ORM\Column(name="formeElemAero", type="string", length=255)
     */
    private $formeElemAero;


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
     * Set formeElemAero
     *
     * @param string $formeElemAero
     * @return FormeElemAero
     */
    public function setFormeElemAero($formeElemAero)
    {
        $this->formeElemAero = $formeElemAero;

        return $this;
    }

    /**
     * Get formeElemAero
     *
     * @return string
     */
    public function getFormeElemAero()
    {
        return $this->formeElemAero;
    }

    public function __toString()
    {
        return $this->formeElemAero;
    }
}
