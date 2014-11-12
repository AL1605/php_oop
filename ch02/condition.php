<?php

include_once 'db.php';
$db = new db();
$result = $db
        ->conditions('tb_book', 'price = 300 AND page = 300')
        ->execute();

if (!empty($result)) {
    while ($r = mysql_fetch_array($result)) {
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
