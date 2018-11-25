<?php

namespace App\Controller;

use App\Entity\Contrebandier;
use App\Form\Contrebandier1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/contrebandier")
 */
class ContrebandierController extends AbstractController
{
    /**
     * @Route("/", name="contrebandier_index", methods="GET")
     */
    public function index(): Response
    {
        $contrebandiers = $this->getDoctrine()
            ->getRepository(Contrebandier::class)
            ->findAll();

        return $this->render('contrebandier/index.html.twig', ['contrebandiers' => $contrebandiers]);
    }

    /**
     * @Route("/new", name="contrebandier_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $contrebandier = new Contrebandier();
        $form = $this->createForm(Contrebandier1Type::class, $contrebandier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contrebandier);
            $em->flush();

            return $this->redirectToRoute('contrebandier_index');
        }

        return $this->render('contrebandier/new.html.twig', [
            'contrebandier' => $contrebandier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contrebandier_show", methods="GET")
     */
    public function show(Contrebandier $contrebandier): Response
    {
        return $this->render('contrebandier/show.html.twig', ['contrebandier' => $contrebandier]);
    }

    /**
     * @Route("/{id}/edit", name="contrebandier_edit", methods="GET|POST")
     */
    public function edit(Request $request, Contrebandier $contrebandier): Response
    {
        $form = $this->createForm(Contrebandier1Type::class, $contrebandier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contrebandier_edit', ['id' => $contrebandier->getId()]);
        }

        return $this->render('contrebandier/edit.html.twig', [
            'contrebandier' => $contrebandier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contrebandier_delete", methods="DELETE")
     */
    public function delete(Request $request, Contrebandier $contrebandier): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contrebandier->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contrebandier);
            $em->flush();
        }

        return $this->redirectToRoute('contrebandier_index');
    }
}
