<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NatureChargeInerte
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NatureChargeInerte
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
     * @ORM\Column(name="NatureChargeInerte", type="string", length=50)
     */
    private $NatureChargeInerte;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="Note", type="string", length=50)
     */
    private $Note;


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
     * Set NatureChargeInerte
     *
     * @param string $natureChargeInerte
     * @return NatureChargeInerte
     */
    public function setNatureChargeInerte($natureChargeInerte)
    {
        $this->NatureChargeInerte = $natureChargeInerte;

        return $this;
    }

    /**
     * Get NatureChargeInerte
     *
     * @return string 
     */
    public function getNatureChargeInerte()
    {
        return $this->NatureChargeInerte;
    }

    /**
     * Set Note
     *
     * @param string $note
     * @return NatureChargeInerte
     */
    public function setNote($note)
    {
        $this->Note = $note;

        return $this;
    }

    /**
     * Get Note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->Note;
    }
    
    public function __toString(){
        return $this->NatureChargeInerte;
    }
}
