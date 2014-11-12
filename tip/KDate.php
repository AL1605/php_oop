<?php

class KDate {
    public static function now() {
        return date("Y-m-d h:i:s");
    }
    
    public static function nowThai() {
        return date("d/m/Y h:i:s");
    }
    
    public static function date() {
        return date("Y-m-d");
    }
    
    public static function dateThai() {
        return date("d/m/Y");
    }
    
    public static function thaiToMySQL($input) {
        $arr = explode("/", $input);
        $y = $arr[2];
        $m = $arr[1];
        $d = $arr[0];
        
        return "$y-$m-$d";
    }
    
    public static function mysqlToThai($input) {
        $arr = explode("/", $input);
        $y = $arr[0];
        $m = $arr[1];
        $d = $arr[2];
        
        return "$d/$m/$y";
    }
}
?>
