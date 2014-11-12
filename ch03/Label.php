<?php

class Label {
    public $text;
    
    function __construct($text) {
        $this->text = $text;
    }
    
    function __toString() {
        return "<label>{$this->text}</label>";
    }
}
?>
