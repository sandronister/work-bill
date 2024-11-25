<?php


function getDBConfig(){
    if (!file_exists('config.ini')){
        throw new Exception('Arquivo de configuração não encontrado');
    }
    $config= parse_ini_file(  'config.ini', true);
    return $config['database'];
}

function getDb(): mysqli{

    try{

        $dbConfig= getDBConfig();

        return new mysqli($dbConfig['host'], 
                         $dbConfig['username'],
                         $dbConfig['password'], 
                         $dbConfig['database']);

     
         
    } catch (Exception $e){
       throw new Exception($e->getMessage());
    }

    
}