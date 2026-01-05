w<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BrazilPageController extends AbstractController
{
    #Route("/brazil", name: "brazil")
    public function brazilpage():Response
    {
        return $this->render('main/brazilpage.html.twig');
        // Add entity, data fixtures, repo and html twig code pages for the brazil country page.
    }
}
