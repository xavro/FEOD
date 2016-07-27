<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmorcageModeAction
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AmorcageModeAction

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
     * @ORM\Column(name="ModeAction", type="string", length=50)
     */
    private $ModeAction;
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    
    public function setModeAction($ModeAction)
    {
        $this->ModeAction = $ModeAction;

        return $this;
    }

    public function getModeAction()
    {
        return $this->ModeAction;
    }

    public function __toString()
    {
        return $this->ModeAction;
    }
}
