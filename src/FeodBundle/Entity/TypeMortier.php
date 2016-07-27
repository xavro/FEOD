<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeMortier
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeMortier
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
     * @ORM\Column(name="typeMortier", type="string", length=255)
     */
    private $typeMortier;

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
     * Set typeMortier
     *
     * @param string $typeMortier
     * @return TypeMortier
     */
    public function setTypeMortier($typeMortier)
    {
        $this->typeMortier = $typeMortier;

        return $this;
    }

    /**
     * Get typeMortier
     *
     * @return string
     */
    public function getTypeMortier()
    {
        return $this->typeMortier;
    }

    /**
     * Set signification
     *
     * @param string $signification
     * @return TypeMortier
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
        return $this->typeMortier." - ".$this->signification;
    }
}
