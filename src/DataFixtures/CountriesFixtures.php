<?php

namespace App\DataFixtures;

use App\Entity\Countries;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CountriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //name, ranking, worldCups, bestPlayers, marketValue
        $countriesData = [
            ['England', 5, 1, ['David Beckham', 'Harry Kane','Wayne Rooney', 'Frank Lampard','Bobby Charlton','Steven Gerrard'], 1500000000000],
            ['Germany',],
            ['Italy',],
            ['Spain',],
            ['France',],
            ['Belgium',],
            ['Netherlands',],
            ['Switzerland',],
            ['Portugal',],
            ['Austria',],
            ['Croatia',],
            ['Scotland',],
            ['Sweden',],
            ['Norway',],
            ['Denmark',],
            ['Poland',],
            ['Ireland',],
            ['Greece',],
            ['Turkey',],
            ['Ukraine',],
            ['Russia',],
            ['Serbia',],
            ['Belarus',],
            ['Hungary',],
            ['Czech Republic',],
            ['Slovakia',],
            ['Latvia',],
            ['Lithuania',],
            ['Estonia',],
            ['Finland',],
            ['Moldova',],
            ['Kosovo',],
            ['Montenegro',],
            ['Albania',]
    }
}
