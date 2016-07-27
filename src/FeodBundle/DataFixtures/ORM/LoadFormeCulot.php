<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\FormeCulot;

class LoadFormeCulot implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Creux',
'Droit',
'Droit avec chanfrein',
'Droit avec tube stabilisateur',
'Kit de réduction de trainée de culot',
'Jupe',
'Propulsion additionnelle',
'Réduction de trainée de culot',
'Rétreint',
'Rétreint avec tube stabilisateur',
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new FormeCulot();
      $assemblage->setFormeCulot($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}