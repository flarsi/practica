<?php

namespace App\Models;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = \Db::connection();
    }

    public function all()
    {
        return 1;
    }

}