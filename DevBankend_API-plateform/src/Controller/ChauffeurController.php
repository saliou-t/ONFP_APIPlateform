<?php

namespace App\Controller;

use App\Entity\Chauffeur;
use App\Form\ChauffeurType;
use App\Repository\ChauffeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/chauffeur')]
class ChauffeurController extends AbstractController
{
    #[Route('/', name: 'chauffeur_index', methods: ['GET'])]
    public function index(ChauffeurRepository $chauffeurRepository): Response
    {
        return $this->render('chauffeur/index.html.twig', [
            'chauffeurs' => $chauffeurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'chauffeur_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $chauffeur = new Chauffeur();
        $form = $this->createForm(ChauffeurType::class, $chauffeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chauffeur);
            $entityManager->flush();

            return $this->redirectToRoute('chauffeur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chauffeur/new.html.twig', [
            'chauffeur' => $chauffeur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'chauffeur_show', methods: ['GET'])]
    public function show(Chauffeur $chauffeur): Response
    {
        return $this->render('chauffeur/show.html.twig', [
            'chauffeur' => $chauffeur,
        ]);
    }

    #[Route('/{id}/edit', name: 'chauffeur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chauffeur $chauffeur): Response
    {
        $form = $this->createForm(ChauffeurType::class, $chauffeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chauffeur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chauffeur/edit.html.twig', [
            'chauffeur' => $chauffeur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'chauffeur_delete', methods: ['POST'])]
    public function delete(Request $request, Chauffeur $chauffeur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chauffeur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chauffeur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('chauffeur_index', [], Response::HTTP_SEE_OTHER);
    }
}
