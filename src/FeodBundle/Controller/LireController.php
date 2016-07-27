<?php

namespace FeodBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FeodBundle\Entity\Artillerie;
use FeodBundle\Form\ArtillerieType;
use FeodBundle\Form\Artillerie1Type;
use FeodBundle\Entity\Mines;
use FeodBundle\Form\MinesType;
use FeodBundle\Form\Mines1Type;
use FeodBundle\Entity\Mortier;
use FeodBundle\Form\MortierType;
use FeodBundle\Form\Mortier1Type;
use FeodBundle\Entity\Missiles;
use FeodBundle\Form\MissilesType;
use FeodBundle\Form\Missiles1Type;
use FeodBundle\Entity\Roquettes;
use FeodBundle\Form\RoquettesType;
use FeodBundle\Form\Roquettes1Type;
use FeodBundle\Entity\Bombes;
use FeodBundle\Form\BombesType;
use FeodBundle\Form\Bombes1Type;
use FeodBundle\Entity\Grenades;
use FeodBundle\Form\GrenadesType;
use FeodBundle\Form\Grenades1Type;
use FeodBundle\Entity\SousMunitions;
use FeodBundle\Form\SousMunitionsType;
use FeodBundle\Form\SousMunitions1Type;
use FeodBundle\Entity\Amorcage;
use FeodBundle\Form\AmorcageType;
use FeodBundle\Entity\Explosif;
use FeodBundle\Form\ExplosifType;
use FeodBundle\Entity\MinesMarines;
use FeodBundle\Form\MinesMarinesType;

/**
* Munition controller.
*
*/
class LireController extends Controller
{
    /**
    * Displays a form to edit an existing Munition entity.
    *
    */
    public function lireAction($id, $type)
    {
        $em = $this->getDoctrine()->getManager();
        switch ($type) {
            case 'sousmunitions':
                $type = 'sousMunitions';
                break;
            case 'minesmarines':
                $type = 'minesMarines';
                break;
        };


        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Munition entity.');
        }

        $editForm = $this->createEditForm($entity, $type);
        //$deleteForm = $this->createDeleteForm($id,$type);

        return $this->render('FeodBundle:'.ucfirst($type).':new1.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Munition entity.
    *
    * @param Artillerie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm($entity, $type)
    {
        switch ($type) {
            case 'artillerie':
                $form = $this->createForm(new ArtillerieType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'mines':
                $form = $this->createForm(new MinesType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'mortier':
                $form = $this->createForm(new MortierType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'missiles':
                $form = $this->createForm(new MissilesType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'roquettes':
                $form = $this->createForm(new RoquettesType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'bombes':
                $form = $this->createForm(new BombesType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'grenades':
                $form = $this->createForm(new GrenadesType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'sousMunitions':
                $form = $this->createForm(new SousMunitionsType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
			case 'sousmunitions':
                $type='sousMunitions';
                $form = $this->createForm(new SousMunitionsType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
			case 'amorcage':
                $form = $this->createForm(new AmorcageType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('amorcage_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
			case 'explosif':
                $form = $this->createForm(new ExplosifType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('explosif_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            
                        case 'minesMarines':
                $form = $this->createForm(new MinesMarinesType(), $entity,array('disabled' => true), array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            
        }

        $form->add('submit', 'submit', array('label' => 'Lire'));

        return $form;
    }


}
