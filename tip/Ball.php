<?php

include_once 'Car.php';

class Ball extends Car {
    
    public static function who() {
        echo __CLASS__;
    }
}
?>

