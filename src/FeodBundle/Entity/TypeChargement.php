<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeChargement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeChargement
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
     * @ORM\Column(name="typeChargement", type="string", length=255)
     */
    private $typeChargement;


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
     * Set typeChargement
     *
     * @param string $typeChargement
     * @return TypeChargement
     */
    public function setTypeChargement($typeChargement)
    {
        $this->typeChargement = $typeChargement;

        return $this;
    }

    /**
     * Get typeChargement
     *
     * @return string
     */
    public function getTypeChargement()
    {
        return $this->typeChargement;
    }

    public function __toString()
    {
        return $this->typeChargement;
    }
}
