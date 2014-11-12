<?php
ob_start();
session_start();
?>

<html>
    <head>
        <title>ระบบจัดการร้านค้าออนไลน์</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div><?php include_once 'header.php'; ?></div>
        <div><?php include_once 'toolbar.php'; ?></div>
        <div><?php include_once 'content.php'; ?></div>
    </body>
</html>
