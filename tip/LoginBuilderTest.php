<?php

include_once 'LoginBuilder.php';

$login = new LoginBuilder();
$login->labelUsername = 'Username';
$login->labelPassword = 'Password';
$login->labelButton = 'Login';
$login->url = 'TestLogin.php';
$login->render();
?>
