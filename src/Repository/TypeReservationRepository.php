<?php

namespace App\Repository;

use App\Entity\TypeReservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeReservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeReservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeReservation[]    findAll()
 * @method TypeReservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeReservation::class);
    }

   /* public function findMaxCapacityRoom()
    {
        return $this->createQueryBuilder('r')
            ->select('MAX(r.capacity)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findTotalCapacity()
    {
        return $this->createQueryBuilder('r')
            ->select('SUM(r.capacity)')
            ->getQuery()
            ->getSingleScalarResult();
    }*/

    public function findAllType()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
    /*
    public function findOneBySomeField($value): ?TypeReservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
