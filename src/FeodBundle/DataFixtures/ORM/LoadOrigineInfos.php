<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\OrigineInfos;

class LoadOrigineInfos implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'AEODP-2',
'BiblioMines',
'Jane\'s',
'MUNOPEX',
'ORDATA',
'Rapport DGA',
'TURPIN'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new OrigineInfos();
      $assemblage->setOrigineInfos($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}