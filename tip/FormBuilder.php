<?php

class FormBuilder {
    
    public $items;
    public $method;
    public $action;
    public $title;
    
    function __construct() {
        $this->items = array();
        $this->method = 'POST';
    }
    
    function render() {
        echo "<div>{$this->title}</div>";
        echo "<hr />";
        echo "<form method='{$this->method}' action='{$this->action}'>";
        
        foreach ($this->items as $label => $input) {
            echo "<div>";
            echo "<label>$label</label>";
            echo $input;
            echo "</div>";
        }
        
        echo "
            <div>
                <label></label>
                <input type='submit' value='Submit' />
                <input type='reset' value='Reset' />
            </div>";
        
        echo "</form>";
    }
}
?>
