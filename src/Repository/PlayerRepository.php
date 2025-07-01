<?php

namespace App\Repository;

use App\Entity\Player;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PlayerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Player::class);
    }

    public function findAllOrderedByName(): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByClub(string $club): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.club = :club')
            ->setParameter('club', $club)
            ->orderBy('p.goals', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByCountry(string $country): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.country = :country')
            ->setParameter('country', $country)
            ->orderBy('p.goals', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByPosition(string $position): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.position = :position')
            ->setParameter('position', $position)
            ->orderBy('p.goals', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findTopScorers(int $limit = 10): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.goals', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findTopAssists(int $limit = 10): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.assists', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function searchByName(string $name): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.name LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function getAllClubs(): array
    {
        return $this->createQueryBuilder('p')
            ->select('DISTINCT p.club')
            ->orderBy('p.club', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();
    }

    public function getAllPositions(): array
    {
        return $this->createQueryBuilder('p')
            ->select('DISTINCT p.position')
            ->orderBy('p.position', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();
    }

    public function save(Player $player, bool $flush = false): void
    {
        $this->getEntityManager()->persist($player);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Player $player, bool $flush = false): void
    {
        $this->getEntityManager()->remove($player);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByMarketValueRange(int $minValue, int $maxValue): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.marketvalue BETWEEN :minValue AND :maxValue')
            ->setParameter('minValue', $minValue)
            ->setParameter('maxValue', $maxValue)
            ->orderBy('p.marketvalue', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findMostValuablePlayers(int $limit = 10): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.marketvalue', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function getAverageMarketValueByPosition(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.position, AVG(p.marketvalue) as avgMarketValue')
            ->groupBy('p.position')
            ->orderBy('avgMarketValue', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
