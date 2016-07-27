<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMSensibilite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMSensibilite
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
     * @ORM\Column(name="MMSensibilite", type="string", length=50)
     */
    private $MMSensibilite;


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
        return $this->MMSensibilite;
    }


    /**
     * Set MMSensibilite
     *
     * @param string $mMSensibilite
     * @return MMSensibilite
     */
    public function setMMSensibilite($mMSensibilite)
    {
        $this->MMSensibilite = $mMSensibilite;

        return $this;
    }

    /**
     * Get MMSensibilite
     *
     * @return string 
     */
    public function getMMSensibilite()
    {
        return $this->MMSensibilite;
    }
}
