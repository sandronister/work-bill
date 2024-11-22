<?php

require_once __DIR__ . "/config.php";

function getDb(){

    try{

        $dbConfig= getDBConfig();
        echo $dbConfig;
        $conn = new mysqli($dbConfig->servername,
                        $dbConfig->username,
                         $dbConfig->password, 
                         $dbConfig->database);
    } catch (Exception $e){
       throw new Exception('Não foi possível conectar ao banco de dados');
    }

    return $conn;
    
}