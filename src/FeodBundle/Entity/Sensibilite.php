<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sensibilite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Sensibilite
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
     * @ORM\Column(name="sensibilite", type="string", length=255)
     */
    private $sensibilite;


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
     * Set sensibilite
     *
     * @param string $sensibilite
     * @return Sensibilite
     */
    public function setSensibilite($sensibilite)
    {
        $this->sensibilite = $sensibilite;

        return $this;
    }

    /**
     * Get sensibilite
     *
     * @return string
     */
    public function getSensibilite()
    {
        return $this->sensibilite;
    }

    public function __toString()
    {
        return $this->sensibilite;
    }
}
