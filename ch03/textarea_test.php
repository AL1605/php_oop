<?php

include_once 'TextArea.php';

$textArea = new TextArea();
$textArea->name = 'mytextarea';
$textArea->value = 'my value';
$textArea->cols = 80;
$textArea->rows = 5;

echo $textArea;
?>
