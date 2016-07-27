<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeMine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeMine
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
     * @ORM\Column(name="typeMine", type="string", length=255)
     */
    private $typeMine;


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
     * Set typeMine
     *
     * @param string $typeMine
     * @return TypeMine
     */
    public function setTypeMine($typeMine)
    {
        $this->typeMine = $typeMine;

        return $this;
    }

    /**
     * Get typeMine
     *
     * @return string
     */
    public function getTypeMine()
    {
        return $this->typeMine;
    }

    public function __toString()
    {
        return $this->typeMine;
    }
}
