<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeSabot
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeSabot
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
     * @ORM\Column(name="typeSabot", type="string", length=255)
     */
    private $typeSabot;


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
     * Set typeSabot
     *
     * @param string $typeSabot
     * @return TypeSabot
     */
    public function setTypeSabot($typeSabot)
    {
        $this->typeSabot = $typeSabot;

        return $this;
    }

    /**
     * Get typeSabot
     *
     * @return string
     */
    public function getTypeSabot()
    {
        return $this->typeSabot;
    }

    public function __toString()
    {
        return $this->typeSabot;
    }
}
