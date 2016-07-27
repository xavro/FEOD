<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\TypeAllumeur;

class LoadTypeAllumeur implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
        'Amorce',
        'Amorce amovible',
        'Booster',
        'Booster amovible',
        'Charge relais',
        'Charge relais amovible',
        'Clipsé',
        'Détonateur',
        'Détonateur amovible',
        'Electrique',
        'Inflammateur',
        'Inseré',
        'Monobloc',
        'Pyrotechnique',
        'Serti',
        'Vissé'
        
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new TypeAllumeur();
      $assemblage->setTypeAllumeur($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}