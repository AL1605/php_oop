<?php

$db = new db();
$db->db_name = "db_phpshop";

if (!$db->connect()) {
    echo mysql_error();
}
?>
