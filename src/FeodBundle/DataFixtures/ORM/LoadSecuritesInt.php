<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\SecuritesInt;

class LoadSecuritesInt implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Désalignement pyrotechnique',
'Verrou Pyrotechnique',
'Désalignement Mécanique',
'Goupille à cisaillement',
'Bille(s)',
'Masselottes'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new SecuritesInt();
      $assemblage->setSecuritesInt($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}