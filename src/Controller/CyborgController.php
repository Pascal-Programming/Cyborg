<?php

namespace App\Controller;

use App\Form\Type\CyborgTestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CyborgController extends AbstractController
{
    #[Route('/', name: 'app_cyborg')]
    public function index(Request $request): Response
    {
        // Formular erstellen
        $form = $this->createForm(CyborgTestType::class);

        // Formular-Verarbeitung (optional, falls du POST-Daten speichern willst)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hier könntest du die Formulardaten verarbeiten
            $data = $form->getData();

            // Beispielsweise speichern oder weiterverarbeiten
            // $this->addFlash('success', 'Einstellungen gespeichert.');
        }


        return $this->render('cyborg/index.html.twig', [
            'controller_name' => 'CyborgController',
            'form' => $form->createView(),
        ]);
    }
}
