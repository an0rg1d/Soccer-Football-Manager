<?php

namespace App\Repository;

use App\Entity\Club;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ClubRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
        {
        parent::__construct($registry, Club::class);
    }

    // methods section, find by something
    public function findAllOrderedByName(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // Find all clubs by league
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

    // Find all clubs by country
    public function findByCountry(string $club, string $country): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.name = :club')
            ->setParameter('club', $club)
            ->andWhere('c.country = :country')
            ->setParameter('country', $country)
            ->getQuery()
            ->getResult();
    }

    // Find all clubs by city
    public function findByCity(string $club, string $city): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.name = :club')
            ->setParameter('club', $club)
            ->andWhere('c.city = :city')
            ->setParameter('city', $city)
            ->getQuery()
            ->getResult();
    }

    // Find all clubs by stadium
    public function findByStadium(string $club, string $stadium): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.name = :club')
            ->setParameter('club', $club)
            ->andWhere('c.stadium = :stadium')
            ->setParameter('stadium', $stadium)
            ->getQuery()
            ->getResult();
    }

    // Find all clubs by manager
    public function findByManager(string $club, string $manager): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.name = :club')
            ->setParameter('club', $club)
            ->andWhere('c.manager = :manager')
            ->setParameter('manager', $manager)
            ->getQuery()
            ->getResult();
    }

    // Find all clubs by year founded
    public function findByYearFounded(int $club, int $yearFounded): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.name = :club')
            ->setParameter('club', $club)
            ->andWhere('c.yearFounded = :yearFounded')
            ->setParameter('yearFounded', $yearFounded)
            ->getQuery()
            ->getResult();
    }

    // Find all clubs by market value
    public function findByMarketValue(int $club, int $marketValue): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.name = :club')
            ->setParameter('club', $club)
            ->andWhere('c.marketValue = :marketValue')
            ->setParameter('marketValue', $marketValue)
            ->getQuery()
            ->getResult();
    }

}
