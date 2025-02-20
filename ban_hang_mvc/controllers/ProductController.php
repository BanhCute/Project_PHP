<?php
include_once "./models/Product.php";

class ProductController
{
    public function index()
    {
        $products = Product::getAll();
        include "./views/products/list.php";
    }
}
