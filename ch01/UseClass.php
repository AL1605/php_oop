<?php

// สร้าง class ชื่อ UseClass
class UseClass {
    var $x;
}

// สร้าง object
$useClass = new UseClass();

// แสดงค่า x ก่อนกำหนดค่า
echo $useClass->x;

// กำหนดค่าให้ x = 10
$useClass->x = 10;

// แสดงค่าของ x หลังกำหนดค่าแล้ว
echo $useClass->x;
?>
