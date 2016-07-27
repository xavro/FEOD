<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\NomPersonnel;

class LoadNomPersonnel implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $fabrication = array(
'GLS',
'FAA',
'DPS',
'LBE',
'OLR',
'DBT',
'SBR',
'DVN',
'RET',
'LBE');
    $explication=array(
'GALLOIS',
'FARIDIALA',
'',
'LARRIBERE',
'OLIVIER',
'DUBANT',
'',
'DANVIN',
'',
'LARRIBERE');
    for($i=0;$i<count($fabrication);$i++){
      $fabric = new NomPersonnel();
      $fabric->setNomPersonnelTrigramme($fabrication[$i]);
      $fabric->setNomPersonnel($explication[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

  }
}