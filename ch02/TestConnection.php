<?php

include_once 'db.php';
$db = new db();
$conn = $db->connect();

if ($conn) {
    echo 'connect complete';
} else {
    echo 'connect fail';
}
?>
