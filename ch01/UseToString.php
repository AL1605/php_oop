<?php

class Book {
    
    // สร้าง __toString() method
    // ใช้ส่งคืนค่าต่าง ๆ ที่เป็นข้อความ
    function __toString() {
        return 'Hello __toString() called.';
    }
}

$book = new Book();
echo $book;     // แสดงค่า object
?>
