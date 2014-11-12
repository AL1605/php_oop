<?php

class Book {    
    var $isbn;
    var $name;
}

// สร้าง object $book_php พร้อมกำหนดค่า
$book_php = new Book();
$book_php->isbn = '100113';
$book_php->name = 'PHP Basic';

// สร้าง object $book_java พร้อมกำหนดค่า
$book_java = new Book();
$book_java->isbn = '20015';
$book_java->name = 'JAVA Advanced';

// แสดงค่าต่าง ๆ ของ object
echo "$book_php->isbn : $book_php->name";
echo "<hr />";
echo "$book_java->isbn : $book_java->name";
?>
