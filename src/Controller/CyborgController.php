<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CyborgController extends AbstractController
{
    #[Route('/', name: 'app_cyborg')]
    public function index(): Response
    {
        return $this->render('cyborg/index.html.twig', [
            'controller_name' => 'CyborgController',
        ]);
    }
}
