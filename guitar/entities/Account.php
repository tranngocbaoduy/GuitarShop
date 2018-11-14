<?php
    class Account{
            public $username = null;
            public $password = null;

            public function __construct($data = array())
            {
                if (isset($data['username'])) $this->username = stripslashes(strip_tags($data['username']));
                if (isset($data['password'])) $this->password = stripslashes(strip_tags($data['password']));
            }

    }
?>