<?php 

require_once 'utils/db.php';
require_once 'service/migrations.php';   
require_once 'controller/migrations.php';

class MigrationDI{

    public static function create(){
        try{
            $conn = getDb();
            $service = new MigrationsService($conn);
            $controller = new MigrationsController($service);
            return $controller;
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}
