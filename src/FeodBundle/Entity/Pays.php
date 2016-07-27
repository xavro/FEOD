<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pays
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
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="codes2", type="string", length=2)
     */
    private $codes2;

    /**
     * @var string
     *
     * @ORM\Column(name="codes3", type="string", length=3)
     */
    private $codes3;


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
     * Set pays
     *
     * @param string $pays
     * @return pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set codes2
     *
     * @param string $codes2
     * @return pays
     */
    public function setCodes2($codes2)
    {
        $this->codes2 = $codes2;

        return $this;
    }

    /**
     * Get codes2
     *
     * @return string
     */
    public function getCodes2()
    {
        return $this->codes2;
    }

    /**
     * Set codes3
     *
     * @param string $codes3
     * @return pays
     */
    public function setCodes3($codes3)
    {
        $this->codes3 = $codes3;

        return $this;
    }

    /**
     * Get codes3
     *
     * @return string
     */
    public function getCodes3()
    {
        return $this->codes3;
    }

    public function __toString()
    {
        return $this->pays;
    }
}
