<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\EffetChargeMili;

class LoadEffetChargeMili implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Sans',
'Autre',
'Charge creuse',
'Charge formée',
'Charge plate',
'Fragmentation billes',
'Fragmentation billes et grenailles',
'Fragmentation grenailles',
'Fragmentation grenailles et beton',
'Préfragmentation externe',
'Préfragmentation interne'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new EffetChargeMili();
      $assemblage->setEffetChargeMili($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}