<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\TypeMortier;

class LoadTypeMortier implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $fabrication = array(
'HE',
'HE-FRAG',
'HEAT',
'HERA',
'CARGO',
'SMK',
'ILL',
'INC',
'TOX',
'APFSDS',
'TP',
'INERT',
'MAQUETTE'
);
    $explication=array(
'High Explosive',
'High Explosive à Fragmentation',
'High Explosive antitank',
'High Explosive Rocket Assisted',
'Conteneur',
'Fumigène',
'Eclairant',
'Incendiaire',
'Chimique',
'Armor Percing Fin Stabilised Discarding Sabot',
'Target Practice',
'Inerte',
'Maquette'
);
    for($i=0;$i<count($fabrication);$i++){
      $fabric = new TypeMortier();
      $fabric->setTypeMortier($fabrication[$i]);
      $fabric->setSignification($explication[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

  }
}