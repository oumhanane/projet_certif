<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/boutique/produit/detail/{id}", name="boutique_product_detail")
     */
    public function index(int $id,ProductRepository $productRepository): Response
    {
        $product = $productRepository->find($id);
        return $this->render('customer/product/detail_product.html.twig', [
            'product' => $product
        ]);
    }
}
