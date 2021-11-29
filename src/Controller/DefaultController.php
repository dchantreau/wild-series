<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
      /**
     * @Route("/pageaccueil/", name="app_index")
     */
    public function index(): Response
    {
        return $this->render('program/pageaccueil.html.twig', [
            'website' => 'Bienvenu(e)',
        ]);
    }
}
