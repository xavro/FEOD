<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeMarquage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeMarquage
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
     * @ORM\Column(name="typeMarquage", type="string", length=255)
     */
    private $typeMarquage;


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
     * Set typeMarquage
     *
     * @param string $typeMarquage
     * @return TypeMarquage
     */
    public function setTypeMarquage($typeMarquage)
    {
        $this->typeMarquage = $typeMarquage;

        return $this;
    }

    /**
     * Get typeMarquage
     *
     * @return string
     */
    public function getTypeMarquage()
    {
        return $this->typeMarquage;
    }

    public function __toString()
    {
        return $this->typeMarquage;
    }
}
