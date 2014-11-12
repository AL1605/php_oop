<?php

include 'db.php';

$db = new db();
$rows = $db->findAll('tb_book')->execute();

if (!empty($rows)) {
    while ($r = mysql_fetch_array($rows)) {
        echo $r['id'];
        echo $r['name'];
        echo $r['price'];
        echo $r['page'];
        echo '<br />';
    }
} else {
    echo mysql_error();
}
?>
