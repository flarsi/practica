<?php

namespace App\Controllers;

class IndexController
{
    public function index()
    {
        return view('index');
    }

    public function products()
    {
        return view("products");
    }
}