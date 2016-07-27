<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormeMine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FormeMine
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
     * @ORM\Column(name="formeMine", type="string", length=255)
     */
    private $formeMine;


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
     * Set formeMine
     *
     * @param string $formeMine
     * @return FormeMine
     */
    public function setFormeMine($formeMine)
    {
        $this->formeMine = $formeMine;

        return $this;
    }

    /**
     * Get formeMine
     *
     * @return string
     */
    public function getFormeMine()
    {
        return $this->formeMine;
    }

    public function __toString()
    {
        return $this->formeMine;
    }
}
