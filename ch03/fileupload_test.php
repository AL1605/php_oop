<?php

include_once 'Form.php';
include_once 'FileUpload.php';
include_once 'ButtonSubmit.php';

$form = new Form();
$fileUpload = new FileUpload('myfile');
$button = new ButtonSubmit('upload now');

echo $form->open();
echo $fileUpload;
echo $button;
echo $form->close();
?>
