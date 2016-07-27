<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\TypeObus;

class LoadTypeObus implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $fabrication = array(
'HV',
'AP',
'APC',
'SAP',
'CP',
'BC',
'HE',
'AT',
'GPR',
'FS',
'DS',
'TP',
'DP',
'Balleux',
'ILLUM',
'SMOKE',
'SH',
'FRAG',
'PELE',
'CARGO',
'AB',
'TOX (Chimique)',
'I',
'RA',
'DEMO',
'T',
'INERTE',
'BOULET',
'RR',
'EM',
'IR',
'GPS',
'NI',
'LEST',
'Boite à Mitrailles',
'CTAS',
'MAQUETTE',
'SR'
            );
    $explication=array(
'High Velocity',
'Armor Piercing',
'Armor Piercing Cap',
'Semi Armor Piercing',
'Concrete Piercing',
'Ballistic Cap',
'High Explosive',
'Anti Tank',
'General Purpose',
'Fin Stabilised',
'Discarding Sabot',
'Target Practice / Exercice',
'Dual Purpose',
'Obus à balles',
'Eclairant',
'Fumigène',
'Squash Head',
'Fragmentation',
'Penetrator with Enhanced Lateral Effect',
'Obus Cargo',
'Air Burst',
'Toxique',
'Incendiary',
'Rocket Assisted',
'Demolition',
'Tracer',
'',
'',
'Reduce Ranged',
'Guidage Electromagnétique',
'Guidage Infra-rouge',
'Guidage GPS',
'Navigation Inertielle',
'Obus lesté',
'',
'Cased Telescoped Armament System',
'',
'Sans Recul'
            );
   
    for($i=0;$i<count($fabrication);$i++){
      $fabric = new TypeObus();
      $fabric->setType($fabrication[$i]);
      $fabric->setSignification($explication[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

  }
}