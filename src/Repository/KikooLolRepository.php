<?php

namespace App\Repository;

use App\Entity\KikooLol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KikooLol>
 *
 * @method KikooLol|null find($id, $lockMode = null, $lockVersion = null)
 * @method KikooLol|null findOneBy(array $criteria, array $orderBy = null)
 * @method KikooLol[]    findAll()
 * @method KikooLol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KikooLolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KikooLol::class);
    }

//    /**
//     * @return KikooLol[] Returns an array of KikooLol objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('k.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?KikooLol
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
