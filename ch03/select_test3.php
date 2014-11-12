<?php

include_once 'Select.php';
$select = new Select();
echo $select->fromTable('tb_book', 'id', 'name');
?>
