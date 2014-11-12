<?php

class Menu {
    
    public $items = array();
    
    function add($label, $url) {
        $index = count($this->items);
        $this->items[$index] = array($label, $url);
    }
    
    function __toString() {
        if (count($this->items) > 0) {
            $html = "<ul>";
            foreach ($this->items as $item) {
                $label = $item[0];
                $url = $item[1];
                $html .= "<li><a href='{$url}'>{$label}</a></li>";
            }
            $html .= "</ul>";
            return $html;
        }
        return "";
    }
}
?>
