<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDispositifTransport
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeDispositifTransport
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
     * @ORM\Column(name="typeDispositifTransport", type="string", length=255)
     */
    private $typeDispositifTransport;


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
     * Set typeDispositifTransport
     *
     * @param string $typeDispositifTransport
     * @return TypeDispositifTransport
     */
    public function setTypeDispositifTransport($typeDispositifTransport)
    {
        $this->typeDispositifTransport = $typeDispositifTransport;

        return $this;
    }

    /**
     * Get typeDispositifTransport
     *
     * @return string
     */
    public function getTypeDispositifTransport()
    {
        return $this->typeDispositifTransport;
    }

    public function __toString()
    {
        return $this->typeDispositifTransport;
    }
}
