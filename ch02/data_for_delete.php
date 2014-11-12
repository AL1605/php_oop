<?php

include_once 'db.php';
$db = new db();
$rs = $db->findAll('tb_book')->execute();

while ($r = mysql_fetch_array($rs)) {
    echo '<div>';
    echo $r['id'];
    echo $r['name'];
    echo $r['price'];
    echo $r['page'];
    echo "<a href='delete.php?id=$r[id]'>delete</a>";
    echo '</div>';
}
?>

