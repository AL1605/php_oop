<?php

class UseParameter {
    
    function hello($name) {
        echo 'Hello '.$name;
    }
}

$obj = new UseParameter();
$obj->hello('Tavon Seesenpila');
?>
