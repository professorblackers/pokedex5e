<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\PokemonRepository;

class PokedexController extends AbstractController
{
    #[Route('/', name: 'pokedex')]
    public function index(): Response
    {
        return $this->render('pokedex/index.html.twig', [
        ]);
    }

    #[Route('/pokemon', name: 'pokemon')]
    public function getPokemon(PokemonRepository $pokemonRepository): JsonResponse
    {
        return new JsonResponse($pokemonRepository->findAll());
    }
}
