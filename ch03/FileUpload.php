<?php

class FileUpload {
    
    public $name;
    
    function __construct($name) {
        $this->name = $name;
    }
    
    function __toString() {
        return "<input type='file' name='{$this->name}' />";
    }
}
?>
