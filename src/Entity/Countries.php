<?php

namespace App\Entity;

use App\Repository\CountriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CountriesRepository::class)]
#[ORM\Table(name: "countries")]
class Countries
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(type: "string", length: 255)]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $ranking;

    #[ORM\Column(type: 'integer')]
    private $worldCups;

    #[ORM\Column(type: 'string', length: 255)]
    private $bestPlayers;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Countries
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * @param mixed $ranking
     * @return Countries
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorldCups()
    {
        return $this->worldCups;
    }

    /**
     * @param mixed $worldCups
     * @return Countries
     */
    public function setWorldCups($worldCups)
    {
        $this->worldCups = $worldCups;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBestPlayers()
    {
        return $this->bestPlayers;
    }

    /**
     * @param mixed $bestPlayers
     * @return Countries
     */
    public function setBestPlayers($bestPlayers)
    {
        $this->bestPlayers = $bestPlayers;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarketValue()
    {
        return $this->marketValue;
    }

    /**
     * @param mixed $marketValue
     * @return Countries
     */
    public function setMarketValue($marketValue)
    {
        $this->marketValue = $marketValue;
        return $this;
    }

    #[ORM\Column(type: 'integer')]
    private $marketValue;

    public function getId():?int
    {
        return $this->id;
    }
}
