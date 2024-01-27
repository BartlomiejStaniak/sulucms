<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Programmer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Programmer>
 *
 * @method Programmer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Programmer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Programmer[] findAll()
 * @method Programmer[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programmer::class);
    }

//    /**
//     * @return Programmer[] Returns an array of Programmer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Programmer
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}