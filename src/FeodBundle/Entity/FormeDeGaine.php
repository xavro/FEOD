<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormeDeGaine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FormeDeGaine
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
     * @ORM\Column(name="formeDeGaine", type="string", length=255)
     */
    private $formeDeGaine;


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
     * Set formeDeGaine
     *
     * @param string $formeDeGaine
     * @return FormeDeGaine
     */
    public function setFormeDeGaine($formeDeGaine)
    {
        $this->formeDeGaine = $formeDeGaine;

        return $this;
    }

    /**
     * Get formeDeGaine
     *
     * @return string
     */
    public function getFormeDeGaine()
    {
        return $this->formeDeGaine;
    }

    public function __toString()
    {
        return $this->formeDeGaine;
    }
}
