<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeRenflement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeRenflement
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
     * @ORM\Column(name="typeRenflement", type="string", length=255)
     */
    private $typeRenflement;


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
     * Set typeRenflement
     *
     * @param string $typeRenflement
     * @return TypeRenflement
     */
    public function setTypeRenflement($typeRenflement)
    {
        $this->typeRenflement = $typeRenflement;

        return $this;
    }

    /**
     * Get typeRenflement
     *
     * @return string
     */
    public function getTypeRenflement()
    {
        return $this->typeRenflement;
    }

    public function __toString()
    {
        return $this->typeRenflement;
    }
}
