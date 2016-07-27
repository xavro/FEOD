<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeExplosif
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeExplosif
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
     * @ORM\Column(name="TypeExplosif", type="string", length=255)
     */
    private $TypeExplosif;



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
     * Set TypeExplosif
     *
     * @param string $typeExplosif
     * @return TypeExplosif
     */
    public function setTypeExplosif($typeExplosif)
    {
        $this->TypeExplosif = $typeExplosif;

        return $this;
    }

    /**
     * Get TypeExplosif
     *
     * @return string 
     */
    public function getTypeExplosif()
    {
        return $this->TypeExplosif;
    }
    
        public function __toString()
    {
        return $this->TypeExplosif;
    }
}
