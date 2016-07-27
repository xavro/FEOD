<?php

namespace FeodBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MinesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MinesRepository extends EntityRepository
{

    public function countAll(){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Mines a')
            ->getSingleScalarResult();
        return $count;
    }

    public function CountByMunitionId($munitionId){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Mines a
            WHERE a.munitionId = :munitionId')
            ->setParameter('munitionId', $munitionId)
            ->getSingleScalarResult();
        return $count;
    }

    public function countByStatut($statut){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Mines a
            WHERE a.statut = :statut')
            ->setParameter('statut', $statut)
            ->getSingleScalarResult();
        return $count;
    }

    // Retourne les i dernieres mines de la base
    public function findLast($i){
        $qb = $this->_em->createQueryBuilder();

        $qb -> select('a')
            -> from('FeodBundle:Mines','a')
            -> where('a.statut = 3')
            -> orderBy('a.dateMAJ','DESC')
            ->setMaxResults($i);

        return $qb->getQuery()
            ->getResult();
    }
    
        public function recherchenommines($chaine)
    {
        $qb = $this->createQueryBuilder('u')
        ->select('u')
        ->where('LOCATE(UPPER(:chaine),UPPER(u.nomine)) != 0')
        ->orwhere('LOCATE(UPPER(:chaine),UPPER(u.denominationOTAN)) != 0')
        ->orwhere('LOCATE(UPPER(:chaine),UPPER(u.alias)) != 0')
        ->orderBy('u.dateMAJ', 'DESC')
        ->setParameter('chaine', $chaine);
        
        return $qb->getQuery()
            ->getResult();
    }
    
    public function recherchepoidsmines($chaine)
    {

         $qb = $this->_em->createQueryBuilder();
        //$qb = $this->createQueryBuilder('u');        
        $qb -> select('a')
        ->from('FeodBundle:Mines','a')
        ->where('a.poidsMine = :chaine')
        ->orwhere('a.poidsMineCalcule = :chaine')
        ->orderBy('a.dateMAJ', 'DESC')
        ->setParameter('chaine', $chaine);
        
        return $qb->getQuery()
            ->getResult();
    }
    
    public function recherchecouleurmines($chaine)
    {

         $qb = $this->_em->createQueryBuilder();
        //$qb = $this->createQueryBuilder('u');        
        $qb -> select('m')
        ->from('FeodBundle:Mines','m')
        ->Join('m.couleurPrincipale', 'v')
        ->leftjoin('m.couleurSecondaire', 'x')
        ->where('LOCATE(UPPER(:chaine),UPPER(v.couleurFond)) != 0')
        ->orWhere('LOCATE(UPPER(:chaine),UPPER(x.couleurFond)) != 0')
        ->orderBy('m.dateMAJ', 'DESC')
        ->setParameter('chaine', $chaine);
        
        return $qb->getQuery()
            ->getResult();
    }

}
