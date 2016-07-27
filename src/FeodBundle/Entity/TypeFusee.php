<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeFusee
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeFusee
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
     * @ORM\Column(name="typeFusee", type="string", length=255)
     */
    private $typeFusee;


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
     * Set typeFusee
     *
     * @param string $typeFusee
     * @return TypeFusee
     */
    public function setTypeFusee($typeFusee)
    {
        $this->typeFusee = $typeFusee;

        return $this;
    }

    /**
     * Get typeFusee
     *
     * @return string
     */
    public function getTypeFusee()
    {
        return $this->typeFusee;
    }

    public function __toString()
    {
        return $this->typeFusee;
    }
}
