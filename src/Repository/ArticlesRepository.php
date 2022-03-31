<?php

namespace App\Repository;

use App\Entity\Articles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Articles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Articles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Articles[]    findAll()
 * @method Articles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Articles::class);
    }

    /**
     * @return Articles[] Returns an array of Articles objects
     */

    public function findArticles()//equivalent a SELECT Categories
    {
        return $this->createQueryBuilder('a')

            ->orderBy('a.id', 'ASC')
            ->join('a.categories', 'cat')//Ici on fait une jointure entre les entités Articles et Catégorie
            ->addSelect('cat')
            ->getQuery()
            ->getResult()
            ;
    }


    /*
    public function findOneBySomeField($value): ?Articles
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
