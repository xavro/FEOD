<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualifications
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Qualifications
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
	 * @ORM\ManyToOne(targetEntity="UserBundle\Entity\QualifsMUNEX")
	 */
    private $qualif1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date1", type="datetime")
     */
    private $date1;

	/**
	 * @ORM\ManyToOne(targetEntity="UserBundle\Entity\QualifsMUNEX")
	 */
    private $qualif2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date2", type="datetime")
     */
    private $date2;

	/**
	 * @ORM\ManyToOne(targetEntity="UserBundle\Entity\QualifsMUNEX")
	 */
    private $qualif3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date3", type="datetime")
     */
    private $date3;

	/**
	 * @ORM\ManyToOne(targetEntity="UserBundle\Entity\QualifsMUNEX")
	 */
    private $qualif4;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date4", type="datetime")
     */
    private $date4;

	/**
	 * @ORM\ManyToOne(targetEntity="UserBundle\Entity\QualifsMUNEX")
	 */
    private $qualif5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date5", type="datetime")
     */
    private $date5;
	
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
     * Set qualif1
     *
     * @param string $qualif1
     * @return Qualifications
     */
    public function setQualif1($qualif1)
    {
        $this->qualif1 = $qualif1;

        return $this;
    }

    /**
     * Get qualif1
     *
     * @return string
     */
    public function getQualif1()
    {
        return $this->qualif1;
    }

    /**
     * Set date1
     *
     * @param \DateTime $date1
     * @return Qualifications
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;

        return $this;
    }

    /**
     * Get date1
     *
     * @return \DateTime
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set qualif2
     *
     * @param string $qualif2
     * @return Qualifications
     */
    public function setQualif2($qualif2)
    {
        $this->qualif2 = $qualif2;

        return $this;
    }

    /**
     * Get qualif2
     *
     * @return string
     */
    public function getQualif2()
    {
        return $this->qualif2;
    }

    /**
     * Set date2
     *
     * @param \DateTime $date2
     * @return Qualifications
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;

        return $this;
    }

    /**
     * Get date2
     *
     * @return \DateTime
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Set qualif3
     *
     * @param string $qualif3
     * @return Qualifications
     */
    public function setQualif3($qualif3)
    {
        $this->qualif3 = $qualif3;

        return $this;
    }

    /**
     * Get qualif3
     *
     * @return string
     */
    public function getQualif3()
    {
        return $this->qualif3;
    }

    /**
     * Set date3
     *
     * @param \DateTime $date3
     * @return Qualifications
     */
    public function setDate3($date3)
    {
        $this->date3 = $date3;

        return $this;
    }

    /**
     * Get date3
     *
     * @return \DateTime
     */
    public function getDate3()
    {
        return $this->date3;
    }

    /**
     * Set qualif4
     *
     * @param string $qualif4
     * @return Qualifications
     */
    public function setQualif4($qualif4)
    {
        $this->qualif4 = $qualif4;

        return $this;
    }

    /**
     * Get qualif4
     *
     * @return string
     */
    public function getQualif4()
    {
        return $this->qualif4;
    }

    /**
     * Set date4
     *
     * @param \DateTime $date4
     * @return Qualifications
     */
    public function setDate4($date4)
    {
        $this->date4 = $date4;

        return $this;
    }

    /**
     * Get date4
     *
     * @return \DateTime
     */
    public function getDate4()
    {
        return $this->date4;
    }

    /**
     * Set qualif5
     *
     * @param string $qualif5
     * @return Qualifications
     */
    public function setQualif5($qualif5)
    {
        $this->qualif5 = $qualif5;

        return $this;
    }

    /**
     * Get qualif5
     *
     * @return string
     */
    public function getQualif5()
    {
        return $this->qualif5;
    }

    /**
     * Set date5
     *
     * @param \DateTime $date5
     * @return Qualifications
     */
    public function setDate5($date5)
    {
        $this->date5 = $date5;

        return $this;
    }

    /**
     * Get date5
     *
     * @return \DateTime
     */
    public function getDate5()
    {
        return $this->date5;
    }

    public function __toString(){
/*        if(is_null($this->qualif1)){
            return '';
        }
        else{
            return $this->qualif1;
        }  */
        return $this->qualifications;
    }
}
