<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAilettes
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeAilettes
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
     * @ORM\Column(name="typeAilettes", type="string", length=255)
     */
    private $typeAilettes;


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
     * Set typeAilettes
     *
     * @param string $typeAilettes
     * @return TypeAilettes
     */
    public function setTypeAilettes($typeAilettes)
    {
        $this->typeAilettes = $typeAilettes;

        return $this;
    }

    /**
     * Get typeAilettes
     *
     * @return string
     */
    public function getTypeAilettes()
    {
        return $this->typeAilettes;
    }

    public function __toString()
    {
        return $this->typeAilettes;
    }
}
