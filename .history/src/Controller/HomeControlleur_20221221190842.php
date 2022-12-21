<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
  #[Rou]
  public function index(): Response
  {
    return $this->render('home.html.twig');
  }
}
