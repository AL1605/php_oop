<?php

include_once 'Admin.php';
include_once 'Bill.php';
include_once 'Orders.php';
include_once 'Product.php';
include_once '../ch02/db.php';
include_once '../workshop/connect.php';

$rs = $db->findAll('admin')->execute();
$data = array();
$all_data = array();

while ($r = mysql_fetch_array($rs)) {
    $admin = new Admin();
    $admin->id = $r['id'];
    $admin->admin_name = $r['admin_name'];
    $admin->admin_username = $r['admin_username'];
    $admin->admin_password = $r['admin_password'];
    
    $data[] = $admin;
}

// bill
$rs = $db->findAll('bill')->execute();
$dataBill = array();

while ($r = mysql_fetch_array($rs)) {
    $bill = new Bill();
    $bill->id = $r['id'];
    $bill->created_date = $r['created_date'];
    $bill->bill_status = $r['bill_status'];
    $bill->customer_address = $r['customer_address'];
    $bill->customer_name = $r['customer_name'];
    $bill->customer_tel = $r['customer_tel'];
    
    $dataBill[] = $bill;
}

// orders
$rs = $db->findAll('orders')->execute();
$dataOrders = array();

while ($r = mysql_fetch_array($rs)) {
    $orders = new Orders();
    $orders->id = $r['id'];
    $orders->bill_id = $r['bill_id'];
    $orders->order_price = $r['order_price'];
    $orders->order_status = $r['order_status'];
    $orders->product_id = $r['product_id'];
    
    $dataOrders[] = $orders;
}

// product
$rs = $db->findAll('product')->execute();
$dataProduct = array();

while ($r = mysql_fetch_array($rs)) {
    $product = new Product();
    $product->created_date = $r['created_date'];
    $product->detail = $r['detail'];
    $product->id = $r['id'];
    $product->image = $r['image'];
    $product->name = $r['name'];
    $product->price = $r['price'];
    $product->status = $r['status'];
    
    $dataProduct[] = $product;
}

// write to Object File
$all_data['admin'] = $data;
$all_data['bill'] = $dataBill;
$all_data['orders'] = $dataOrders;
$all_data['product'] = $dataProduct;

$output = serialize($all_data);
file_put_contents('backup.back', $output);
echo 'complete';
?>
