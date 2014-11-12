<?php

include_once 'Form.php';
include_once 'Checkbox.php';

$form = new Form();
$checkbox = new Checkbox();
$checkbox->name = 'mycheckbox';
$checkbox->value = 10011;
$checkbox->label = 'Are you Accept ?';

echo $form->open();
echo $checkbox;
echo $form->close();
?>
