<?php

namespace App\Controller;

use App\Form\Type\CyborgTestType;
use App\Service\CyborgTestService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CyborgController extends AbstractController
{
    public function __construct(
        private readonly CyborgTestService $cyborgTestService,
    )
    {
    }

    #[Route('/', name: 'app_cyborg')]
    public function index(Request $request): Response
    {
        $result = '';
        $form = $this->createForm(CyborgTestType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cyborgFormData = $form->getData();
            $result = $this->cyborgTestService->cybortTest($cyborgFormData);

        }


        return $this->render('cyborg/index.html.twig', [
            'controller_name' => 'CyborgController',
            'form' => $form->createView(),
            'result' => $result,
        ]);
    }
}
