<?php

class DatabaseConnect {
    public function __construct($db_host, $db_username, $db_password) {
        echo 'Attempting connection...';
        if (!@$this->connect($db_host, $db_username, $db_password)) {
            echo 'Connection failed.';
        } else {
            echo 'Connected to '.$db_host;
        }
    }
    
    public function connect($db_host, $db_username, $db_password) {
        if (!mysql_connect($db_host, $db_username, $db_password)) {
            return false;
        } else {
            return true;
        }
    }
}

$connection = new DatabaseConnect('localhost', 'root', '');

?>
