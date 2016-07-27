<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\TypeSupport;

class LoadTypeSupport implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'1 Pied amovible',
'4 Aillettes',
'Affût réglable',
'Aimant',
'Autre',
'Bipieds amovibles',
'Bipieds fixes articulés',
'Pattes',
'Pied circulaire',
'Piquet bois',
'Piquet métallique',
'Piquet plastique',
'Sangle',
'SOCLE',
'Trépied'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new TypeSupport();
      $assemblage->setTypeSupport($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}