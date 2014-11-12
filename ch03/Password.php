<?php

class Password {
    
    public $name;
    public $size;
    
    function __construct($name, $size = 20) {
        $this->name = $name;
        $this->size = $size;
    }
    
    function __toString() {
        return "<input type='password' 
                        name='{$this->name}' 
                        size='{$this->size}' />";
    }
}
?>
