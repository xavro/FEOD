<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecuritesExt
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SecuritesExt
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
     * @ORM\Column(name="securitesExt", type="string", length=255)
     */
    private $securitesExt;


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
     * Set securitesExt
     *
     * @param string $securitesExt
     * @return SecuritesExt
     */
    public function setSecuritesExt($securitesExt)
    {
        $this->securitesExt = $securitesExt;

        return $this;
    }

    /**
     * Get securitesExt
     *
     * @return string
     */
    public function getSecuritesExt()
    {
        return $this->securitesExt;
    }

    public function __toString()
    {
        return $this->securitesExt;
    }
}
