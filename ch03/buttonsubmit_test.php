<?php

include_once 'Form.php';
include_once 'Label.php';
include_once 'TextField.php';
include_once 'ButtonSubmit.php';

$f = new form();
$label = new Label('FName');
$text = new TextField('mytext');
$submit = new ButtonSubmit('Send Data');

echo $f->open();
echo $label.' '.$text.' '.$submit;
echo $f->close();

if (!empty($_POST)) {
    echo $_POST['mytext'];
}
?>
