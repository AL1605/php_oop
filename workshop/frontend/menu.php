<div class="toolbar">
<?php

// item in cart
$itemInCart = 0;

if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $itemInCart = count($cart);
}

include_once '../../ch03/Toolbar.php';
$toolbar = new Toolbar();
$toolbar->add('หน้าแรก', 'index.php');
$toolbar->add("สินค้าในตะกร้า ($itemInCart)", 'index.php?url=cart.php');
$toolbar->add('เกี่ยวกับเรา', 'index.php?url=about_us.php');
$toolbar->add('การชำระเงิน', 'index.php?url=payment.php');
echo $toolbar;
?>
</div>
