<?php

include_once 'db.php';
$db = new db();
$db->connect();

if ($db->insert('tb_book', $_POST)) {
    echo 'insert complete';
} else {
    echo mysql_error();
}
?>
