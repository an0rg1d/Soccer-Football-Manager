<?php

namespace App\Entity;


use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
#[ORM\Table(name: "club")]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $name;

    #[ORM\Column(type: "string", length: 255)]
    private string $league;

    #[ORM\Column(type: "string", length: 255)]
    private string $country;

    #[ORM\Column(type: "string", length: 255)]
    private string $city;

    #[ORM\Column(type: "string", length: 255)]
    private string $stadium;

    #[ORM\Column(type: "string", length: 255)]
    private string $manager;

    #[ORM\Column(type: 'integer')]
    private int $yearFounded;

    #[ORM\Column(type: 'integer')]
    private int $marketValue;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Club
     */
    public function setId(?int $id): Club
    {
        $this->id = $id;
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
     * @return Club
     */
    public function setName(string $name): Club
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeague(): string
    {
        return $this->league;
    }

    /**
     * @param string $league
     * @return Club
     */
    public function setLeague(string $league): Club
    {
        $this->league = $league;
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
     * @return Club
     */
    public function setCountry(string $country): Club
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Club
     */
    public function setCity(string $city): Club
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getStadium(): string
    {
        return $this->stadium;
    }

    /**
     * @param string $stadium
     * @return Club
     */
    public function setStadium(string $stadium): Club
    {
        $this->stadium = $stadium;
        return $this;
    }

    /**
     * @return string
     */
    public function getManager(): string
    {
        return $this->manager;
    }

    /**
     * @param string $manager
     * @return Club
     */
    public function setManager(string $manager): Club
    {
        $this->manager = $manager;
        return $this;
    }

    /**
     * @return int
     */
    public function getYearFounded(): int
    {
        return $this->yearFounded;
    }

    /**
     * @param int $yearFounded
     * @return Club
     */
    public function setYearFounded(int $yearFounded): Club
    {
        $this->yearFounded = $yearFounded;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarketValue(): int
    {
        return $this->marketValue;
    }

    /**
     * @param int $marketValue
     * @return Club
     */
    public function setMarketValue(int $marketValue): Club
    {
        $this->marketValue = $marketValue;
        return $this;
    }

}
