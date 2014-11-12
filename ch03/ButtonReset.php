<?php

class ButtonReset {
    
    public $text;
    
    function __construct($text) {
        $this->text = $text;
    }
    
    function __toString() {
        return "<input type='reset' value='{$this->text}' />";
    }
}
?>
