<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMInfluence
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMInfluence
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
     * @ORM\Column(name="MMInfluence", type="string", length=50)
     */
    private $mMInfluence;


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
     * Set mMInfluence
     *
     * @param string $mMInfluence
     * @return MMInfluence
     */
    public function setMMInfluence($mMInfluence)
    {
        $this->mMInfluence = $mMInfluence;

        return $this;
    }

    /**
     * Get mMInfluence
     *
     * @return string
     */
    public function getMMInfluence()
    {
        return $this->mMInfluence;
    }

    public function __toString()
    {
        return $this->mMInfluence;
    }
}
