<?php

// สร้าง class
class Properties {
    
    // สร้าง properties $id
    var $id;
    
    // สร้าง properties $name
    var $name;
}

// สร้าง object
$p = new Properties();

// กำหนดค่าให้ $p;
$p->id = 10;
$p->name = 'Tavon';

// แสดงค่า
echo $p->id.' '.$p->name;
?>
