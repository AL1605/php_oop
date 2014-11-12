<?php

include_once 'Book.php';

$input = file_get_contents('data_book.jt');
$data = unserialize($input);

foreach ($data as $book) {
    echo "isbn = $book->isbn <br />";
    echo "name = $book->name <br />";
    echo "price = $book->price <br />";
    echo "page = $book->page";
    echo "<hr />";
}
?>
