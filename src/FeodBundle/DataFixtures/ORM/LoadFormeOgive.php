<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\FormeOgive;

class LoadFormeOgive implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Auto-directeur',
'Conique',
'Cylindrique',
'Cylindro-conique',
'Cylindro-ogivale',
'Cylindro-ogivale tronquée',
'Ogivale',
'Ogivale tronquée',
'Stabo - Spigot',
'Tronconique'
            );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new FormeOgive();
      $assemblage->setFormeOgive($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}