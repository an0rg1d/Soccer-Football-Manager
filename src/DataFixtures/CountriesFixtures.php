<?php

namespace App\DataFixtures;

use App\Entity\Countries;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CountriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $countriesData = [
            ['name' => 'Spain', 'ranking' => 1, 'worldCups' => 1, 'bestPlayers' => 'Pedri, Gavi, Rodri', 'marketValue' => 1000],
            ['name' => 'Argentina', 'ranking' => 2, 'worldCups' => 3, 'bestPlayers' => 'Lionel Messi, Julián Álvarez', 'marketValue' => 1100],
            ['name' => 'France', 'ranking' => 3, 'worldCups' => 2, 'bestPlayers' => 'Kylian Mbappé, Antoine Griezmann', 'marketValue' => 1050],
            ['name' => 'England', 'ranking' => 4, 'worldCups' => 1, 'bestPlayers' => 'Harry Kane, Jude Bellingham', 'marketValue' => 950],
            ['name' => 'Brazil', 'ranking' => 5, 'worldCups' => 5, 'bestPlayers' => 'Vinícius Jr., Casemiro', 'marketValue' => 1200],
            ['name' => 'Portugal', 'ranking' => 6, 'worldCups' => 0, 'bestPlayers' => 'Cristiano Ronaldo, Bruno Fernandes', 'marketValue' => 800],
            ['name' => 'Netherlands', 'ranking' => 7, 'worldCups' => 0, 'bestPlayers' => 'Virgil van Dijk, Frenkie de Jong', 'marketValue' => 750],
            ['name' => 'Belgium', 'ranking' => 8, 'worldCups' => 0, 'bestPlayers' => 'Kevin De Bruyne, Romelu Lukaku', 'marketValue' => 650],
            ['name' => 'Germany', 'ranking' => 9, 'worldCups' => 4, 'bestPlayers' => 'Jamal Musiala, İlkay Gündoğan', 'marketValue' => 850],
            ['name' => 'Croatia', 'ranking' => 10, 'worldCups' => 0, 'bestPlayers' => 'Luka Modrić, Mateo Kovačić', 'marketValue' => 400],
            ['name' => 'Morocco', 'ranking' => 11, 'worldCups' => 0, 'bestPlayers' => 'Achraf Hakimi, Youssef En-Nesyri', 'marketValue' => 300],
            ['name' => 'Italy', 'ranking' => 12, 'worldCups' => 4, 'bestPlayers' => 'Federico Chiesa, Marco Verratti', 'marketValue' => 700],
            ['name' => 'Colombia', 'ranking' => 13, 'worldCups' => 0, 'bestPlayers' => 'Luis Díaz, James Rodríguez', 'marketValue' => 350],
            ['name' => 'USA', 'ranking' => 14, 'worldCups' => 0, 'bestPlayers' => 'Christian Pulisic, Weston McKennie', 'marketValue' => 250],
            ['name' => 'Mexico', 'ranking' => 15, 'worldCups' => 0, 'bestPlayers' => 'Hirving Lozano, Raúl Jiménez', 'marketValue' => 200],
            ['name' => 'Uruguay', 'ranking' => 16, 'worldCups' => 2, 'bestPlayers' => 'Darwin Núñez, Federico Valverde', 'marketValue' => 300],
            ['name' => 'Switzerland', 'ranking' => 17, 'worldCups' => 0, 'bestPlayers' => 'Granit Xhaka, Yann Sommer', 'marketValue' => 250],
            ['name' => 'Japan', 'ranking' => 18, 'worldCups' => 0, 'bestPlayers' => 'Takumi Minamino, Yuya Osako', 'marketValue' => 200],
            ['name' => 'Senegal', 'ranking' => 19, 'worldCups' => 0, 'bestPlayers' => 'Sadio Mané, Kalidou Koulibaly', 'marketValue' => 180],
            ['name' => 'Iran', 'ranking' => 20, 'worldCups' => 0, 'bestPlayers' => 'Sardar Azmoun, Mehdi Taremi', 'marketValue' => 120],
            ['name' => 'Denmark', 'ranking' => 21, 'worldCups' => 0, 'bestPlayers' => 'Christian Eriksen, Kasper Schmeichel', 'marketValue' => 300],
            ['name' => 'South Korea', 'ranking' => 22, 'worldCups' => 0, 'bestPlayers' => 'Son Heung-min, Kim Min-jae', 'marketValue' => 150],
            ['name' => 'Ecuador', 'ranking' => 23, 'worldCups' => 0, 'bestPlayers' => 'Enner Valencia, Moisés Caicedo', 'marketValue' => 100],
            ['name' => 'Austria', 'ranking' => 24, 'worldCups' => 0, 'bestPlayers' => 'Marcel Sabitzer, David Alaba', 'marketValue' => 200],
            ['name' => 'Türkiye', 'ranking' => 25, 'worldCups' => 0, 'bestPlayers' => 'Hakan Çalhanoğlu, Burak Yılmaz', 'marketValue' => 180],
            ['name' => 'Australia', 'ranking' => 26, 'worldCups' => 0, 'bestPlayers' => 'Mat Ryan, Aaron Mooy', 'marketValue' => 80],
            ['name' => 'Canada', 'ranking' => 27, 'worldCups' => 0, 'bestPlayers' => 'Alphonso Davies, Jonathan David', 'marketValue' => 120],
            ['name' => 'Ukraine', 'ranking' => 28, 'worldCups' => 0, 'bestPlayers' => 'Oleksandr Zinchenko, Andriy Yarmolenko', 'marketValue' => 150],
            ['name' => 'Norway', 'ranking' => 29, 'worldCups' => 0, 'bestPlayers' => 'Erling Haaland, Martin Ødegaard', 'marketValue' => 400],
            ['name' => 'Panama', 'ranking' => 30, 'worldCups' => 0, 'bestPlayers' => 'Román Torres, Gabriel Torres', 'marketValue' => 50],
            ['name' => 'Poland', 'ranking' => 31, 'worldCups' => 0, 'bestPlayers' => 'Robert Lewandowski, Piotr Zieliński', 'marketValue' => 250],
            ['name' => 'Wales', 'ranking' => 32, 'worldCups' => 0, 'bestPlayers' => 'Gareth Bale, Aaron Ramsey', 'marketValue' => 120],
            ['name' => 'Russia', 'ranking' => 33, 'worldCups' => 0, 'bestPlayers' => 'Aleksandr Golovin, Artem Dzyuba', 'marketValue' => 100],
            ['name' => 'Algeria', 'ranking' => 34, 'worldCups' => 0, 'bestPlayers' => 'Riyad Mahrez, Islam Slimani', 'marketValue' => 150],
            ['name' => 'Egypt', 'ranking' => 35, 'worldCups' => 0, 'bestPlayers' => 'Mohamed Salah, Mohamed Elneny', 'marketValue' => 200],
            ['name' => 'Scotland', 'ranking' => 36, 'worldCups' => 0, 'bestPlayers' => 'Andy Robertson, Scott McTominay', 'marketValue' => 150],
            ['name' => 'Serbia', 'ranking' => 37, 'worldCups' => 0, 'bestPlayers' => 'Dušan Tadić, Aleksandar Mitrović', 'marketValue' => 180],
            ['name' => 'Nigeria', 'ranking' => 38, 'worldCups' => 0, 'bestPlayers' => 'Victor Osimhen, Wilfred Ndidi', 'marketValue' => 200],
            ['name' => 'Paraguay', 'ranking' => 39, 'worldCups' => 0, 'bestPlayers' => 'Miguel Almirón, Gustavo Gómez', 'marketValue' => 80],
            ['name' => 'Hungary', 'ranking' => 40, 'worldCups' => 0, 'bestPlayers' => 'Dominik Szoboszlai, Péter Gulácsi', 'marketValue' => 120],
            ['name' => 'Tunisia', 'ranking' => 41, 'worldCups' => 0, 'bestPlayers' => 'Wahbi Khazri, Youssef Msakni', 'marketValue' => 80],
            ['name' => 'Ivory Coast', 'ranking' => 42, 'worldCups' => 0, 'bestPlayers' => 'Sébastien Haller, Franck Kessié', 'marketValue' => 150],
            ['name' => 'Sweden', 'ranking' => 43, 'worldCups' => 0, 'bestPlayers' => 'Alexander Isak, Emil Forsberg', 'marketValue' => 200],
            ['name' => 'Czechia', 'ranking' => 44, 'worldCups' => 0, 'bestPlayers' => 'Tomáš Souček, Patrik Schick', 'marketValue' => 150],
            ['name' => 'Slovakia', 'ranking' => 45, 'worldCups' => 0, 'bestPlayers' => 'Marek Hamšík, Milan Škriniar', 'marketValue' => 100],
            ['name' => 'Greece', 'ranking' => 46, 'worldCups' => 0, 'bestPlayers' => 'Kostas Fortounis, Giorgos Masouras', 'marketValue' => 80],
            ['name' => 'Romania', 'ranking' => 47, 'worldCups' => 0, 'bestPlayers' => 'Nicolae Stanciu, Ianis Hagi', 'marketValue' => 100],
            ['name' => 'Venezuela', 'ranking' => 48, 'worldCups' => 0, 'bestPlayers' => 'Salomón Rondón, Yangel Herrera', 'marketValue' => 70],
            ['name' => 'Costa Rica', 'ranking' => 49, 'worldCups' => 0, 'bestPlayers' => 'Keylor Navas, Joel Campbell', 'marketValue' => 60],
            ['name' => 'Uzbekistan', 'ranking' => 50, 'worldCups' => 0, 'bestPlayers' => 'Eldor Shomurodov, Otabek Shukurov', 'marketValue' => 40],
        ];

        foreach ($countriesData as $data) {
            $country = new Countries();
            $country->setName($data['name']);
            $country->setRanking($data['ranking']);
            $country->setWorldCups($data['worldCups']);
            $country->setBestPlayers($data['bestPlayers']);
            $country->setMarketValue($data['marketValue']);

            $manager->persist($country);
        }

        $manager->flush();
    }
}
