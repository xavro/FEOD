<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\ClasseDangerStockage;

class LoadClasseDangerStockage implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
      '1.1',
      '1.2',
      '1.3',
        '1.4',
        '1.5',
        '1.6'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new ClasseDangerStockage();
      $assemblage->setClasseDangerStockage($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}