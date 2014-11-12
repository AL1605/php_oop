<?php

include_once 'FormBuilder.php';
include_once '../ch03/TextField.php';

$form = new FormBuilder();
$form->title = 'Book Data';
$form->items = array(
    'name' => new TextField('txtName'),
    'price' => new TextField('txtPrice'),
    'page' => new TextField('txtPage'),
    'detail' => new TextField('detail')
);
$form->render();
?>
