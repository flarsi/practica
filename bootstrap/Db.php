<?php

namespace Bootstrap;

class Db
{
    public static function connection()
    {
        try {
            $pdo = new \PDO(
                'mysql:host=localhost;dbname=practica',
                'root',
                ''
            );
            return $pdo;
        } catch (Exception $e){
            echo $e->getMessage();
        }
    }
}