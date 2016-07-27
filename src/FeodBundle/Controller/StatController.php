<?php

namespace FeodBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class StatController extends Controller
{
    /**
     * Controlleur qui renvoie le nombre de fiche validées total et par famille.
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $artillerie = $em->getRepository('FeodBundle:Artillerie')->countAll();

        $mines = $em->getRepository('FeodBundle:Mines')->countAll();

        $mortier = $em->getRepository('FeodBundle:Mortier')->countAll();
		
		$grenades = $em->getRepository('FeodBundle:Grenades')->countAll();
		
		$roquettes = $em->getRepository('FeodBundle:Roquettes')->countAll();
		
		$bombes = $em->getRepository('FeodBundle:Bombes')->countAll();

		$missiles = $em->getRepository('FeodBundle:Missiles')->countAll();

		$sousMunitions = $em->getRepository('FeodBundle:SousMunitions')->countAll();
                
        $amorcage = $em->getRepository('FeodBundle:Amorcage')->countAll();
		
		$explosif = $em->getRepository('FeodBundle:Explosif')->countAll();
		
		$chimique = $em->getRepository('FeodBundle:Chimique')->countAll();
		
		$minesMarines = $em->getRepository('FeodBundle:MinesMarines')->countAll();

        return $this->render('FeodBundle:Stat:index.html.twig',
            array('total' => $artillerie + $mines + $mortier + $missiles + $roquettes + $bombes + $grenades + $sousMunitions + $amorcage + $explosif + $chimique + $minesMarines,
                'artillerie' => $artillerie,
                'mines' => $mines,
                'mortier' => $mortier,
				'grenades' => $grenades,
				'roquettes' => $roquettes,
				'bombes' => $bombes,
				'missiles' => $missiles,
				'sousMunitions' => $sousMunitions,
				'minesMarines' => $minesMarines,
				'chimique' => $chimique,
                'amorcage' => $amorcage,
				'explosif' => $explosif,
				'chimique' => $chimique,
            ));
    }


        /**
     * Controlleur qui renvoie le nombre de fiche en cours de création, vérification et
     * validation.
     */
    public function statutAction()
    {
        /**$creations = array(
            "value"=>$this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countByStatut(0),
            "label"=>"création",
            "color"=>"blue"
        );

        $verifications = array(
            "value"=>$this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(1),
            "label"=>"vérification",
            "color"=>"red"
        );

        $validations = array(
            "value"=>$this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(2),
            "label"=>"validation",
            "color"=>"yellow"
        );

        $valides = array(
            "value"=>$this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(3),
            "label"=>"validée",
            "color"=>"green"
        );*/
        $creationMunition = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countByStatut(0);
		$creationAmorcage = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Amorcage')->countByStatut(0);
		$creationExplosif = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Explosif')->countByStatut(0);
		$creationChimique = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Chimique')->countByStatut(0);


        $verificationMunition = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(1);
		$verificationAmorcage = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Amorcage')->countBystatut(1);
		$verificationExplosif = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Explosif')->countBystatut(1);
		$verificationChimique = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Chimique')->countBystatut(1);

        $validationMunition = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(2);
		$validationAmorcage = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Amorcage')->countBystatut(2);
		$validationExplosif = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Explosif')->countBystatut(2);
		$validationChimique = $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Chimique')->countBystatut(2);
		
        $valideMunition= $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Munition')->countBystatut(3);
		$valideAmorcage= $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Amorcage')->countBystatut(3);
		$valideExplosif= $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Explosif')->countBystatut(3);
		$valideChimique= $this->getDoctrine()->getManager() ->getRepository('FeodBundle:Chimique')->countBystatut(3);

        return $this->render('FeodBundle:Stat:statut.html.twig',
            array(
                'valide' => $valideMunition + $valideAmorcage + $valideExplosif + $valideChimique,
                'validation' => $validationMunition + $validationAmorcage + $validationExplosif + $validationChimique,
                'verification' => $verificationMunition + $verificationAmorcage + $validationExplosif + $validationChimique,
                'creation' => $creationMunition + $creationAmorcage + $creationExplosif + $creationChimique,
            ));
        /**return new JsonResponse(
            array($creations,$verifications,$validations, $valides)
        );*/


    }

    /**
     *  retourne 10 dernieres munitions par famille.
     */
    public function lastFamAction()
    {
        $i = 10; //nb de munition par famille a retourner

        $em = $this->getDoctrine()->getManager();

        $artillerie = $em->getRepository('FeodBundle:Artillerie')->findLast($i);
 		$mortier = $em->getRepository('FeodBundle:Mortier')->findLast($i);
		$mines = $em->getRepository('FeodBundle:Mines')->findLast($i);
        $grenades = $em->getRepository('FeodBundle:Grenades')->findLast($i);
        $roquettes = $em->getRepository('FeodBundle:Roquettes')->findLast($i);
        $bombes = $em->getRepository('FeodBundle:Bombes')->findLast($i);
        $missiles = $em->getRepository('FeodBundle:Missiles')->findLast($i);
        $sousMunitions = $em->getRepository('FeodBundle:SousMunitions')->findLast($i);
        $amorcage = $em->getRepository('FeodBundle:Amorcage')->findLast($i);
		$minesMarines = $em->getRepository('FeodBundle:MinesMarines')->findLast($i);
		$chimique = $em->getRepository('FeodBundle:Chimique')->findLast($i);
		$explosif = $em->getRepository('FeodBundle:Explosif')->findLast($i);

        $results = array(
            'artillerie' => $artillerie,
            'mortier' => $mortier,
            'mines' => $mines,
			'grenades' => $grenades,
			'roquettes' => $roquettes,
			'bombes' => $bombes,
			'missiles' => $missiles,
			'sousMunitions' => $sousMunitions,
            'amorcage' => $amorcage,
			'explosif' => $explosif,
			'chimique' => $chimique,
			'minesMarines' => $minesMarines,
        );

        return $this->render('FeodBundle:Stat:lastFam.html.twig',
            array(
                'results' => $results,
            ));
    }

    /**
     *  retourne 100 dernieres munitions.
     */
    public function lastAction()
    {
        $i = 100; //nb de munition  a retourner

        $em = $this->getDoctrine()->getManager();

        $munition = $em->getRepository('FeodBundle:Munition')->findLast($i);
		$amorcage = $em->getRepository('FeodBundle:Amorcage')->findLast($i);
		$chimique = $em->getRepository('FeodBundle:Chimique')->findLast($i);
		$explosif = $em->getRepository('FeodBundle:Explosif')->findLast($i);

        return $this->render('FeodBundle:Stat:last.html.twig',
            array('results' => $munition + $amorcage + $chimique + $explosif,));
    }

    public function adminAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lastMonth = $em->getRepository('FeodBundle:Munition')->countLastMonth();

        return $this->render('FeodBundle:Stat:admin.html.twig',
            array('lastMonth' => $lastMonth));
    }
}
