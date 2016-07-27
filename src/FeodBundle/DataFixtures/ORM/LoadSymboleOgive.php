<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\SymboleOgive;

class LoadSymboleOgive implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Avec parachute',
'Catégorie de masse',
'Chimique binaire',
'Croix bleue',
'Croix jaune',
'Croix verte',
'Double croix jaune',
'Double croix verte',
'Effet coloré',
'Fléchettes',
'Mines dispersables',
'Neant',
'Piézo-électrique',
'Produisant un écho-radar',
'Sous-munitions AV / AP',
'Température d\'utilisation I',
'Traceur',
'Murat'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new SymboleOgive();
      $assemblage->setSymboleOgive($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}