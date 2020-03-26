<?php

namespace App\Models;

use Bootstrap\Db;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = Db::connection();
    }

    public function all()
    {
        $query = "SELECT * FROM `product`";
        $result = $this->db->prepare($query);
        $result->execute();
//        var_dump($result->fetchAll(\PDO::FETCH_ASSOC));
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

}