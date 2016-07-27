<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\Declenchement;

class LoadDeclenchement implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Impact à inertie',
'Impact à refoulement',
'Impact AWF',
'A temps pyrotechnique',
'A temps mécanique',
'A temps électrique',
'A temps électronique',
'Altimétrique',
'Profondimétrique',
'A influence magnétique',
'A influence lumineuse',
'A influence sonore',
'De proximité Radar',
'Anti-dérangement',
'Anti-dévissage',
'Sonar',
'A antenne à bascule',
'Pneumatique à tentacules',
'A influence électromagnétique',
'A influence sismique',
'A pression par double impulsion',
'A pression constante',
'A pression cumulative',
'A pression',
'A relachemment de pression',
'A rupture de fil de surveillance',
        'A rupture de fil électronique',
        'A traction',
        'Par dispositif de déclenchement électrique','
Autre'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new Declenchement();
      $assemblage->setDeclenchement($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}