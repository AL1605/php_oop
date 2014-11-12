<?php

class Book {
    
    function methodA() {
        echo '555';
    }
}

$book = new Book();     // สร้าง object ชื่อ $book
$book->methodA();       // เรียกใช้ method methodA()
?>
