<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCeinture
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeCeinture
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
     * @ORM\Column(name="typeCeinture", type="string", length=255)
     */
    private $typeCeinture;


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
     * Set typeCeinture
     *
     * @param string $typeCeinture
     * @return TypeCeinture
     */
    public function setTypeCeinture($typeCeinture)
    {
        $this->typeCeinture = $typeCeinture;

        return $this;
    }

    /**
     * Get typeCeinture
     *
     * @return string
     */
    public function getTypeCeinture()
    {
        return $this->typeCeinture;
    }

    public function __toString()
    {
        return $this->typeCeinture;
    }
}
