<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElementsAerodynamiques
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ElementsAerodynamiques
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
     * @ORM\Column(name="elementsAerodynamique", type="string", length=255)
     */
    private $elementsAerodynamiques;


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
     * Set elementsAerodynamique
     *
     * @param string $elementsAerodynamique
     * @return ElementsAerodynamiques
     */
    public function setElementsAerodynamiques($elementsAerodynamique)
    {
        $this->elementsAerodynamiques = $elementsAerodynamique;

        return $this;
    }

    /**
     * Get elementsAerodynamique
     *
     * @return string
     */
    public function getElementsAerodynamique()
    {
        return $this->elementsAerodynamiques;
    }

    public function __toString()
    {
        return $this->elementsAerodynamiques;
    }
}
