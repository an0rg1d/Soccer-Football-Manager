<?php

namespace App\Repository;

use App\Entity\Leagues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class LeaguesRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Leagues::class);
    }

    // Return all leagues ordered by different parameters in ascending order.

    public function findAllOrderedByRanking(): array
    {
        return $this->createQueryBuilder('l')
            ->orderBy('l.ranking', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByName(string $name): array
    {
        return $this->createQueryBuilder('l')
            ->where('l.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult();
    }

    public function findByCountry(string $country): array
    {
        return $this->createQueryBuilder('l')
            ->where('l.country = :country')
            ->setParameter('country', $country)
            ->getQuery()
            ->getResult();
    }

}
