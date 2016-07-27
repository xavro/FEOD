<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModePose
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ModePose
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
     * @ORM\Column(name="modePose", type="string", length=255)
     */
    private $modePose;



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
     * Set modePose
     *
     * @param string $modePose
     * @return ModePose
     */
    public function setModePose($modePose)
    {
        $this->modePose = $modePose;

        return $this;
    }

    /**
     * Get modePose
     *
     * @return string
     */
    public function getModePose()
    {
        return $this->modePose;
    }

    public function __toString()
    {
        return $this->modePose;
    }
}
