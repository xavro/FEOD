<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeRemplissage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeRemplissage
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
     * @ORM\Column(name="TypeRemplissage", type="string", length=50)
     */
    private $typeRemplissage;


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
     * Set typeRemplissage
     *
     * @param string $typeRemplissage
     * @return TypeRemplissage
     */
    public function setTypeRemplissage($typeRemplissage)
    {
        $this->typeRemplissage = $typeRemplissage;

        return $this;
    }

    /**
     * Get typeRemplissage
     *
     * @return string
     */
    public function getTypeRemplissage()
    {
        return $this->typeRemplissage;
    }

    public function __toString()
    {
        return $this->typeRemplissage;
    }
}
