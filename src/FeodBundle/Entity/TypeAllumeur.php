<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAllumeur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeAllumeur
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
     * @ORM\Column(name="typeAllumeur", type="string", length=255)
     */
    private $typeAllumeur;


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
     * Set typeAllumeur
     *
     * @param string $typeAllumeur
     * @return TypeAllumeur
     */
    public function setTypeAllumeur($typeAllumeur)
    {
        $this->typeAllumeur = $typeAllumeur;

        return $this;
    }

    /**
     * Get typeAllumeur
     *
     * @return string 
     */
    public function getTypeAllumeur()
    {
        return $this->typeAllumeur;
    }
      public function __toString()
    {
        return $this->typeAllumeur;
    }
}
