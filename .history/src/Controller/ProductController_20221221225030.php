<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(ProductRepository $repository): Response
    {
        $products = $repository->findAll();
        dd($products);
        return $this->render('pages/product/index.html.twig', [
            pr
        ]);
    }
}
