<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePlaque
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypePlaque
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
     * @ORM\Column(name="typePlaque", type="string", length=255)
     */
    private $typePlaque;


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
     * Set typePlaque
     *
     * @param string $typePlaque
     * @return TypePlaque
     */
    public function setTypePlaque($typePlaque)
    {
        $this->typePlaque = $typePlaque;

        return $this;
    }

    /**
     * Get typePlaque
     *
     * @return string
     */
    public function getTypePlaque()
    {
        return $this->typePlaque;
    }

    public function __toString()
    {
        return $this->typePlaque;
    }
}
