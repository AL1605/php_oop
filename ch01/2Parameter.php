<?php

class Book {
    
    function method2param($firstname, $lastname) {
        echo "F = $firstname L = $lastname";
    }
}

$obj = new Book();  // สร้าง object $obj
$obj->method2param('Tavon', 'Seesenpila');  // เรียกใช้และส่ง param เข้าไป
?>
