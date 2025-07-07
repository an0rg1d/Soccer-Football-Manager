<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
#[ORM\Table(name: 'club')]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'string', length: 255)]
    private string $league;

    #[ORM\Column(type: 'string', length: 255)]
    private string $country;

    #[ORM\Column(type: 'string', length: 255)]
    private string $city;

    #[ORM\Column(type: 'string', length: 255)]
    private string $stadium;

    #[ORM\Column(type: 'string', length: 255)]
    private string $manager;

    #[ORM\Column(type: 'integer')]
    private int $yearFounded;

    #[ORM\Column(type: 'integer')]
    private int $marketValue;

    // Getters and setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getLeague(): string
    {
        return $this->league;
    }

    public function setLeague(string $league): self
    {
        $this->league = $league;
        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getStadium(): string
    {
        return $this->stadium;
    }

    public function setStadium(string $stadium): self
    {
        $this->stadium = $stadium;
        return $this;
    }

    public function getManager(): string
    {
        return $this->manager;
    }

    public function setManager(string $manager): self
    {
        $this->manager = $manager;
        return $this;
    }

    public function getYearFounded(): int
    {
        return $this->yearFounded;
    }

    public function setYearFounded(int $yearFounded): self
    {
        $this->yearFounded = $yearFounded;
        return $this;
    }

    public function getMarketValue(): int
    {
        return $this->marketValue;
    }

    public function setMarketValue(int $marketValue): self
    {
        $this->marketValue = $marketValue;
        return $this;
    }
}
