<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cloison
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cloison
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
     * @ORM\Column(name="cloison", type="string", length=255)
     */
    private $cloison;


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
     * Set cloison
     *
     * @param string $cloison
     * @return Cloison
     */
    public function setCloison($cloison)
    {
        $this->cloison = $cloison;

        return $this;
    }

    /**
     * Get cloison
     *
     * @return string
     */
    public function getCloison()
    {
        return $this->cloison;
    }

    public function __toString()
    {
        return $this->cloison;
    }
}
