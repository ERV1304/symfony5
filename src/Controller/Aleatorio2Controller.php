<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Aleatorio2Controller extends AbstractController
{
    public function index(): Response
    {
        $numeroAleatorio = random_int(0, 100);

        return new Response('<html><body>Lucky number: ' . $numeroAleatorio . '</body></html>');

    }
}
