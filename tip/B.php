<?php

include_once 'A.php';

class B extends A {
    public static function methodA() {
        echo __CLASS__;
    }
}

?>

