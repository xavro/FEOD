<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeChimique
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeChimique
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
     * @ORM\Column(name="typeChimique", type="string", length=255)
     */
    private $typeChimique;


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
     * Set typeChimique
     *
     * @param string $typeChimique
     * @return TypeChimique
     */
    public function setTypeChimique($typeChimique)
    {
        $this->typeChimique = $typeChimique;

        return $this;
    }

    /**
     * Get typeChimique
     *
     * @return string
     */
    public function getTypeChimique()
    {
        return $this->typeChimique;
    }

    public function __toString()
    {
        return $this->typeChimique;
    }
}
