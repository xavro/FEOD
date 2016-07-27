<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DRAM
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DRAM
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
     * @ORM\Column(name="DRAM", type="string", length=255)
     */
    private $dRAM;


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
     * Set dRAM
     *
     * @param string $dRAM
     * @return DRAM
     */
    public function setDRAM($dRAM)
    {
        $this->dRAM = $dRAM;

        return $this;
    }

    /**
     * Get dRAM
     *
     * @return string
     */
    public function getDRAM()
    {
        return $this->dRAM;
    }

    public function __toString()
    {
        return $this->dRAM;
    }
}
