<?php

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=poo","root","");

$product = new Product($db);

$list = $product->lists();
var_dump($list);