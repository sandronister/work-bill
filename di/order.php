<?php

require_once "repository/order.php";

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