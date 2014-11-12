<?php

// สร้าง class Book
class Book {
    var $name;
    var $price;
}

// สร้าง class JavaBook และสืบทอดคุณสมบัติจาก Book
class JavaBook extends Book {
    function getDetail() {
        return $this->name.' '.$this->price;
    }
}

// สร้าง object พร้อมกำหนดค่า และแสดงค่าต่าง ๆ
$book = new JavaBook();
$book->price = 200;
$book->name = 'Java Basic';

echo $book->getDetail();
?>
