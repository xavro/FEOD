<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChargementChim
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ChargementChim
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
     * @ORM\Column(name="chargementChim", type="string", length=255)
     */
    private $chargementChim;


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
     * Set chargementChim
     *
     * @param string $chargementChim
     * @return ChargementChim
     */
    public function setChargementChim($chargementChim)
    {
        $this->chargementChim = $chargementChim;

        return $this;
    }

    /**
     * Get chargementChim
     *
     * @return string
     */
    public function getChargementChim()
    {
        return $this->chargementChim;
    }

    public function __toString()
    {
        return $this->chargementChim;
    }
}
