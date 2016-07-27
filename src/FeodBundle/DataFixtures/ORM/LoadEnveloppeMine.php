<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\EnveloppeMine;

class LoadEnveloppeMine implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Acier',
'Alliage léger',
'Aluminium',
'Bakélite',
'Béton',
'Bois',
'Carton',
'Carton bitumé',
'Enveloppe cartonnée',
'Explosif moulé',
'Fer blanc',
'Fibre de verre',
'Fonte',
'Métallique',
'Plastique',
'Polyéthylène',
'Résine moulé',
'Résine synthétique',
'Sans',
'Tôle',
'Verre',
'Zinc',
'Fragmentation'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new EnveloppeMine();
      $assemblage->setEnveloppeMine($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}