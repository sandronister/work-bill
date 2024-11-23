<?php


function getDBConfig(){
    $config= parse_ini_file(  'config.ini', true);
    return $config['database'];
}

function getDb(){

    try{

        $dbConfig= getDBConfig();

        return new mysqli($dbConfig['host'], 
                         $dbConfig['username'],
                         $dbConfig['password'], 
                         $dbConfig['database']);

     
         
    } catch (Exception $e){
       throw new Exception('Não foi possível conectar ao banco de dados');
    }

    
}