<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeMineMarine
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeMineMarine
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
     * @ORM\Column(name="TypeMineMarine", type="string", length=50)
     */
    private $typeMineMarine;


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
     * Set typeMineMarine
     *
     * @param string $typeMineMarine
     * @return TypeMineMarine
     */
    public function setTypeMineMarine($typeMineMarine)
    {
        $this->typeMineMarine = $typeMineMarine;

        return $this;
    }

    /**
     * Get typeMineMarine
     *
     * @return string
     */
    public function getTypeMineMarine()
    {
        return $this->typeMineMarine;
    }

    public function __toString()
    {
        return $this->typeMineMarine;
    }
}
