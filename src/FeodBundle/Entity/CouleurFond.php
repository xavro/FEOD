<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CouleurFond
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CouleurFond
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
     * @ORM\Column(name="couleurFond", type="string", length=255)
     */
    private $couleurFond;


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
     * Set couleurFond
     *
     * @param string $couleurFond
     * @return CouleurFond
     */
    public function setCouleurFond($couleurFond)
    {
        $this->couleurFond = $couleurFond;

        return $this;
    }

    /**
     * Get couleurFond
     *
     * @return string
     */
    public function getCouleurFond()
    {
        return $this->couleurFond;
    }

    public function __toString()
    {
        return $this->couleurFond;
    }
}
