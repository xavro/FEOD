<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEmpennage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TypeEmpennage
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
     * @ORM\Column(name="typeEmpennage", type="string", length=255)
     */
    private $typeEmpennage;


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
     * Set typeEmpennage
     *
     * @param string $typeEmpennage
     * @return TypeEmpennage
     */
    public function setTypeEmpennage($typeEmpennage)
    {
        $this->typeEmpennage = $typeEmpennage;

        return $this;
    }

    /**
     * Get typeEmpennage
     *
     * @return string
     */
    public function getTypeEmpennage()
    {
        return $this->typeEmpennage;
    }

    public function __toString()
    {
        return $this->typeEmpennage;
    }
}
