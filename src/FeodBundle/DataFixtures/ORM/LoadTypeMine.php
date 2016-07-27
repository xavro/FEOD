<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\TypeMine;

class LoadTypeMine implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Anti-char',
'Anti-hélicoptère',
'Anti-personnel',
'Anti-véhicule',
'Autre'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new TypeMine();
      $assemblage->setTypeMine($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}