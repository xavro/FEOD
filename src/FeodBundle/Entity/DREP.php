<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DREP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DREP
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
     * @ORM\Column(name="DREP", type="string", length=255)
     */
    private $dREP;


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
     * Set dREP
     *
     * @param string $dREP
     * @return DREP
     */
    public function setDREP($dREP)
    {
        $this->dREP = $dREP;

        return $this;
    }

    /**
     * Get dREP
     *
     * @return string
     */
    public function getDREP()
    {
        return $this->dREP;
    }

    public function __toString()
    {
        return $this->dREP;
    }
}
