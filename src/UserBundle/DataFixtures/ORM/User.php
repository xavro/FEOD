<?php

namespace Admin\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Collections\ArrayCollection;

class Dictionnaire implements FixtureInterface {

// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager) {
        
        $user1 = new \Admin\UserBundle\Entity\User();
        $user2 = $manager->getRepository('AdminUserBundle:User')->findAll();
        echo "Groupe des Users : ".$user1->getGroups();
        
        $group = new arrayCollection();
        $group = $manager->getRepository('AdminUserBundle:Group')->findAll();
        $test = new arrayCollection();

        echo "Groupe : ".count($group) ;
        
        echo "roles des users : ";
        foreach ($user2 as $key => $value) {
            echo 'key : '.$key.' => '.$value;
            
        }
        
        //$user->setUsername('totolovetata');
        //$user->setRoles($roles);
        
    }

}

?>
