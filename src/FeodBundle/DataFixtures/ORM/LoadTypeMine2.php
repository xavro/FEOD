<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\TypeMine2;

class LoadTypeMine2 implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $fabrication = array(
'AZF',
'AZB',
'DFC',
'DFFC',
'EFP',
'Locale',
'Chenille',
'Ventrale',
'Souffle',
'Toute largeur',
'Platter charge',
'Shaped Charge',
'Piège',
'Sabotage'
            );
    $explication=array(
        
'Action de zone fixe',
'Action de zone bondissante',
'Directional Fragmentation Charge',
'Directional Focused Fragmentation Charge',
'Explosive Formed Projectile (boulet)',
'à action locale',
'à action de chenille',
'à action ventrale',
'à effet de souffle',
'Toute la largeur de la piste',
'Charge plate',
'Charge creuse / charge formée',
'Artifice de piégeage',
'Artifice de sabotage'  
        
            );
    $traduction=array(
'',
'',
'Fragmentation dirigée',
'Fragmentation concentrée',
'Projectile formé par explosif = action horizontale',
'',
'',
'',
'',
'',
'',
'',
'',
''
    );
    for($i=0;$i<count($fabrication);$i++){
      $fabric = new TypeMine2();
      $fabric->setSousTypeMine($fabrication[$i]);
      $fabric->setNote($explication[$i]);
      $fabric->setTraduction($traduction[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

  }
}