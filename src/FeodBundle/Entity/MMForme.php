<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMForme
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMForme
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
     * @ORM\Column(name="FormeMine", type="string", length=50)
     */
    private $FormeMine;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->FormeMine;
    }

    /**
     * Set FormeMine
     *
     * @param string $formeMine
     * @return MMForme
     */
    public function setFormeMine($formeMine)
    {
        $this->FormeMine = $formeMine;

        return $this;
    }

    /**
     * Get FormeMine
     *
     * @return string 
     */
    public function getFormeMine()
    {
        return $this->FormeMine;
    }
}
