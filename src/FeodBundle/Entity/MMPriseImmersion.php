<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MMPriseImmersion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MMPriseImmersion
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
     * @ORM\Column(name="PriseImmersion", type="string", length=50)
     */
    private $priseImmersion;


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
     * Set priseImmersion
     *
     * @param string $priseImmersion
     * @return PriseImmersion
     */
    public function setPriseImmersion($priseImmersion)
    {
        $this->priseImmersion = $priseImmersion;

        return $this;
    }

    /**
     * Get priseImmersion
     *
     * @return string
     */
    public function getPriseImmersion()
    {
        return $this->priseImmersion;
    }

    public function __toString()
    {
        return $this->priseImmersion;
    }
}
