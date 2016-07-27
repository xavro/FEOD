<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\FormeMine;

class LoadFormeMine implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
 'Inconnu',
'Cubique',
'Cylindrique',
'Cylindrique long',
'Cylindrique moyen',
'Cylindrique vertical',
'Cylindroconique',
'Ovoïde',
'Paraléllépipédique',
'Paraléllépipédique curve',
'Sphérique',
'Trapézoïdale',
'Triangulaire',
'Tronconique'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new FormeMine();
      $assemblage->setFormeMine($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}