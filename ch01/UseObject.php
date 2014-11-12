<?php

class Book {
    
    var $price;
}

// สร้าง object $java, $php
$java = new Book();
$php = new Book();

// กำหนดค่าให้กับ price
$java->price = 100;
$php->price = 200;

// แสดงข้อมูล
echo $java->price.' '.$php->price.'<br />';

// เปลี่ยนค่าและแสดงข้อมูล
$java->price = 300;
echo $java->price.' '.$php->price;
?>
