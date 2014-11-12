<?php

class TextField {
    
    public $value;
    public $name;
    public $size = 20;
    
    function __construct($name, $value = null) {
        $this->name = $name;
        
        if (!empty($value)) {
            $this->value = $value;
        }
    }
    
    function __toString() {
        return "<input type='text' 
                    name='{$this->name}' 
                    value='{$this->value}' 
                    size='{$this->size}' />";
    }
}
?>
