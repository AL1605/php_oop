<?php

class Book {
    // สร้าง properties แบบ static
    static public $price;
}

// เรียกใช้และกำหนดค่าให้เป็น 100
Book::$price = 100;

// แสดงค่าของตัวแปร
echo Book::$price;
?>
