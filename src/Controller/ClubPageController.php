<?php

namespace App\Controller;

use App\Repository\ClubRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ClubPageController extends AbstractController
{
    #[Route("/clubs", name: "clubs")]
    public function clubpage(ClubRepository $clubRepository): Response
    {
        // Fetch the club from the database
        $clubs = $clubRepository->findAllOrderedByName();

        return $this->render('main/clubpage.html.twig', [
            'clubs' => $clubs,
        ]);
    }
}
