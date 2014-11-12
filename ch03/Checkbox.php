<?php

class Checkbox {

    public $name;
    public $value;
    public $label;

    function __toString() {
        return "<input type='checkbox' 
                name='{$this->name}' 
                value='{$this->value}' /> {$this->label}";
    }

}

?>
