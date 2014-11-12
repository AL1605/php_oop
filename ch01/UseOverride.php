<?php

class Book {
    var $name;
    
    function showData() {
        return 'Name book is '.$this->name;
    }
}

class NewBook extends Book {
    function showData() {
        return $this->name;
    }
}

$b1 = new Book();
$b1->name = 'First Book';

$b2 = new NewBook();
$b2->name = 'Second Book';

echo $b1->showData();
echo '<br />';
echo $b2->showData();
?>
