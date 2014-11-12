<?php
class A {
    public static function methodA() {
        echo __CLASS__;
    }
    
    public static function methodB() {
        self::methodA();
    }
}
?>
