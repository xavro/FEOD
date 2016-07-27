<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QualifsMUNEX
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class QualifsMUNEX
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
     * @ORM\Column(name="qualif", type="string", length=255)
     */
    private $qualif;

 
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
     * Set qualif
     *
     * @param string $qualif
     * @return qualif
     */
    public function setQualif($qualif)
    {
        $this->qualif = $qualif;

        return $this;
    }

    /**
     * Get qualif
     *
     * @return string
     */
    public function getQualif()
    {
        return $this->qualif;
    }

    /**
     * Set qualifText
     *
     * @param string $qualifText
     * @return qualifText
     */
    public function setQualifText($qualifText)
    {
        $this->qualifText = $qualifText;

        return $this;
    }

    /**
     * Get qualifText
     *
     * @return string
     */
    public function getQualifText()
    {
        return $this->qualifText;
    }
    public function __toString(){
        return $this->qualif; //." - ".$this->qualifText;
    }
}
