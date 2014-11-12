<?php
ob_start();
session_start();

include_once '../ch02/db.php';
include_once '../workshop/connect.php';
include_once 'Login.php';

$login = new Login();
$login->connection = $db;
$login->table = 'admin';
$login->successUrl = 'login_pass.php';
$login->failUrl = 'login_fail.php';
$login->usernameField = 'admin_username';
$login->passwordField = 'admin_password';
$login->username = $_POST['admin_username'];
$login->password = $_POST['admin_password'];
$login->checkLogin();
?>
