<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $router->get('', 'IndexController@index');

function vardump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
