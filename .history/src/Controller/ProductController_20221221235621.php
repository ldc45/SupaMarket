<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(ProductRepository $repository, PaginatorInterface $paginator): Response
    {
        $products = $paginator->paginate(
           $products = $repository->findAll(); 
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
       

        return $this->render('pages/product/index.html.twig', [
            'products' => $products
        ]);
    }
}
