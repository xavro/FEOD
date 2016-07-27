<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\NatureChargeMili;

class LoadNatureChargeMili implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $fabrication = array(
            
'Acide Cyanhydrique (CA)','
Adamsite','
Aluminium','
Amatol 80/20','
Arsines','
Azoture de plomb','
Baratol ou TNT','
Baratol ou TNT/Salpêtre','
Billes d\'acier','
Billes de plomb','
Billes en fonte','
Braie','
Bromacétone (BA)','
Bromo-méthyl-éthyle-cétone','
Bromure de benzyle','
Bromure de xylyle','
C-4','
Cétones bromées','
Chlorate de potassium','
Chlore','
Chlorhydrine sulfurique','
Chlorobenzène','
Chloroformiate de méthyl monochloré','
Chloropicrine (PS)','
Chlorosulfate de dianisidine','
Chlorure d\'arsenic','
Chlorure de benzyle','
Chlorure de diphénylarsine','
Chlorure de phényl-carbylamine','
Composition A','
Composition A2','
Composition A3','
Composition A4','
Composition A5','
Composition B','
Composition B2','
Composition éclairante','
Composition fumigène','
Composition H6','
Composition incendiaire','
CS','
Cyanure de bromobenzyle','
Cyanure de diphénylarsine','
Dibromoéthylarsine','
Dichloroéthylarsine','
Dinitronaphtalène','
Diphosgène','
DNP (DiNitroPhénol)','
DNT (DiNitroToluène)','
Donarite','
Dynamite','
Explosif concentré','
Explosif de carrière','
Explosif liquide','
Explosif plastique malléable','
Explosif Type D','
Fléchettes','
Fuel','
Fulminate de mercure','
Fumigérite','
Hexachlorétane','
Hexolite 45/55','
Hexolite 50/50','
Hexolite 60/40','
Hexolite 65/35','
Hexolite 70/30','
Hexolite 90/10','
HMX (Octogène)','
Iodacétate d\'éthyle','
iodacétone','
iodure de benzyle','
Léwisite','
Magnésium','
Mélinite (Acide picrique)','
Mines','
N°1 Clairsite','
N°10 Bretonite','
N°11 Cedenite','
N°12 Fraissite','
N°13 Sylvinite','
N°14 Cyclite','
N°15 Vaillantite','
N°16 Rationite','
N°17 Ypérite','
N°2 solution Sulfocarbonique de phosphore','
N°20 Ypérite','
N°21 Camite','
N°22 Sternite','
N°3 Phosphore','
N°4 Vincennite','
N°4B Vitryte','
N°5 Collongite','
N°6 Palite','
N°7 Aquinite','
N°8 Papite','
N°9 Martonite','
Nitrate d\'ammoniaque','
Nitrate d\'ammonium (AN)','
Nitrate de baryum','
Nitrate de potassium (K-N03)','
Nitrocellulose','
Nitroglycérine','
Nitropentane','
opacite','
Oxyde de diphénylarsine','
Oxyde de méthyle dichloré','
PE 4','
PE 9','
PETN (Penthrite)','
Phosgène (CG)','
Phosphore blanc (WP)','
Phosphore rouge','
Plomb','
Poudre noire','
RDX (Hexogène)','
Sable','
Sarin','
Schneidérite','
SEMTEX A','
SEMTEX H','
Soman','
Soufre','
Sous-Munitions','
Styphnate de plomb','
Sulfate de diméthyle','
T 4','
Tabun','
Tetrachlorosulfure de carbone','
Tetrachlorure de titane','
Tetrachlorure d\'étain','
Tétryl','
Tétrytol','
Thermite','
TNT (Tolite, Trotyl, etc.)','
Torpex','
Tracts','
Trialène (Bicyclo-Butadiène)','
Trioxyde de soufre / Anhydride sulfurique','
Type Composition C4 hexogène plastifiant','
Uranium appauvri','
VS-6D','
VX','
Wax / Cire','
Ypérite (H, HS, HD)'
        
            );
    $explication=array(
        
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'= C-45010A , RDX 91% + plastifiant 5,3% + liant 2,1%',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'RDX 91% + WAX 9%',
'RDX 97% + WAX 3%',
'RDX 98,5% + Acide stéarique 1,5%',
'RDX 63% + TNT 36% + WAX 1%',
'',
'',
'',
'',
'',
'Chlorobenzylidène',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'= Acide carbazotique, Trinitrophénol, TNP, Trinitrate de phénol, acide picronitrique',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'= engrais',
'',
'',
'= salpêtre',
'',
'',
'',
'',
'',
'',
'Variante du C-4 d\'origine GB',
'',
'',
'',
'',
'',
'',
'',
'= Cyclonite, Cyclo-triméthylène-trinitramine',
'',
'',
'',
'PETN 94,3% + RDX 5,7%',
'PETN 49,8% RDX 50,2%',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'Tolite = Trotyl, Trilite, Trinol, Tritolo, Tritolol, Triton, Tritone, Trotol, Trinitrotoluol, Trinitrotoluène, Trinitrométhylbenzène',
'RDX 42% + TNT 40% + aluminium 18%',
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
      $fabric = new NatureChargeMili();
      $fabric->setNatureCharge($fabrication[$i]);
      $fabric->setNote($explication[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

  }
}