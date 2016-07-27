<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EffetChargeDispersion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EffetChargeDispersion
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
     * @ORM\Column(name="effetChargeDispersion", type="string", length=255)
     */
    private $effetChargeDispersion;


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
     * Set effetChargeDispersion
     *
     * @param string $effetChargeDispersion
     * @return EffetChargeDispersion
     */
    public function setEffetChargeDispersion($effetChargeDispersion)
    {
        $this->effetChargeDispersion = $effetChargeDispersion;

        return $this;
    }

    /**
     * Get effetChargeDispersion
     *
     * @return string
     */
    public function getEffetChargeDispersion()
    {
        return $this->effetChargeDispersion;
    }

    public function __toString()
    {
        return $this->effetChargeDispersion;
    }
}
