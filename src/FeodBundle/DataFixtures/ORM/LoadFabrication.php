<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\Fabrication;

class LoadFabrication implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
      
    $fabrication = array(
        'Manufacturée',
        'Semi-artisanale',
        'Artisanale');
    $explication=array(
        'Fabriqué en usine',
        'Fabriqué à la main en série sur le même modèle',
        'Fabriqué à la main en faibles quantités');
    for($i=0;$i<count($fabrication);$i++){
      $fabric = new Fabrication();
      $fabric->setFabrication($fabrication[$i]);
      $fabric->setExplication($explication[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}