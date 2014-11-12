<?php

include_once 'Select.php';
$select = new Select();
$select->items = array(
    array('java', 1001),
    array('php', 1002),
    array('C#', 1003)
);

echo $select;
?>
