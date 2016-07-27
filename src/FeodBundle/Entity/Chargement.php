<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chargement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Chargement
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
     * @ORM\Column(name="chargement", type="string", length=255)
     */
    private $chargement;


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
     * Set chargement
     *
     * @param string $chargement
     * @return Chargement
     */
    public function setChargement($chargement)
    {
        $this->chargement = $chargement;

        return $this;
    }

    /**
     * Get chargement
     *
     * @return string
     */
    public function getChargement()
    {
        return $this->chargement;
    }

    public function __toString()
    {
        return $this->chargement;
    }
}
