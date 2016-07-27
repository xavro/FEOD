<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\FormeAilettes;

class LoadFormeAilettes implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Annulaires',
'Circulaire sectionnées',
'Ellipsoïdales',
'Néant',
'Rectangulaires',
'Trapezoïdales'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new FormeAilettes();
      $assemblage->setFormeAilettes($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}