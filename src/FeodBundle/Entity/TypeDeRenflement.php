<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDeRenflement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeDeRenflement
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
     * @ORM\Column(name="typeDeRenflement", type="string", length=255)
     */
    private $typeDeRenflement;


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
     * Set typeDeRenflement
     *
     * @param string $typeDeRenflement
     * @return TypeDeRenflement
     */
    public function setTypeDeRenflement($typeDeRenflement)
    {
        $this->typeDeRenflement = $typeDeRenflement;

        return $this;
    }

    /**
     * Get typeDeRenflement
     *
     * @return string
     */
    public function getTypeDeRenflement()
    {
        return $this->typeDeRenflement;
    }

    public function __toString()
    {
        return $this->typeDeRenflement;
    }
}
