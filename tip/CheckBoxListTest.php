<?php

include_once '../ch02/db.php';
include_once '../workshop/connect.php';
include_once 'CheckBoxList.php';

$c = new CheckBoxList();
$c->connection = $db;
$c->name = 'mycheckbox';
$c->table = 'product';
$c->key = 'id';
$c->label = 'name';
$c->render();
?>
