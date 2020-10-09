<?php

namespace App\Repository;

use App\Entity\ClientParticulier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method ClientParticulier|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientParticulier|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientParticulier[]    findAll()
 * @method ClientParticulier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientParticulierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientParticulier::class);
    }

    // /**
    //  * @return ClientParticulier[] Returns an array of ClientParticulier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClientParticulier
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
