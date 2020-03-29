<?php

namespace App\Controllers;

use App\Models\Product;
use App\Traits\Response;

class ProductController
{
    use Response;

    public function index()
    {
//        $products = new Product();
 //       return view("products", ['products'=> $products->all()]);
        return view("products");
    }

    public function getAllProducts()
    {
        return json_encode(['key' => 'value']);
//        var_dump();
//        try {
//            $data = new Product();
//            $response = Response::response($data);
//        } catch (Exception $e) {
//            $message = $e->getMessage();
//            $response = Response::response(false, $e->getMessage(), $e->getCode());
//        }
//        return $result;
    }
}