<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMContact
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMContact
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
     * @ORM\Column(name="MMContact", type="string", length=50)
     */
    private $mMContact;


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
     * Set mMContact
     *
     * @param string $mMContact
     * @return MMContact
     */
    public function setMMContact($mMContact)
    {
        $this->mMContact = $mMContact;

        return $this;
    }

    /**
     * Get mMContact
     *
     * @return string
     */
    public function getMMContact()
    {
        return $this->mMContact;
    }

    public function __toString()
    {
        return $this->mMContact;
    }
}
