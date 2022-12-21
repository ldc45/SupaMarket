<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomController extends AbstractController
{
  #[Route('/', name: 'hom.index', methods: ['GET'])]
  public function index(): Response
  {
    return $this->render('home.html.twig');
  }
}
