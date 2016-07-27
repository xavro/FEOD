<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\PositionMarquage;

class LoadPositionMarquage implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Non',
'Dessous',
'Dessous et lateral',
'Dessus',
'Dessus et dessous',
'Dessus et lateral',
'Dessus et lateral et dessous',
'Face arrière',
'Face avant',
'Face avant et arrière',
'Intérieur',
'Latéral',
'Lateral bas',
'Dans le puit d\'amorçage'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new PositionMarquage();
      $assemblage->setPositionMarquage($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}