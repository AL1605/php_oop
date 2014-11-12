<?php

// include library and create object
include_once 'db.php';
$db = new db();

// query data and show
$row = $db
        ->findByPk('tb_book', 'id', 2)
        ->executeRow();

if (!empty($row)) {
    echo $row['id'];
    echo $row['name'];
    echo $row['price'];
    echo $row['page'];
}
?>
