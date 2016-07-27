<?php
namespace FeodBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeodBundle\Entity\Pays;

class LoadPays implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $pays = array(
'Afghanistan',
'Afrique du Sud',
'Albanie',
'Allemagne',
'Argentine',
'Australie',
'Autriche',
'Belgique',
'Bosnie-Herzegovine',
'Brésil',
'Bulgarie',
'Cambodge/Kampuchea',
'Canada',
'Chili',
'Chine',
'Corée du Nord',
'Corée du Sud',
'Croatie',
'Cuba',
'Danemark',
'Egypte',
'Espagne',
'Etats-Unis',
'Ex-Tchécoslovaquie',
'Ex-URSS',
'Ex-Yougoslavie',
'Finlande',
'France',
'Grèce',
'Hongrie',
'Inde',
'Indonésie',
'Iran',
'Iraq',
'Israel',
'Italie',
'Japon',
'Jordanie',
'Norvège',
'Pakistan',
'Pays-Bas',
'Pologne',
'Portugal',
'République Serbe',
'République Tchèque',
'Roumanie',
'Royaume Uni',
'Russie',
'Singapour',
'Slovaquie',
'Slovénie',
'Sri Lanka',
'Suède',
'Suisse',
'Taiwan',
'Thailande',
'Turquie',
'Ukraine',
'Vietnam',
'Zimbabwe'

            );
    $codes2=array(
'AF',
'ZA',
'AL',
'DE',
'AR',
'AU',
'AT',
'BE',
'BA',
'BR',
'BG',
'KH',
'CA',
'CL',
'CN',
'KP',
'KR',
'HR',
'CU',
'DK',
'EG',
'ES',
'US',
'',
'',
'',
'FI',
'FR',
'GR',
'HU',
'IN',
'ID',
'IR',
'IQ',
'IS',
'IT',
'JP',
'JO',
'NO',
'PK',
'NL',
'PL',
'PT',
'RS',
'CZ',
'RO',
'GB',
'RU',
'SG',
'SK',
'SI',
'CK',
'SE',
'CH',
'TW',
'TH',
'TR',
'UA',
'VN',
'ZW'

            );
    $codes3=array(
'AFG',
'',
'ALB',
'DEU',
'ARG',
'AUS',
'AUT',
'BEL',
'',
'BRE',
'BUL',
'',
'CAN',
'',
'CHI',
'',
'',
'CRO',
'CUB',
'DAN',
'EGY',
'ESP',
'USA',
'TCH',
'URS',
'YOU',
'FIN',
'FRA',
'GRE',
'HUN',
'IND',
'',
'IRN',
'IRQ',
'ISR',
'ITA',
'JAP',
'JOR',
'NOR',
'PAK',
'',
'POL',
'POR',
'SER',
'',
'ROM',
'',
'RUS',
'SIN',
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
''
        
    );
   
    for($i=0;$i<count($pays);$i++){
      $fabric = new Pays();
      $fabric->setPays($pays[$i]);
      $fabric->setCodes2($codes2[$i]);
      $fabric->setCodes3($codes3[$i]);

      // On la persiste
      $manager->persist($fabric);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();

  }
}