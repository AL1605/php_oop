<?php

class Book {
    
    var $name = 'My Book';
    var $price = 100;
}
class JavaBook extends Book {
    function getData() {
        return $this->name.' '.$this->price;
    }
}
class PHPBook extends Book {
    function getData() {
        return $this->name.' '.$this->price;
    }
}

$bookJava = new JavaBook();
$bookPHP = new PHPBook();

echo $bookJava->getData().'<br />';
echo $bookPHP->getData();
?>
