<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', []);
    }

    #[Route('/qui_sommes_nous', name: 'qsn')]
    public function quiSommesNous(): Response
    {
        return $this->render('component/qsn.html.twig', []);
    }

    #[Route('/nos_actions', name: 'nos_actions')]
    public function nosActions(): Response
    {
        return $this->render('component/nosActions.html.twig', []);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('component/contact.html.twig', []);
    }
}
