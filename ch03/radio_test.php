<?php

include_once 'Form.php';
include_once 'Label.php';
include_once 'ButtonSubmit.php';
include_once 'Radio.php';

$form = new Form();
$label = new Label('Choose Data');
$button = new ButtonSubmit('Submit Data');
$radio = new Radio();
$radio->name = 'myradio';
$radio->value = '10011';

echo $form->open();
echo $radio;
echo $label;
echo $button;
echo $form->close();
?>
