<?php

class Select {
    
    public $name;
    public $items;
    
    function __construct() {
        $this->items = array();
    }
    
    function addItem($label, $value) {
        $index = count($this->items);
        $this->items[$index] = array($label, $value);
    }
    
    function __toString() {
        $html = "<select name='{$this->name}'>";
        
        if (count($this->items) > 0) {
            $length = count($this->items);
            
            for ($i = 0; $i < $length; $i++) {
                $label = $this->items[$i][0];
                $value = $this->items[$i][1];
                
                $html .= "<option value='{$value}'>{$label}</option>";                
            }
        }
        
        $html .= "</select>";
        
        return $html;
    }
    
    function fromTable($table, $value, $label) {
        include_once '../ch02/Db.php';
        $db = new db();
        $rs = $db->findAll($table)->execute();
        
        $html = '<select>';
        
        while ($r = mysql_fetch_array($rs)) {
            $html .= "
                <option value='{$r[$value]}'>
                    {$r[$label]}
                </option>";
        }
        
        $html .= '</select>';
        
        return $html;
    } 
}
?>
