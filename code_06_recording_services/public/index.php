<?php
require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['conn'] = function(){
    return new \Source\Conn("mysql:host=localhost;dbname=poo","root","");
};

$container['product'] = function($c){
    return new \Source\Product($c['conn']);
};

$list = $container['product']->lists();

var_dump($list);