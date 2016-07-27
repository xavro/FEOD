<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\UnitesMUNEX;

class LoadUnitesMUNEX implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'PIAM',
'GCIN',
'3e RG',
'6e RG',
'13e RG',
'19e RG',
'31e RG',
'GPD Manche',
'GPD Atlantique',
'GPD Méditerranée',
'GRID',
'GrIN St Dizier',
'GrIN Salon',
'GrIN Captieux',
'GrIN Cazaux',
'CEAE'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new UnitesMUNEX();
      $assemblage->setUnitesMUNEX($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}