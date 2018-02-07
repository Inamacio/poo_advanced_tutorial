<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=poo";
$container['user'] = "root";
$container['pass'] = "";