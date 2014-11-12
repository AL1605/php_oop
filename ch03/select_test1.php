<?php

include_once 'Select.php';
$select = new Select();
$select->name = 'myselect';
$select->addItem('item1', 1001);
$select->addItem('item2', 1002);
$select->addItem('item3', 1003);

echo $select;
?>
