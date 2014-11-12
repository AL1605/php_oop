<?php

// สร้าง class Book
class Book {
    
    // สร้าง method addBook
    function addBook($name, $page = 1) {
        echo "Book $name page is $page";
        echo "<br />";
    }
}

// สร้าง object
$book1 = new Book();
$book2 = new Book();

// เรียกใช้งาน method addBook
$book1->addBook('PHP OOP');
$book2->addBook('PHP MySQL Advanced', 95);
?>
