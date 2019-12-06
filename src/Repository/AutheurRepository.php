<?php

namespace App\Repository;

use App\Entity\Autheur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Autheur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Autheur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Autheur[]    findAll()
 * @method Autheur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutheurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Autheur::class);
    }

    // /**
    //  * @return Autheur[] Returns an array of Autheur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Autheur
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
