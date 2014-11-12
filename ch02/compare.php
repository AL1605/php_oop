<?php

include_once 'db.php';

$db = new db();
$row = $db->compare('tb_book', 'price =', 300)->executeRow();

if (!empty($row)) {
    echo $row['id'];
    echo $row['name'];
    echo $row['price'];
    echo $row['page'];
} else {
    echo 'not found';
}
?>
