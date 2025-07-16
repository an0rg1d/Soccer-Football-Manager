<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CountriesRepository;

class CountriesPageController extends AbstractController
{
    #[Route('/countries', name: 'main')]
    public function countriespage(CountriesRepository $countriesRepository):Response
    {
        $countries = $countriesRepository->findAllOrderedByName();

        return $this->render('main/countries.html.twig', [
            'countries' => $countries
        ]);
    }
}
