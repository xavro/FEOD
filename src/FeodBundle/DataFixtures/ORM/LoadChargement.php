<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\Chargement;

class LoadChargement implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
      'Billes en plomb',
      'Chimique',
      'Ecran fumigène',
        'Flambeau d\'éclairage',
        'Fléchettes',
        'Fumigènes, phosphore',
        'Mines',
        'Paillettes',
        'Sous-Munitions',
        'Suffocant',
        'Tracts'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new Chargement();
      $assemblage->setChargement($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}