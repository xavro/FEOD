<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\DispositifSecurite;

class LoadDispositifSecurite implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Autre',
'Bouton',
'Non alignement pyro',
'Cale',
'Capuchon',
'Cavalier',
'Clé d\'armement',
'Clip',
'Coiffe',
'DSA horloger',
'Fourchette',
'Goupille',
'Inconnu',
'Interrupteur',
'DSA électronique',
'Propre à l\'allumeur',
'Sans',
'Triangle',
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new DispositifSecurite();
      $assemblage->setDispositifSecurite($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}