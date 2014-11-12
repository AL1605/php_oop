<?php

class ButtonSubmit {
    
    public $text;
    
    function __construct($text) {
        $this->text = $text;
    }
    
    function __toString() {
        return "<input type='submit' value='{$this->text}' />";
    }
}
?>
