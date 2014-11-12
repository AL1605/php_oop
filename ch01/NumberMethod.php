<?php

class Book {
    
    function NumberMethod($x, $y) {     // สร้าง method
        echo $x + $y;                   // คำนวนค่า + กันระหว่าง $x, $y
    }
}

$obj = new Book();              // สร้าง object
$obj->NumberMethod(10, 15);     // เรียกใช้และส่งค่า 10, 15 เข้าไป
?>
