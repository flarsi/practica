<?php

namespace App\Controllers;

use App\Models\Product;
use App\Traits\Response;

class ProductController
{
    use Response;

    public function index()
    {
        return view("products");
    }

    public function getAllProducts()
    {
        try {
            $data = (new Product())->all();
            $response = Response::response(true, '', '',$data);
        } catch (\Exception $e) {
            $response = Response::response(false, $e->getMessage(), $e->getCode());
        }
       echo $response;
    }
}