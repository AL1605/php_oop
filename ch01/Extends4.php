<?php

class Book {
    
    var $name;
    var $price;
    
    function showData() {
        return $this->name.' '.$this->price;
    }
}
class JavaBook extends Book {
    function __construct() {
        $this->name = 'Java Book';
        $this->price = 200;
    }
}
class PHPBook extends Book {
    function __construct() {
        $this->name = 'PHP Book';
        $this->price = 400;
    }
}

$javaBook = new JavaBook();
$phpBook = new PHPBook();

echo $javaBook->showData();
echo '<br />';
echo $phpBook->showData();
?>
