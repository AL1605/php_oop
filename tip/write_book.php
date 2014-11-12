<?php

include_once 'Book.php';
$book = new Book();
$book->isbn = 134150002341;
$book->name = 'PHP OOP';
$book->price = 300;
$book->page = 250;

$data = serialize($book);
file_put_contents('data.karoe', $data);

echo 'write complete';
?>
