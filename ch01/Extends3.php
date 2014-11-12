<?php

class Book {
    
    var $name = 'My Book';
    var $price = 200;
    
    function showData() {
        return $this->name.' '.$this->price;
    }
}
class JavaBook extends Book {

}
class PHPBook extends Book {

}

$javaBook = new JavaBook();
$phpBook = new PHPBook();

echo $javaBook->showData();
echo '<br />';
echo $phpBook->showData();
?>
