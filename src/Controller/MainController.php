<?php

namespace App\Controller;

use App\Repository\PlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'football')]
    public function index(PlayerRepository $playerRepository):Response
    {
        // Fetch the players from the database
        $players = $playerRepository->findAll();

        return $this->render('main/homepage.html.twig', [
            'players' => $players])
            ;
    }
}
