<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "Product.php";

$db = new Conn("mysql:host=localhost;dbname=poo","root","");

$product = new Product($db);

$list = $product->lists();
var_dump($list);