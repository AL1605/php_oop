<?php

include_once 'Form.php';
include_once 'TextField.php';

$form = new Form();
$text = new TextField('mytext');

echo $form->open();
echo 'name = '.$text;
echo '<input type="submit" value="Send Data" />';
echo $form->close();

if (!empty($_POST)) {
    echo 'name = '.$_POST['mytext'];
}
?>
