<?php
// src/Controller/HomeController.php
namespace App\Controller;

use App\Entity\Program;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
      /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
        ->getRepository(Program::class)
        ->findAll(null, 3);

        return $this->render(
            'program/index.html.twig',
            ['programs' => $programs]
        );
    }
}

