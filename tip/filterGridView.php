<meta charset="utf-8" />

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $(function() {
        $("#ddlStatus").change(function() {
            var status = $(this).val();
            window.location.href = 'filterGridView.php?status=' + status;
        });
    });
</script>

<select id="ddlStatus">
    <option value="wait">รอชำระ</option>
    <option value="pay">ชำระเงินแล้ว</option>
    <option value="send">จัดส่งแล้ว</option>
</select>

<?php
include_once '../ch02/db.php';
include_once '../ch03/GridView.php';
include_once '../workshop/connect.php';

// GridView
$fields = array('id', 'customer_name', 'name', 'order_status');
$db->sql = "
    SELECT 
        orders.id, 
        orders.order_status, 
        bill.customer_name, 
        product.name
    FROM orders
    INNER JOIN product ON product.id = orders.product_id
    LEFT JOIN bill ON bill.id = orders.bill_id
";

if (!empty($_GET['status'])) {
    $db->sql .= "WHERE order_status = '$_GET[status]'";
}

$rs = $db->execute();

$grid = new GridView();
$grid->header = array('#', 'ผู้สั่งซื้อ', 'รายการ', 'สถานะ');
$grid->width = array('50px', '300px', '200px', '50px');
$grid->renderFromDb($fields, $rs);
?>
