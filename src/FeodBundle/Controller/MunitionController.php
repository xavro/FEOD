<?php

namespace FeodBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FeodBundle\Entity\Artillerie;
use FeodBundle\Form\ArtillerieType;
use FeodBundle\Form\ArtillerieSearchType;
use FeodBundle\Entity\Mines;
use FeodBundle\Form\MinesType;
use FeodBundle\Form\MinesSearchType;
use FeodBundle\Entity\Mortier;
use FeodBundle\Form\MortierType;
use FeodBundle\Form\MortierSearchType;
use FeodBundle\Entity\Missiles;
use FeodBundle\Form\MissilesType;
use FeodBundle\Form\MissilesSearchType;
use FeodBundle\Entity\Roquettes;
use FeodBundle\Form\RoquettesType;
use FeodBundle\Form\RoquettesSearchType;
use FeodBundle\Entity\Bombes;
use FeodBundle\Form\BombesType;
use FeodBundle\Form\BombesSearchType;
use FeodBundle\Entity\Grenades;
use FeodBundle\Form\GrenadesType;
use FeodBundle\Form\GrenadesSearchType;
use FeodBundle\Entity\SousMunitions;
use FeodBundle\Form\SousMunitionsType;
use FeodBundle\Form\SousMunitionsSearchType;
use FeodBundle\Entity\Amorcage;
use FeodBundle\Form\AmorcageType;
use FeodBundle\Form\AmorcageSearchType;
use FeodBundle\Entity\MinesMarines;
use FeodBundle\Form\MinesMarinesType;
use FeodBundle\Form\MinesMarinesSearchType;




/**
* Munition controller.
*
*/
class MunitionController extends Controller
{
    /**
    * Liste les Munitions validées
    *
    */
    public function indexAction($type)
    {
        $em = $this->getDoctrine()->getManager();

        //On recherche toute les fiches validées
        $entities = $em->getRepository('FeodBundle:'.ucfirst($type))
        ->findByStatut(3);

        return $this->redirect($this->generateUrl('munition_tampon', array(
            'statut' => 3,
            'type'=>$type
            )));
    }

    /**
    * Liste les Munitions suivant leur statut
    * 0 : modification ou création
    * 1 : attente de vérification
    * 2 : attente de validation
    * 3 : validée
    *
    */
    public function tamponAction($statut, $type)
    {
        $em = $this->getDoctrine()->getManager();

        $count=array(
            'artillerie' => $em->getRepository('FeodBundle:Artillerie')->countByStatut($statut),
            'mines' => $em->getRepository('FeodBundle:Mines')->countByStatut($statut),
            'mortier' => $em->getRepository('FeodBundle:Mortier')->countByStatut($statut),
            'missiles' => $em->getRepository('FeodBundle:Missiles')->countByStatut($statut),
            'roquettes' => $em->getRepository('FeodBundle:Roquettes')->countByStatut($statut),
            'bombes' => $em->getRepository('FeodBundle:Bombes')->countByStatut($statut),
            'grenades' => $em->getRepository('FeodBundle:Grenades')->countByStatut($statut),
            'sousMunitions' => $em->getRepository('FeodBundle:SousMunitions')->countByStatut($statut),
            'chimique' => $em->getRepository('FeodBundle:Chimique')->countByStatut($statut),
			'munition' => $em->getRepository('FeodBundle:Munition')->countByStatut($statut),
			'amorcage' => $em->getRepository('FeodBundle:Amorcage')->countByStatut($statut),
            'explosif' => $em->getRepository('FeodBundle:Explosif')->countByStatut($statut),
            'minesMarines' => $em->getRepository('FeodBundle:MinesMarines')->countByStatut($statut),
        );

        $entities = $em->getRepository('FeodBundle:Munition')
        ->findByStatutAndType($statut, $type);

        return $this->render('FeodBundle:Munition:tampon.html.twig', array(
            'entities' => $entities,
            'statut' => $statut,
            'type'=>$type,
            'count'=>$count
        ));
    }

    /*
    *
    * permet d'incrémenter le statut d'une Munition
    *
    */

    public function suiteAction($id, $type)
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

        switch ($entity->getStatut()) {
            case 0:
                if ($this->get('security.context')->isGranted('ROLE_CLIENT')) {
                    $entity->setStatut($entity->getStatut()+1);
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        "Vous n'avez pas les droits pour effectuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }
                break;

            case 1:
                if ($this->get('security.context')->isGranted('ROLE_EXPERT')) {
                    $entity->setStatut($entity->getStatut()+1);
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        "Vous n'avez pas les droits pour effectuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }
                break;

            case 2:
                if ($this->get('security.context')->isGranted('ROLE_VALIDATEUR')) {
                    $ancien = $em->getRepository('FeodBundle:'.ucfirst($type))
                    ->findByMunitionId($entity->getMunitionId());

                    //On supprime toutes les anciennes entitées
                    foreach ($ancien as $a) {
                        if ($a->getId() !== $entity->getId()) {
                            $em->remove($a);
                        }
                    }
                    $entity->setValidateur($this->getUser());
                    $entity->setStatut($entity->getStatut()+1);
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        "Vous n'avez pas les droits pour effectuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }
                break;

            case 3:
                $request->getSession()->getFlashBag()->add(
                    'error',
                    'Cette fiche est déjà validée'
                );
                return $this->redirect($this->getRequest()->headers->get('referer'));
                break;

        }

        $em->flush();

        $message = \Swift_Message::newInstance()
        ->setSubject('Demmande')
        ->setFrom('voctro@gmx.fr')
        ->setTo('voctro@gmx.fr')
        ->setBody($this->renderView('FeodBundle:Mail:email.txt.twig', array(
            'entity'=>$entity
            )));

        $this->get('mailer')->send($message);

        return $this->redirect($this->getRequest()->headers->get('referer'));
    }


    /*
    *
    * permet de refuser un demande de suite dans le statut le statut d'une Munition
    *
    */

    public function refusAction($id, $type)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Munition entity.');
        }

        switch ($entity->getStatut()) {
            case 0:
                $request->getSession()->getFlashBag()->add('error', "Cette action est impossible");
                return $this->redirect($this->getRequest()->headers->get('referer'));
                break;

            case 1:
                if ($this->get('security.context')->isGranted('ROLE_EXPERT')) {
                    $entity->setStatut($entity->getStatut()-1);
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        "Vous n'avez pas les droits pour effectuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }
                break;

            case 2:
                if ($this->get('security.context')->isGranted('ROLE_VALIDATEUR')) {
                    $entity->setStatut($entity->getStatut()-1);
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        "Vous n'avez pas les droits pour effectuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }
                break;

            case 3:
                $request->getSession()->getFlashBag()->add(
                    'error',
                    'Cette fiche est déjà validée'
                );
                break;


        }

        return $this->redirect($this->getRequest()->headers->get('referer'));
    }

    /**
    * Creates a new Munition entity.
    *
    */
    public function createAction(Request $request, $type)
    {
        switch ($type) {
                        case 'artillerie':
                                $entity = new Artillerie();
                                break;
                        case 'mines':
                                $entity = new Mines();
                                break;
                        case 'mortier':
                                $entity = new Mortier();
                                break;
			case "missiles":
				$entity = new Missiles();
				break;
			case "roquettes":
				$entity = new Roquettes();
				break;
			case "bombes":
				$entity = new Bombes();
				break;
			case "grenades":
				$entity = new Grenades();
				break;
			case "sousMunitions":
			case "sousmunitions":
				$entity = new SousMunitions();
				break;
                        case "minesMarines":
                        case "minesmarines":
				$entity = new MinesMarines();
				break;
        }

        $entity->setCreateurFiche($this->getUser());
        $form = $this->createCreateForm($entity, $type);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $entity->setMunitionId($entity->getId());
            $em->flush();

            $request->getSession()->getFlashBag()->add(
                'notice',
                "Fiche ajoutée"
            );
            return $this->redirect($this->generateUrl('munition_tampon', array(
                'statut' => 0,
                'type'=>$type
                )));
        }

        return $this->render('FeodBundle:'.ucfirst($type).':new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Munition entity.
    *
    * @param Artillerie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm($entity, $type)
    {
        switch ($type) {
            case 'artillerie':
                $form = $this->createForm(new ArtillerieType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'mines':
                $form = $this->createForm(new MinesType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'mortier':
                $form = $this->createForm(new MortierType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'missiles':
                $form = $this->createForm(new MissilesType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;	
            case 'roquettes':
                $form = $this->createForm(new RoquettesType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;	
            case 'bombes':
                $form = $this->createForm(new BombesType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;	
            case 'grenades':
                $form = $this->createForm(new GrenadesType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'sousMunitions':
            case 'sousmunitions':
                $form = $this->createForm(new SousMunitionsType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            
            case 'minesMarines':
            case 'minesmarines':
                $form = $this->createForm(new MinesMarinesType(), $entity, array(
                    'action' => $this->generateUrl('munition_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
        }

        $form->add('submit', 'submit', array('label' => 'Créer'));
        $form->add('reset', 'reset', array('label' => 'Annuler'));

        return $form;
    }

    /**
    * Displays a form to create a new Munition entity.
    *
    */
    public function newAction($type)
    {
        switch ($type) {
                        case 'artillerie':
                                $entity = new Artillerie();
                                break;
                        case 'mines':
                                $entity = new Mines();
                                break;
                        case 'mortier':
                                $entity = new Mortier();
                                break;
			case "missiles":
				$entity = new Missiles();
				break;
			case "roquettes":
				$entity = new Roquettes();
				break;
			case "bombes":
				$entity = new Bombes();
				break;
			case "grenades":
				$entity = new Grenades();
				break;
			case "sousMunitions":
			case "sousmunitions":
				$entity = new SousMunitions();
				break;
                        case "minesMarines":
                        case "minesmarines":
				$entity = new MinesMarines();
				break;
        }
        $entity->setCreateurFiche($this->getUser());
        $form   = $this->createCreateForm($entity, $type);

        return $this->render('FeodBundle:'.ucfirst($type).':new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Displays a form to edit an existing Munition entity.
    *
    */
    public function editAction($id, $type)
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

        return $this->render('FeodBundle:'.ucfirst($type).':new.html.twig', array(
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
                $form = $this->createForm(new ArtillerieType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'mines':
                $form = $this->createForm(new MinesType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'mortier':
                $form = $this->createForm(new MortierType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'missiles':
                $form = $this->createForm(new MissilesType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'roquettes':
                $form = $this->createForm(new RoquettesType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'bombes':
                $form = $this->createForm(new BombesType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'grenades':
                $form = $this->createForm(new GrenadesType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'sousmunitions':
            case 'sousMunitions':
                $form = $this->createForm(new SousMunitionsType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
            case 'minesmarines':
            case 'minesMarines':
                $form = $this->createForm(new MinesMarinesType(), $entity, array(
                    'action' => $this->generateUrl('munition_update', array(
                        'id' => $entity->getId(),
                        'type' => $type)),
                    'method' => 'PUT',
                ));
                break;
        }

        $form->add('submit', 'submit', array('label' => 'Valider'));
        $form->add('reset', 'reset', array('label' => 'Annuler'));

        return $form;
    }
    /**
    * Edits an existing Munition entity.
    *
    */
    public function updateAction(Request $request, $id, $type)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Munition entity.');
        }

        switch ($entity->getStatut()) {
            //modification ou création
            case 0:
                if ($this->get('security.context')->isGranted('ROLE_CLIENT')) {
                    return $this->makeUpdate($request, $id, $entity, $type);
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        "Vous n'avez pas les droits pour effectuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }
                break;

            //attente de vérification
            case 1:
                if ($this->get('security.context')->isGranted('ROLE_EXPERT')) {
                    return $this->makeUpdate($request, $id, $entity, $type);
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        "Vous n'avez pas les droits pour effectuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }
                break;

            //attente de validation
            case 2:
                if ($this->get('security.context')->isGranted('ROLE_EXPERT')) {
                    return $this->makeUpdate($request, $id, $entity, $type);
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        //'Cette fiche est en cours de validation elle ne peux pas etre modifiée'
                        "Vous n'avez pas les droits pour effecttuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }

                break;

            //validée
            case 3:
                if ($this->get('security.context')->isGranted('ROLE_CLIENT')) {
                    $count = $em->getRepository('FeodBundle:'.ucfirst($type))
                        ->CountByMunitionId($entity->getMunitionId());
                    if ($count > 1) {
                        $request->getSession()->getFlashBag()->add(
                            'error',
                            "Cette fiche est deja en cours de modification vous
                            ne pouvez pas la modifier"
                        );
                        return $this->redirect($this->getRequest()->headers->get('referer'));
                    } else {
                        $clone = clone $entity;
                        $clone->setStatut(3);
                        $entity->setStatut(0);
                        $entity->setModificateurFiche($this->getUser());
                        $em->persist($clone);
                        $em->flush();
                        return $this->makeUpdate($request, $id, $entity, $type);
                    }
                } else {
                    $request->getSession()->getFlashBag()->add(
                        'error',
                        "Vous n'avez pas les droits pour effectuer cette action"
                    );
                    return $this->redirect($this->getRequest()->headers->get('referer'));
                }
                break;
        }
    }

    public function makeUpdate(Request $request, $id, $entity, $type)
    {
        $em = $this->getDoctrine()->getManager();

        $deleteForm = $this->createDeleteForm($id, $type);
        $editForm = $this->createEditForm($entity, $type);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add(
                'notice',
                "Fiche mise à jour"
            );

            return $this->redirect($this->generateUrl('munition_edit', array(
                'id' => $id,
                'type' => $type
                )));
        }

        return $this->render('FeodBundle:'.ucfirst($type).':new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'error' => $editForm->getErrorsAsString()
        ));
    }


    /**
    * Deletes a Munition entity.
    *
    */
    public function deleteAction(Request $request, $id, $type)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Munition entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('munition', array('type'=>$type)));
    }

    /**
    * Creates a form to delete a Munition entity by id.
    *
    * @param mixed $id The entity id
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm($id, $type)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('munition_delete', array(
            'id' => $id,
            'type' => $type)))
        ->setMethod('DELETE')
        ->add('submit', 'submit', array('label' => 'Delete'))
        ->getForm()
        ;
    }
    

    public function searchAction(Request $request, $type)
    {
        $a = new \FeodBundle\Entity\Munition();
        $a->prepareSearch();
        //$s = new \Doctrine\Common\Collections\ArrayCollection();

        $form = $this->get('form.factory')
            ->createBuilder(new \FeodBundle\Form\ArtillerieSearchType(), $a)->getForm();
        $form->add('submit', 'submit', array('label' => 'Rechercher'));

        $results = null;

        if ($form->handleRequest($request)->isValid()) {
            //$em = $this->getDoctrine()->getManager();

            $data = $a->getNotNullData();

            //$entity = $em->getRepository('FeodBundle:Munition')->searchByAll($data,$type);

            $fm = $this->get('padam87_search.filter.manager');
            
            $filter = new \Padam87\SearchBundle\Filter\Filter($form->getdata(), 'FeodBundle:'.ucfirst($type), $type);

            $qb = $fm->createQueryBuilder($filter);
            $results = $qb->getQuery()->getResult();

            //$rep = $this->getDoctrine()->getManager()
            //    ->getRepository('FeodBundle:Munition');

            //$results = $rep->searchByNomAndType($s->getExpression(),$s->getType());

            return $this->render('FeodBundle:Munition:search.html.twig', array(
                'results'=>$results,
                'data'=>$data,
            ));
        }

        return $this->render('FeodBundle:'.ucfirst($type).':new.html.twig', array(
            'form' => $form->createView(),
            'results'=>$results,
        ));
    }




    //recherche multicritère

    public function rechercheAction($type)
    {
        switch ($type) {
            case 'artillerie':
                $entity = new Artillerie();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
            case 'mines':
                $entity = new Mines();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
            case 'mortier':
                $entity = new Mortier();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
            case "missiles":
                $entity = new Missiles();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
            case "roquettes":
                $entity = new Roquettes();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
            case "bombes":
                $entity = new Bombes();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
            case "grenades":
                $entity = new Grenades();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
            case "sousMunitions":
            case "sousmunitions":
                $entity = new SousMunitions();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
            case "minesMarines":
            case 'minesmarines':
                $entity = new MinesMarines();
                $entity->setCreateurFiche($this->getUser());
                $form   = $this->createCreateFormRecherche($entity, $type);
                break;
        }
        

        return $this->render('FeodBundle:'.ucfirst($type).':new2.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    private function createCreateFormRecherche($entity, $type)
    {
        switch ($type) {
            case 'artillerie':
                $form = $this->createForm(new ArtillerieSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'mines':
                $form = $this->createForm(new MinesSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'mortier':
                $form = $this->createForm(new MortierSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'missiles':
                $form = $this->createForm(new MissilesSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'roquettes':
                $form = $this->createForm(new RoquettesSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'bombes':
                $form = $this->createForm(new BombesSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'grenades':
                $form = $this->createForm(new GrenadesSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            case 'sousMunitions':
            case 'sousmunitions':
                $form = $this->createForm(new SousMunitionsSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
            
            case 'minesMarines':
            case 'minesmarines':
                $form = $this->createForm(new MinesMarinesSearchType(), $entity, array(
                    'action' => $this->generateUrl('munition_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
        }
// va falloir changer !
        $form->add('submit', 'submit', array('label' => 'Recherche la munition'));

        return $form;
    }

    /**
     * @param Request $request
     * @param $type
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createrechercheAction(Request $request, $type)
    {
        
    //ARTILLERIE        
        switch ($type) {
            case 'artillerie':
                $entity = new Artillerie();
                $entity->setCreateurFiche($this->getUser());
                $form = $this->createCreateForm($entity, $type);
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();
                

        //On recherche toute les fiches validées de type machin
                $entities = $em->getRepository('FeodBundle:Munition')
                ->searchByNomAndType(null, $type);

                $resultats=null;

       if ($form->isValid()) {
            $data=$form->getData();

            for ($i=1; $i<count($entities);$i++ ) {
                //commandes
               $value=$entities[$i];

                $exp_nomine=($value->getNomine()==$data->getNomine() or $data->getNomine()==null);
                $exp_denominationOTAN=($value->getDenominationOTAN()==$data->getDenominationOTAN()or $data->getDenominationOTAN()==null );
                $exp_pays=false;
                // pour le pays d'origine
                if(((count($data->getPays())==0))or ((count($value->getPays())==0))){
                    $exp_pays=true;
                }
                else {
                    foreach ($value->getPays() as $pays) {
                        foreach ($data->getPays() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_pays = true;
                            }
                        }
                    }
                }
                
                $exp_typeObus=false;
                // pour le type Obus
                if(((count($data->getTypeObus())==0))or ((count($value->getTypeObus())==0))){
                    $exp_typeObus=true;
                }
                else {
                    foreach ($value->getTypeObus() as $obus) {
                        foreach ($data->getTypeObus() as $obus1) {
                            if ($obus->getTypeObus() == $obus1->getTypeObus()) {
                                $exp_typeObus = true;
                            }
                        }
                    }
                }

                //pour le paysAcquereur
                $exp_paysAcquereur=false;
                if ((count($data->getPaysAcquereur())==0)or (count($value->getPaysAcquereur())==0)){
                    $exp_paysAcquereur=true;
                }
                else{
                foreach ( $value->getPaysAcquereur() as $pays) {
                foreach($data->getPaysAcquereur() as $pays1){
                    if($pays->getPays() ==$pays1->getPays())
                    {$exp_paysAcquereur =  true;}
                    } }}

                //pour le retrouvé en
                $exp_retrouveEn=false;
                if(((count($data->getRetrouveEn())==0))or ((count($value->getRetrouveEn())==0))){
                    $exp_retrouveEn=true;
                }
                else {
                    foreach ($value->getRetrouveEn() as $pays) {
                        foreach ($data->getRetrouveEn() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_retrouveEn = true;
                            }
                        }
                    }
                }
                // pour l'artillerie spécifiquement : généralités
                $exp_alias=(($value->getAlias()==($data->getAlias()))or  ($data->getAlias())==null);
                $exp_calibre=(($value->getCalibre())==($data->getCalibre())or  ($data->getCalibre())==null);
                $exp_calibrereel=(($value->getCalibreReel())==($data->getCalibreReel())or  ($data->getCalibreReel())==null);

                // si le champs est null c'est un possible candidat !
                if (($value->getNatureEnveloppe()==null) or $data->getNatureEnveloppe()==null){
                    $exp_natureEnveloppe=true;
                }
                else{
                    $exp_natureEnveloppe=((($value->getNatureEnveloppe()->getEnveloppe())==$data->getNatureEnveloppe()->getEnveloppe()));
                }

                $exp_diametretraceur=(($value->getDiametreTraceur())==($data->getDiametreTraceur())or  ($data->getDiametreTraceur())==null);
                $exp_longueurtraceur=(($value->getLongTraceur())==($data->getLongTraceur())or  ($data->getLongTraceur())==null);

                if (($value->getAutoDestruction()==null) or $data->getAutoDestruction()==null){
                    $exp_Autodestruction=true;
                }
                else{
                    $exp_Autodestruction=(($value->getAutoDestruction()->getAutoDestruction())==($data->getAutoDestruction()->getAutoDestruction()));
                }

                if (($value->getTypeCeinture()==null) or $data->getTypeCeinture()==null){
                    $exp_typeCeinture=true;
                }
                else{
                    $exp_typeCeinture=(($value->getTypeCeinture()->getTypeCeinture())==($data->getTypeCeinture()->getTypeCeinture()));
                }

                if (($value->getMatiereCeinture()==null) or $data->getMatiereCeinture()==null){
                    $exp_matiereCeinture=true;
                }
                else{$exp_matiereCeinture=((($value->getMatiereCeinture()->getMatiereCeinture())==($data->getMatiereCeinture()->getMatiereCeinture())));
                }

                $exp_nombreCeinture=((($value->getNombreCeintures())==($data->getNombreCeintures())or  ($data->getNombreCeintures())==null));
                $exp_distanceCeinture=((($value->getDistanceCeinture())==($data->getDistanceCeinture())or  ($data->getDistanceCeinture())==null));
                $exp_largeurCeinture=((($value->getLargeurCeinture())==($data->getLargeurCeinture())or  ($data->getLargeurCeinture())==null));
                $exp_largeurCeinture1=((($value->getLargeurCeinture1())==($data->getLargeurCeinture1())or  ($data->getLargeurCeinture1())==null));
                $exp_largeurCeinture2=((($value->getLargeurCeinture2())==($data->getLargeurCeinture2())or  ($data->getLargeurCeinture2())==null));
                $exp_distCeintCulot=((($value->getDistCeintCulot())==($data->getDistCeintCulot())or  ($data->getDistCeintCulot())==null));
                $exp_CopieExistante=((($value->getCopieExistante())==($data->getCopieExistante())or  ($data->getCopieExistante())==null));

                // pour l'artillerie spécifiquement : chargement
                // pour la naturechargemili
                $exp_NatureChargeMili =  false;
                if(((count($data->getNatureChargeMili())==0))or ((count($value->getNatureChargeMili())==0))){
                    $exp_NatureChargeMili=true;
                }
                else {
                foreach ( $value->getNatureChargeMili() as $charge) {
                    foreach($data->getNatureChargeMili() as $charge1){
                        if($charge->getNatureChargeMili() ==$charge1->getNatureChargeMili())
                        {$exp_NatureChargeMili =  true ;}
                    } }}



                $exp_PoidsChargeMili=((($value->getPoidsChargeMili())==($data->getPoidsChargeMili())or  ($data->getPoidsChargeMili())==null));
                $exp_PoidsChargeCalcule=((($value->getPoidsChargeCalcule())==($data->getPoidsChargeCalcule())or  ($data->getPoidsChargeCalcule())==null));

                $exp_NatureChargeDispersion =  false;
                if(((count($data->getNatureChargeDispersion())==0))or ((count($value->getNatureChargeDispersion())==0))){
                    $exp_NatureChargeDispersion=true;
                }
                else {
                foreach ( $value->getNatureChargeDispersion() as $charge) {
                    foreach($data->getNatureChargeDispersion() as $charge1){
                        if($charge->getNatureChargeDispersion() ==$charge1->getNatureChargeDispersion())
                        {$exp_NatureChargeDispersion =  true ;}
                    } }}


                $exp_PoidsChargeDispersion=((($value->getPoidsChargeDispersion())==($data->getPoidsChargeDispersion())or  ($data->getPoidsChargeDispersion())==null));

                $exp_EffetChargement =  false;
                if(((count($data->getEffetChargement())==0))or ((count($value->getEffetChargement())==0))){
                    $exp_EffetChargement=true;
                }
                else {

                    foreach ( $value->getEffetChargement() as $charge) {
                    foreach($data->getEffetChargement() as $charge1){
                        if($charge->getEffetChargement() ==$charge1->getEffetChargement())
                        {$exp_EffetChargement =  true ;}
                    } }}

            // pour l'artillerie spécifiquement : aspectDimensions
                 $exp_lgTotavecFusee=((($value->getlgTotavecFusee())==($data->getlgTotavecFusee())or  ($data->getlgTotavecFusee())==null));
                $exp_lgTotsansFusee=((($value->getlgTotsansFusee())==($data->getlgTotsansFusee())or  ($data->getlgTotsansFusee())==null));
                $exp_poids=((($value->getPoids())==($data->getPoids())or  ($data->getPoids())==null));

                if (($value->getFormeOgive()==null) or $data->getFormeOgive()==null){
                    $exp_FormeOgive=true;
                }
                else{
                    $exp_FormeOgive=(($value->getFormeOgive()->getFormeOgive())==($data->getFormeOgive()->getFormeOgive()));
                }

                 $exp_StandOFF=((($value->getStandOFF())==($data->getStandOFF())or  ($data->getStandOFF())==null));
                 $exp_BagueCalage=((($value->getBagueCalage())==($data->getBagueCalage())or  ($data->getBagueCalage())==null));
                 $exp_BagueDeRaccordement=((($value->getBagueDeRaccordement())==($data->getBagueDeRaccordement())or  ($data->getBagueDeRaccordement())==null));
                 $exp_PuitsDeFusee=((($value->getPuitsDeFusee())==($data->getPuitsDeFusee())or  ($data->getPuitsDeFusee())==null));
                 $exp_DiametreDelOeil=((($value->getDiametreDelOeil())==($data->getDiametreDelOeil())or  ($data->getDiametreDelOeil())==null));

                if (($value->getTypeGaine()==null) or $data->getTypeGaine()==null){
                    $exp_TypeGaine=true;
                }
                else{
                    $exp_TypeGaine=((($value->getTypeGaine()->getTypeGaine())==($data->getTypeGaine()->getTypeGaine())));
                }

                if (($value->getFormeDeGaine()==null) or $data->getFormeDeGaine()==null){
                    $exp_FormeDeGaine=true;
                }
                else{
                    $exp_FormeDeGaine=((($value->getFormeDeGaine()->getFormeDeGaine())==($data->getFormeDeGaine()->getFormeDeGaine())));
                }

                $exp_HauteurDeLaGaine=((($value->getHauteurDeLaGaine())==($data->getHauteurDeLaGaine())or  ($data->getHauteurDeLaGaine())==null));
               $exp_DiametreExterieurDeLaGaine1=((($value->getDiametreExterieurDeLaGaine1())==($data->getDiametreExterieurDeLaGaine1())or  ($data->getDiametreExterieurDeLaGaine1())==null));
               $exp_DiametreExterieurDeLaGaine2=((($value->getDiametreExterieurDeLaGaine2())==($data->getDiametreExterieurDeLaGaine2())or  ($data->getDiametreExterieurDeLaGaine2())==null));
                if (($value->getFormeCorps()==null) or $data->getFormeCorps()==null){
                    $exp_FormeCorps=true;
                }
                else{$exp_FormeCorps=((($value->getFormeCorps()->getFormeCorps())==($data->getFormeCorps()->getFormeCorps())));
                }
                $exp_NombreDeRenflement=((($value->getNombreDeRenflement())==($data->getNombreDeRenflement())or  ($data->getNombreDeRenflement())==null));

                if (($value->getTypeDeRenflement1()==null) or $data->getTypeDeRenflement1()==null){
                    $exp_TypeDeRenflement1=true;
                }
                else{$exp_TypeDeRenflement1=((($value->getTypeDeRenflement1()->getTypeDeRenflement())==($data->getTypeDeRenflement1()->getTypeDeRenflement())));
                }
                if (($value->getPositionDeRenflement1()==null) or $data->getPositionDeRenflement1()==null){
                    $exp_PositionDeRenflement1=true;
                }
                else{$exp_PositionDeRenflement1=(($value->getPositionDeRenflement1()->getPositionDeRenflement())==($data->getPositionDeRenflement1()->getPositionDeRenflement()));
                }
                $exp_LargeurRenflement1=((($value->getLargeurRenflement1())==($data->getLargeurRenflement1())or  ($data->getLargeurRenflement1())==null));


                if (($value->getTypeDeRenflement2()==null) or $data->getTypeDeRenflement2()==null){
                    $exp_TypeDeRenflement2=true;
                }
                else{$exp_TypeDeRenflement2=((($value->getTypeDeRenflement2()->getTypeDeRenflement())==($data->getTypeDeRenflement2()->getTypeDeRenflement())));
                }
                if (($value->getPositionDeRenflement2()==null)or $data->getPositionDeRenflement2()==null){
                    $exp_PositionDeRenflement2=true;
                }
                else{$exp_PositionDeRenflement2=(($value->getPositionDeRenflement2()->getPositionDeRenflement())==($data->getPositionDeRenflement2()->getPositionDeRenflement()));
                }
                $exp_LargeurRenflement2=((($value->getLargeurRenflement2())==($data->getLargeurRenflement2())or  ($data->getLargeurRenflement2())==null));


                if (($value->getTypeSabot()==null) or $data->getTypeSabot()==null){
                    $exp_TypeSabot=true;
                }
                else{$exp_TypeSabot=((($value->getTypeSabot()->getTypeSabot())==($data->getTypeSabot()->getTypeSabot())));}
                $exp_LongueurSabot=((($value->getLongueurSabot())==($data->getLongueurSabot())or  ($data->getLongueurSabot())==null));

                if (($value->getFormeCulot()==null) or $data->getFormeCulot()==null){
                    $exp_FormeCulot=true;
                }
                else{$exp_FormeCulot=((($value->getFormeCulot()->getFormeCulot())==($data->getFormeCulot()->getFormeCulot())));}
                $exp_PuitCulot=((($value->getPuitsCulot())==($data->getPuitsCulot())or  ($data->getPuitsCulot())==null));
                $exp_DiametrePuitsCulot=((($value->getDiametrePuitsCulot())==($data->getDiametrePuitsCulot())or  ($data->getDiametrePuitsCulot())==null));

                if (($value->getTypePlaque()==null) or $data->getTypePlaque()==null){
                    $exp_TypePlaque=true;
                }
                else{$exp_TypePlaque=((($value->getTypePlaque()->getTypePlaque())==($data->getTypePlaque()->getTypePlaque())));}

                $exp_NbGorges=((($value->getNbGorges())==($data->getNbGorges())or  ($data->getNbGorges())==null));
                $exp_DistCulotGorge=((($value->getDistCulotGorge())==($data->getDistCulotGorge())or  ($data->getDistCulotGorge())==null));
                $exp_DiametreJupe=((($value->getDiametreJupe())==($data->getDiametreJupe())or  ($data->getDiametreJupe())==null));
                $exp_LongueurJupe=((($value->getLongueurJupe())==($data->getLongueurJupe())or  ($data->getLongueurJupe())==null));

                if (($value->getTypeEmpennage()==null)or $data->getTypeEmpennage()==null){
                    $exp_TypeEmpennage=true;
                }
                else{$exp_TypeEmpennage=((($value->getTypeEmpennage()->getTypeEmpennage())==($data->getTypeEmpennage()->getTypeEmpennage())));}
                $exp_LongueurJupe=((($value->getLongEmpennage())==($data->getLongEmpennage())or  ($data->getLongEmpennage())==null));
                $exp_NbAilettes=((($value->getNbAilettes())==($data->getNbAilettes())or  ($data->getNbAilettes())==null));
                if (($value->getFormeAilettes()==null) or $data->getFormeAilettes()==null){
                    $exp_FormeAilettes=true;
                }
                else{$exp_FormeAilettes=((($value->getFormeAilettes()->getFormeAilettes())==($data->getFormeAilettes()->getFormeAilettes())));}
                $exp_LongAilette=((($value->getLongAilette())==($data->getLongAilette())or  ($data->getLongAilette())==null));
                $exp_LargAilette=((($value->getLargAilette())==($data->getLargAilette())or  ($data->getLargAilette())==null));


                $exp_Orifices=((($value->getOrifices())==($data->getOrifices())or  ($data->getOrifices())==null));

                $exp_PositionOrifice =  false;
                if(((count($data->getPositionOrifice())==0))or ((count($value->getPositionOrifice())==0))){
                    $exp_PositionOrifice=true;
                }
                else {
                    foreach ( $value->getPositionOrifice() as $charge) {
                    foreach($data->getPositionOrifice() as $charge1){
                        if($charge->getPositionOrifice() ==$charge1->getPositionOrifice())
                        {$exp_PositionOrifice =  true ;}
                    } }}

                if (($value->getObturation()==null) or $data->getObturation()==null){
                    $exp_Obturation=true;
                }
                else{$exp_Obturation=((($value->getObturation()->getObturation())==($data->getObturation()->getObturation())));
                }

                if (($value->getTypeElemAeroAV()==null)or $data->getTypeElemAeroAV()==null){
                    $exp_TypeElemAeroAV=true;
                }
                else{
                    $exp_TypeElemAeroAV=((($value->getTypeElemAeroAV()->getTypeElemAeroAV())==($data->getTypeElemAeroAV()->getTypeElemAeroAV())));
                }
                if (($value->getTypeElemAeroAR()==null) or $data->getTypeElemAeroAR()==null){
                    $exp_TypeElemAeroAR=true;
                }
                else{
                    $exp_TypeElemAeroAR=((($value->getTypeElemAeroAR()->getTypeElemAeroAR())==($data->getTypeElemAeroAR()->getTypeElemAeroAR())));
                }

                if (($value->getFormeElemAeroAV()==null) or $data->getFormeElemAeroAV()==null){
                    $exp_FormeElemAeroAV=true;
                }
                else{
                    $exp_FormeElemAeroAV=((($value->getFormeElemAeroAV()->getFormeElemAeroAV())==($data->getFormeElemAeroAV()->getFormeElemAeroAV())));
                }
                if (($value->getFormeElemAeroAR()==null) or $data->getFormeElemAeroAR()==null){
                    $exp_FormeElemAeroAR=true;
                }
                else{
                    $exp_FormeElemAeroAR=((($value->getFormeElemAeroAR()->getFormeElemAeroAR())==($data->getFormeElemAeroAR()->getFormeElemAeroAR())));
                }


                if (($value->getPositionElemAeroAV()==null) or $data->getPositionElemAeroAV()==null){
                    $exp_PositionElemAeroAV=true;
                }
                else{
                    $exp_PositionElemAeroAV=((($value->getPositionElemAeroAV()->getPositionElemAeroAV())==($data->getPositionElemAeroAV()->getPositionElemAeroAV())));
                }
                if (($value->getPositionElemAeroAR()==null) or $data->getPositionElemAeroAR()==null){
                    $exp_PositionElemAeroAR=true;
                }
                else{
                    $exp_PositionElemAeroAR=((($value->getPositionElemAeroAR()->getPositionElemAeroAR())==($data->getPositionElemAeroAR()->getPositionElemAeroAR())));
                }

                  // pour l'artillerie spécifiquement : marquage
                if (($value->getCouleurOgive()==null) or $data->getCouleurOgive()==null){
                    $exp_CouleurOgive=true;
                }
                else{
                    $exp_CouleurOgive=((($value->getCouleurOgive()->getCouleurFond())==($data->getCouleurOgive()->getCouleurFond())));
                }

                $exp_SymboleOgive =  false;
                    if(((count($data->getSymboleOgive())==0))or ((count($value->getSymboleOgive())==0))){
                        $exp_SymboleOgive=true;
                    }
                    else {
                foreach ( $value->getSymboleOgive() as $charge) {
                    foreach($data->getSymboleOgive() as $charge1){
                        if($charge->getSymboleOgive() ==$charge1->getSymboleOgive())
                        {$exp_SymboleOgive =  true ;}
                    } }}



                if (($value->getTypeInscOgive()==null) or $data->getTypeInscOgive()==null){
                    $exp_TypeInscOgive=true;
                }
                else{
                    $exp_TypeInscOgive=((($value->getTypeInscOgive()->getTypeInscOgive())==($data->getTypeInscOgive()->getTypeMarquage())));

                }
                $exp_MarquageFroidOgive=((($value->getMarquageFroidOgive())==($data->getMarquageFroidOgive())or  ($data->getMarquageFroidOgive())==null));
                $exp_NbBandesOgive=((($value->getNbBandesOgive())==($data->getNbBandesOgive()))or  ($data->getNbBandesOgive())==null);

                if (($value->getCouleurBandeOgive1()==null) or $data->getCouleurBandeOgive1()==null){
                    $exp_CouleurBandeOgive1=true;
                }
                else{
                    $exp_CouleurBandeOgive1=((($value->getCouleurBandeOgive1()->getCouleurFond())==($data->getCouleurBandeOgive1()->getCouleurFond())));

                }


                if (($value->getCouleurBandeOgive2()==null) or $data->getCouleurBandeOgive2()==null){
                    $exp_CouleurBandeOgive2=true;
                }
                else{
                    $exp_CouleurBandeOgive2=((($value->getCouleurBandeOgive2()->getCouleurFond())==($data->getCouleurBandeOgive2()->getCouleurFond())));

                }
                if (($value->getCouleurBandeOgive3()==null) or $data->getCouleurBandeOgive3()==null){
                    $exp_CouleurBandeOgive3=true;
                }
                else{
                    $exp_CouleurBandeOgive3=((($value->getCouleurBandeOgive3()->getCouleurFond())==($data->getCouleurBandeOgive3()->getCouleurFond())));

                }
                if (($value->getCouleurBandeOgive4()==null) or $data->getCouleurBandeOgive4()==null){
                    $exp_CouleurBandeOgive4=true;
                }
                else{
                    $exp_CouleurBandeOgive4=((($value->getCouleurBandeOgive4()->getCouleurFond())==($data->getCouleurBandeOgive4()->getCouleurFond())));

                }

                if (($value->getCouleurCorps()==null) or $data->getCouleurCorps()==null){
                    $exp_CouleurCorps=true;
                }
                else{
                    $exp_CouleurCorps=((($value->getCouleurCorps()->getCouleurFond())==($data->getCouleurCorps()->getCouleurFond())));
                }

                    $exp_SymboleCorps =  false;
                    if(((count($data->getSymboleCorps())==0))or ((count($value->getSymboleCorps())==0))){
                        $exp_SymboleCorps=true;
                    }
                    else {

                    foreach ( $value->getSymboleCorps() as $charge) {
                    foreach($data->getSymboleCorps() as $charge1){
                        if($charge->getSymboleCorps() ==$charge1->getSymboleCorps())
                        {$exp_SymboleCorps =  true ;}
                    } }}



                if (($value->getTypeInscCorps()==null) or $data->getTypeInscCorps()==null){
                    $exp_TypeInscCorps=true;
                }
                else{
                    $exp_TypeInscCorps=((($value->getTypeInscCorps()->getTypeInscOgive())==($data->getTypeInscCorps()->getTypeMarquage())));

                }
                $exp_NbBandesCorps=((($value->getNbBandesCorps())==($data->getNbBandesCorps()))or  ($data->getNbBandesCorps())==null);

                if (($value->getCouleurInscCorps()==null) or $data->getCouleurInscCorps()==null){
                    $exp_CouleurInscCorps=true;
                }
                else{
                    $exp_CouleurInscCorps=((($value->getCouleurInscCorps()->getCouleurFond())==($data->getCouleurInscCorps()->getCouleurFond())));

                }
                $exp_InscriptionCorps=((($value->getInscriptionCorps())==($data->getInscriptionCorps()))or  ($data->getInscriptionCorps())==null);
                $exp_MarquageFroidCorps=((($value->getMarquageFroidCorps())==($data->getMarquageFroidCorps()))or  ($data->getMarquageFroidCorps())==null);


                if (($value->getCouleurBandeCorps1()==null) or $data->getCouleurBandeCorps1()==null){
                    $exp_CouleurBandeCorps1=true;
                }
                else{
                    $exp_CouleurBandeCorps1=((($value->getCouleurBandeCorps1()->getCouleurFond())==($data->getCouleurBandeCorps1()->getCouleurFond())));

                }

                if (($value->getCouleurBandeCorps2()==null) or $data->getCouleurBandeCorps2()==null){
                    $exp_CouleurBandeCorps2=true;
                }
                else{
                    $exp_CouleurBandeCorps2=((($value->getCouleurBandeCorps2()->getCouleurFond())==($data->getCouleurBandeCorps2()->getCouleurFond())));

                }
                if (($value->getCouleurBandeCorps3()==null)or $data->getCouleurBandeCorps3()==null){
                    $exp_CouleurBandeCorps3=true;
                }
                else{
                    $exp_CouleurBandeCorps3=((($value->getCouleurBandeCorps3()->getCouleurFond())==($data->getCouleurBandeCorps3()->getCouleurFond())));

                }
                if (($value->getCouleurBandeCorps4()==null)or $data->getCouleurBandeCorps4()==null){
                    $exp_CouleurBandeCorps4=true;
                }
                else{
                    $exp_CouleurBandeCorps4=((($value->getCouleurBandeCorps4()->getCouleurFond())==($data->getCouleurBandeCorps4()->getCouleurFond())));

                }
                if (($value->getCouleurCulot()==null) or $data->getCouleurCulot()==null){
                    $exp_CouleurCulot=true;
                }
                else{
                    $exp_CouleurCulot=((($value->getCouleurCulot()->getCouleurFond())==($data->getCouleurCulot()->getCouleurFond())));
                }
                if (($value->getTypeInscCulot()==null) or $data->getTypeInscCulot()==null){
                    $exp_TypeInscCulot=true;
                }
                else{
                    $exp_TypeInscCulot=((($value->getTypeInscCulot()->getTypeInscOgive())==($data->getTypeInscCulot()->getTypeMarquage())));

                }

                $exp_InscriptionCulot=((($value->getInscriptionCulot())==($data->getInscriptionCulot()))or   ($data->getInscriptionCulot())==null);
                $exp_NbBandesCulot=true;
                    //((($value->getNbBandesCulot())==($data->getNbBandesCulot()))or  ($data-> getNbBandesCulot())==null);
                $exp_MarquageFroidCulot=((($value->getMarquageFroidCulot())==($data->getMarquageFroidCulot()))or  ($data->getMarquageFroidCulot())==null);

                    $exp_SymboleCulot =  false;
                    if(((count($data->getSymboleCulot())==0))or ((count($value->getSymboleCulot())==0))){
                        $exp_SymboleCulot=true;
                    }
                    else {
                        foreach ( $value->getSymboleCulot() as $charge) {
                    foreach($data->getSymboleCulot() as $charge1){
                        if($charge->getSymboleCulot() ==$charge1->getSymboleCulot())
                        {$exp_SymboleCulot =  true ;}
                    } }}


                if (($value->getCouleurBandeCulot1()==null) or $data->getCouleurBandeCulot1()==null){
                    $exp_CouleurBandeCulot1=true;
                }
                else{
                    $exp_CouleurBandeCulot1=((($value->getCouleurBandeCulot1()->getCouleurFond())==($data->getCouleurBandeCulot1()->getCouleurFond())));

                }


               // pour l'artillerie spécifiquement : fusee

                //pour l'artillerie spécifiquement fusee
                $exp_NomFusee1=((($value->getNomFusee1())==($data->getNomFusee1()))or  ($data->getNomFusee1())==null);
                $exp_PositionFusee =  false;
                        if(((count($data->getPositionFusee())==0))or ((count($value->getPositionFusee())==0))){
                            $exp_PositionFusee=true;
                        }
                        else {

                            foreach ( $value->getPositionFusee() as $charge) {
                    foreach($data->getPositionFusee() as $charge1){
                        if($charge->getPositionFusee() ==$charge1->getPositionFusee())
                        {$exp_PositionFusee =  true ;}
                    } }}

                // pour l'artillerie: gestion
                $exp_collectionTravail =  false;
                if(((count($data->getCollectionTravail())==0))or ((count($value->getCollectionTravail())==0))){
                    $exp_collectionTravail=true;
                }
                else {

                    foreach ( $value->getCollectionTravail() as $charge) {
                        foreach($data->getCollectionTravail() as $charge1){
                            if($charge->getUnitesMUNEX() ==$charge1->getUnitesMUNEX())
                            {$exp_collectionTravail =  true ;}
                        } }}


                $exp_collectionTerrain =  false;
                if(((count($data->getCollectionTerrain())==0))or ((count($value->getCollectionTerrain())==0))){
                    $exp_collectionTerrain=true;
                }
                else {

                    foreach ( $value->getCollectionTerrain() as $charge) {
                        foreach($data->getCollectionTravail() as $charge1){
                            if($charge->getUnitesMUNEX() ==$charge1->getUnitesMUNEX())
                            {$exp_collectionTerrain =  true ;}
                        } }}



          if ($exp_collectionTerrain and $exp_collectionTravail and $exp_nomine and $exp_denominationOTAN and $exp_typeObus and $exp_pays and $exp_paysAcquereur and $exp_retrouveEn and $exp_alias
        and $exp_calibre and $exp_calibrereel and $exp_natureEnveloppe and $exp_PositionFusee and $exp_NomFusee1 and $exp_CouleurBandeCulot1
          and $exp_MarquageFroidCulot and $exp_NbBandesCulot and $exp_InscriptionCulot and $exp_StandOFF and $exp_SymboleCorps and $exp_calibre and
              $exp_TypeSabot and $exp_CouleurBandeCorps1 and $exp_CouleurBandeCorps2 and $exp_matiereCeinture and $exp_CouleurBandeCorps3 and $exp_CouleurBandeCorps4
              and $exp_Autodestruction and $exp_FormeAilettes and $exp_LargAilette and $exp_LongAilette and $exp_NbAilettes and $exp_FormeElemAeroAR and $exp_FormeElemAeroAV
              and $exp_PositionElemAeroAV and $exp_TypeElemAeroAR and $exp_TypeElemAeroAV and $exp_BagueCalage and $exp_BagueDeRaccordement and $exp_CouleurBandeOgive1
              and $exp_CouleurBandeOgive3 and $exp_CouleurBandeOgive4 and $exp_CouleurBandeOgive2 and $exp_CopieExistante and $exp_CouleurCorps and
              $exp_SymboleCulot and $exp_CouleurCulot and $exp_TypeDeRenflement1 and $exp_TypeDeRenflement2 and $exp_TypeInscCorps and $exp_TypeInscOgive
              and $exp_TypeInscCulot and $exp_CouleurInscCorps and $exp_NbAilettes and $exp_NbBandesCorps and $exp_NbBandesCulot and $exp_NbBandesOgive
              and $exp_NbGorges and $exp_InscriptionCulot and  $exp_InscriptionCorps and $exp_MarquageFroidCorps and $exp_MarquageFroidCulot and $exp_MarquageFroidOgive
              and $exp_SymboleOgive and $exp_CouleurOgive and $exp_Obturation and $exp_PositionElemAeroAR and $exp_PositionElemAeroAV and $exp_PositionElemAeroAR
              and $exp_PositionOrifice and $exp_Orifices and $exp_DiametreJupe and $exp_LongueurJupe and $exp_TypePlaque and $exp_TypeGaine and $exp_FormeDeGaine
              and $exp_HauteurDeLaGaine and $exp_DiametreExterieurDeLaGaine1 and $exp_DiametreExterieurDeLaGaine2 and $exp_distCeintCulot and $exp_distanceCeinture
              and $exp_largeurCeinture and $exp_largeurCeinture1 and $exp_largeurCeinture2 and $exp_matiereCeinture and $exp_nombreCeinture and $exp_typeCeinture
              and $exp_DiametrePuitsCulot and $exp_PuitCulot and $exp_TypeSabot and $exp_LongueurSabot and $exp_TypeEmpennage and $exp_lgTotavecFusee and $exp_lgTotsansFusee
              and $exp_LargeurRenflement1 and $exp_PositionDeRenflement2 and $exp_PositionDeRenflement1 and $exp_FormeCorps and $exp_FormeCulot and $exp_DistCulotGorge
              and $exp_LongueurJupe and $exp_LargeurRenflement2 and $exp_NombreDeRenflement and $exp_DiametreDelOeil and $exp_PuitsDeFusee and $exp_FormeOgive
              and $exp_NatureChargeDispersion and $exp_NatureChargeMili and $exp_PoidsChargeCalcule and $exp_PoidsChargeDispersion and $exp_PoidsChargeMili
              and $exp_diametretraceur and $exp_longueurtraceur and $exp_EffetChargement and $exp_LongueurJupe and $exp_poids
           ) {
       $resultats[] = $value;
            }

            }
            return $this->render('FeodBundle:Munition:search.html.twig', array(
               'results'=>$resultats,
              'data'=>$data,
            ));

            }
            break;
                
    //MINES            
            case 'mines':
                $entity = new Mines();
                $entity->setCreateurFiche($this->getUser());
                $form = $this->createCreateForm($entity, $type);
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();
                

        //On recherche toute les fiches validées de type machin
                $entities = $em->getRepository('FeodBundle:Munition')
                ->searchByNomAndType(null, $type);

                $resultats=null;

       if ($form->isValid()) {
            $data=$form->getData();

            for ($i=1; $i<count($entities);$i++ ) {
                //commandes
               $value=$entities[$i];

                $exp_nomine=($value->getNomine()==$data->getNomine() or $data->getNomine()==null);
                $exp_denominationOTAN=($value->getDenominationOTAN()==$data->getDenominationOTAN()or $data->getDenominationOTAN()==null );
                $exp_pays=false;
                // pour le pays d'origine
                if(((count($data->getPays())==0))or ((count($value->getPays())==0))){
                    $exp_pays=true;
                }
                else {
                    foreach ($value->getPays() as $pays) {
                        foreach ($data->getPays() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_pays = true;
                            }
                        }
                    }
                }
                
                // pour Type Mine
                if (($value->getTypeMine()==null) or $data->getTypeMine()==null){
                    $exp_typeMine=true;
                }
                else{
                    $exp_typeMine=(($value->getTypeMine()->getTypeMine())==($data->getTypeMine()->getTypeMine()));
                }

                //pour le paysAcquereur
                $exp_paysAcquereur=false;
                if ((count($data->getPaysAcquereur())==0)or (count($value->getPaysAcquereur())==0)){
                    $exp_paysAcquereur=true;
                }
                else{
                foreach ( $value->getPaysAcquereur() as $pays) {
                foreach($data->getPaysAcquereur() as $pays1){
                    if($pays->getPays() ==$pays1->getPays())
                    {$exp_paysAcquereur =  true;}
                    } }}

                //pour le retrouvé en
                $exp_retrouveEn=false;
                if(((count($data->getRetrouveEn())==0))or ((count($value->getRetrouveEn())==0))){
                    $exp_retrouveEn=true;
                }
                else {
                    foreach ($value->getRetrouveEn() as $pays) {
                        foreach ($data->getRetrouveEn() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_retrouveEn = true;
                            }
                        }
                    }
                }
                $exp_alias=(($value->getAlias()==($data->getAlias()))or  ($data->getAlias())==null);
                
                if (($value->getNatureEnveloppe()==null) or $data->getNatureEnveloppe()==null){
                    $exp_natureEnveloppe=true;
                }
                else{
                    $exp_natureEnveloppe=((($value->getNatureEnveloppe()->getEnveloppe())==$data->getNatureEnveloppe()->getEnveloppe()));
                }
                
                // pour Sous Type Mine
                if (($value->getSousTypeMine()==null) or $data->getSousTypeMine()==null){
                    $exp_sousTypeMine=true;
                }
                else{
                    $exp_sousTypeMine=(($value->getSousTypeMine()->getSousTypeMine())==($data->getSousTypeMine()->getSousTypeMine()));
                }
                
                $exp_presenceSupport=((($value->getPresenceSupport())==($data->getPresenceSupport())or  ($data->getPresenceSupport())==null));
                
                //pour Aspect-Dimensions
                $exp_hauteurSansAll=(($value->getHauteurSansAll()==($data->getHauteurSansAll()))or  ($data->getHauteurSansAll())==null);
                $exp_longueur=(($value->getLongueur()==($data->getLongueur()))or  ($data->getLongueur())==null);
                $exp_diametre=(($value->getDiametre()==($data->getDiametre()))or  ($data->getDiametre())==null);
                
                if (($value->getFormeMine()==null) or $data->getFormeMine()==null){
                    $exp_formeMine=true;
                }
                else{
                    $exp_formeMine=(($value->getFormeMine()->getFormeMine())==($data->getFormeMine()->getFormeMine()));
                }
                
                // pour Marquage
                if (($value->getCouleurPrincipale()==null) or $data->getCouleurPrincipale()==null){
                    $exp_couleurPrincipale=false;
                }
                else{
                    $exp_couleurPrincipale=(($value->getCouleurPrincipale()->getCouleurFond())==($data->getCouleurPrincipale()->getCouleurFond()));
                }
                
                if (($value->getCouleurSecondaire()==null) or $data->getCouleurSecondaire()==null){
                    $exp_couleurSecondaire=true;
                }
                else{
                    $exp_couleurSecondaire=(($value->getCouleurSecondaire()->getCouleurSecondaire())==($data->getCouleurSecondaire()->getCouleurSecondaire()));
                }
               
                
                if ( $exp_nomine and $exp_denominationOTAN and $exp_pays and $exp_paysAcquereur and $exp_retrouveEn and $exp_typeMine and $exp_alias
                    and $exp_natureEnveloppe and $exp_sousTypeMine and $exp_presenceSupport and $exp_formeMine and $exp_hauteurSansAll and $exp_longueur and
                    $exp_diametre and $exp_couleurPrincipale and $exp_couleurSecondaire )  
                {
                $resultats[] = $value;
                }    
            }
   
                return $this->render('FeodBundle:Munition:search.html.twig', array(
                    'results'=>$resultats,
                    'data'=>$data,
            ));
            
        }
                break;
    

    //MORTIER        
            case 'mortier':
                $entity = new Mortier();
                $entity->setCreateurFiche($this->getUser());
                $form = $this->createCreateForm($entity, $type);
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();

        //On recherche toute les fiches validées de type machin
                $entities = $em->getRepository('FeodBundle:Munition')
                ->searchByNomAndType(null, $type);

                $resultats=null;

       if ($form->isValid()) {
            $data=$form->getData();

            for ($i=1; $i<count($entities);$i++ ) {
                //commandes
               $value=$entities[$i];

                $exp_nomine=($value->getNomine()==$data->getNomine() or $data->getNomine()==null);
                $exp_denominationOTAN=($value->getDenominationOTAN()==$data->getDenominationOTAN()or $data->getDenominationOTAN()==null );
                $exp_pays=false;
                // pour le pays d'origine
                if(((count($data->getPays())==0))or ((count($value->getPays())==0))){
                    $exp_pays=true;
                }
                else {
                    foreach ($value->getPays() as $pays) {
                        foreach ($data->getPays() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_pays = true;
                            }
                        }
                    }
                }

                //pour le paysAcquereur
                $exp_paysAcquereur=false;
                if ((count($data->getPaysAcquereur())==0)or (count($value->getPaysAcquereur())==0)){
                    $exp_paysAcquereur=true;
                }
                else{
                foreach ( $value->getPaysAcquereur() as $pays) {
                foreach($data->getPaysAcquereur() as $pays1){
                    if($pays->getPays() ==$pays1->getPays())
                    {$exp_paysAcquereur =  true;}
                    } }}

                //pour le retrouvé en
                $exp_retrouveEn=false;
                if(((count($data->getRetrouveEn())==0))or ((count($value->getRetrouveEn())==0))){
                    $exp_retrouveEn=true;
                }
                else {
                    foreach ($value->getRetrouveEn() as $pays) {
                        foreach ($data->getRetrouveEn() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_retrouveEn = true;
                            }
                        }
                    }
                }
                // pour Type Mortier
                if (($value->getTypeMortier()==null) or $data->getTypeMortier()==null){
                    $exp_typeMortier=true;
                }
                else{
                    $exp_typeMortier=(($value->getTypeMortier()->getTypeMortier())==($data->getTypeMortier()->getTypeMortier()));
                }
                    
            //pour Généralité
                $exp_alias=(($value->getAlias()==($data->getAlias()))or  ($data->getAlias())==null);
                $exp_calibre=(($value->getCalibre())==($data->getCalibre())or  ($data->getCalibre())==null);
                
                    // si le champs est null c'est un possible candidat !
                if (($value->getNatureEnveloppe()==null) or $data->getNatureEnveloppe()==null){
                    $exp_natureEnveloppe=true;
                }
                else{
                    $exp_natureEnveloppe=((($value->getNatureEnveloppe()->getEnveloppe())==$data->getNatureEnveloppe()->getEnveloppe()));
                }
                
                
            //pour Chargement
                    // pour la naturechargemili
                $exp_NatureChargeMili =  false;
                if(((count($data->getNatureChargeMili())==0))or ((count($value->getNatureChargeMili())==0))){
                    $exp_NatureChargeMili=true;
                }
                else {
                foreach ( $value->getNatureChargeMili() as $charge) {
                    foreach($data->getNatureChargeMili() as $charge1){
                        if($charge->getNatureChargeMili() ==$charge1->getNatureChargeMili())
                        {$exp_NatureChargeMili =  true ;}
                    } }}
                    
                $exp_PoidsChargeMili=((($value->getPoidsChargeMili())==($data->getPoidsChargeMili())or  ($data->getPoidsChargeMili())==null));
                
                    // pour effetChargement
                $exp_effetChargement =  false;
                if(((count($data->geteffetChargement())==0))or ((count($value->geteffetChargement())==0))){
                    $exp_effetChargement=true;
                }
                else {
                foreach ( $value->geteffetChargement() as $effet) {
                    foreach($data->geteffetChargement() as $effet1){
                        if($effet->geteffetChargement() ==$effet1->geteffetChargement())
                        {$exp_effetChargement =  true ;}
                    } }}
                    
                    
            //pour Aspect-Dimensions
                $exp_lgTotsansFusee=(($value->getLgTotsansFusee()==($data->getLgTotsansFusee()))or  ($data->getLgTotsansFusee())==null);
                
                
                if (($value->getFormeOgive()==null) or $data->getFormeOgive()==null){
                    $exp_formeOgive=true;
                }
                else{
                    $exp_formeOgive=(($value->getFormeOgive()->getFormeOgive())==($data->getFormeOgive()->getFormeOgive()));
                }
                
                if (($value->getFormeCorps()==null) or $data->getFormeCorps()==null){
                    $exp_formeCorps=true;
                }
                else{
                    $exp_formeCorps=(($value->getFormeCorps()->getFormeCorps())==($data->getFormeCorps()->getFormeCorps()));
                }
                
                $exp_longEmpennage=(($value->getLongEmpennage()==($data->getLongEmpennage()))or  ($data->getLongEmpennage())==null);
                
                $exp_nbAilettes=(($value->getNbAilettes()==($data->getNbAilettes()))or  ($data->getNbAilettes())==null);
                    
                if ( $exp_nomine and $exp_denominationOTAN and $exp_pays and $exp_paysAcquereur and $exp_retrouveEn and $exp_typeMortier and $exp_alias
                    and $exp_calibre and $exp_natureEnveloppe and $exp_NatureChargeMili and $exp_PoidsChargeMili and $exp_effetChargement and $exp_lgTotsansFusee and
                    $exp_formeOgive and $exp_formeCorps and $exp_longEmpennage and $exp_nbAilettes )   
                {
                $resultats[] = $value;
                }    
            }
   
                return $this->render('FeodBundle:Munition:search.html.twig', array(
               'results'=>$resultats,
              'data'=>$data,
            ));
            
        }
                break;
    
                
    //MISSILES            
            case "missiles":
                $entity = new Missiles();
                $entity->setCreateurFiche($this->getUser());
                $form = $this->createCreateForm($entity, $type);
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();
                

        //On recherche toute les fiches validées de type machin
                $entities = $em->getRepository('FeodBundle:Munition')
                ->searchByNomAndType(null, $type);

                $resultats=null;

       if ($form->isValid()) {
            $data=$form->getData();

            for ($i=1; $i<count($entities);$i++ ) {
                //commandes
               $value=$entities[$i];
               
               $exp_nomine=($value->getNomine()==$data->getNomine() or $data->getNomine()==null);
                $exp_denominationOTAN=($value->getDenominationOTAN()==$data->getDenominationOTAN()or $data->getDenominationOTAN()==null );
                $exp_pays=false;
                // pour le pays d'origine
                if(((count($data->getPays())==0))or ((count($value->getPays())==0))){
                    $exp_pays=true;
                }
                else {
                    foreach ($value->getPays() as $pays) {
                        foreach ($data->getPays() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_pays = true;
                            }
                        }
                    }
                }
                
                //pour le paysAcquereur
                $exp_paysAcquereur=false;
                if ((count($data->getPaysAcquereur())==0)or (count($value->getPaysAcquereur())==0)){
                    $exp_paysAcquereur=true;
                }
                else{
                foreach ( $value->getPaysAcquereur() as $pays) {
                foreach($data->getPaysAcquereur() as $pays1){
                    if($pays->getPays() ==$pays1->getPays())
                    {$exp_paysAcquereur =  true;}
                    } }}

                //pour le retrouvé en
                $exp_retrouveEn=false;
                if(((count($data->getRetrouveEn())==0))or ((count($value->getRetrouveEn())==0))){
                    $exp_retrouveEn=true;
                }
                else {
                    foreach ($value->getRetrouveEn() as $pays) {
                        foreach ($data->getRetrouveEn() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_retrouveEn = true;
                            }
                        }
                    }
                }
                
                //pour type Missile
                $exp_TypeMissile=false;
                if(((count($data->getTypeMissile())==0))or ((count($value->getTypeMissile())==0))){
                    $exp_TypeMissile=true;
                }
                else {
                    foreach ($value->getTypeMissile() as $missile) {
                        foreach ($data->getTypeMissile() as $missile1) {
                            if ($missile->getName() == $missile1->getName()) {
                                $exp_TypeMissile = true;
                            }
                        }
                    }
                }
                $exp_alias=(($value->getAlias()==($data->getAlias()))or  ($data->getAlias())==null);
                
                if (($value->getNatureEnveloppe()==null) or $data->getNatureEnveloppe()==null){
                    $exp_natureEnveloppe=true;
                }
                else{
                    $exp_natureEnveloppe=((($value->getNatureEnveloppe()->getName())==$data->getNatureEnveloppe()->getName()));
                }
                
                $exp_CalibreDiametre=(($value->getCalibreDiametre()==($data->getCalibreDiametre()))or  ($data->getCalibreDiametre())==null);
                
                if (($value->getUniteCalibre()==null) or $data->getUniteCalibre()==null){
                    $exp_UniteCalibre=true;
                }
                else{
                    $exp_UniteCalibre=((($value->getUniteCalibre()->getUniteDistance())==$data->getUniteCalibre()->getUniteDistance()));
                }
                
            //Pour Aspects Dimension
                $exp_LongueurTotale=(($value->getLongueurTotale()==($data->getLongueurTotale()))or  ($data->getLongueurTotale())==null);
                $exp_Poids=(($value->getPoids()==($data->getPoids()))or  ($data->getPoids())==null);
                $exp_LongueurEmpennage=(($value->getLongueurEmpennage()==($data->getLongueurEmpennage()))or  ($data->getLongueurEmpennage())==null);
                $exp_LongueurAilette=(($value->getLongueurAilette()==($data->getLongueurAilette()))or  ($data->getLongueurAilette())==null);
                $exp_NombreAilette=(($value->getNombreAilette()==($data->getNombreAilette()))or  ($data->getNombreAilette())==null);
                
                if (($value->getTypeEmpennage()==null) or $data->getTypeEmpennage()==null){
                    $exp_TypeEmpennage=true;
                }
                else{
                    $exp_TypeEmpennage=((($value->getTypeEmpennage()->getName())==$data->getTypeEmpennage()->getName()));
                }
                
            //Pour Marquage
                if (($value->getCouleurCorps()==null) or $data->getCouleurCorps()==null){
                    $exp_CouleurCorps=true;
                }
                else{
                    $exp_CouleurCorps=((($value->getCouleurCorps()->getCouleurFond())==$data->getCouleurCorps()->getCouleurFond()));
                }
                
                //pour SymboleCorps
                $exp_SymboleCorps=false;
                if(((count($data->getSymboleCorps())==0))or ((count($value->getSymboleCorps())==0))){
                    $exp_SymboleCorps=true;
                }
                else {
                    foreach ($value->getSymboleCorps() as $symbole) {
                        foreach ($data->getSymboleCorps() as $symbole1) {
                            if ($symbole->getSymboleOgive() == $symbole1->getSymboleOgive()) {
                                $exp_SymboleCorps = true;
                            }
                        }
                    }
                }
                
                
                if ( $exp_nomine and $exp_denominationOTAN and $exp_pays and $exp_paysAcquereur and $exp_retrouveEn and $exp_TypeMissile and $exp_alias
                        and $exp_natureEnveloppe and $exp_UniteCalibre and $exp_CalibreDiametre and $exp_LongueurTotale and $exp_Poids and
                        $exp_TypeEmpennage and $exp_LongueurEmpennage and $exp_LongueurAilette and $exp_NombreAilette
                        and $exp_CouleurCorps and $exp_SymboleCorps )  
                {
                $resultats[] = $value;
                }    
       }
       return $this->render('FeodBundle:Munition:search.html.twig', array(
                    'results'=>$resultats,
                    'data'=>$data,
            ));
       }
            break;

    //ROQUETTES        
            case "roquettes":
                $entity = new Roquettes();
                $entity->setCreateurFiche($this->getUser());
                $form = $this->createCreateForm($entity, $type);
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();
                

        //On recherche toute les fiches validées de type machin
                $entities = $em->getRepository('FeodBundle:Munition')
                ->searchByNomAndType(null, $type);

                $resultats=null;

       if ($form->isValid()) {
            $data=$form->getData();

            for ($i=1; $i<count($entities);$i++ ) {
                //commandes
               $value=$entities[$i];

                $exp_nomine=($value->getNomine()==$data->getNomine() or $data->getNomine()==null);
                $exp_denominationOTAN=($value->getDenominationOTAN()==$data->getDenominationOTAN()or $data->getDenominationOTAN()==null );
                $exp_pays=false;
                // pour le pays d'origine
                if(((count($data->getPays())==0))or ((count($value->getPays())==0))){
                    $exp_pays=true;
                }
                else {
                    foreach ($value->getPays() as $pays) {
                        foreach ($data->getPays() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_pays = true;
                            }
                        }
                    }
                }
                
                // pour Type Roquettes
                if (($value->getTypeRoquette()==null) or $data->getTypeRoquette()==null){
                    $exp_TypeRoquette=true;
                }
                else{
                    $exp_TypeRoquette=(($value->getTypeRoquette()->getName())==($data->getTypeRoquette()->getName()));
                }

                //pour le paysAcquereur
                $exp_paysAcquereur=false;
                if ((count($data->getPaysAcquereur())==0)or (count($value->getPaysAcquereur())==0)){
                    $exp_paysAcquereur=true;
                }
                else{
                foreach ( $value->getPaysAcquereur() as $pays) {
                foreach($data->getPaysAcquereur() as $pays1){
                    if($pays->getPays() ==$pays1->getPays())
                    {$exp_paysAcquereur =  true;}
                    } }}

                //pour le retrouvé en
                $exp_retrouveEn=false;
                if(((count($data->getRetrouveEn())==0))or ((count($value->getRetrouveEn())==0))){
                    $exp_retrouveEn=true;
                }
                else {
                    foreach ($value->getRetrouveEn() as $pays) {
                        foreach ($data->getRetrouveEn() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_retrouveEn = true;
                            }
                        }
                    }
                }
                $exp_alias=(($value->getAlias()==($data->getAlias()))or  ($data->getAlias())==null);
                $exp_DiametreTeteMili=(($value->getDiametreTeteMili()==($data->getDiametreTeteMili()))or  ($data->getDiametreTeteMili())==null);
                $exp_CalibreCalcul=(($value->getCalibreCalcul())==($data->getCalibreCalcul())or  ($data->getCalibreCalcul())==null);
                $exp_LgTotavecFusee=(($value->getLgTotavecFusee())==($data->getLgTotavecFusee())or  ($data->getLgTotavecFusee())==null);
                
                if (($value->getNatureEnveloppe()==null) or $data->getNatureEnveloppe()==null){
                    $exp_natureEnveloppe=true;
                }
                else{
                    $exp_natureEnveloppe=((($value->getNatureEnveloppe()->getName())==$data->getNatureEnveloppe()->getName()));
                }
                
                
                //pour Aspect-Dimensions
                $exp_NbTuyereArriere=(($value->getNbTuyereArriere()==($data->getNbTuyereArriere()))or  ($data->getNbTuyereArriere())==null);
                $exp_LongueurTeteMili=(($value->getLongueurTeteMili()==($data->getLongueurTeteMili()))or  ($data->getLongueurTeteMili())==null);
                $exp_NbAilettes=(($value->getNbAilettes()==($data->getNbAilettes()))or  ($data->getNbAilettes())==null);

                // pour Marquage
                if (($value->getCouleurCorps()==null) or $data->getCouleurCorps()==null){
                    $exp_CouleurCorps=true;
                }
                else{
                    $exp_CouleurCorps=(($value->getCouleurCorps()->getCouleurFond())==($data->getCouleurCorps()->getCouleurFond()));
                }
                
 
                if ( $exp_nomine and $exp_denominationOTAN and $exp_pays and $exp_paysAcquereur and $exp_retrouveEn and $exp_TypeRoquette and $exp_alias
                    and $exp_natureEnveloppe and $exp_DiametreTeteMili and $exp_CalibreCalcul and $exp_LgTotavecFusee and $exp_NbTuyereArriere and $exp_LongueurTeteMili and
                    $exp_NbAilettes and $exp_CouleurCorps )  
                {
                $resultats[] = $value;
                }    
            }
   
                return $this->render('FeodBundle:Munition:search.html.twig', array(
                    'results'=>$resultats,
                    'data'=>$data,
            ));
            
        }
            break;
            
    //BOMBES        
            case "bombes":
                $entity = new Bombes();
                $entity->setCreateurFiche($this->getUser());
                $form = $this->createCreateForm($entity, $type);
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();
                

        //On recherche toute les fiches validées de type machin
                $entities = $em->getRepository('FeodBundle:Munition')
                ->searchByNomAndType(null, $type);

                $resultats=null;

       if ($form->isValid()) {
            $data=$form->getData();

            for ($i=1; $i<count($entities);$i++ ) {
                //commandes
               $value=$entities[$i];

                $exp_nomine=($value->getNomine()==$data->getNomine() or $data->getNomine()==null);
                $exp_denominationOTAN=($value->getDenominationOTAN()==$data->getDenominationOTAN()or $data->getDenominationOTAN()==null );
                $exp_pays=false;
                // pour le pays d'origine
                if(((count($data->getPays())==0))or ((count($value->getPays())==0))){
                    $exp_pays=true;
                }
                else {
                    foreach ($value->getPays() as $pays) {
                        foreach ($data->getPays() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_pays = true;
                            }
                        }
                    }
                }
                
                // pour Type Bombes
                if (($value->getFamilleBombe()==null) or $data->getFamilleBombe()==null){
                    $exp_FamilleBombe=true;
                }
                else{
                    $exp_FamilleBombe=(($value->getFamilleBombe()->getName())==($data->getFamilleBombe()->getName()));
                }

                //pour le paysAcquereur
                $exp_paysAcquereur=false;
                if ((count($data->getPaysAcquereur())==0)or (count($value->getPaysAcquereur())==0)){
                    $exp_paysAcquereur=true;
                }
                else{
                foreach ( $value->getPaysAcquereur() as $pays) {
                foreach($data->getPaysAcquereur() as $pays1){
                    if($pays->getPays() ==$pays1->getPays())
                    {$exp_paysAcquereur =  true;}
                    } }}

                //pour le retrouvé en
                $exp_retrouveEn=false;
                if(((count($data->getRetrouveEn())==0))or ((count($value->getRetrouveEn())==0))){
                    $exp_retrouveEn=true;
                }
                else {
                    foreach ($value->getRetrouveEn() as $pays) {
                        foreach ($data->getRetrouveEn() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_retrouveEn = true;
                            }
                        }
                    }
                }
                
                //pour Generalites
                $exp_alias=(($value->getAlias()==($data->getAlias()))or  ($data->getAlias())==null);
                
                $exp_Poids=(($value->getPoids())==($data->getPoids())or  ($data->getPoids())==null);

                if (($value->getNatureEnveloppe()==null) or $data->getNatureEnveloppe()==null){
                    $exp_natureEnveloppe=true;
                }
                else{
                    $exp_natureEnveloppe=((($value->getNatureEnveloppe()->getName())==$data->getNatureEnveloppe()->getName()));
                }
                
                
                //pour Aspect-Dimensions
                if (($value->getFormeCorps()==null) or $data->getFormeCorps()==null){
                    $exp_FormeCorps=true;
                }
                else{
                    $exp_FormeCorps=(($value->getFormeCorps()->getFormeCorps())==($data->getFormeCorps()->getFormeCorps()));
                }
                
                $exp_LgTotavecFusee=(($value->getLgTotavecFusee()==($data->getLgTotavecFusee()))or  ($data->getLgTotavecFusee())==null);
                $exp_LgTotsansFusee=(($value->getLgTotsansFusee()==($data->getLgTotsansFusee()))or  ($data->getLgTotsansFusee())==null);
                $exp_Diametre=(($value->getDiametre()==($data->getDiametre()))or  ($data->getDiametre())==null);
                $exp_TypeEmpennage=(($value->getTypeEmpennage()==($data->getTypeEmpennage()))or  ($data->getTypeEmpennage())==null);
                $exp_LongEmpennage=(($value->getLongEmpennage()==($data->getLongEmpennage()))or  ($data->getLongEmpennage())==null);

                // pour Marquage
                if (($value->getCouleurCorps()==null) or $data->getCouleurCorps()==null){
                    $exp_CouleurCorps=true;
                }
                else{
                    $exp_CouleurCorps=(($value->getCouleurCorps()->getCouleurFond())==($data->getCouleurCorps()->getCouleurFond()));
                }
                
                if ( $exp_nomine and $exp_denominationOTAN and $exp_pays and $exp_paysAcquereur and $exp_retrouveEn and $exp_FamilleBombe and $exp_alias
                    and $exp_natureEnveloppe and $exp_Poids and $exp_FormeCorps and $exp_LgTotavecFusee and $exp_LgTotsansFusee and
                    $exp_Diametre and $exp_TypeEmpennage and $exp_LongEmpennage and $exp_CouleurCorps )  
                {
                $resultats[] = $value;
                }    
            }
   
                return $this->render('FeodBundle:Munition:search.html.twig', array(
                    'results'=>$resultats,
                    'data'=>$data,
            ));
            
        }
                break;
            
    //GRENADES        
            case "grenades":
                $entity = new Grenades();
                $entity->setCreateurFiche($this->getUser());
                $form = $this->createCreateForm($entity, $type);
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();
                

        //On recherche toute les fiches validées de type machin
                $entities = $em->getRepository('FeodBundle:Munition')
                ->searchByNomAndType(null, $type);

                $resultats=null;

       if ($form->isValid()) {
            $data=$form->getData();

            for ($i=1; $i<count($entities);$i++ ) {
                //commandes
               $value=$entities[$i];

                $exp_nomine=($value->getNomine()==$data->getNomine() or $data->getNomine()==null);
                $exp_denominationOTAN=($value->getDenominationOTAN()==$data->getDenominationOTAN()or $data->getDenominationOTAN()==null );
                $exp_pays=false;
                // pour le pays d'origine
                if(((count($data->getPays())==0))or ((count($value->getPays())==0))){
                    $exp_pays=true;
                }
                else {
                    foreach ($value->getPays() as $pays) {
                        foreach ($data->getPays() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_pays = true;
                            }
                        }
                    }
                }
                
                // pour Type Grenades
                if (($value->getTypeGrenade()==null) or $data->getTypeGrenade()==null){
                    $exp_TypeGrenade=true;
                }
                else{
                    $exp_TypeGrenade=(($value->getTypeGrenade()->getName())==($data->getTypeGrenade()->getName()));
                }

                //pour le paysAcquereur
                $exp_paysAcquereur=false;
                if ((count($data->getPaysAcquereur())==0)or (count($value->getPaysAcquereur())==0)){
                    $exp_paysAcquereur=true;
                }
                else{
                foreach ( $value->getPaysAcquereur() as $pays) {
                foreach($data->getPaysAcquereur() as $pays1){
                    if($pays->getPays() ==$pays1->getPays())
                    {$exp_paysAcquereur =  true;}
                    } }}

                //pour le retrouvé en
                $exp_retrouveEn=false;
                if(((count($data->getRetrouveEn())==0))or ((count($value->getRetrouveEn())==0))){
                    $exp_retrouveEn=true;
                }
                else {
                    foreach ($value->getRetrouveEn() as $pays) {
                        foreach ($data->getRetrouveEn() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_retrouveEn = true;
                            }
                        }
                    }
                }
                
                //pour Generalites
                $exp_alias=(($value->getAlias()==($data->getAlias()))or  ($data->getAlias())==null);
               
                if (($value->getEffetGrenade()==null) or $data->getEffetGrenade()==null){
                    $exp_EffetGrenade=true;
                }
                else{
                    $exp_EffetGrenade=((($value->getEffetGrenade()->getName())==$data->getEffetGrenade()->getName()));
                }
                
                $exp_DiametreGrenade=(($value->getDiametreGrenade())==($data->getDiametreGrenade())or  ($data->getDiametreGrenade())==null);

                if (($value->getNatureEnveloppe()==null) or $data->getNatureEnveloppe()==null){
                    $exp_natureEnveloppe=true;
                }
                else{
                    $exp_natureEnveloppe=((($value->getNatureEnveloppe()->getName())==$data->getNatureEnveloppe()->getName()));
                }
                
                
                //pour Aspect-Dimensions
                if (($value->getFormeGrenade()==null) or $data->getFormeGrenade()==null){
                    $exp_FormeGrenade=true;
                }
                else{
                    $exp_FormeGrenade=(($value->getFormeGrenade()->getName())==($data->getFormeGrenade()->getName()));
                }
                
                $exp_HauteursansBA=(($value->getHauteursansBA()==($data->getHauteursansBA()))or  ($data->getHauteursansBA())==null);
                
                $exp_PoidsGrenade=(($value->getPoidsGrenade()==($data->getPoidsGrenade()))or  ($data->getPoidsGrenade())==null);

                // pour Marquage
                if (($value->getCouleurHautGrenade()==null) or $data->getCouleurHautGrenade()==null){
                    $exp_CouleurHautGrenade=true;
                }
                else{
                    $exp_CouleurHautGrenade=(($value->getCouleurHautGrenade()->getCouleurFond())==($data->getCouleurHautGrenade()->getCouleurFond()));
                }
                
                if (($value->getCouleurBasGrenade()==null) or $data->getCouleurBasGrenade()==null){
                    $exp_CouleurBasGrenade=true;
                }
                else{
                    $exp_CouleurBasGrenade=(($value->getCouleurBasGrenade()->getCouleurFond())==($data->getCouleurBasGrenade()->getCouleurFond()));
                }
                
                if ( $exp_nomine and $exp_denominationOTAN and $exp_pays and $exp_paysAcquereur and $exp_retrouveEn and $exp_TypeGrenade and $exp_alias
                    and $exp_natureEnveloppe and $exp_EffetGrenade and $exp_DiametreGrenade and $exp_FormeGrenade and $exp_PoidsGrenade and $exp_HauteursansBA and
                    $exp_CouleurHautGrenade and $exp_CouleurBasGrenade )  
                {
                $resultats[] = $value;
                }    
            }
   
                return $this->render('FeodBundle:Munition:search.html.twig', array(
                    'results'=>$resultats,
                    'data'=>$data,
            ));
            
        }
                break;
            
    //SOUS MUNITIONS        
            case "sousMunitions":
                $entity = new SousMunitions();
                                $entity->setCreateurFiche($this->getUser());
                $form = $this->createCreateForm($entity, $type);
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();
                

        //On recherche toute les fiches validées de type machin
                $entities = $em->getRepository('FeodBundle:Munition')
                ->searchByNomAndType(null, $type);

                $resultats=null;

       if ($form->isValid()) {
            $data=$form->getData();

            for ($i=1; $i<count($entities);$i++ ) {
                //commandes
               $value=$entities[$i];

                $exp_nomine=($value->getNomine()==$data->getNomine() or $data->getNomine()==null);
                $exp_denominationOTAN=($value->getDenominationOTAN()==$data->getDenominationOTAN()or $data->getDenominationOTAN()==null );
                $exp_pays=false;
                // pour le pays d'origine
                if(((count($data->getPays())==0))or ((count($value->getPays())==0))){
                    $exp_pays=true;
                }
                else {
                    foreach ($value->getPays() as $pays) {
                        foreach ($data->getPays() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_pays = true;
                            }
                        }
                    }
                }
                
                // pour Type Sous Munitions
                if (($value->getTypeSousMunition()==null) or $data->getTypeSousMunition()==null){
                    $exp_TypeSousMunition=true;
                }
                else{
                    $exp_TypeSousMunition=(($value->getTypeSousMunition()->getName())==($data->getTypeSousMunition()->getName()));
                }

                //pour le paysAcquereur
                $exp_paysAcquereur=false;
                if ((count($data->getPaysAcquereur())==0)or (count($value->getPaysAcquereur())==0)){
                    $exp_paysAcquereur=true;
                }
                else{
                foreach ( $value->getPaysAcquereur() as $pays) {
                foreach($data->getPaysAcquereur() as $pays1){
                    if($pays->getPays() ==$pays1->getPays())
                    {$exp_paysAcquereur =  true;}
                    } }}

                //pour le retrouvé en
                $exp_retrouveEn=false;
                if(((count($data->getRetrouveEn())==0))or ((count($value->getRetrouveEn())==0))){
                    $exp_retrouveEn=true;
                }
                else {
                    foreach ($value->getRetrouveEn() as $pays) {
                        foreach ($data->getRetrouveEn() as $pays1) {
                            if ($pays->getPays() == $pays1->getPays()) {
                                $exp_retrouveEn = true;
                            }
                        }
                    }
                }
                
                //pour Generalites
                $exp_alias=(($value->getAlias()==($data->getAlias()))or  ($data->getAlias())==null);
               

                $exp_SousMunitionEmploi=false;
                if(((count($data->getSousMunitionEmploi())==0))or ((count($value->getSousMunitionEmploi())==0))){
                    $exp_SousMunitionEmploi=true;
                }
                else {
                    foreach ($value->getSousMunitionEmploi() as $sousmun) {
                        foreach ($data->getSousMunitionEmploi() as $sousmun1) {
                            if ($sousmun->getName() == $sousmun1->getName()) {
                                $exp_SousMunitionEmploi = true;
                            }
                        }
                    }
                }               
                
                $exp_Stabilisation=false;
                if(((count($data->getStabilisation())==0))or ((count($value->getStabilisation())==0))){
                    $exp_Stabilisation=true;
                }
                else {
                    foreach ($value->getStabilisation() as $stab) {
                        foreach ($data->getStabilisation() as $stab1) {
                            if ($stab->getName() == $stab1->getName()) {
                                $exp_Stabilisation = true;
                            }
                        }
                    }
                }
                
                $exp_natureEnveloppe=false;
                if(((count($data->getNatureEnveloppe())==0))or ((count($value->getNatureEnveloppe())==0))){
                    $exp_natureEnveloppe=true;
                }
                else {
                    foreach ($value->getNatureEnveloppe() as $env) {
                        foreach ($data->getNatureEnveloppe() as $env1) {
                            if ($env->getName() == $env1->getName()) {
                                $exp_natureEnveloppe = true;
                            }
                        }
                    }
                }
                
                
                //pour Aspect-Dimensions
                if (($value->getFormeGenerale()==null) or $data->getFormeGenerale()==null){
                    $exp_FormeGenerale=true;
                }
                else{
                    $exp_FormeGenerale=(($value->getFormeGenerale()->getFormeCorps())==($data->getFormeGenerale()->getFormeCorps()));
                }
                
                $exp_AspectExterieur=false;
                if(((count($data->getAspectExterieur())==0))or ((count($value->getAspectExterieur())==0))){
                    $exp_AspectExterieur=true;
                }
                else {
                    foreach ($value->getAspectExterieur() as $stab) {
                        foreach ($data->getAspectExterieur() as $stab1) {
                            if ($stab->getName() == $stab1->getName()) {
                                $exp_AspectExterieur = true;
                            }
                        }
                    }
                }
                
                $exp_HauteurLargue=(($value->getHauteurLargue()==($data->getHauteurLargue()))or  ($data->getHauteurLargue())==null);
                $exp_LongueurLargue=(($value->getLongueurLargue()==($data->getLongueurLargue()))or  ($data->getLongueurLargue())==null);
                $exp_LargeurLargue=(($value->getLargeurLargue()==($data->getLargeurLargue()))or  ($data->getLargeurLargue())==null);
                $exp_DiametreLargue=(($value->getDiametreLargue()==($data->getDiametreLargue()))or  ($data->getDiametreLargue())==null);

                // pour Marquage
                $exp_CouleurCorps=(($value->getCouleurCorps()==($data->getCouleurCorps()))or  ($data->getCouleurCorps())==null);
                
                if (($value->getTypeDeMarquage()==null) or $data->getTypeDeMarquage()==null){
                    $exp_TypeDeMarquage=true;
                }
                else{
                    $exp_TypeDeMarquage=(($value->getTypeDeMarquage()->getTypeMarquage())==($data->getTypeDeMarquage()->getTypeMarquage()));
                }
                
            
                if ( $exp_nomine and $exp_denominationOTAN and $exp_pays and $exp_paysAcquereur and $exp_retrouveEn and $exp_TypeSousMunition and $exp_alias
                       and $exp_natureEnveloppe and $exp_Stabilisation and $exp_FormeGenerale and $exp_AspectExterieur and
                    $exp_HauteurLargue and $exp_LongueurLargue and $exp_LargeurLargue and $exp_DiametreLargue and $exp_CouleurCorps and $exp_TypeDeMarquage )  
                {
                $resultats[] = $value;
                }    
            }
   
                return $this->render('FeodBundle:Munition:search.html.twig', array(
                    'results'=>$resultats,
                    'data'=>$data,
            ));
            
        }
                break;
        }

        return $this->render('FeodBundle:'.ucfirst($type).':new.html.twig', array(
          'entity' => $entity,
        'form'   => $form->createView(),
        ));
    }
    
    
    /**
    * Displays a form to edit an existing Munition entity.
    *
    */
    public function ficheAction($id, $type)
    {
        switch ($type) {
            case 'sousmunitions':
                $type = 'sousMunitions';
                break;
			case 'minesmarines':
                $type = 'minesMarines';
                break;
        };
        
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);
        $artillerie = $em->getRepository('FeodBundle:Artillerie')->findOneById($id);
        $mines = $em->getRepository('FeodBundle:Mines')->findOneById($id);
        $mortier = $em->getRepository('FeodBundle:Mortier')->findOneById($id);
        $missiles = $em->getRepository('FeodBundle:Missiles')->findOneById($id);
        $roquettes = $em->getRepository('FeodBundle:Roquettes')->findOneById($id);
        $bombes = $em->getRepository('FeodBundle:Bombes')->findOneById($id);
        $grenades = $em->getRepository('FeodBundle:Grenades')->findOneById($id);
        $sousMunitions = $em->getRepository('FeodBundle:SousMunitions')->findOneById($id);
        $minesMarines = $em->getRepository('FeodBundle:MinesMarines')->findOneById($id);
        $image = $em->getRepository('FeodBundle:Image')->findOneById($id);
        

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Munition entity.');
        }
        
        return $this->render('FeodBundle:'.ucfirst($type).':fiche.html.twig', array(
            'entity'      => $entity,
            'artillerie'        => $artillerie,
            'mines'        => $mines,
            'mortier'        => $mortier,
            'missiles'        => $missiles,
            'roquettes'        => $roquettes,
            'bombes'        => $bombes,
            'grenades'        => $grenades,
            'sousMunitions'        => $sousMunitions,
            'minesmMrines'        => $minesMarines,
            'image'        => $image,

        ));
    }
    

}
