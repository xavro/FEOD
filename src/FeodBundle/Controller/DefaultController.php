<?php

namespace FeodBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FeodBundle\Form\RechercheType;

class DefaultController extends Controller
{
    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function indexAction()
    {
        return $this->render('FeodBundle:Default:index.html.twig');
    }

    /**
     * Controlleur servant à afficher le message d'avertissement
     * @return [type] [description]
     */
    public function warnAction()
    {
        $em = $this->getDoctrine()->getManager();
        $artillerie0 = $em->getRepository('FeodBundle:Artillerie')->countBystatut(0);
        $artillerie1 = $em->getRepository('FeodBundle:Artillerie')->countBystatut(1);
        $artillerie2 = $em->getRepository('FeodBundle:Artillerie')->countBystatut(2);
        $mines0 = $em->getRepository('FeodBundle:Mines')->countBystatut(0);
        $mines1 = $em->getRepository('FeodBundle:Mines')->countBystatut(1);
        $mines2 = $em->getRepository('FeodBundle:Mines')->countBystatut(2);
        $mortier0 = $em->getRepository('FeodBundle:Mortier')->countBystatut(0);
        $mortier1 = $em->getRepository('FeodBundle:Mortier')->countBystatut(1);
        $mortier2 = $em->getRepository('FeodBundle:Mortier')->countBystatut(2);
        $missiles0 = $em->getRepository('FeodBundle:Missiles')->countBystatut(0);
		$missiles1 = $em->getRepository('FeodBundle:Missiles')->countBystatut(1);
        $missiles2 = $em->getRepository('FeodBundle:Missiles')->countBystatut(2);
        $missiles3 = $em->getRepository('FeodBundle:Missiles')->countBystatut(3);
        $roquettes0 = $em->getRepository('FeodBundle:Roquettes')->countBystatut(0);
		$roquettes1 = $em->getRepository('FeodBundle:Roquettes')->countBystatut(1);
        $roquettes2 = $em->getRepository('FeodBundle:Roquettes')->countBystatut(2);
        $bombes0 = $em->getRepository('FeodBundle:Bombes')->countBystatut(0);
		$bombes1 = $em->getRepository('FeodBundle:Bombes')->countBystatut(1);
        $bombes2 = $em->getRepository('FeodBundle:Bombes')->countBystatut(2);
        $grenades0 = $em->getRepository('FeodBundle:Grenades')->countBystatut(0);
		$grenades1 = $em->getRepository('FeodBundle:Grenades')->countBystatut(1);
        $grenades2 = $em->getRepository('FeodBundle:Grenades')->countBystatut(2);
        $sousMunitions0 = $em->getRepository('FeodBundle:SousMunitions')->countBystatut(0);
		$sousMunitions1 = $em->getRepository('FeodBundle:SousMunitions')->countBystatut(1);
        $sousMunitions2 = $em->getRepository('FeodBundle:SousMunitions')->countBystatut(2);
        $amorcage0 = $em->getRepository('FeodBundle:Amorcage')->countBystatut(0);
        $amorcage1 = $em->getRepository('FeodBundle:Amorcage')->countBystatut(1);
        $amorcage2 = $em->getRepository('FeodBundle:Amorcage')->countBystatut(2);
		$explosif0 = $em->getRepository('FeodBundle:Explosif')->countBystatut(0);
        $explosif1 = $em->getRepository('FeodBundle:Explosif')->countBystatut(1);
        $explosif2 = $em->getRepository('FeodBundle:Explosif')->countBystatut(2);
		$chimique0 = $em->getRepository('FeodBundle:Chimique')->countBystatut(0);
        $chimique1 = $em->getRepository('FeodBundle:Chimique')->countBystatut(1);
        $chimique2 = $em->getRepository('FeodBundle:Chimique')->countBystatut(2);
		$minesMarines0 = $em->getRepository('FeodBundle:MinesMarines')->countBystatut(0);
        $minesMarines1 = $em->getRepository('FeodBundle:MinesMarines')->countBystatut(1);
        $minesMarines2 = $em->getRepository('FeodBundle:MinesMarines')->countBystatut(2);

        $creation = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countByStatut(0);
        $verification = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(1);
        $validation = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(2);
        $valide= $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(3);
        
        
        
        return $this->render('FeodBundle:Default:warn.html.twig',
            array(
                'artillerie0' => $artillerie0,
                'artillerie1' => $artillerie1,
                'artillerie2' => $artillerie2,
                'mines1' => $mines1,
                'mines0' => $mines0,
                'mines2' => $mines2,
                'mortier0' => $mortier0,
                'mortier1' => $mortier1,
                'mortier2' => $mortier2,
                'missiles0' => $missiles0,
				'missiles1' => $missiles1,
                'missiles2' => $missiles2,
                'missiles3' => $missiles3,
                'roquettes0' => $roquettes0,
				'roquettes1' => $roquettes1,
                'roquettes2' => $roquettes2,
                'bombes0' => $bombes0,
				'bombes1' => $bombes1,
                'bombes2' => $bombes2,
                'grenades0' => $grenades0,
				'grenades1' => $grenades1,
                'grenades2' => $grenades2,
                'sousMunitions0' => $sousMunitions0,
				'sousMunitions1' => $sousMunitions1,
                'sousMunitions2' => $sousMunitions2,
                'amorcage0' => $amorcage0,
                'amorcage1' => $amorcage1,
                'amorcage2' => $amorcage2,
				'explosif0' => $explosif0,
                'explosif1' => $explosif1,
                'explosif2' => $explosif2,
				'chimique0' => $chimique0,
                'chimique1' => $chimique1,
                'chimique2' => $chimique2,
				'minesMarines0' => $minesMarines0,
                'minesMarines1' => $minesMarines1,
                'minesMarines2' => $minesMarines2,
                'valide' => $valide,
                'validation' => $validation,
                'verification' => $verification,
                'creation' => $creation,
            ));
        
        
    }

    /**
     * [creationAction description]
     * @return [type] [description]
     */
    public function creationAction()
    {
        return $this->render('FeodBundle:Default:creation.html.twig');
    }

    /**
     * [searchAction description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function searchAction(Request $request)
    {

        $s = new \FeodBundle\Entity\Search();

        $form = $this->get('form.factory')
        ->createBuilder(new \FeodBundle\Form\SearchType(), $s)->getForm();
        $form->add('submit', 'submit', array('label' => 'Rechercher'));

        $results = null;

        if ($form->handleRequest($request)->isValid()) {
            $rep = $this->getDoctrine()->getManager()
            ->getRepository('FeodBundle:Munition');

            $results = $rep->searchByNomAndType($s->getExpression(), $s->getType());

        }

        return $this->render('FeodBundle:Default:search.html.twig', array(
            'form' => $form->createView(),
            'entities'=>$results,
        ));

    }


    public function search1Action()
    {
        return $this->render('FeodBundle:Default:index.html.twig');
    }
    
    public function rechercheAction()
    {
        $form = $this->createForm(new RechercheType());
        return $this->render('FeodBundle:Default:recherche.html.twig', array('form' => $form->createView()));
    
    }
    
    public function rechercheTraitementAction(Request $request)
    {
                $s = new \FeodBundle\Entity\Recherche();

        $form = $this->get('form.factory')
        ->createBuilder(new \FeodBundle\Form\RechercheType(), $s)->getForm();
        $form->add('submit', 'submit', array('label' => 'Rechercher'));

$artillerien = null;
$artilleriep = null;
$artilleriec = null;
$artilleriey = null;
$artilleriel = null;
$artilleried = null;
$artillerief = null;

$minesn = null;
$minesc = null;
$minesp = null;
$minesy = null;
$minesl = null;
$minesd = null;
$minesf = null;

$mortiern = null;
$mortierp = null;
$mortierc = null;
$mortiery = null;
$mortierl = null;
$mortierd = null;
$mortierf = null;

$grenadesn = null;
$grenadesc = null;
$grenadesp = null;
$grenadesy = null;
$grenadesl = null;

$roquettesn = null;
$roquettesc = null;
$roquettesp = null;
$roquettesy = null;
$roquettesl = null;

$bombesn = null;
$bombesc = null;
$bombesp = null;
$bombesy = null;
$bombesl = null;

$missilesn = null;
$missilesc = null;
$missilesp = null;
$missilesy = null;
$missilesl = null;

$sousmunn = null;
$sousmunc = null;
$sousmunp = null;
$sousmuny = null;
$sousmunl = null;

$minesmarn = null;
$minesmarc = null;
$minesmarp = null;
$minesmary = null;
$minesmarl = null;

$amorcagen = null;
$amorcagec = null;
$amorcagep = null;
$amorcagey = null;
$amorcagel = null;

        if ($form->handleRequest($request)->isValid()) {
            //$form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            
            $artillerien = $em->getRepository('FeodBundle:Artillerie')->recherchenomartillerie($s->getRecherchenomartillerie());
            $artilleriep = $em->getRepository('FeodBundle:Artillerie')->recherchepoidsartillerie($s->getRecherchepoidsartillerie());
            $artilleriec = $em->getRepository('FeodBundle:Artillerie')->recherchecouleurartillerie($s->getRecherchecouleurartillerie());
            $artilleriey = $em->getRepository('FeodBundle:Artillerie')->recherchepaysartillerie($s->getRecherchepaysartillerie());
            $artilleriel = $em->getRepository('FeodBundle:Artillerie')->recherchecalibreartillerie($s->getRecherchecalibreartillerie());
            $artilleried = $em->getRepository('FeodBundle:Artillerie')->recherchedimartillerie($s->getRecherchedimartillerie());
            $artillerief = $em->getRepository('FeodBundle:Artillerie')->rechercheformeartillerie($s->getRechercheformeartillerie());
            
            $minesn = $em->getRepository('FeodBundle:Mines')->recherchenommines($s->getRecherchenommines());
            $minesp = $em->getRepository('FeodBundle:Mines')->recherchepoidsmines($s->getRecherchepoidsmines());
            $minesc = $em->getRepository('FeodBundle:Mines')->recherchecouleurmines($s->getRecherchecouleurmines());
            $minesy = $em->getRepository('FeodBundle:Mines')->recherchepaysmines($s->getRecherchepaysmines());
            $minesl = $em->getRepository('FeodBundle:Mines')->recherchecalibremines($s->getRecherchecalibremines());
            $minesd = $em->getRepository('FeodBundle:Mines')->recherchedimmines($s->getRecherchedimmines());
            $minesf = $em->getRepository('FeodBundle:Mines')->rechercheformemines($s->getRechercheformemines());
            
            
            $mortierp = $em->getRepository('FeodBundle:Mortier')->recherchepoidsmortier($s->getRecherchepoidsmortier());
            $mortierc = $em->getRepository('FeodBundle:Mortier')->recherchecouleurmortier($s->getRecherchecouleurmortier());
            $mortiern = $em->getRepository('FeodBundle:Mortier')->recherchenommortier($s->getRecherchenommortier());
            $mortiery = $em->getRepository('FeodBundle:Mortier')->recherchepaysmortier($s->getRecherchepaysmortier());
            $mortierl = $em->getRepository('FeodBundle:Mortier')->recherchecalibremortier($s->getRecherchecalibremortier());
            $mortierd = $em->getRepository('FeodBundle:Mortier')->recherchedimmortier($s->getRecherchedimmortier());
            $mortierf = $em->getRepository('FeodBundle:Mortier')->rechercheformemortier($s->getRechercheformemortier());
            
            $grenadesn = $em->getRepository('FeodBundle:Grenades')->recherchenomgrenades($s->getRecherchenomgrenades());
            $grenadesc = $em->getRepository('FeodBundle:Grenades')->recherchecouleurgrenades($s->getRecherchecouleurgrenades());
            $grenadesp = $em->getRepository('FeodBundle:Grenades')->recherchepoidsgrenades($s->getRecherchepoidsgrenades());
            $grenadesy = $em->getRepository('FeodBundle:Grenades')->recherchepaysgrenades($s->getRecherchepaysgrenades());
            $grenadesl = $em->getRepository('FeodBundle:Grenades')->recherchecalibregrenades($s->getRecherchecalibregrenades());
            
            $roquettesn = $em->getRepository('FeodBundle:Roquettes')->recherchenomroquettes($s->getRecherchenomroquettes());
            $roquettesc = $em->getRepository('FeodBundle:Roquettes')->recherchecouleurroquettes($s->getRecherchecouleurroquettes());
            $roquettesp = $em->getRepository('FeodBundle:Roquettes')->recherchepoidsroquettes($s->getRecherchepoidsroquettes());
            $roquettesy = $em->getRepository('FeodBundle:Roquettes')->recherchepaysroquettes($s->getRecherchepaysroquettes());
            $roquettesl = $em->getRepository('FeodBundle:Roquettes')->recherchecalibreroquettes($s->getRecherchecalibreroquettes());
            
            $missilesn = $em->getRepository('FeodBundle:Missiles')->recherchenommissiles($s->getRecherchenommissiles());
            $missilesc = $em->getRepository('FeodBundle:Missiles')->recherchecouleurmissiles($s->getRecherchecouleurmissiles());
            $missilesp = $em->getRepository('FeodBundle:Missiles')->recherchepoidsmissiles($s->getRecherchepoidsmissiles());
            $missilesy = $em->getRepository('FeodBundle:Missiles')->recherchepaysmissiles($s->getRecherchepaysmissiles());
            $missilesl = $em->getRepository('FeodBundle:Missiles')->recherchecalibremissiles($s->getRecherchecalibremissiles());
            
            $bombesn = $em->getRepository('FeodBundle:Bombes')->recherchenombombes($s->getRecherchenombombes());
            $bombesc = $em->getRepository('FeodBundle:Bombes')->recherchecouleurbombes($s->getRecherchecouleurbombes());
            $bombesp = $em->getRepository('FeodBundle:Bombes')->recherchepoidsbombes($s->getRecherchepoidsbombes());
            $bombesy = $em->getRepository('FeodBundle:Bombes')->recherchepaysbombes($s->getRecherchepaysbombes());
            $bombesl = $em->getRepository('FeodBundle:Bombes')->recherchecalibrebombes($s->getRecherchecalibrebombes());
            
            $sousmunn = $em->getRepository('FeodBundle:SousMunitions')->recherchenomsousmun($s->getRecherchenomsousmun());
            $sousmunc = $em->getRepository('FeodBundle:SousMunitions')->recherchecouleursousmun($s->getRecherchecouleursousmun());
            $sousmunp = $em->getRepository('FeodBundle:SousMunitions')->recherchepoidssousmun($s->getRecherchepoidssousmun());
            $sousmuny = $em->getRepository('FeodBundle:SousMunitions')->recherchepayssousmun($s->getRecherchepayssousmun());
            $sousmunl = $em->getRepository('FeodBundle:SousMunitions')->recherchecalibresousmun($s->getRecherchecalibresousmun());
            
            $minesmarn = $em->getRepository('FeodBundle:MinesMarines')->recherchenomminesmar($s->getRecherchenomminesmar());
            $minesmarc = $em->getRepository('FeodBundle:MinesMarines')->recherchecouleurminesmar($s->getRecherchecouleurminesmar());
            $minesmarp = $em->getRepository('FeodBundle:MinesMarines')->recherchepoidsminesmar($s->getRecherchepoidsminesmar());
            $minesmary = $em->getRepository('FeodBundle:MinesMarines')->recherchepaysminesmar($s->getRecherchepaysminesmar());
            $minesmarl = $em->getRepository('FeodBundle:MinesMarines')->recherchecalibreminesmar($s->getRecherchecalibreminesmar());

            $amorcagen = $em->getRepository('FeodBundle:Amorcage')->recherchenomamorcage($s->getRecherchenomamorcage());
            $amorcagec = $em->getRepository('FeodBundle:Amorcage')->recherchecouleuramorcage($s->getRecherchecouleuramorcage());
            $amorcagep = $em->getRepository('FeodBundle:Amorcage')->recherchepoidsamorcage($s->getRecherchepoidsamorcage());
            $amorcagey = $em->getRepository('FeodBundle:Amorcage')->recherchepaysamorcage($s->getRecherchepaysamorcage());
            $amorcagel = $em->getRepository('FeodBundle:Amorcage')->recherchecalibreamorcage($s->getRecherchecalibreamorcage());
        } 
        return $this->render('FeodBundle:Default:search.html.twig', array(
            'form' => $form->createView(),
            'entities'=> $artilleriep +  $artillerien + $artilleriec + $artilleriey + $artilleriel + $artilleried + $artillerief
            + $mortierp + $mortierc + $mortiern + $mortiery + $mortierl + $mortierd + $mortierf 
            + $minesn + $minesp + $minesc + $minesy + $minesl + $minesd + $minesf
            + $grenadesc + $grenadesn + $grenadesp + $grenadesl + $grenadesy
            + $roquettesc + $roquettesn + $roquettesp + $roquettesl + $roquettesy
            + $bombesc + $bombesn + $bombesp + $bombesl + $bombesy
            + $missilesc + $missilesn + $missilesp + $missilesl + $missilesy
            + $sousmunc + $sousmunn + $sousmunp + $sousmunl + $sousmuny
            + $minesmarc + $minesmarn + $minesmarp + $minesmarl + $minesmary
            + $amorcagec + $amorcagen + $amorcagep + $amorcagel + $amorcagey
        ));
    }
}
