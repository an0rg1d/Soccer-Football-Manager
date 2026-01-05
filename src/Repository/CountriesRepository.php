<?php

namespace App\Repository;

use App\Entity\Countries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CountriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Countries::class);
    }

    public function findAll(): array
    {
        return $this->findBy([], ['ranking' => 'ASC']);
    }

    public function findAllOrderedByRanking(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.ranking', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
