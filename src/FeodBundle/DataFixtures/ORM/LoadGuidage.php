<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\Guidage;

class LoadGuidage implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $fabrication = array(
'IR',
'LASER',
'EM',
'GPS',
'INERTIEL',
'FILAIRE',
'OPTIQUE');
    $explication=array(
'Infrarouge',
'Laser',
'Electromagnétique',
'Global Positioning System',
'Centrale à Inertie',
'Filo-Guidage',
'Optique');
    for($i=0;$i<count($fabrication);$i++){
      $fabric = new Guidage();
      $fabric->setGuidage($fabrication[$i]);
      $fabric->setGuidageTexte($explication[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

  }
}