<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
#[ORM\Table(name: 'player')]
class Player
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int  $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'string', length: 255)]
    private string $position;

    #[ORM\Column(type: 'string', length: 255)]
    private string $club;

    #[ORM\Column(type: 'string', length: 255)]
    private string $country;

    #[ORM\Column(type: 'integer')]
    private int $goals;

    #[ORM\Column(type: 'integer')]
    private int $assists;

    #[ORM\Column(type: 'integer')]
    private int $yellowCards;

    #[ORM\Column(type: 'integer')]
    private int $redCards;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
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
     * @return Player
     */
    public function setName(string $name): Player
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return Player
     */
    public function setPosition(string $position): Player
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getClub(): string
    {
        return $this->club;
    }

    /**
     * @param string $club
     * @return Player
     */
    public function setClub(string $club): Player
    {
        $this->club = $club;
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
     * @return Player
     */
    public function setCountry(string $country): Player
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return int
     */
    public function getGoals(): int
    {
        return $this->goals;
    }

    /**
     * @param int $goals
     * @return Player
     */
    public function setGoals(int $goals): Player
    {
        $this->goals = $goals;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssists(): int
    {
        return $this->assists;
    }

    /**
     * @param int $assists
     * @return Player
     */
    public function setAssists(int $assists): Player
    {
        $this->assists = $assists;
        return $this;
    }

    /**
     * @return int
     */
    public function getYellowCards(): int
    {
        return $this->yellowCards;
    }

    /**
     * @param int $yellowCards
     * @return Player
     */
    public function setYellowCards(int $yellowCards): Player
    {
        $this->yellowCards = $yellowCards;
        return $this;
    }

    /**
     * @return int
     */
    public function getRedCards(): int
    {
        return $this->redCards;
    }

    /**
     * @param int $redCards
     * @return Player
     */
    public function setRedCards(int $redCards): Player
    {
        $this->redCards = $redCards;
        return $this;
    }

    /**
     * Get total cards (yellow + red)
     * @return int
     */
    public function getTotalCards(): int
    {
        return $this->yellowCards + $this->redCards;
    }

    /**
     * Get goal contributions (goals + assists)
     * @return int
     */
    public function getGoalContributions(): int
    {
        return $this->goals + $this->assists;
    }
}
