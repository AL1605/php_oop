<?php

class Radio {
    
    public $name;
    public $checked = false;
    public $value;
    
    function __toString() {
        if ($checked) {
            $checked_text = 'checked';
        }
        
        return "<input type='radio' 
                name='{$this->name}' 
                value='{$this->value}' 
                {$this->checked} />";
    }
}
?>
