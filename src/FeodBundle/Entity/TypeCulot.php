<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCulot
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeCulot
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
     * @ORM\Column(name="typeCulot", type="string", length=255)
     */
    private $typeCulot;


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
     * Set typeCulot
     *
     * @param string $typeCulot
     * @return TypeCulot
     */
    public function setTypeCulot($typeCulot)
    {
        $this->typeCulot = $typeCulot;

        return $this;
    }

    /**
     * Get typeCulot
     *
     * @return string
     */
    public function getTypeCulot()
    {
        return $this->typeCulot;
    }

    public function __toString()
    {
        return $this->typeCulot;
    }
}
