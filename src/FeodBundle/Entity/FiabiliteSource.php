<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiabiliteSource
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FiabiliteSource
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
     * @ORM\Column(name="fiabiliteSource", type="string", length=255)
     */
    private $fiabiliteSource;

    /**
     * @var string
     *
     * @ORM\Column(name="signification", type="string", length=255)
     */
    private $signification;

	
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
     * Set fiabiliteSource
     *
     * @param string $fiabiliteSource
     * @return FiabiliteSource
     */
    public function setFiabiliteSource($fiabiliteSource)
    {
        $this->fiabiliteSource = $fiabiliteSource;

        return $this;
    }

    /**
     * Get fiabiliteSource
     *
     * @return string
     */
    public function getFiabiliteSource()
    {
        return $this->fiabiliteSource;
    }

    /**
     * Set signification
     *
     * @param string $signification
     * @return signification
     */
	 public function setSignification($signification)
    {
        $this->signification = $signification;

        return $this;
    }

    /**
     * Get signification
     *
     * @return string
     */
    public function getSignification()
    {
        return $this->signification;
    }

 
    public function __toString()
    {
        return $this->signification.' - '.$this->fiabiliteSource;
    }
}
