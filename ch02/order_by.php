<?php

include_once 'db.php';

$db = new db();
$rs = $db->order_by('tb_book', 'price')->execute();

if (!empty($rs)) {
    while ($r = mysql_fetch_array($rs)) {
        echo '<div>';
        echo $r['id'];
        echo $r['name'];
        echo $r['price'];
        echo '</div>';
    }
} else {
    echo mysql_error();
}
?>
