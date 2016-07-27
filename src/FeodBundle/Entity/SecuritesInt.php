<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecuritesInt
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SecuritesInt
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
     * @ORM\Column(name="securitesInt", type="string", length=255)
     */
    private $securitesInt;


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
     * Set securitesInt
     *
     * @param string $securitesInt
     * @return SecuritesInt
     */
    public function setSecuritesInt($securitesInt)
    {
        $this->securitesInt = $securitesInt;

        return $this;
    }

    /**
     * Get securitesInt
     *
     * @return string
     */
    public function getSecuritesInt()
    {
        return $this->securitesInt;
    }

    public function __toString()
    {
        return $this->securitesInt;
    }
}
