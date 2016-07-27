<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\TypeDispositifTransport;

class LoadTypeDispositifTransport implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Anneau métallique',
'Cable',
'Cordelette',
'Cordelette sur capuchon puit central',
'Poignée carton',
'Poignée métallique',
'Poignée métallique amovible',
'Poignée métallique fixe repliable',
'Poignée plastique',
'Poignée plastique fixe repliable',
'Poignée plastique fixe rétractable',
'Sangle tissu',
'Sans'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new TypeDispositifTransport();
      $assemblage->setTypeDispositifTransport($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}