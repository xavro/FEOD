<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NatureChargeMili
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NatureChargeMili
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
     * @ORM\Column(name="natureCharge", type="string", length=255)
     */
    private $natureCharge;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\ExplosifEmploi")
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
     * Set natureCharge
     *
     * @param string $natureCharge
     * @return NatureChargeMili
     */
    public function setNatureCharge($natureCharge)
    {
        $this->natureCharge = $natureCharge;

        return $this;
    }

    /**
     * Get natureCharge
     *
     * @return string
     */
    public function getNatureCharge()
    {
        return $this->natureCharge;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return NatureChargeMili
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
     * Set ExplosifEmploi
     *
     * @param \FeodBundle\Entity\ExplosifEmploi $ExplosifEmploi
     * @return NatureChargeMili
     */
    public function setExplosifEmploi(\FeodBundle\Entity\ExplosifEmploi $ExplosifEmploi = null)
    {
        $this->ExplosifEmploi = $ExplosifEmploi;

        return $this;
    }

    /**
     * Get ExplosifEmploi
     *
     * @return \FeodBundle\Entity\ExplosifEmploi
     */
    public function getExplosifEmploi()
    {
        return $this->ExplosifEmploi;
    }
    
    public function __toString(){
        return $this->natureCharge." - ".$this->note;
    }
}
