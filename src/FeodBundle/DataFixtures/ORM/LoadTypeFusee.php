<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\TypeFusee;

class LoadTypeFusee implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Culot',
'Fusée à temps',
'Fusée à temps électronique',
'Fusée à temps horlogère',
'Fusée à temps pyrotechnique',
'Fusée de proximité',
'Fusée instantanée à double temporisation',
'Fusée mécanique à temps Superquick',
'Interne',
'Néant',
'Ogive',
'Ogive et Culot',
'Percutante instantanée',
'Percutante instantanée ou avec retard',
'Percutante instantanée Superquick',
'Percutante instantannée à retard',
'PIBD'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new TypeFusee();
      $assemblage->setTypeFusee($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}