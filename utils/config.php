<?php

class DbConfig{
    public $username;
    public $password;

    public $database;

    public $servername;

    public function __construct($username, $password, $database, $servername){
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->servername = $servername;
    }

    public function __tostring(){
        return "". $this->username ."". $this->password ."" . $this->database ."". $this->servername ."";
    }
}

function getDBConfig(){
    $dbConfig = new DbConfig("root", "asq2zyx1","luthier","localhost");
    return $dbConfig;
}


