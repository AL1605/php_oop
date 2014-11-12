<?php

include_once '../ch02/db.php';
include_once '../workshop/connect.php';
$rs = $db->findAll('bill')->execute();
?>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $(function() {
        $("#ddlBill").change(function() {
            var bill_id = $(this).val();
            $("#ddlOrder").load('ddlOrder.php?bill_id=' + bill_id);
        });
    });
</script>

<meta charset="utf-8" />
<select id="ddlBill">
    <?php while ($r = mysql_fetch_array($rs)): ?>
    <option value="<?php echo $r['id']; ?>">
        ID: <?php echo $r['id'].'/'.$r['customer_name']; ?>
        วันที่สั่งซื้อ : <?php echo $r['created_date']; ?>
    </option>
    <?php endwhile; ?>
</select>
<span id="ddlOrder"></span>
