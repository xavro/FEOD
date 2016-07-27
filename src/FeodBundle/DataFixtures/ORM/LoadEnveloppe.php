<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\Enveloppe;

class LoadEnveloppe implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Acier',
'Acier / Aluminium',
'Acier gaufré',
'Alliage léger',
'Aluminium',
'Bakélite',
'Bois',
'Caoutchouc',
'Céramique',
'Enveloppe cartonnée',
'Etain',
'Explo moulé',
'Fibre de verre',
'Fonte',
'Fonte aciérée',
'Goudron',
'Magnésium',
'Métallique',
'Non-classé',
'Papier goudronné',
'Plastique',
'Sans enveloppe',
'Tungstène',
'Verre'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new Enveloppe();
      $assemblage->setEnveloppe($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}