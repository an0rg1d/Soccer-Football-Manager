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
            // [name, position, club, country, goals, assists, yellowCards, redCards]
            ['Lionel Messi', 'Center Attacking Midfielder', 'Inter Miami', 'Argentina', 847, 403, 93, 3],
            ['Cristiano Ronaldo', 'Forward', 'Al Nassr', 'Portugal', 937, 273, 125, 11],
            ['Kylian Mbappé', 'Forward', 'Real Madrid', 'France', 344, 170, 49, 2],
            ['Erling Haaland', 'Forward', 'Manchester City', 'Norway', 301, 77, 23, 0],
            ['Kevin De Bruyne', 'Center Midfielder', 'Manchester City', 'Belgium', 161, 303, 79, 4],
            ['Luka Modrić', 'Center Midfielder', 'Real Madrid', 'Croatia', 112, 282, 87, 2],
            ['Virgil van Dijk', 'Center Back Defender', 'Liverpool', 'Netherlands', 52, 26, 112, 5],
            ['Karim Benzema', 'Forward', 'Al Ittihad', 'France', 459, 189, 98, 3],
            ['Sadio Mané', 'Forward', 'Al Nassr', 'Senegal', 255, 135, 63, 2],
            ['Mohamed Salah', 'Right Winger/Midfielder', 'Liverpool', 'Egypt', 350, 155, 52, 1],
            ['Robert Lewandowski', 'Forward', 'Barcelona', 'Poland', 633, 155, 73, 2],
            ['Pedri', 'Center Defensive Midfielder', 'Barcelona', 'Spain', 34, 62, 17, 0],
            ['Jude Bellingham', 'Center Midfielder', 'Real Madrid', 'England', 92, 71, 44, 1],
            ['Vinicius Jr.', 'Left Forward', 'Real Madrid', 'Brazil', 128, 114, 54, 3],
            ['Bukayo Saka', 'Right Forward', 'Arsenal', 'England', 75, 89, 44, 1],
            ['Paul Pogba', 'Center Defensive Midfielder', 'Monaco', 'France', 78, 98, 82, 6],
            ['Lamine Yamal', 'Right Winger/Midfielder', 'Barcelona', 'Barcelona', 32, 41, 7, 0],
            ['Jordi Alba', 'Center Midfielder', 'Inter Miami', 'Spain', 52, 153, 122, 5],
            ['Arda Guler', 'Right Winger/Midfielder', 'Real Madrid', 'Turkey', 27, 48, 12, 0],
            ['Neymar Junior.', 'Left Winger', 'Santos', 'Brazil', 459, 312, 134, 8],
            ['David Beckham', 'Left Winger', 'Retired', 'England', 129, 247, 105, 6],
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
                   ->setRedCards($data[7]);

            $manager->persist($player);
        }

        $manager->flush();
    }
}
