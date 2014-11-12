<?php

include_once 'Book.php';
$datas = array();
$book1 = new Book();
$book1->isbn = 10011;
$book1->name = 'PHP OOP';
$book1->price = 300;
$book1->page = 250;

$book2 = new Book();
$book2->isbn = 10012;
$book2->name = 'PHP Advanced';
$book2->price = 300;
$book3->page = 280;

$datas[0] = $book1;
$datas[1] = $book2;

$output = serialize($datas);
file_put_contents('data_book.jt', $output);
echo 'write book complete';
?>
