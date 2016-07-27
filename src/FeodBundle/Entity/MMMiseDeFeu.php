<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMMiseDeFeu
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMMiseDeFeu
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
     * @ORM\Column(name="MMMiseDeFeu", type="string", length=50)
     */
    private $MMMiseDeFeu;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    public function __toString()
    {
        return $this->MMMiseDeFeu;
    }

    /**
     * Set MMMiseDeFeu
     *
     * @param string $mMMiseDeFeu
     * @return MMMiseDeFeu
     */
    public function setMMMiseDeFeu($mMMiseDeFeu)
    {
        $this->MMMiseDeFeu = $mMMiseDeFeu;

        return $this;
    }

    /**
     * Get MMMiseDeFeu
     *
     * @return string 
     */
    public function getMMMiseDeFeu()
    {
        return $this->MMMiseDeFeu;
    }
}
