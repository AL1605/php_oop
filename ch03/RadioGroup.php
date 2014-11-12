<?php

class RadioGroup {

    private $items = array();
    public $name;

    function __toString() {
        $html = '';

        foreach ($this->items as $item) {
            $html .= "<input type='radio' 
                    name='{$this->name}' 
                    value='{$item[value]}' />{$item[label]} ";
        }
        return $html;
    }

    function add($label, $value) {
        $this->items[count($this->items)] = array(
            'label' => $label,
            'value' => $value
        );
    }
}
?>

