<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\NatureRelais;

class LoadNatureRelais implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Explosif plastique malléable',
'Hexal',
'Hexocire (94/6)',
'Hexocire 93/7',
'Pentolite',
'Pentrite',
'PRIMAIRE',
'RDX',
'RDX/TNT',
'RDX/TOL/AL (57/19/24)',
'RDX/WAX 93/7',
'Tétryl',
'TNT / TETRYL',
'TROTYL'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new NatureRelais();
      $assemblage->setNatureRelais($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}