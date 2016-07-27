<?php

namespace FeodBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FeodBundle\Entity\Chimique;
use FeodBundle\Form\ChimiqueType;
use FeodBundle\Form\ChimiqueSearchType;



/**
* Chimique controller.
*
*/
class ChimiqueController extends Controller
{
    /**
    * Liste les Chimique validées
    *
    */
    public function indexAction($type)
    {
        $em = $this->getDoctrine()->getManager();

        //On recherche toute les fiches validées
        $entities = $em->getRepository('FeodBundle:'.ucfirst($type))
        ->findByStatut(3);

        return $this->redirect($this->generateUrl('chimique_tampon', array(
            'statut' => 3,
            'type'=>$type
            )));
    }

    /**
    * Liste les Chimiques suivant leur statut
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
			'minesMarines' => $em->getRepository('FeodBundle:MinesMarines')->countByStatut($statut),
            'amorcage' => $em->getRepository('FeodBundle:Amorcage')->countByStatut($statut),
            'explosif' => $em->getRepository('FeodBundle:Explosif')->countByStatut($statut),
            'chimique' => $em->getRepository('FeodBundle:Chimique')->countByStatut($statut),
	    'munition' => $em->getRepository('FeodBundle:Munition')->countByStatut($statut),
        );

        $entities = $em->getRepository('FeodBundle:Chimique')
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
    * permet d'incrémenter le statut d'une Chimique
    *
    */

    public function suiteAction($id, $type)
    {
        $em = $this->getDoctrine()->getManager();
        switch ($type) {
        };

        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chimique entity.');
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
                    ->findByChimiqueId($entity->getChimiqueId());

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
    * permet de refuser un demande de suite dans le statut le statut d'une Chimique
    *
    */

    public function refusAction($id, $type)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chimique entity.');
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
    * Creates a new Chimique entity.
    *
    */
    public function createAction(Request $request, $type)
    {
        switch ($type) {
                        case "chimique":
				$entity = new Chimique();
				break;
        }

        $entity->setCreateurFiche($this->getUser());
        $form = $this->createCreateForm($entity, $type);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $entity->setChimiqueId($entity->getId());
            $em->flush();

            $request->getSession()->getFlashBag()->add(
                'notice',
                "Fiche ajoutée"
            );
            return $this->redirect($this->generateUrl('chimique_tampon', array(
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
    * Creates a form to create a Chimique entity.
    *
    * @param Chimique $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm($entity, $type)
    {
        switch ($type) {
            
            case 'chimique':
                $form = $this->createForm(new ChimiqueType(), $entity, array(
                    'action' => $this->generateUrl('chimique_create', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
        }

        $form->add('submit', 'submit', array('label' => 'Créer'));
        $form->add('reset', 'reset', array('label' => 'Annuler'));

        return $form;
    }

    /**
    * Displays a form to create a new Chimique entity.
    *
    */
    public function newAction($type)
    {
        switch ($type) {
                        case "chimique":
				$entity = new Chimique();
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
    * Displays a form to edit an existing Chimique entity.
    *
    */
    public function editAction($id, $type)
    {
        $em = $this->getDoctrine()->getManager();


        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chimique entity.');
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
    * Creates a form to edit a Chimique entity.
    *
    * @param Artillerie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm($entity, $type)
    {
        switch ($type) {
            case 'chimique':
                $form = $this->createForm(new ChimiqueType(), $entity, array(
                    'action' => $this->generateUrl('chimique_update', array(
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
    * Edits an existing Chimique entity.
    *
    */
    public function updateAction(Request $request, $id, $type)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chimique entity.');
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
                        ->CountByChimiqueId($entity->getChimiqueId());
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

            return $this->redirect($this->generateUrl('chimique_edit', array(
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
    * Deletes a Chimique entity.
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
                throw $this->createNotFoundException('Unable to find Chimique entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chimique', array('type'=>$type)));
    }

    /**
    * Creates a form to delete a Chimique entity by id.
    *
    * @param mixed $id The entity id
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm($id, $type)
    {
        return $this->createFormBuilder()
        ->setAction($this->generateUrl('chimique_delete', array(
            'id' => $id,
            'type' => $type)))
        ->setMethod('DELETE')
        ->add('submit', 'submit', array('label' => 'Delete'))
        ->getForm()
        ;
    }

    public function searchAction(Request $request, $type)
    {
        $a = new \FeodBundle\Entity\Artillerie();
        $a->prepareSearch();
        //$s = new \Doctrine\Common\Collections\ArrayCollection();

        $form = $this->get('form.factory')
            ->createBuilder(new \FeodBundle\Form\ArtillerieSearchType(), $a)->getForm();
        $form->add('submit', 'submit', array('label' => 'Rechercher'));

        $results = null;

        if ($form->handleRequest($request)->isValid()) {
            //$em = $this->getDoctrine()->getManager();

            $data = $a->getNotNullData();

            //$entity = $em->getRepository('FeodBundle:Chimique')->searchByAll($data,$type);

            $fm = $this->get('padam87_search.filter.manager');
            $filter = new \Padam87\SearchBundle\Filter\Filter($form->getdata(), 'FeodBundle:'.ucfirst($type), $type);

            $qb = $fm->createQueryBuilder($filter);
            $results = $qb->getQuery()->getResult();

            //$rep = $this->getDoctrine()->getManager()
            //    ->getRepository('FeodBundle:Chimique');

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
            
            case "chimique":
                $entity = new Chimique();
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
            
            case 'chimique':
                $form = $this->createForm(new ChimiqueSearchType(), $entity, array(
                    'action' => $this->generateUrl('chimique_createrecherche', array('type'=>$type)),
                    'method' => 'POST',
                ));
                break;
        }
// va falloir changer !
        $form->add('submit', 'submit', array('label' => 'Recherche le chimique'));

        return $form;
    }

    /**
     * @param Request $request
     * @param $type
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createrechercheAction(Request $request, $type)
    {
        
    }
    
    
    /**
    * Displays a form to edit an existing Chimique entity.
    *
    */
    public function ficheAction($id, $type)
    {
        switch ($type) {

        };
        
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('FeodBundle:'.ucfirst($type))->find($id);
        $explosif = $em->getRepository('FeodBundle:Chimique')->findOneById($id);
        

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chimique entity.');
        }
        
        return $this->render('FeodBundle:'.ucfirst($type).':fiche.html.twig', array(
            'entity'      => $entity,
            'explosif'        => $explosif,

        ));
    }
    

}
