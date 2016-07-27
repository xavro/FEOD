<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMAppendicesOrin
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMAppendicesOrin
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
     * @ORM\Column(name="MMAppendiceOrin", type="string", length=50)
     */
    private $MMAppendiceOrin;


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
        return $this->MMAppendiceOrin;
    }

    /**
     * Set MMAppendiceOrin
     *
     * @param string $mMAppendiceOrin
     * @return MMAppendicesOrin
     */
    public function setMMAppendiceOrin($mMAppendiceOrin)
    {
        $this->MMAppendiceOrin = $mMAppendiceOrin;

        return $this;
    }

    /**
     * Get MMAppendiceOrin
     *
     * @return string 
     */
    public function getMMAppendiceOrin()
    {
        return $this->MMAppendiceOrin;
    }
}
