<?php

include_once 'Book.php';
$data = file_get_contents('data.karoe');
$book = unserialize($data);

echo "isbn = $book->isbn <br />";
echo "name = $book->name <br />";
echo "price = $book->price <br />";
echo "page = $book->page <hr />";
?>
