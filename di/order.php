<?php

require_once "repository/order.php";
require_once "service/order.php";
require_once "controller/order.php";
require_once "utils/db.php";

class OrderDI{

    public static function create(){
        try{
            $conn = getDb();
            $repository = new OrderRepository($conn);
            $service = new OrderService($repository);
            $controller = new OrderController($service);
            return $controller;
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}