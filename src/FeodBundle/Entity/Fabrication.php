<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fabrication
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Fabrication
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
     * @ORM\Column(name="fabrication", type="string", length=255)
     */
    private $fabrication;

    /**
     * @var string
     *
     * @ORM\Column(name="explication", type="string", length=255)
     */
    private $explication;


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
     * Set fabrication
     *
     * @param string $fabrication
     * @return Fabrication
     */
    public function setFabrication($fabrication)
    {
        $this->fabrication = $fabrication;

        return $this;
    }

    /**
     * Get fabrication
     *
     * @return string
     */
    public function getFabrication()
    {
        return $this->fabrication;
    }

    /**
     * Set explication
     *
     * @param string $explication
     * @return Fabrication
     */
    public function setExplication($explication)
    {
        $this->explication = $explication;

        return $this;
    }

    /**
     * Get explication
     *
     * @return string
     */
    public function getExplication()
    {
        return $this->explication;
    }

    public function __toString() {
        return $this->fabrication." - ".$this->explication;
    }
}
