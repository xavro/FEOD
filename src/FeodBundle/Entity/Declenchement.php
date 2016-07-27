<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Declenchement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Declenchement
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
     * @ORM\Column(name="declenchement", type="string", length=255)
     */
    private $declenchement;


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
     * Set declenchement
     *
     * @param string $declenchement
     * @return Declenchement
     */
    public function setDeclenchement($declenchement)
    {
        $this->declenchement = $declenchement;

        return $this;
    }

    /**
     * Get declenchement
     *
     * @return string
     */
    public function getDeclenchement()
    {
        return $this->declenchement;
    }

    public function __toString()
    {
        return $this->declenchement;
    }
}
