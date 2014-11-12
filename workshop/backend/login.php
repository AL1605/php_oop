<?php
include_once '../../ch03/Form.php';
include_once '../../ch03/Label.php';
include_once '../../ch03/ButtonSubmit.php';
include_once '../../ch03/TextField.php';
include_once '../../ch03/Password.php';
include_once '../../ch02/db.php';
include_once '../connect.php';

$form = new Form();
$lblUsername = new Label('Username: ');
$lblPassword = new Label('Password: ');
$txtUsername = new TextField('admin_username');
$txtPassword = new Password('admin_password');
$submitButton = new ButtonSubmit('Login Now');

echo '<h3>Login</h3>';
echo '<hr />';
echo $form->open('check_login.php');
echo $lblUsername.$txtUsername.'<br />';
echo $lblPassword.$txtPassword.'<br />';
echo $submitButton;
echo $form->close();
?>

