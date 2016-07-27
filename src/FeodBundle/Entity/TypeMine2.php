<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeMine2
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeMine2
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
     * @ORM\Column(name="sousTypeMine", type="string", length=255)
     */
    private $sousTypeMine;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="traduction", type="string", length=255)
     */
    private $traduction;


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
     * Set sousTypeMine
     *
     * @param string $sousTypeMine
     * @return TypeMine2
     */
    public function setSousTypeMine($sousTypeMine)
    {
        $this->sousTypeMine = $sousTypeMine;

        return $this;
    }

    /**
     * Get sousTypeMine
     *
     * @return string 
     */
    public function getSousTypeMine()
    {
        return $this->sousTypeMine;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return TypeMine2
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set traduction
     *
     * @param string $traduction
     * @return TypeMine2
     */
    public function setTraduction($traduction)
    {
        $this->traduction = $traduction;

        return $this;
    }

    /**
     * Get traduction
     *
     * @return string 
     */
    public function getTraduction()
    {
        return $this->traduction;
    }
    public function __toString()
    {
        return $this->sousTypeMine.' - '.$this->note;
    }
}
