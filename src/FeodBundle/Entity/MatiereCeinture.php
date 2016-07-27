<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatiereCeinture
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MatiereCeinture
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
     * @ORM\Column(name="matiereCeinture", type="string", length=255)
     */
    private $matiereCeinture;


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
     * Set matiereCeinture
     *
     * @param string $matiereCeinture
     * @return MatiereCeinture
     */
    public function setMatiereCeinture($matiereCeinture)
    {
        $this->matiereCeinture = $matiereCeinture;

        return $this;
    }

    /**
     * Get matiereCeinture
     *
     * @return string
     */
    public function getMatiereCeinture()
    {
        return $this->matiereCeinture;
    }

    public function __toString()
    {
        return $this->matiereCeinture;
    }
}
