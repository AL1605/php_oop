<?php

include_once 'Form.php';
include_once 'Label.php';
include_once 'TextField.php';

// create object
$form = new form();
$text = new TextField('mytext');
$label = new Label('Your Name: ');

// render form
echo $form->open();
echo $label;
echo $text;
echo '<input type="submit" value="Send Data" />';
echo $form->close();

// show data
if (!empty($_POST)) {
    echo 'Your Name = '.$_POST['mytext'];
}
?>

