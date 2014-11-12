<?php

ob_start();
session_start();

include_once '../../ch02/db.php';
include_once '../connect.php';

$cart = $_SESSION['cart'];

// insert data to bill
$data = array(
    'created_date' => date('Y-m-d h:i:s'),
    'customer_name' => $_POST['customer_name'],
    'customer_tel' => $_POST['customer_tel'],
    'customer_address' => $_POST['customer_address']
);
$db->insert('bill', $data);

// find last bill
$condition = "bill_status = 'wait' ORDER BY id DESC LIMIT 1";
$bill = $db->conditions('bill', $condition)->executeRow();
$bill_id = $bill['id'];

// loop data from cart
for ($i = 0; $i < count($cart); $i++) {
    $id = $cart[$i];
    $product = $db->findByPk('product', 'id', $id)->executeRow();
    
    $data = array(
        'product_id' => $id,
        'order_price' => $product['price'],
        'bill_id' => $bill_id
    );
    $db->insert('orders', $data);
}

session_unregister('cart');
header('location: index.php?url=cart_complete.php');
?>
