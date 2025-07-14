<?php

namespace App\DataFixtures;

use App\Entity\Leagues;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LeaguesFixtures extends Fixture
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
    {
        // ranking, name, country
        $leaguesData = [
            [1,'Premier League','England'],
            [2,'La Liga','Spain'],
            [3,'Bundesliga','Germany'],
            [4,'Serie A','Italy'],
            [5,'Ligue 1','France'],
            [6,'Eredivisie','Netherlands'],
            [7,'Primeira Liga','Portugal'],
            [8,'Brasileirao','Brazil'],
            [9,'Major League Soccer','Unites States'],
            [10,'Belgian Pro League','Belgium'],
            [11,'Argentine Primera Division','Argentina'],
            [12,'Saudi Pro League','Saudi Arabia'],
            [13,'Championship','England'],
            [14,'Liga Portugal 2','Portugal'],
            [15,'Austrian Bundesliga','Austria'],
        ];

        foreach($leaguesData as $data) {
            $leagues = new Leagues();
            $leagues->setRanking($data[0])
                    ->setName($data[1])
                    ->setCountry($data[2]);

            $manager->persist($leagues);
        }

        $manager->flush();
    }
}
