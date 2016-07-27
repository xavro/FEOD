<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitesMasseVolume
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UnitesMasseVolume
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
     * @ORM\Column(name="uniteMV", type="string", length=255)
     */
    private $uniteMV;

    /**
     * @var string
     *
     * @ORM\Column(name="nomUnite", type="string", length=255)
     */
    private $nomUnite;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="typeUnite", type="string", length=255)
     */
    private $typeUnite;


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
     * Set uniteMV
     *
     * @param string $uniteMV
     * @return UnitesMasseVolume
     */
    public function setUniteMV($uniteMV)
    {
        $this->uniteMV = $uniteMV;

        return $this;
    }

    /**
     * Get uniteMV
     *
     * @return string 
     */
    public function getUniteMV()
    {
        return $this->uniteMV;
    }

    /**
     * Set nomUnite
     *
     * @param string $nomUnite
     * @return UnitesMasseVolume
     */
    public function setNomUnite($nomUnite)
    {
        $this->nomUnite = $nomUnite;

        return $this;
    }

    /**
     * Get nomUnite
     *
     * @return string 
     */
    public function getNomUnite()
    {
        return $this->nomUnite;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return UnitesMasseVolume
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set typeUnite
     *
     * @param string $typeUnite
     * @return UnitesMasseVolume
     */
    public function setTypeUnite($typeUnite)
    {
        $this->typeUnite = $typeUnite;

        return $this;
    }

    /**
     * Get typeUnite
     *
     * @return string 
     */
    public function getTypeUnite()
    {
        return $this->typeUnite;
    }
    public function __toString()
    {
        return $this->uniteMV;
    }
}
