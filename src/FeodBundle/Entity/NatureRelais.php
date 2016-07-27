<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NatureRelais
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NatureRelais
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
     * @ORM\Column(name="natureRelais", type="string", length=255)
     */
    private $natureRelais;


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
     * Set natureRelais
     *
     * @param string $natureRelais
     * @return NatureRelais
     */
    public function setNatureRelais($natureRelais)
    {
        $this->natureRelais = $natureRelais;

        return $this;
    }

    /**
     * Get natureRelais
     *
     * @return string
     */
    public function getNatureRelais()
    {
        return $this->natureRelais;
    }

    public function __toString()
    {
        return $this->natureRelais;
    }
}
