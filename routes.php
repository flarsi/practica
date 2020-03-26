<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $router->get('', 'IndexController@index');
    $router->get('products', 'ProductController@index');
    $router->get('create/order', 'BasketController@index');

function vardump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
