<?php

namespace App\Controller;

use App\Repository\LeaguesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LeaguesPageController extends AbstractController
{
    #[Route("/leagues", name: "leagues" )]
    public function leaguesPage(LeaguesRepository $leaguesRepository):Response
    {
        $leagues = $leaguesRepository->findAllOrderedByRanking();

        return $this->render('main/leagues.html.twig', ['leagues' => $leagues]);
    }
}
