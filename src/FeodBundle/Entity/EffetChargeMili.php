<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EffetChargeMili
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EffetChargeMili
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
     * @ORM\Column(name="effetChargeMili", type="string", length=255)
     */
    private $effetChargeMili;



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
     * Set effetChargeMili
     *
     * @param string $effetChargeMili
     * @return EffetChargeMili
     */
    public function setEffetChargeMili($effetChargeMili)
    {
        $this->effetChargeMili = $effetChargeMili;

        return $this;
    }

    /**
     * Get effetChargeMili
     *
     * @return string
     */
    public function getEffetChargeMili()
    {
        return $this->effetChargeMili;
    }

    public function __toString()
    {
        return $this->effetChargeMili;
    }
}
