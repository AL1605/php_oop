<?php if (!empty($_SESSION['admin_username'])): ?>
<div class="toolbar">
<?php

include_once '../../ch03/Toolbar.php';
$toolbar = new Toolbar();
$toolbar->add('ระบบจัดการสินค้า', 'index.php?url=product.php');
$toolbar->add('รายงานยอดสั่งซื้อ', 'index.php?url=order.php');
$toolbar->add('รายงานยอดสั่งซื้อที่ชำระเงินแล้ว', 'index.php?url=order_pay.php');
$toolbar->add('รายงานสินค้าที่จัดส่งแล้ว', 'index.php?url=order_send.php');
$toolbar->add('ออกจากระบบ', 'logout.php');
echo $toolbar;
?>
</div>
<?php endif; ?>
