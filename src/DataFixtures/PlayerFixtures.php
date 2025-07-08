<?php

namespace App\DataFixtures;

use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $playersData = [
            // [name, position, club, country, goals, assists, yellowCards, redCards, marketValue]
            ['Lionel Messi', 'Center Attacking Midfielder', 'Inter Miami', 'Argentina', 847, 403, 93, 3, 50000000],
            ['Cristiano Ronaldo', 'Forward', 'Al Nassr', 'Portugal', 937, 273, 125, 11, 40000000],
            ['Kylian Mbappé', 'Forward', 'Real Madrid', 'France', 359, 118, 58, 3, 180000000],
            ['Erling Haaland', 'Forward', 'Manchester City', 'Norway', 284, 51, 27, 0, 180000000],
            ['Kevin De Bruyne', 'Center Midfielder', 'Manchester City', 'Belgium', 161, 303, 79, 4, 55000000],
            ['Luka Modrić', 'Center Midfielder', 'Real Madrid', 'Croatia', 112, 282, 87, 2, 50000000],
            ['Virgil van Dijk', 'Center Back Defender', 'Liverpool', 'Netherlands', 52, 26, 112, 5, 80000000],
            ['Karim Benzema', 'Forward', 'Al Ittihad', 'France', 459, 189, 98, 3, 30000000],
            ['Sadio Mané', 'Forward', 'Al Nassr', 'Senegal', 255, 135, 63, 2, 29000000],
            ['Mohamed Salah', 'Right Winger/Midfielder', 'Liverpool', 'Egypt', 350, 155, 52, 1, 120000000],
            ['Robert Lewandowski', 'Forward', 'Barcelona', 'Poland', 611, 120, 79, 2, 12000000],
            ['Pedri', 'Center Defensive Midfielder', 'Barcelona', 'Spain', 34, 62, 17, 0, 170000000],
            ['Jude Bellingham', 'Center Midfielder', 'Real Madrid', 'England', 92, 71, 44, 1, 190000000],
            ['Vinicius Jr.', 'Left Forward', 'Real Madrid', 'Brazil', 128, 114, 54, 3, 180000000],
            ['Bukayo Saka', 'Right Forward', 'Arsenal', 'England', 75, 89, 44, 1, 99000000],
            ['Paul Pogba', 'Center Defensive Midfielder', 'Monaco', 'France', 78, 98, 82, 6, 20000000],
            ['Lamine Yamal', 'Right Winger/Midfielder', 'Barcelona', 'Barcelona', 29, 33, 12, 0, 200000000],
            ['Jordi Alba', 'Center Midfielder', 'Inter Miami', 'Spain', 52, 153, 122, 5, 15000000],
            ['Arda Guler', 'Right Winger/Midfielder', 'Real Madrid', 'Turkey', 35, 36, 12, 0, 65000000],
            ['Neymar Junior.', 'Left Winger', 'Santos', 'Brazil', 459, 312, 134, 8, 40000000],
            ['David Beckham', 'Left Winger', 'Retired', 'England', 129, 247, 105, 6, 2000000],
            ['🕊️Diogo Jota','🕊️Forward', 'Liverpool', '🕊️Portugal', 133, 67, 13, 2, 85000000],
            ['Andre Silva','Forward', 'FC Porto', 'Portugal', 59, 77, 13, 3, 35000000],
            ['Thiery Henry','Left Winger', 'Retired', 'France', 477, 329, 68, 7, 110000],
            ['Gareth Bale','Right Winger', 'Retired', 'Wales', 341, 159, 45, 5, 110000],
            ['Ousmane Dembele', 'Forward', 'Paris Saint-Germain', 'France', 106, 96, 32, 3, 90000000],
            ['Desire Doue', 'Right Winger', 'Paris Saint-Germain', 'France', 79, 115, 8, 1, 90000000],
            ['Khvicha Kvaratskhelia', 'Left Winger', 'Paris Saint-Germain', 'Georgia', 75, 46, 36, 1, 90000000],
            ['Gianluigi Donnarumma', 'GoalKeeper', 'Paris Saint-Germain', 'Italy', 0, 0, 3, 0, 50000000],
            ['Mark Andre Ter-Stegen','Goalkeeper', 'Barcelona', 'Germany', 0, 0, 1, 0, 10000000],
            ['Raphinha','Left Winger', 'Barcelona', 'Brazil', 116, 78, 67, 1, 90000000],
            ['Cole Palmer','Center Attacking Midfielder', 'Chelsea', 'England', 90, 51, 25, 1, 120000000],
            ['Phil Foden','Forward', 'Manchester City', 'England', 125, 83, 16, 1, 100000000],
            ['Ronaldinho','Left Winger', 'Retired', 'Brazil', 335, 245, 48, 5, 100000],
            ['Thomas Muler','Center Defensive Midfielder', 'Bayern', 'Germany', 245, 345, 67, 5, 12000000],
            ['Didier Drogba','Forward','Retired','Cote d Ivoire', 471, 123, 48, 100000],
            ['Samuel Eto-o','Forward', 'Retired', 'Cameroon', 543, 288, 65, 8, 100000],
        ];

        foreach ($playersData as $data) {
            $player = new Player();
            $player->setName($data[0])
                   ->setPosition($data[1])
                   ->setClub($data[2])
                   ->setCountry($data[3])
                   ->setGoals($data[4])
                   ->setAssists($data[5])
                   ->setYellowCards($data[6])
                   ->setRedCards($data[7])
                   ->setMarketvalue($data[8]);

            $manager->persist($player);
        }

        $manager->flush();
    }
}
