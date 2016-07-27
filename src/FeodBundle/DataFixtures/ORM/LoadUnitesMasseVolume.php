<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\UnitesMasseVolume;

class LoadUnitesMasseVolume implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $uniteMV = array(
'kg',
'g',
'lb',
'oz',
'cm³',
'L',
'm³',
'gal'

            );
    $nomUnite=array(
'kilogramme',
'gramme',
'pound / livre',
'ounce / once',
'centimètre cube',
'litre',
'mètre cube',
'Gallon'

            );
    $reference=array(
'1000',
'1',
'453,59',
'28,35',
'0,001',
'1',
'1000',
'4,54609'
        
    );
    $typeUnite=array(
'masse',
'masse',
'masse',
'masse',
'volume',
'volume',
'volume',
'volume'
        
    );
   
    for($i=0;$i<count($uniteMV);$i++){
      $fabric = new UnitesMasseVolume();
      $fabric->setUniteMV($uniteMV[$i]);
      $fabric->setNomUnite($nomUnite[$i]);
      $fabric->setReference($reference[$i]);
      $fabric->setTypeUnite($typeUnite[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

  }
}