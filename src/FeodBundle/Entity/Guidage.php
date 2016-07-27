<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guidage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Guidage
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
     * @ORM\Column(name="guidage", type="string", length=255)
     */
    private $guidage;

    /**
     * @var string
     *
     * @ORM\Column(name="guidageTexte", type="string", length=255)
     */
    private $guidageTexte;


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
     * Set guidage
     *
     * @param string $guidage
     * @return Guidage
     */
    public function setGuidage($guidage)
    {
        $this->guidage = $guidage;

        return $this;
    }

    /**
     * Get guidage
     *
     * @return string
     */
    public function getGuidage()
    {
        return $this->guidage;
    }

    /**
     * Set guidageTexte
     *
     * @param string $guidageTexte
     * @return Guidage
     */
    public function setGuidageTexte($guidageTexte)
    {
        $this->guidageTexte = $guidageTexte;

        return $this;
    }

    /**
     * Get guidageTexte
     *
     * @return string
     */
    public function getGuidageTexte()
    {
        return $this->guidageTexte;
    }
    public function __toString(){
        return $this->guidage." - ".$this->guidageTexte;
    }
}
