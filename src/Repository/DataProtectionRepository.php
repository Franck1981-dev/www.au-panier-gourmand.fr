<?php

namespace App\Repository;

use App\Entity\DataProtection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataProtection|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataProtection|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataProtection[]    findAll()
 * @method DataProtection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataProtectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataProtection::class);
    }

    // /**
    //  * @return DataProtection[] Returns an array of DataProtection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DataProtection
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
