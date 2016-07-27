<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equivalence_mm_cm_inch
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Equivalence_mm_cm_inch
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
     * @var integer
     *
     * @ORM\Column(name="mm", type="integer")
     */
    private $mm;

    /**
     * @var float
     *
     * @ORM\Column(name="cmCalcule", type="float")
     */
    private $cmCalcule;

    /**
     * @var integer
     *
     * @ORM\Column(name="cm", type="integer")
     */
    private $cm;

    /**
     * @var float
     *
     * @ORM\Column(name="inchCalcule", type="float")
     */
    private $inchCalcule;

    /**
     * @var integer
     *
     * @ORM\Column(name="inch", type="integer")
     */
    private $inch;
    

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
     * Set mm
     *
     * @param integer $mm
     * @return Equivalence_mm_cm_inch
     */
    public function setMm($mm)
    {
        $this->mm = $mm;

        return $this;
    }

    /**
     * Get mm
     *
     * @return integer 
     */
    public function getMm()
    {
        return $this->mm;
    }

    /**
     * Set cmCalcule
     *
     * @param float $cmCalcule
     * @return Equivalence_mm_cm_inch
     */
    public function setCmCalcule($cmCalcule)
    {
        $this->cmCalcule = $cmCalcule;

        return $this;
    }

    /**
     * Get cmCalcule
     *
     * @return float 
     */
    public function getCmCalcule()
    {
        return $this->cmCalcule;
    }

    /**
     * Set cm
     *
     * @param integer $cm
     * @return Equivalence_mm_cm_inch
     */
    public function setCm($cm)
    {
        $this->cm = $cm;

        return $this;
    }

    /**
     * Get cm
     *
     * @return integer 
     */
    public function getCm()
    {
        return $this->cm;
    }

    /**
     * Set inchCalcule
     *
     * @param float $inchCalcule
     * @return Equivalence_mm_cm_inch
     */
    public function setInchCalcule($inchCalcule)
    {
        $this->inchCalcule = $inchCalcule;

        return $this;
    }

    /**
     * Get inchCalcule
     *
     * @return float 
     */
    public function getInchCalcule()
    {
        return $this->inchCalcule;
    }

    /**
     * Set inch
     *
     * @param integer $inch
     * @return Equivalence_mm_cm_inch
     */
    public function setInch($inch)
    {
        $this->inch = $inch;

        return $this;
    }

    /**
     * Get inch
     *
     * @return integer 
     */
    public function getInch()
    {
        return $this->inch;
    }
    public function __toString(){
        return $this->mm;
    }
}
