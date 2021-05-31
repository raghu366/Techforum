<?php

namespace App\Repository;

use App\Entity\QuestionComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QuestionComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionComment[]    findAll()
 * @method QuestionComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuestionComment::class);
    }

    // /**
    //  * @return QuestionComment[] Returns an array of QuestionComment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestionComment
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
