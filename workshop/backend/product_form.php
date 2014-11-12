<?php

include_once '../../ch03/Form.php';
include_once '../../ch03/Label.php';
include_once '../../ch03/TextField.php';
include_once '../../ch03/TextArea.php';
include_once '../../ch03/FileUpload.php';
include_once '../../ch03/ButtonSubmit.php';

$form = new Form();
$lblName = new Label('ชื่อสินค้า: ');
$lblDetail = new Label('รายละเอียด: ');
$lblPrice = new Label('ราคา: ');
$lblImage = new Label('ภาพสินค้า: ');

$txtName = new TextField('name');
$txtDetail = new TextArea('detail');
$txtDetail->cols = 50;
$txtDetail->rows = 5;

$txtPrice = new TextField('price');
$fileImage = new FileUpload('image');
$submitButton = new ButtonSubmit('Save Data');

// data for edit
if (!empty($_GET['id'])) {
    include_once '../../ch02/db.php';
    include_once '../connect.php';
    
    $id = $_GET['id'];
    $r = $db->findByPk('product', 'id', $id)->executeRow();
    $txtName->value = $r['name'];
    $txtDetail->value = $r['detail'];
    $txtPrice->value = $r['price'];
}

echo '<h3>บันทึกรายการสินค้า</h3>';
echo '<hr />';
echo $form->open('product_save.php');
echo $lblName . $txtName . '<br />';
echo $lblDetail . $txtDetail . '<br />';
echo $lblPrice . $txtPrice . '<br />';
echo $lblImage . $fileImage . '<br />';
echo $submitButton;
echo "<input type='hidden' name='id' value='$_GET[id]' />";
echo $form->close();
?>
