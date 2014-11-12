<?php

class LoginBuilder {
    
    public $labelUsername;
    public $labelPassword;
    public $labelButton;
    public $url;
    
    function render() {
        echo "<form method='post' action='{$this->url}'>
                <div>
                    {$this->labelUsername}: 
                    <input type='text' name='admin_username' />
                </div>
                <div>
                    {$this->labelPassword}: 
                    <input type='password' name='admin_password' />
                </div>
                <div>
                    <input type='submit' value='{$this->labelButton}' />
                </div>
            </form>";
    }
}
?>
