<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModificateurFiche
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ModificateurFiche
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
     * @ORM\Column(name="modificateurFiche", type="string", length=255)
     */
    private $modificateurFiche;


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
     * Set modificateurFiche
     *
     * @param string $modificateurFiche
     * @return ModificateurFiche
     */
    public function setModificateurFiche($modificateurFiche)
    {
        $this->modificateurFiche = $modificateurFiche;

        return $this;
    }

    /**
     * Get modificateurFiche
     *
     * @return string
     */
    public function getModificateurFiche()
    {
        return $this->modificateurFiche;
    }

    public function __toString()
    {
        return $this->modificateurFiche;
    }
}
