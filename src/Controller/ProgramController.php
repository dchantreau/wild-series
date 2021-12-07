<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use App\Entity\Season;
use App\Entity\Episode;
use App\Entity\Program;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class ProgramController extends AbstractController
{
    /**
     * Show all rows from Program's entity
     *
     * @Route("/program/",name="program_index")
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
     * @Route("/program/{program<^[0-9]+$>}", name="program_show")
     *
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"program": "id"}})
     *
     * @return Response
     */
    public function show(Program $program):Response
    {
        // avec la foncion show(int $id)
        // $program = $this->getDoctrine()
        //     ->getRepository(Program::class)
        //     ->findOneBy(['id' => $id]);

        // $seasons = $this->getDoctrine()
        //     ->getRepository(Season::class)
        //     ->findBy(['program' => $id]);

        if (!$program) {
            throw $this->createNotFoundException(
                'No program with id : '.$id.' found in program\'s table.'
            );
        }
        return $this->render('program/show.html.twig', [
            'program' => $program,
            // 'seasons' => $program->getSeasons(),

        ]);
    }

    /**
     * Getting an episode by id
     *
     * @Route("/program/{program<^[0-9]+$>}/season/{season<^[0-9]+$>}", name="program_season_show")
     *
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"program": "id"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"season": "id"}})
     *
     * @return Response
     */
    public function showSeason(Program $program, Season $season):Response
    {
        // showSeason(int $programId, int $seasonId)
        // $season = $this->getDoctrine()
        //     ->getRepository(Season::class)
        //     ->find($seasonId);
            // $season->getEpisodes();

        if (!$season) {
            throw $this->createNotFoundException(
                'No season with id : '.$id.' found in this serie.'
            );
        }
        return $this->render('program/season_show.html.twig', [
            'program' => $program,
            'season' => $season,
            'episodes' => $season->getEpisodes(),
        ]);
    }

     /**
     * Getting a program by id
     *
     * @Route("/program/{program<^[0-9]+$>}/season/{season<^[0-9]+$>}/episode/{episode<^[0-9]+$>}", name="program_episode_show")
     *
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"program": "id"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"season": "id"}})
     * @ParamConverter("episode", class="App\Entity\Episodes", options={"mapping": {"episode": "id"}})
     *
     * @return Response
     */
    public function showEpisode(Program $program, Season $season, Episode $episode)
    {
        return $this->render('program/episode_show.html.twig', [
            'program' => $program,
            'season' => $season,
            'episode' => $season->getEpisodes(),
        ]);
    }

}