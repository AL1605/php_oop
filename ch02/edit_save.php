<?php

include_once 'db.php';
$db = new db();
$db->connect();

if ($db->update('tb_book', $_POST, 'id', $_POST['id'])) {
    echo 'update complete';
} else {
    echo mysql_error();
}
?>
