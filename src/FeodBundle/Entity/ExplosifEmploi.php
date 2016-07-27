<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExplosifEmploi
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ExplosifEmploi
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
     * @ORM\Column(name="ExplosifEmploi", type="string", length=255)
     */
    private $ExplosifEmploi;


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
     * Set ExplosifEmploi
     *
     * @param string $ExplosifEmploi
     * @return ExplosifEmploi
     */
    public function setExplosifEmploi($ExplosifEmploi)
    {
        $this->ExplosifEmploi = $ExplosifEmploi;

        return $this;
    }

    /**
     * Get ExplosifEmploi
     *
     * @return string
     */
    public function getExplosifEmploi()
    {
        return $this->ExplosifEmploi;
    }

    public function __toString()
    {
        return $this->ExplosifEmploi;
    }
}
