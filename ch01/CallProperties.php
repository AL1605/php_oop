<?php

class Book {
    
    // สร้าง properties
    var $price;
    var $name;
    
    // สร้าง function
    function callProperties() {
        // กำหนดค่าให้ properties
        $this->price = 100;
        $this->name = 'PHP OOP Basic';
        
        // แสดงค่า
        echo $this->price."<br />".$this->name;
    }
}

$book = new Book();
$book->callProperties();
?>
