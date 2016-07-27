<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormeCulot
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FormeCulot
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
     * @ORM\Column(name="formeCulot", type="string", length=255)
     */
    private $formeCulot;


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
     * Set formeCulot
     *
     * @param string $formeCulot
     * @return FormeCulot
     */
    public function setFormeCulot($formeCulot)
    {
        $this->formeCulot = $formeCulot;

        return $this;
    }

    /**
     * Get formeCulot
     *
     * @return string
     */
    public function getFormeCulot()
    {
        return $this->formeCulot;
    }

    public function __toString()
    {
        return $this->formeCulot;
    }
}
