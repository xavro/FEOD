<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NomPersonnel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NomPersonnel
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
     * @ORM\Column(name="nomPersonnelTrigramme", type="string", length=255)
     */
    private $nomPersonnelTrigramme;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPersonnel", type="string", length=255)
     */
    private $nomPersonnel;


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
     * Set nomPersonnelTrigramme
     *
     * @param string $nomPersonnelTrigramme
     * @return nomPersonnel
     */
    public function setNomPersonnelTrigramme($nomPersonnelTrigramme)
    {
        $this->nomPersonnelTrigramme = $nomPersonnelTrigramme;

        return $this;
    }

    /**
     * Get nomPersonnelTrigramme
     *
     * @return string
     */
    public function getNomPersonnelTrigramme()
    {
        return $this->nomPersonnelTrigramme;
    }

    /**
     * Set nomPersonnel
     *
     * @param string $nomPersonnel
     * @return nomPersonnel
     */
    public function setNomPersonnel($nomPersonnel)
    {
        $this->nomPersonnel = $nomPersonnel;

        return $this;
    }

    /**
     * Get nomPersonnel
     *
     * @return string
     */
    public function getNomPersonnel()
    {
        return $this->nomPersonnel;
    }
    public function __toString(){
        return $this->nomPersonnelTrigramme." - ".$this->nomPersonnel;
    }
}
