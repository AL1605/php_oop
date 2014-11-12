<?php

class Login {
    
    public $username;
    public $password;
    public $successUrl;
    public $failUrl;
    public $table;
    public $usernameField;
    public $passwordField;
    public $connection;
    
    function checkLogin() {
        $sql = "
            SELECT * FROM $this->table 
            WHERE $this->usernameField = '$this->username' 
            AND $this->passwordField = '$this->password'";
        
        $this->connection->sql = $sql;
        $r = $this->connection->executeRow();
        
        if ($r) {
            $_SESSION['User'] = $r;
            header("location: $this->successUrl");
        } else {
            header("location: $this->failUrl");
        }
    }
}
?>
