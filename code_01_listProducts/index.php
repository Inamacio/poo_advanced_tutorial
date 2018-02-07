<?php

$db = new \PDO("mysql:host=localhost;dbname=poo","root","");

$query = "Select * from products";
$stmt = $db->prepare($query);
$stmt->execute();
$list = $stmt->fetchAll(\PDO::FETCH_ASSOC);
var_dump($list);