<?php

include_once '../../ch03/Link.php';
include_once '../../ch02/db.php';
include_once '../../ch03/GridView.php';
include_once '../connect.php';

$linkNew = new Link();
$linkNew->label = 'เพิ่มรายการใหม่';
$linkNew->url = 'index.php';
$linkNew->params = 'url=product_form.php';

echo $linkNew;

// data
$rs = $db->findAll('product')->execute();

$grid = new GridView();
$grid->header = array('ชื่อหนังสือ', 'ราคา', 'วันที่บันทึก');
$grid->width = array('300px', '100px', '150px');
$grid->deleteUrl = 'product_delete.php';
$grid->editUrl = 'index.php?url=product_form.php';
$grid->renderFromDb(array('name', 'price', 'created_date'), $rs);
?>
