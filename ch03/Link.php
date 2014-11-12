<?php

class Link {
    
    public $url;
    public $label;
    public $params;
    
    function __toString() {
        return "
            <a href='{$this->url}?{$this->params}'>
                {$this->label}
            </a>";
    }
}
?>
