<?php

class CheckBoxList {

    public $connection;
    public $name;
    public $table;
    public $key;
    public $label;

    function render() {
        $rs = $this->connection->findAll($this->table)->execute();

        while ($r = mysql_fetch_array($rs)) {
            $label = $r[$this->label];
            $value = $r[$this->key];

            echo "<input type='checkbox' 
                    name='{$this->name}[]' 
                    value='{$value}' />
                  $label
                  <br />";
        }
    }
}
?>

