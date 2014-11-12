<?php
include_once 'Book.php';
include_once 'BookType.php';

$bookTypePhp = new BookType();
$bookTypePhp->id = 1;
$bookTypePhp->name = 'PHP Programming';

$book1 = new Book();
$book1->isbn = 10011;
$book1->name = 'PHP OOP';
$book1->price = 250;
$book1->page = 230;
$book1->bookType = $bookTypePhp;

$book2 = new Book();
$book2->isbn = 10012;
$book2->name = 'PHP Advanced';
$book2->price = 300;
$book2->page = 250;
$book2->bookType = $bookTypePhp;

$output = serialize(array($book1, $book2));
file_put_contents('data2.jt', $output);
echo 'complete';
?>
