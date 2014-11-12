<?php
ob_start();
session_start();
?>

<html>
    <head>
        <title>ร้านค้า javathailand.com</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div><?php include_once 'header.php'; ?></div>
        <div><?php include_once 'menu.php'; ?></div>
        <div><?php include_once 'content.php'; ?></div>
        <div><?php include_once 'footer.php'; ?></div>
    </body>
</html>
