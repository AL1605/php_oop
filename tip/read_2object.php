<?php

include_once 'Book.php';
include_once 'BookType.php';

$input = file_get_contents('data2.jt');
$data = unserialize($input);

foreach ($data as $book) {
    echo "isbn = $book->isbn <br />";
    echo "name = $book->name <br />";
    echo "price = $book->price <br />";
    echo "page = $book->page <br />";
    echo "bookType id = {$book->bookType->id} <br />";
    echo "bookType name = {$book->bookType->name} <br />";
    echo "<hr />";
}
?>
