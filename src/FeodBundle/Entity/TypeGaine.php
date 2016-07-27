<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeGaine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeGaine
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
     * @ORM\Column(name="typeGaine", type="string", length=255)
     */
    private $typeGaine;


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
     * Set typeGaine
     *
     * @param string $typeGaine
     * @return TypeGaine
     */
    public function setTypeGaine($typeGaine)
    {
        $this->typeGaine = $typeGaine;

        return $this;
    }

    /**
     * Get typeGaine
     *
     * @return string
     */
    public function getTypeGaine()
    {
        return $this->typeGaine;
    }

    public function __toString()
    {
        return $this->typeGaine;
    }
}
