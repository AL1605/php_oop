<?php

include_once '../../ch02/db.php';
include_once '../connect.php';

$id = $_GET['id'];
$data = array(
    'order_status' => 'pay'
);

if ($db->update('orders', $data, 'id', $id)) {
    header('location: index.php?url=order.php');
}
?>
