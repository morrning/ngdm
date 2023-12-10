<?php

namespace App\Repository;

use App\Entity\Peer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Peer>
 *
 * @method Peer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Peer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Peer[]    findAll()
 * @method Peer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PeerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Peer::class);
    }

//    /**
//     * @return Peer[] Returns an array of Peer objects
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

//    public function findOneBySomeField($value): ?Peer
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
