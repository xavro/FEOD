<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuseeTypeAmorcage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FuseeTypeAmorcage
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
     * @ORM\Column(name="TypeAmorcage", type="string", length=255)
     */
    private $TypeAmorcage;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTypeAmorcage($TypeAmorcage)
    {
        $this->TypeAmorcage = $TypeAmorcage;

        return $this;
    }

    public function getTypeAmorcage()
    {
        return $this->TypeAmorcage;
    }

    public function __toString()
    {
        return $this->TypeAmorcage;
    }
}