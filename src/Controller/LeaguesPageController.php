<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LeaguesPageController extends AbstractController
{
    #[Route("/leagues", name: "leagues" )]
    public function leaguesPage():Response
    {
        return $this->render('main/leagues.html.twig');
    }
}
