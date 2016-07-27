<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\CouleurFond;

class LoadCouleurFond implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
      'Argenté',
      'Blanc',
      'Bleu',
      'Bleu clair',
      'Bleu foncé',
      'Chamoix',
      'Doré',
      'Doré foncé',
      'En relief',
      'Gris',
      'Gris bleu',
      'Grisé',
      'Grisé noir',
      'Jaune',
      'Jaune citron',
      'Marron',
      'Marron clair',
      'Marron foncé',
      'Nacre',
        'Noir',
        'Orange',
        'Rose','Rouge',
        'Rouge brique',
        'Sable','Vert','Vert clair',
        'Vert clair ou gris bleu',
        'Vert foncé',
        'Vert kaki',
        'Vert olive',
        'Violet'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new CouleurFond();
      $assemblage->setCouleurFond($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}