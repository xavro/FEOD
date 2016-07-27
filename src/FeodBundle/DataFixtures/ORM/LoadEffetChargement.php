<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\EffetChargement;

class LoadEffetChargement implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Explosif',
'Incendiare',
'Fragmentation',
'Fragmentation Contrôlée',
'Fragmentation Dirigée',
'Fragmentation Concentrée',
'Perforant',
        'Perforant à Charge creuse/formée',
        'Effet Munroe (CC avec cuivre)',
        'Eclairant',
        'Suffocant',
        'Vésicant',
        'Toxique général',
        'Neurotoxique',
        'Irritant',
        'Sternutatoire',
        'Lacrymogène',
        'Fumigène',
        'Fléchettes',
        'Tracts',
        'Sous-munitions',
        'Photoflash',
        'Traceur',
        'Impact',
        'Poussières radioactives',
        'Marqueur',
        'Signal lumineux'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new EffetChargement();
      $assemblage->setEffetChargement($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}