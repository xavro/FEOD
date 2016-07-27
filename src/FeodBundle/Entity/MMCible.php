<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMCible
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMCible
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
     * @ORM\Column(name="MMCible", type="string", length=50)
     */
    private $mMCible;


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
     * Set mMCible
     *
     * @param string $mMCible
     * @return MMCible
     */
    public function setMMCible($mMCible)
    {
        $this->mMCible = $mMCible;

        return $this;
    }

    /**
     * Get mMCible
     *
     * @return string
     */
    public function getMMCible()
    {
        return $this->mMCible;
    }

    public function __toString()
    {
        return $this->mMCible;
    }
}
