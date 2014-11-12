<?php

ob_start();
session_start();

include_once '../../ch02/db.php';
include_once '../connect.php';

$db->findByAttributes('admin', array(
    'admin_username =' => $_POST[admin_username],
    'admin_password =' => $_POST[admin_password]
));
$rs = $db->executeRow();

if ($rs) {
    $_SESSION['admin_username'] = $rs['admin_username'];
    header('location: index.php?url=home.php');
} else {
    echo 'username invalid';
}
?>
