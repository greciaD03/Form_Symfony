<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MySqlController extends AbstractController
{
    #[Route('/mysql', name: 'app_my_sql')]
    public function index(): Response
    {
        if (isset($_POST['register'])) {
            if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $fechareg = date("d/m/y");
                $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
                $resultado = mysqli_query($conex,$consulta);
            }
        }
    return $this->render('my_sql/index.html.twig', [
        'controller_name' => 'MySqlController',
    ]);
    }
}