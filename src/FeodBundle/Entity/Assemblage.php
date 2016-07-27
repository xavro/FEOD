<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assemblage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Assemblage
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
     * @ORM\Column(name="Assemblage", type="string", length=255)
     */
    private $assemblage;


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
     * Set assemblage
     *
     * @param string $assemblage
     * @return Assemblage
     */
    public function setAssemblage($assemblage)
    {
        $this->assemblage = $assemblage;

        return $this;
    }

    /**
     * Get assemblage
     *
     * @return string
     */
    public function getAssemblage()
    {
        return $this->assemblage;
    }

    public function __toString(){
        return $this->assemblage;
    }
}
