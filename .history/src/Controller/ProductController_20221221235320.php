<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(ProductRepository $repository,Pagin): Response
    {
        $products = $repository->findAll();

        return $this->render('pages/product/index.html.twig', [
            'products' => $products
        ]);
    }
}
