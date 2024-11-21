<?php


function getDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nome_do_banco_de_dados";

    try{
        $conn = new mysqli($servername, $username, $password, $dbname);
    } catch (Exception $e){
       throw new Exception('Não foi possível conectar ao banco de dados');
        
    }


 

    return $conn;
    
}