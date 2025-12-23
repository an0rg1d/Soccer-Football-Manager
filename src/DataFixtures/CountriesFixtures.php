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
            ['England', 5, 1, ['David Beckham', 'Harry Kane','Wayne Rooney', 'Frank Lampard','Bobby Charlton','Steven Gerrard'], 987888900],
            ['Germany', 4, 4, ['Toni Kroos','Oliver Kahn','Miroslav Klose','Manuel Neuer','Philipp Lahm','Gerd Muller','Franz Beckenbauer'], 877000000],
            ['Italy', 8, 4, ['Gian Luigi Buffon','Roberto Baggio','Francesco Totti','Franco Baresi','Paolo Maldini'], 677333905],
            ['Spain', 2, 1, ['Lamine Yamal', 'Iker Casillas','Xavi','Andres Iniesta','Sergio Ramos'], 756000000],
            ['Argentina', 3, 3, ['Lionel Messi', 'Diego Maradona','Angel Di Maria', 'Mascherano', 'Di Stefano'], 890000000],
            ['France', 1, 2, ['Kylian Mbappe', 'Zinedine Zidane','Thierry Henry','Michel Platini','Just Fontaine'], 945000000],
            ['Belgium', 6, 0, ['Kevin De Bruyne', 'Eden Hazard','Romelu Lukaku','Jan Vertonghen'], 456000000],
            ['Netherlands', 7, 0, ['Virgil van Dijk', 'Johan Cruyff','Marco van Basten','Ruud Gullit','Arjen Robben'], 567000000],
            ['Switzerland', 15, 0, ['Granit Xhaka', 'Yann Sommer','Xherdan Shaqiri'], 234000000],
            ['Portugal', 9, 0, ['Cristiano Ronaldo', 'Luis Figo','Eusebio','Rui Costa','Bruno Fernandes'], 678000000],
            ['Austria', 25, 0, ['Marcel Sabitzer', 'David Alaba','Marko Arnautovic'], 123000000],
            ['Croatia', 10, 0, ['Luka Modric', 'Ivan Rakitic','Davor Suker','Mario Mandzukic'], 345000000],
            ['Scotland', 40, 0, ['Andy Robertson', 'Scott McTominay','Kenny Dalglish'], 89000000],
            ['Sweden', 20, 0, ['Zlatan Ibrahimovic', 'Henrik Larsson','Gunnar Nordahl'], 156000000],
            ['Norway', 50, 0, ['Erling Haaland', 'Martin Odegaard','Ole Gunnar Solskjaer'], 234000000],
            ['Denmark', 18, 0, ['Christian Eriksen', 'Kasper Schmeichel','Peter Schmeichel'], 178000000],
            ['Poland', 30, 0, ['Robert Lewandowski', 'Wojciech Szczesny','Zbigniew Boniek'], 267000000],
            ['Ireland', 60, 0, ['Robbie Keane', 'Roy Keane','Paul McGrath'], 67000000],
            ['Greece', 55, 0, ['Georgios Karagounis', 'Angelos Charisteas'], 45000000],
            ['Turkey', 35, 0, ['Hakan Calhanoglu', 'Arda Turan','Rustu Recber'], 123000000],
            ['Ukraine', 45, 0, ['Andriy Shevchenko', 'Andriy Yarmolenko'], 89000000],
            ['Russia', 70, 0, ['Igor Akinfeev', 'Andrey Arshavin','Lev Yashin'], 156000000],
            ['Serbia', 33, 0, ['Dusan Vlahovic', 'Sergej Milinkovic-Savic','Dejan Stankovic'], 134000000],
            ['Belarus', 80, 0, ['Alexander Hleb'], 23000000],
            ['Hungary', 65, 0, ['Dominik Szoboszlai', 'Ferenc Puskas'], 78000000],
            ['Czech Republic', 42, 0, ['Tomas Soucek', 'Pavel Nedved','Petr Cech'], 98000000],
            ['Slovakia', 75, 0, ['Marek Hamsik', 'Martin Skrtel'], 45000000],
            ['Latvia', 120, 0, ['Marians Pahars'], 12000000],
            ['Lithuania', 130, 0, ['Edgaras Jankauskas'], 8000000],
            ['Estonia', 125, 0, ['Konstantin Vassiljev'], 10000000],
            ['Finland', 85, 0, ['Teemu Pukki', 'Jari Litmanen'], 34000000],
            ['Moldova', 140, 0, ['Alexandru Epureanu'], 5000000],
            ['Kosovo', 110, 0, ['Vedat Muriqi'], 15000000],
            ['Montenegro', 95, 0, ['Stevan Jovetic'], 18000000],
            ['Albania', 100, 0, ['Granit Xhaka'], 22000000],
        ];

        foreach ($countriesData as $data) {
            $country = new Countries();
            $country->setName($data[0]);

            // Set optional fields if they exist
            if (isset($data[1])) $country->setRanking($data[1]);
            if (isset($data[2])) $country->setWorldCups($data[2]);
            if (isset($data[3])) {
                //convert array to JSON string fot database storage
                $bestPlayersJson = json_encode($data[3]);
                $country->setBestPlayers($bestPlayersJson);
            }
            if (isset($data[4])) $country->setMarketValue($data[4]);

            $manager->persist($country);
        }

        $manager->flush();
    }
}
