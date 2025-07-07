<?php

namespace App\DataFixtures;

use App\Entity\Club;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClubFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $clubsData = [
            // [name, league, country, city, stadium, manager, yearFounded, marketValue]
            ['Real Madrid', 'La Liga', 'Spain', 'Madrid', 'Santiago Bernabeu', 'Xabi Alonso', 1902, 1000000000],
            ['Barcelona', 'La Liga', 'Spain', 'Barcelona', 'Camp Nou', 'Hansi Flick', 1899, 820000000],
            ['Manchester United', 'Premier League', 'England', 'Manchester', 'Old Trafford', 'Ruben Amorim', 1878, 400000000],
            ['Chelsea', 'Premier League', 'England', 'London', 'Stamford Bridge', 'Enzo Maresca', 1905, 545000000],
            ['Liverpool', 'Premier League', 'England', 'Liverpool', 'Anfield', 'Arne Slot', 1892, 900000000],
            ['Arsenal', 'Premier League', 'England', 'London', 'Emirates Stadium', 'Mikel Arteta', 1886, 570000000],
            ['Juventus', 'Serie A', 'Italy', 'Turin', 'Allianz Stadium', 'Thiago Motta', 1897, 298000000],
            ['Bayern Munich', 'Bundesliga', 'Germany', 'Munich', 'Allianz Arena', 'Vincent Kompany', 1900, 855000000],
            ['Atletico Madrid', 'La Liga', 'Spain', 'Madrid', 'Riyadh Air Metropolitano', 'Diego Simeone', 1903, 455000000],
            ['Valencia', 'La Liga', 'Spain', 'Valencia', 'Mestalla', 'Ruben Baraja', 1919, 100000000],
            ['Ajax', 'Eredivisie', 'Netherlands', 'Amsterdam', 'Johan Cruyff Arena', 'Francesco Farioli', 1900, 98000000],
            ['Paris Saint German', 'Ligue 1', 'France', 'Paris', 'Parc des Princes', 'Luis Enrique', 1970, 835000000],
            ['Manchester City', 'Premier League', 'England', 'Manchester', 'Etihad Stadium', 'Pep Guardiola', 1905, 856000000],
            ['Inter Milan', 'Serie A', 'Italy', 'Milan', 'San Siro', 'Giovanni Conte', 1891, 324000000],
            ['Al Nassr', 'Saudi League 1', 'Saudi Arabia', 'Riyadh', 'Al Nassr Stadium', 'Mohammed Al-Sawal', 1998, 155000000],
            ['Sevilla', 'La Liga', 'Spain', 'Sevilla', 'La Canal', 'Gonzalo Ramos', 1905, 199000000],
            ['Inter Miami', 'MLS', 'United States', 'Miami', 'Chase Stadium', 'Giorgio Chiellini', 1891, 155000000],
            ['Tottenham Hotspur', 'Premier League', 'England', 'London', 'White Hart Lane', 'Geoffrey Mane', 1878, 570000000],
            ['AS Monaco', 'Ligue 1', 'France', 'Monaco', 'Stade de France', 'Jean-Paul Piquet', 1905, 400000000],
            ['Bayern Dortmund', 'Bundesliga', 'Germany', 'Dortmund', 'Brandenburg Arena', 'Josef Müller', 1900, 855000000],
            ['AC Milan', 'Serie A', 'Italy', 'Milan', 'San Siro', 'Giovanni Conte', 1891, 324000333],
            ['Nottingham Forest', 'Premier League', 'England', 'Nottingham', 'St. James Park', 'Jamie Murray', 1878, 786000000],
            ['Crystal Palace', 'Premier League', 'England', 'London', 'Selhurst Park', 'Jamie Carragher', 1878, 78000000],

        ];

        foreach ($clubsData as $clubData) {
            $club = new Club();
            $club->setName($clubData[0])
                 ->setLeague($clubData[1])
                 ->setCountry($clubData[2])
                 ->setCity($clubData[3])
                 ->setStadium($clubData[4])
                 ->setManager($clubData[5])
                 ->setYearFounded($clubData[6])
                 ->setMarketValue($clubData[7]);

            $manager->persist($club);
        }

        $manager->flush();
    }
}
