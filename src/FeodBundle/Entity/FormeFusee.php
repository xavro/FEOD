<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormeFusee
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FormeFusee
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
     * @ORM\Column(name="FormeFusee", type="string", length=255)
     */
    private $FormeFusee;


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
     * Set FormeFusee
     *
     * @param string $FormeFusee
     * @return FormeFusee
     */
    public function setFormeFusee($FormeFusee)
    {
        $this->FormeFusee = $FormeFusee;

        return $this;
    }

    /**
     * Get FormeFusee
     *
     * @return string
     */
    public function getFormeFusee()
    {
        return $this->FormeFusee;
    }

    public function __toString()
    {
        return $this->FormeFusee;
    }
}
