<?php

// include and create object
include_once 'db.php';
$db = new db();

// execute
$attributes = array(
    'price >' => 300,
    'page >' => 200
);
$rows = $db
        ->findByAttributes('tb_book', $attributes)
        ->execute();
// show data
if (!empty($rows)) {
    while ($r = mysql_fetch_array($rows)) {
        echo $r['id'];
        echo $r['name'];
        echo $r['page'];
        echo $r['price'];
        echo '<br />';
    }
}
?>
