<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $router->get('', 'IndexController@index');
    $router->get('products', 'ProductController@index');
    $router->get('create/order', 'BasketController@index');
    $router->get('products/get-all', 'ProductController@getAllProducts');

function vardump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
