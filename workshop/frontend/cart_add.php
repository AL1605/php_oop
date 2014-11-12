<?php

ob_start();
session_start();

// create cart
$cart = $_SESSION['cart'];
$id = $_GET['id'];

if (empty($cart)) {
    $cart = array();
}

// add to cart
$index = count($cart);
$cart[$index] = $id;

// add to session
$_SESSION['cart'] = $cart;
header('location: index.php');
?>
