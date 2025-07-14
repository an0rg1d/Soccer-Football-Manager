<?php

namespace App\Entity;

use App\Repository\LeaguesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeaguesRepository::class)]
#[ORM\Table(name: 'leagues')]
class Leagues
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private?int  $id = null;

    #[ORM\Column(type:'integer')]
    private int $ranking = 0;

    #[ORM\Column(type:'string', length:255)]
    private string $name;

    #[ORM\Column(type:'string', length:255)]
    private string $country;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Leagues
     */
    public function setId(?int $id): Leagues
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getRanking(): int
    {
        return $this->ranking;
    }

    /**
     * @param int $ranking
     * @return Leagues
     */
    public function setRanking(int $ranking): Leagues
    {
        $this->ranking = $ranking;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Leagues
     */
    public function setName(string $name): Leagues
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Leagues
     */
    public function setCountry(string $country): Leagues
    {
        $this->country = $country;
        return $this;
    }
}
