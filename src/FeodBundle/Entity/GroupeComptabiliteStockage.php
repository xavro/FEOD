<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupeComptabiliteStockage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GroupeComptabiliteStockage
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
     * @ORM\Column(name="groupeComptabiliteStockage", type="string", length=255)
     */
    private $groupeComptabiliteStockage;

    /**
     * @var string
     *
     * @ORM\Column(name="signification", type="string", length=255)
     */
    private $signification;


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
     * Set groupeComptabiliteStockage
     *
     * @param string $groupeComptabiliteStockage
     * @return GroupeComptabiliteStockage
     */
    public function setGroupeComptabiliteStockage($groupeComptabiliteStockage)
    {
        $this->groupeComptabiliteStockage = $groupeComptabiliteStockage;

        return $this;
    }

    /**
     * Get groupeComptabiliteStockage
     *
     * @return string
     */
    public function getGroupeComptabiliteStockage()
    {
        return $this->groupeComptabiliteStockage;
    }

    /**
     * Set signification
     *
     * @param string $signification
     * @return signification
     */
	 public function setSignification($signification)
    {
        $this->signification = $signification;

        return $this;
    }

    /**
     * Get signification
     *
     * @return string
     */
    public function getSignification()
    {
        return $this->signification;
    }

 
    public function __toString()
    {
        return $this->groupeComptabiliteStockage.' - '.$this->signification;
    }
}
