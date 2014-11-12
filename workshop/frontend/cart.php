<style>
    .product {
        display: inline-block;
        border: #cccccc 1px solid;
        padding: 8px;
    }
    .sum {
        text-align: center;
        padding: 10px;
        border: green 1px solid;
        background-color: #ffffcc;
        font-weight: bold;
        margin-top: 10px;
    }
</style>
<h3>สินค้าในตะกร้าของคุณ</h3>
<hr />

<?php
include_once '../../ch02/db.php';
include_once '../connect.php';
$cart = $_SESSION['cart'];
$sum = 0;

for ($i = 0; $i < count($cart); $i++) {
    $r = $db->findByPk('product', 'id', $cart[$i])->executeRow();
    $sum += $r['price'];
    
    echo "
        <span class='product'>
            <div>{$r[name]}</div>
            <div><img src='../upload/{$r[image]}' width='150px' /></div>
            <div>ราคา: {$r[price]}</div>
            <div><a href='cart_delete.php?id={$i}'>Delete</a></div>
        </span>";
}
?>

<div class="sum">
    รวมเป็นเงิน: <?php echo number_format($sum); ?> บาท
</div>

<center>
    <a href="index.php?url=cart_confirm.php">
        ยืนยันการชำระเงิน
    </a>
</center>

