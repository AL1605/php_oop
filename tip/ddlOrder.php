<?php

$bill_id = $_GET['bill_id'];

include_once '../ch02/db.php';
include_once '../workshop/connect.php';

$db->sql = "
    SELECT orders.*, product.name FROM orders 
    INNER JOIN product ON product.id = orders.product_id
    WHERE bill_id = $bill_id";
$rs = $db->execute();
?>

<select>
    <?php while ($r = mysql_fetch_array($rs)): ?>
    <option>
        <?php echo $r['name']; ?>
    </option>
    <?php endwhile; ?>
</select>

