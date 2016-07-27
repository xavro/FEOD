<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasseDangerStockage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ClasseDangerStockage
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
     * @ORM\Column(name="classeDangerStockage", type="string", length=255)
     */
    private $classeDangerStockage;

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
     * Set classeDangerStockage
     *
     * @param string $classeDangerStockage
     * @return ClasseDangerStockage
     */
    public function setClasseDangerStockage($classeDangerStockage)
    {
        $this->classeDangerStockage = $classeDangerStockage;

        return $this;
    }

    /**
     * Get classeDangerStockage
     *
     * @return string
     */
    public function getClasseDangerStockage()
    {
        return $this->classeDangerStockage;
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
        return $this->classeDangerStockage;
    }
}
