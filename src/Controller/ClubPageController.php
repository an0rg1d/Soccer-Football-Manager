<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class ClubPageController extends AbstractController
{
    #[Route("/", name: "club_page")]
    public function clubpage(ClubRepository $clubRepository):Response
    {
        // Fetch the club from the database
        $clubs = $clubRepository->findAllBy();

        return $this->render('club_page/clubpage.html.twig', [
            'club' => $clubs])
            ;
    }
}
