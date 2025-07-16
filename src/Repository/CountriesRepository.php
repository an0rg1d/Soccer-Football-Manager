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

    public function findAllOrderedByName(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByRanking($limit = 10): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.ranking', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findByWorldCups($limit = 10): array
    {
        return $this->createQueryBuilder('c')
            ->join('c.worldCups', 'wc')
            ->orderBy('wc.year', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findByBestPlayers($limit = 3): array
    {
        return $this->createQueryBuilder('c')
            ->join('c.players', 'p')
            ->orderBy('p.rating', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findByMarketValue($minValue, $maxValue): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.marketValue BETWEEN :minValue AND :maxValue')
            ->setParameter('minValue', $minValue)
            ->setParameter('maxValue', $maxValue)
            ->getQuery()
            ->getResult();
    }
}
