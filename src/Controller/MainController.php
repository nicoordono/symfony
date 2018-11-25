<?php

namespace App\Controller;
use App\Entity\Contrebandier;
use App\Form\Contrebandier1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class MainController extends AbstractController
{
    /**
     * @Route("/", name="acceuil")
     */
    public function index()
    {
        return $this->render('acceuil/acceuil.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     /**
     * @Route("/base2", name="base2")
     */
    public function donne()
    {
        return $this->render('base2/base2.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
       /**
     * @Route("/contact", name="contact")
     */
    public function parler()
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
       /**
     * @Route("/nav", name="nav")
     */
    public function nav()
    {
        return $this->render('nav/nav.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
 /**
     * @Route("/contrebandier", name="contrebandier")
     */
    public function contrebandier(): Response
    {
        $contrebandiers = $this->getDoctrine()
            ->getRepository(Contrebandier::class)
            ->findAll();

        return $this->render('contrebandier/index.html.twig', ['contrebandiers' => $contrebandiers]);
    }
}

