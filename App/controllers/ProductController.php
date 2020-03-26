<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $products = new Product();
        return view("products", ['products'=> $products->all()]);
    }
}