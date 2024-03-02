<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route('/', name: 'app_movie')]
    public function index(MovieRepository $movieRepository): Response
    {
        $movies = $movieRepository->findAll();
        return $this->render('movie/index.html.twig', [
            'movies' => $movies,
        ]);
    }
    #[Route('/movies/create', name: 'app_create')]
    public function create(): Response
    {
        return $this->render('movie/create.html.twig');
    }
}
