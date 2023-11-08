<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function index(): Response
    {
        //print "<pre>";
        //print_r($_REQUEST);
        //print "</pre>\n";
        $number = random_int(0, 100);
        return $this->render('form/index.html.twig', [
            'number' => $number,
        ]); 
    }
}

//https://www.mclibre.org/consultar/php/lecciones/php-controles.html