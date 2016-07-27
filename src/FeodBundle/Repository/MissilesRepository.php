<?php

namespace FeodBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MissilesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MissilesRepository extends EntityRepository
{

    public function countAll(){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Missiles a')
            ->getSingleScalarResult();
        return $count;
    }

    public function CountByMunitionId($munitionId){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Missiles a
            WHERE a.munitionId = :munitionId')
            ->setParameter('munitionId', $munitionId)
            ->getSingleScalarResult();
        return $count;
    }

    public function countByStatut($statut){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Missiles a
            WHERE a.statut = :statut')
            ->setParameter('statut', $statut)
            ->getSingleScalarResult();
        return $count;
    }

    // Retourne les i dernieres artilleries de la base
    public function findLast($i){
        $qb = $this->_em->createQueryBuilder();

        $qb -> select('a')
            -> from('FeodBundle:Missiles','a')
            -> where('a.statut = 3')
            -> orderBy('a.dateMAJ','DESC')
            ->setMaxResults($i);

        return $qb->getQuery()
            ->getResult();
    }
    
    public function recherchepoids($chaine)
    {

         $qb = $this->_em->createQueryBuilder();
        //$qb = $this->createQueryBuilder('u');        
        $qb -> select('a')
        ->from('FeodBundle:Missiles','a')
        ->where('a.Poids = :chaine')
        ->orderBy('a.dateMAJ', 'DESC')
        ->setParameter('chaine', $chaine);
        
        return $qb->getQuery()
            ->getResult();
    }

}
