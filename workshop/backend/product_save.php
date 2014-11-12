<?php

include_once '../../ch02/db.php';
include_once '../connect.php';

if (!empty($_POST['id'])) {
    // update data
    $data['name'] = $_POST['name'];
    $data['detail'] = $_POST['detail'];
    $data['price'] = $_POST['price'];

    if (!empty($_FILES['image']['name'])) {
        $data['image'] = $_FILES['image']['name'];
    }
    $rs = $db->update('product', $data, 'id', $_POST['id']);
} else {
    // insert data
    $rs = $db->insert('product', array(
        'name' => $_POST['name'],
        'detail' => $_POST['detail'],
        'price' => $_POST['price'],
        'image' => $_FILES['image']['name'],
        'created_date' => date('Y-m-d h:i:s')
    ));
}

if ($rs) {
    // upload image
    $tmp_name = $_FILES['image']['tmp_name'];
    $file_name = $_FILES['image']['name'];

    move_uploaded_file($tmp_name, '../upload/' . $file_name);
    header('location: index.php?url=product.php');
}
?>
