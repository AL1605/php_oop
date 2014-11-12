<?php

class Book {
    
    var $price;
    var $name;
    
    // สร้าง constructor รับค่า $name, $price เข้ามา
    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    function show() {
        return 'name = '.$this->name.' price = '.$this->price;
    }
}

$book1 = new Book('PHP OOP', 300);
$book2 = new Book('PHP MySQL', 350);

echo $book1->show();
echo "<br />";
echo $book2->show();
?>
