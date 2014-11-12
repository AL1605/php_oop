<?php

include_once 'Form.php';
include_once 'Password.php';

$form = new form();
$password = new Password('mypassword');

// render form
echo $form->open();
echo 'my password = '.$password;
echo '<input type="submit" value="Send" />';
echo $form->close();

// show output
if (!empty($_POST)) {
    echo 'password = '.$_POST['mypassword'];
}
?>
