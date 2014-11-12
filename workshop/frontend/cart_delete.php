<?php
ob_start();
session_start();

$cart = $_SESSION['cart'];

$index = $_GET['id'];
$cart[$index] = null;

// new cart
$newCart = array();
for ($i = 0; $i < count($cart); $i++) {
    $c = $cart[$i];
    
    if ($c != "") {
        $newCart[$i] = $c;
    }
}

$_SESSION['cart'] = $newCart;
header('location: index.php?url=cart.php');
?>
