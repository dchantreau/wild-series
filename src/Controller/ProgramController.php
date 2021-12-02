<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use App\Entity\Program;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProgramController extends AbstractController
{
    /**
     * Show all rows from Program's entity
     *
     * @Route("/show/",name="program_index")
     * @return Response A response instance
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
        ->getRepository(Program::class)
        ->findAll();

        return $this->render(
            'program/index.html.twig',
            ['programs' => $programs]
        );
    }

    /**
 * Getting a program by id
 *
 * @Route("/show/{id<^[0-9]+$>}", name="program_show")
 * @return Response
 */
public function show(int $id):Response
{
    $program = $this->getDoctrine()
        ->getRepository(Program::class)
        ->findOneBy(['id' => $id]);

    if (!$program) {
        throw $this->createNotFoundException(
            'No program with id : '.$id.' found in program\'s table.'
        );
    }
    return $this->render('program/show.html.twig', [
        'program' => $program,
    ]);
}

}