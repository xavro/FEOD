<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMMouilleur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMMouilleur
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
     * @ORM\Column(name="MMMouilleur", type="string", length=50)
     */
    private $MMMouilleur;


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
        return $this->MMMouilleur;
    }

    /**
     * Set MMMouilleur
     *
     * @param string $mMMouilleur
     * @return MMMouilleur
     */
    public function setMMMouilleur($mMMouilleur)
    {
        $this->MMMouilleur = $mMMouilleur;

        return $this;
    }

    /**
     * Get MMMouilleur
     *
     * @return string 
     */
    public function getMMMouilleur()
    {
        return $this->MMMouilleur;
    }
}
