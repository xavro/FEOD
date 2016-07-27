<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\NatureChargeDispersion;

class LoadNatureChargeDispersion implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'Explosif primaire',
'Azoture de plomb',
'Fulminate de mercure',
'Styphnate de plomb',
'Mélinite (Acide picrique)',
'Poudre noire',
'RDX (Hexogène)',
'Tétryl',
'TNT (Tolite, Trotyl,..)',
'Trinitrophtalène',
'Chlorure d\'ammonium',
'Composition A5',
'Aluminium',
'Nitrate de potassium',
'Détonateur M7',
'Charge d\'éjection M10',
'Fulminate de potassium',
'Dinitrobenzène'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new NatureChargeDispersion();
      $assemblage->setNatureChargeDispersion($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}