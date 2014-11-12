<?php

class GridView {
    
    public $name;
    public $data;
    public $deleteUrl;
    public $editUrl;
    public $viewUrl;
    public $deleteText;
    public $editText;
    public $viewText;
    public $header;
    public $width;
    
    function __construct() {
        $this->deleteText = 'delete';
        $this->editText = 'edit';
        $this->viewText = 'view';
        $this->borderWidth = '1px';
        $this->header = array();
        $this->width = array();
    }
    
    function __toString() {
        $html = "";
        $header = "";
        $body = "";
        
        // render header
        $size = count($this->header);
        for ($i = 0; $i < $size; $i++) {
            $headerText = $this->header[$i];
            $headerWidth = $this->width[$i];
            
            $header .= "<td width='{$headerWidth}'>{$headerText}</td>";
        }
        
        // render body
        $size = count($this->data);
        for ($i = 0; $i < $size; $i++) {
            $row = $this->data[$i];
            $columnCount = count($row);
            
            $body .= "<tr>";
            for ($j = 0; $j < $columnCount; $j++) {
                $columnText = $row[$j];
                $body .= "<td>{$columnText}</td>";
            }
            $body .= "</tr>";
        }
        
        // pattern GridView
        $html = "
            <table id='{$this->name}' border='1' style='border-collapse: collapse;'>
                <thead>
                    <tr>
                        {$header}
                    </tr>
                </thead>
                <tbody>
                    {$body}
                </tbody>
            </table>";
        
        return $html;
    }
    
    function renderFromDb($fields, $result) {
        $html = "";
        $header = "";
        $body = "";
        
        // render header
        $size = count($this->header);
        for ($i = 0; $i < $size; $i++) {
            $headerText = $this->header[$i];
            $headerWidth = $this->width[$i];
            
            $header .= "<td width='{$headerWidth}'>{$headerText}</td>";
        }
        
        // render body
        $columnCount = count($fields);
        while ($r = mysql_fetch_assoc($result)) {
            $body .= "<tr>";
            for ($i = 0; $i < $columnCount; $i++) {
                $fieldIndex = $fields[$i];
                $columnText = $r[$fieldIndex];
                
                $body .= "<td>{$columnText}</td>";
            }
            
            // PK : Primary Key
            $id = $r['id'];
            
            // add button delete
            if ($this->deleteUrl != "") {
                $body .= "
                    <td>
                        <a href='{$this->deleteUrl}?id={$id}'>
                            {$this->deleteText}
                        </a>
                    </td>";
            }
            
            // add button edit
            if ($this->editUrl != "") {
                $body .= "
                    <td>
                        <a href='{$this->editUrl}&id={$id}'>
                            {$this->editText}
                        </a>
                    </td>";
            }
            
            $body .= "</tr>";
        }
        
        // pattern GridView
        $html = "
            <table id='{$this->name}' border='1' style='border-collapse: collapse;'>
                <thead>
                    <tr>
                        {$header}
                    </tr>
                </thead>
                <tbody>
                    {$body}
                </tbody>
            </table>";
        
        echo $html;
    }
}
?>
