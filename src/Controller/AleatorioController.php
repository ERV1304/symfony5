<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AleatorioController extends AbstractController
{
    /**
     * @Route("/aleatorio", name="aleatorio")
     */
    public function index(): Response
    {
        $numeroAleatorio = random_int(0, 100);

        return $this->render('aleatorio/index.html.twig', [
            'controller_name' => 'AleatorioController',
            'aleatorio' => $numeroAleatorio,

        ]);
    }
}
