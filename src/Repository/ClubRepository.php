<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ClubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
        {
        parent::__construct($registry, Club::class);
    }
    // Add your custom methods below
    public function findByLeague(string $club, string $league): array
    {
        return $this->createQueryBuilder('c')
            ->select('p.name, p.goals')
            ->join('c.players', 'p')
            ->where('c.name = :club')
            ->setParameter('club', $club)
            ->orderBy('p.goals', 'DESC')
            ->getQuery()
            ->getResult();
    }

}
