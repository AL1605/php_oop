<?php

// include and create object
include_once 'db.php';
$db = new db();

// search
$rows = $db->in('tb_book', 'price', array(300, 400))->execute();

if (!empty($rows)) {
    while ($r = mysql_fetch_array($rows)) {
        echo $r['id'];
        echo $r['name'];
        echo $r['price'];
        echo $r['page'];
        echo "<br />";
    }
}
?>
