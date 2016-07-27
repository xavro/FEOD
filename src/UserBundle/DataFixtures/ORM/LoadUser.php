<?php

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\Persistence\ObjectManager;

use UserBundle\Entity\User;
use UserBundle\Entity\Qualification;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $userAdmin = new User();
        $userAdmin->setUsername('admin.admin2');
        $userAdmin->setEmail('system@example.com');
        $userAdmin->setPlainPassword('abcabc99');
        $userAdmin->setRoles(array('ROLE_SUPER_ADMIN'));
        $userAdmin->setNom('Jean');
        $userAdmin->setPrenom('Pierre');
        $userAdmin->setGrade('Général');
        $userAdmin->setTrigramme('ABC');
        $userAdmin->setAnneeService('23');
        $userAdmin->setUnite('ABC');
        $userAdmin->setSite('ABC');
        $userAdmin->setFonction('Général');
        $userAdmin->setLocked(false);
        //$userAdmin->setQualification1(new Qualification());
        $manager->persist($userAdmin);


        $userClient = new User();
        $userClient->setUsername('client');
        $userClient->setEmail('system2@example.com');
        $userClient->setPlainPassword('abcabc99');
        $userClient->setRoles(array('ROLE_CLIENT'));
        $userClient->setNom('Jean');
        $userClient->setPrenom('Client');
        $userClient->setGrade('Client');
        $userClient->setTrigramme('ABC');
        $userClient->setAnneeService('23');
        $userClient->setUnite('ABC');
        $userClient->setSite('ABC');
        $userClient->setFonction('Client');
        $userClient->setLocked(false);

        $manager->persist($userClient);

        $manager->flush();
    }
}
