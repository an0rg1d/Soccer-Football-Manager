<?php

namespace App\Controller;

use App\Repository\CountriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CountriesPageController extends AbstractController
{
    #[Route('/countries', name: 'countries')]
    public function countriespage(CountriesRepository $countriesRepository): Response
    {
        $countries = $countriesRepository->findAll();

        return $this->render('main/countries.html.twig', [
            'countries' => $countries
        ]);
    }
}
