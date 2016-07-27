<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NatureCharge
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NatureCharge
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
     * @ORM\Column(name="natureCharge", type="string", length=255)
     */
    private $natureCharge;


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
     * Set natureCharge
     *
     * @param string $natureCharge
     * @return NatureCharge
     */
    public function setNatureCharge($natureCharge)
    {
        $this->natureCharge = $natureCharge;

        return $this;
    }

    /**
     * Get natureCharge
     *
     * @return string
     */
    public function getNatureCharge()
    {
        return $this->natureCharge;
    }

    public function __toString()
    {
        return $this->natureCharge;
    }
}
