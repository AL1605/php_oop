<?php

class Toolbar {
    
    public $items = array();
    
    function add($label, $url) {
        $index = count($this->items);
        $this->items[$index] = array($label, $url);
    }
    
    function __toString() {
        if (count($this->items) > 0) {
            foreach ($this->items as $item) {
                $label = $item[0];
                $url = $item[1];
                $html .= "<a style='padding: 15px' href='{$url}'>{$label}</a>";
            }
            return $html;
        }
        return "";
    }
}
?>
