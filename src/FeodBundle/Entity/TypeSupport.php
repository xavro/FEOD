<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeSupport
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeSupport
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
     * @ORM\Column(name="typeSupport", type="string", length=255)
     */
    private $typeSupport;


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
     * Set typeSupport
     *
     * @param string $typeSupport
     * @return TypeSupport
     */
    public function setTypeSupport($typeSupport)
    {
        $this->typeSupport = $typeSupport;

        return $this;
    }

    /**
     * Get typeSupport
     *
     * @return string
     */
    public function getTypeSupport()
    {
        return $this->typeSupport;
    }

    public function __toString()
    {
        return $this->typeSupport;
    }
}
