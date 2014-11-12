<h3>รายงานยอดสั่งซื้อ</h3>

<?php
include_once '../../ch02/db.php';
include_once '../connect.php';
include_once '../../ch03/GridView.php';

$columns = array(
    'name',
    'order_price',
    'customer_name',
    'customer_tel',
    'customer_address'
);
$db->sql = "
    SELECT 
        orders.*,
        product.name,
        bill.customer_name,
        bill.customer_tel,
        bill.customer_address
    FROM orders
        INNER JOIN product ON product.id = orders.product_id
        LEFT JOIN bill ON bill.id = orders.bill_id
    WHERE orders.order_status = 'wait'
    ORDER BY orders.id DESC
";
$rs = $db->execute();

$grid = new GridView();
$grid->header = array('รายการสินค้า', 'ราคา', 'ผู้สั่งซื้อ', 'โทร', 'ที่อยู่');
$grid->width = array('350px', '100px', '200px', '150px', '300px');
$grid->deleteText = 'ชำระเงินแล้ว';
$grid->deleteUrl = 'action_order_pay.php';

echo $grid->renderFromDb($columns, $rs);
?>

