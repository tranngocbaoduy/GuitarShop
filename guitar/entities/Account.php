<?php
class Account{
    public $username;
    public $name;
    public $password;

    public function __construct($username, $name, $password)
    {
        $this->username = $username;
        $this->name = $name;
        $this->password = $password;
    }
}
?>