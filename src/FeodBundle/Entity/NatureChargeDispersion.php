<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NatureChargeDispersion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NatureChargeDispersion
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
     * @ORM\Column(name="natureChargeDispersion", type="string", length=255)
     */
    private $natureChargeDispersion;


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
     * Set natureChargeDispersion
     *
     * @param string $natureChargeDispersion
     * @return NatureChargeDispersion
     */
    public function setNatureChargeDispersion($natureChargeDispersion)
    {
        $this->natureChargeDispersion = $natureChargeDispersion;

        return $this;
    }

    /**
     * Get natureChargeDispersion
     *
     * @return string
     */
    public function getNatureChargeDispersion()
    {
        return $this->natureChargeDispersion;
    }

    public function __toString()
    {
        return $this->natureChargeDispersion;
    }
}
