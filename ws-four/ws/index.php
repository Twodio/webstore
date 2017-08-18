<?php

require_once '../app/initialize.php';

session_start();

//session_destroy();

$cart = new Cesto();

//var_dump($cart->getItems());

$app = new App($cart);
