<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\NatureCharge;

class LoadNatureCharge implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $names = array(
'A 5',
'ACIDE PICRIQUE',
'Amatol',
'Baratol ou TNT',
'Baratol ou TNT/Salpêtre',
'Comp.A4 hexogène/cire 97/3',
'Comp.A5 hexogène/acide stéarique 99/1',
'Comp.B hexogène/tolite/cire 63/36/1',
'Composition B',
'Composition B + relais composition A3',
'Composition B/B2',
'Composition H6',
'Explosif concentré',
'Explosif de carrière',
'Explosif liquide',
'Explosif plastique malléable',
'Hexogène',
'Hexolite',
'Hexolite 60/40',
'Hexolite 70/30',
'Mélinite',
'PE 4',
'PE 9',
'Pentolite',
'Pentrite',
'Plastique',
'RDX',
'RDX / HMX (98/02)',
'RDX/HMX',
'RDX/WAX',
'RDX/WAX 88/12',
'T 4',
'Tétryl',
'TNT',
'TNT - KN03',
'TNT / HEXOGENE 50/50',
'TNT / RDX',
'TNT / RDX (50/50)',
'TNT / RDX (66/34)',
'TNT / RDX 40/60',
'TNT / TETRYL',
'TNT ou Amatol',
'TNT/PETN/Wax (93/6/1)',
'TNT/RDX/ALUMINIUM',
'Tolite',
'Torpex',
'Trialène',
'Trotyl',
'Trotyl + Tétryl (50/50)',
'Type Composition C4 hexogène plastifiant',
'VS-6D'
    );

    foreach ($names as $name) {
      // On crée la catégorie
      $assemblage = new NatureCharge();
      $assemblage->setNatureCharge($name);

      // On la persiste
      $manager->persist($assemblage);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}