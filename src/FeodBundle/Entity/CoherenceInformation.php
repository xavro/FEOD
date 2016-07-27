<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoherenceInformation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CoherenceInformation
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
     * @ORM\Column(name="coherenceInformation", type="string", length=255)
     */
    private $coherenceInformation;

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
     * Set coherenceInformation
     *
     * @param string $coherenceInformation
     * @return CoherenceInformation
     */
    public function setCoherenceInformation($coherenceInformation)
    {
        $this->coherenceInformation = $coherenceInformation;

        return $this;
    }

    /**
     * Get coherenceInformation
     *
     * @return string
     */
    public function getCoherenceInformation()
    {
        return $this->coherenceInformation;
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
        return $this->coherenceInformation.' - '.$this->signification;
    }
}
