<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\Position;

class LoadPosition implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Au dessus des ailettes',
'Dessus et niveau ailettes',
'Néant',
'Niveau des ailettes',
'Sous les ailettes',
'Sur le manchon'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new Position();
      $assemblage->setPosition($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}