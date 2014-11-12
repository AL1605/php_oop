<?php

include_once 'Menu.php';

$menu = new Menu();
$menu->add('menu A', 'select_test1.php');
$menu->add('menu B', 'link_test.php');

echo $menu;
?>
