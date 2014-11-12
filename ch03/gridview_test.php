<?php

include_once 'GridView.php';
$grid = new GridView();
$grid->header = array('name', 'price', 'page', 'qty');
$grid->width = array('200px', '100px', '50px', '50px');
$grid->data = array(
    array('JAVA Basic', 300, 450, 10),
    array('PHP OOP', 350, 300, 20),
    array('C/C++', 299, 250, 5)
);

echo $grid;
?>
