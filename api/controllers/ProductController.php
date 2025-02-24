<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController
{
    public function index()
    {
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        header('Content-Type: application/json');
        echo json_encode($products);
    }
}
