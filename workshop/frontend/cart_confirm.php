<h3>ยืนยันการสั่งซื้อ : โปรดระบุข้อมูลของคุณ</h3>
<?php
include_once '../../ch03/Form.php';
include_once '../../ch03/TextField.php';
include_once '../../ch03/ButtonSubmit.php';
include_once '../../ch03/Label.php';

$form = new Form();
$lblName = new Label('ชื่อผู้ซื้อ: ');
$txtName = new TextField('customer_name');
$lblTel = new Label('เบอร์โทร: ');
$txtTel = new TextField('customer_tel');
$lblAddress = new Label('ที่อยู่ในการจัดส่ง: ');
$txtAddress = new TextField('customer_address');
$buttonSubmit = new ButtonSubmit('สิ้นสุดการสั่งซื้อ');

echo $form->open('cart_end.php');
echo $lblName.$txtName.'<br />';
echo $lblTel.$txtTel.'<br />';
echo $lblAddress.$txtAddress.'<br />';
echo $buttonSubmit;
echo $form->close();
?>