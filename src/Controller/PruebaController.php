<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PruebaController extends AbstractController
{
    #[Route('/lucky/number', name: 'app_number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->redirectToRoute('app_inicio', [
            'number' => $number,
        ]); 
    }

    #[Route('/inicio', name: 'app_inicio')]
    public function index(): Response
    {
        return $this->render('prueba/index.html.twig', [
            'controller_name' => 'InicioController',
            'var_nueva' => 'Hola mundo!'
        ]);
    }
}

//'prueba/index.html.twig'
//https://www.youtube.com/watch?v=4lTejxirpv0