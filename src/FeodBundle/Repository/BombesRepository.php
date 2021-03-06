<?php

namespace FeodBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * BombesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BombesRepository extends EntityRepository
{

    public function countAll(){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Bombes a')
            ->getSingleScalarResult();
        return $count;
    }

    public function CountByMunitionId($munitionId){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Bombes a
            WHERE a.munitionId = :munitionId')
            ->setParameter('munitionId', $munitionId)
            ->getSingleScalarResult();
        return $count;
    }

    public function countByStatut($statut){
        $count = $this->getEntityManager()
            ->createQuery('SELECT COUNT(a.id) FROM FeodBundle:Bombes a
            WHERE a.statut = :statut')
            ->setParameter('statut', $statut)
            ->getSingleScalarResult();
        return $count;
    }

    // Retourne les i dernieres Bombes de la base
    public function findLast($i){
        $qb = $this->_em->createQueryBuilder();

        $qb -> select('a')
            -> from('FeodBundle:Bombes','a')
            -> where('a.statut = 3')
            -> orderBy('a.dateMAJ','DESC')
            ->setMaxResults($i);

        return $qb->getQuery()
            ->getResult();
    }

    public function recherchenombombes($chaine)
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
    
    public function recherchepaysbombes($chaine)
    {
        $qb = $this->createQueryBuilder('u')
        ->select('u')
        ->join('u.pays', 'c')
        ->leftjoin('u.paysAcquereur', 'p')
        ->leftjoin('u.retrouveEn', 'r')
        ->where('LOCATE(UPPER(:chaine),UPPER(c.pays)) != 0')
        ->orWhere('LOCATE(UPPER(:chaine),UPPER(p.pays)) != 0')
        ->orwhere('LOCATE(UPPER(:chaine),UPPER(r.pays)) != 0')
        ->orderBy('u.dateMAJ', 'DESC')
        ->setParameter('chaine', $chaine);
        
        return $qb->getQuery()
            ->getResult();
    }
    
    public function recherchepoidsbombes($chaine)
    {

         $qb = $this->_em->createQueryBuilder();
        //$qb = $this->createQueryBuilder('u');        
        
         $qb -> select('a')
        ->from('FeodBundle:Bombes','a')
        //->where('LOCATE(UPPER(:chaine),UPPER(a.poids)) != 0')
        ->where('a.Poids = :chaine')
        ->orwhere('a.PoidsMunCalcule = :chaine')
        ->orderBy('a.dateMAJ', 'DESC')
        ->setParameter('chaine', $chaine);
        
        return $qb->getQuery()
            ->getResult();
    }
    
    public function recherchecouleurbombes($chaine)
    {

         $qb = $this->_em->createQueryBuilder();
        //$qb = $this->createQueryBuilder('u');        
        $qb -> select('m')
        ->from('FeodBundle:Bombes','m')
        ->Join('m.CouleurCorps', 'v')
        //->leftjoin('a.couleurOgive', 'x')
        ->where('LOCATE(UPPER(:chaine),UPPER(v.couleurFond)) != 0')
        //->orWhere('LOCATE(UPPER(:chaine),UPPER(x.couleurFond)) != 0')
        ->orderBy('m.dateMAJ', 'DESC')
        ->setParameter('chaine', $chaine);
        
        return $qb->getQuery()
            ->getResult();
    }
    
    public function recherchecalibrebombes($chaine)
    {

         $qb = $this->_em->createQueryBuilder();
        //$qb = $this->createQueryBuilder('u');        
        $qb -> select('m')
        ->from('FeodBundle:Bombes','m')
        ->where('LOCATE(UPPER(:chaine),UPPER(m.Diametre)) != 0')
        //->orWhere('LOCATE(UPPER(:chaine),UPPER(m.calibreCalcul)) != 0')
        ->orderBy('m.dateMAJ', 'DESC')
        ->setParameter('chaine', $chaine);
        
        return $qb->getQuery()
            ->getResult();
    }
}
