<?php

// include and create object
include_once 'db.php';
$db = new db();

// query data
$rows = $db->between('tb_book', 'price', 300, 500)->execute();

if (!empty($rows)) {
    while ($r = mysql_fetch_array($rows)) {
        echo $r['id'];
        echo $r['name'];
        echo $r['price'];
        echo $r['page'];
        echo '<br />';
    }
}
?>
