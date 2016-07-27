<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrigineInfos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class OrigineInfos
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
     * @ORM\Column(name="origineInfos", type="string", length=255)
     */
    private $origineInfos;


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
     * Set origineInfos
     *
     * @param string $origineInfos
     * @return OrigineInfos
     */
    public function setOrigineInfos($origineInfos)
    {
        $this->origineInfos = $origineInfos;

        return $this;
    }

    /**
     * Get origineInfos
     *
     * @return string
     */
    public function getOrigineInfos()
    {
        return $this->origineInfos;
    }

    public function __toString()
    {
        return $this->origineInfos;
    }
}
