<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMAppendicesMineFond
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMAppendicesMineFond
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
     * @ORM\Column(name="AppendicesMineFond", type="string", length=50)
     */
    private $AppendicesMineFond;


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
        return $this->AppendicesMineFond;
    }

    /**
     * Set AppendicesMineFond
     *
     * @param string $appendicesMineFond
     * @return MMAppendicesMineFond
     */
    public function setAppendicesMineFond($appendicesMineFond)
    {
        $this->AppendicesMineFond = $appendicesMineFond;

        return $this;
    }

    /**
     * Get AppendicesMineFond
     *
     * @return string 
     */
    public function getAppendicesMineFond()
    {
        return $this->AppendicesMineFond;
    }
}
