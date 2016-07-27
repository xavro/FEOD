<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAutoDestruction
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeAutoDestruction
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
     * @ORM\Column(name="TypeAutoDestruction", type="string", length=255)
     */
    private $TypeAutoDestruction;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTypeAutoDestruction($TypeAutoDestruction)
    {
        $this->TypeAutoDestruction = $TypeAutoDestruction;

        return $this;
    }

    public function getTypeAutoDestruction()
    {
        return $this->TypeAutoDestruction;
    }

    public function __toString()
    {
        return $this->TypeAutoDestruction;
    }
}