<?php

class TextArea {
    
    public $rows;
    public $cols;
    public $name;
    public $value;
    
    function __toString() {
        return "<textarea 
            cols='{$this->cols}' 
            rows='{$this->rows}' 
            name='{$this->name}'>{$this->value}</textarea>";
    }
}
?>
