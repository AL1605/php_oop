<?php 
ob_start();
session_start();
?>
<meta charset="utf-8" />
Login สำเร็จ <br />
ยินดีต้อนรับ: <?php echo $_SESSION['User']['admin_username']; ?>

