<?php

include_once 'db.php';
$db = new db();
$db->connect();

if ($db->delete('tb_book', 'id', $_GET['id'])) {
    echo 'delete complete';
} else {
    echo mysql_error();
}
?>
