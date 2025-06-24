<?php

namespace App\model;

class Player
{
    public function __construct(
        private int $id,
        private string $name,
        private int $age,
        private string $position,
        private string $marketvalue,
        private string $team,
    )
    {

    }

    public function getTeam(): string
    {
        return $this->team;
    }

    public function setTeam(string $team): Player
    {
        $this->team = $team;
        return $this;
    }

    public function getMarketvalue(): string
    {
        return $this->marketvalue;
    }

    public function setMarketvalue(string $marketvalue): Player
    {
        $this->marketvalue = $marketvalue;
        return $this;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): Player
    {
        $this->position = $position;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): Player
    {
        $this->age = $age;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Player
    {
        $this->name = $name;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Player
    {
        $this->id = $id;
        return $this;
    }
}
