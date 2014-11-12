<?php

class Form {
    public $method = "POST";
    
    function open($url) {
        return "<form 
                    enctype='multipart/form-data' 
                    method='{$this->method}' 
                    action='{$url}'>";
    }
    
    function close() {
        return "</form>";
    }
}
?>
