<?php

include_once 'Toolbar.php';
$toolbar = new Toolbar();
$toolbar->add('menu A', 'select_test1.php');
$toolbar->add('menu B', 'radio_test.php');

echo $toolbar;
?>
