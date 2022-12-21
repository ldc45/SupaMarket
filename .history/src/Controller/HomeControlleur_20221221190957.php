<?php

namespace App\Controller;

use ProxyManager\ProxyGenerator\AccessInterceptor\PropertyGenerator\MethodSuffixInterceptors;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
  #[Route(
    '/',
    name: 'home.index',
    MethodSuffixInterceptors
  )]
  public function index(): Response
  {
    return $this->render('home.html.twig');
  }
}
