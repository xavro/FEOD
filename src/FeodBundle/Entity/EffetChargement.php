<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EffetChargement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EffetChargement
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
     * @ORM\Column(name="effetChargement", type="string", length=255)
     */
    private $effetChargement;


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
     * Set effetChargement
     *
     * @param string $effetChargement
     * @return EffetChargement
     */
    public function setEffetChargement($effetChargement)
    {
        $this->effetChargement = $effetChargement;

        return $this;
    }

    /**
     * Get effetChargement
     *
     * @return string
     */
    public function getEffetChargement()
    {
        return $this->effetChargement;
    }

    public function __toString()
    {
        return $this->effetChargement;
    }
}
