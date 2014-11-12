<?php
ob_start();

include_once '../../ch02/db.php';
include_once '../connect.php';

$id = $_GET['id'];

if ($db->delete('product', 'id', $id)) {
    // remove image
    $r = $db->findByPk('product', 'id', $id)->executeRow();
    unlink('../upload/'.$r['image']);
    
    header('location: index.php?url=product.php');
}
?>
