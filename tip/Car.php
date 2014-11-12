<?php
class Car {
    
    public static function who() {
        echo __CLASS__;
    }
    
    public static function test() {
        Car::who();
    }
}
?>