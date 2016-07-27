<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\FormeCorps;

class LoadFormeCorps implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Convexe',
'Cylindrique',
'Cylindro-Ogivale',
'Cylindro-tronconique',
'Droit',
'Droit avec tenons fixes',
'Droit avec tenons mobiles',
'Ovoïde',
'Pisciforme'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new FormeCorps();
      $assemblage->setFormeCorps($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}