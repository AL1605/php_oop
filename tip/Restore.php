<?php

include_once 'Admin.php';
include_once 'Product.php';
include_once 'Bill.php';
include_once 'Orders.php';
include_once '../ch02/db.php';
include_once '../workshop/connect.php';

$input = file_get_contents('backup.back');
$dataReader = unserialize($input);

// admin
$dataAdmin = $dataReader['admin'];
foreach ($dataAdmin as $admin) {
    $data = array(
        'id' => $admin->id,
        'admin_username' => $admin->admin_username,
        'admin_password' => $admin->admin_password,
        'admin_name' => $admin->admin_name
    );
    $db->insert('admin', $data);
}

// product
$dataProduct = $dataReader['product'];
foreach ($dataProduct as $product) {
    $data = array(
        'id' => $product->id,
        'name' => $product->name,
        'detail' => $product->detail,
        'price' => $product->price,
        'image' => $product->image,
        'created_date' => $product->created_date,
        'status' => $product->status
    );
    $db->insert('product', $data);
}

// bill
$dataBill = $dataReader['bill'];
foreach ($dataBill as $bill) {
    $data = array(
        'id' => $bill->id,
        'created_date' => $bill->created_date,
        'customer_name' => $bill->customer_name,
        'customer_tel' => $bill->customer_tel,
        'customer_address' => $bill->customer_address,
        'bill_status' => $bill->bill_status
    );
    $db->insert('bill', $data);
}

// orders
$dataOrders = $dataReader['orders'];
foreach ($dataOrders as $orders) {
    $data = array(
        'id' => $orders->id,
        'product_id' => $orders->product_id,
        'order_price' => $orders->order_price,
        'bill_id' => $orders->bill_id,
        'order_status' => $orders->order_status
    );
    $db->insert('orders', $data);
}

echo 'import complete';
?>
