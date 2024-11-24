<?php

require_once 'service/order.php';
require_once 'dto/order.php';




class OrderController{

    private OrderService $order_service;

    public function __construct(OrderService $order_service){
        $this->order_service = $order_service;
    }

    public function create_order(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $order = new OrderDTO();
            $order->init($_POST);
        
            try{
               $this->order_service->createOrder($order);
                header("Location: list.php");
            }catch(Exception $e){
                throw new Exception($e->getMessage());
            }

            return null;
        }
       
    }

    public function update_order(){
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $id = $_GET[ "id"];
            $order=$this->order_service->getOrder($id);
            return $order;
        }
        
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $order = new OrderDTO();
            $order->init($_POST);
            $id=$_POST["id"];
        
            try{
               $this->order_service->updateOrder($order,$id);
               header("Location: list.php");
            }catch(Exception $e){
                throw new Exception($e->getMessage());
            }

            return null;
        }
       
    }

    public function delete_order(){
        
            $id=$_REQUEST["id"];
        
            try{
               $this->order_service->deleteOrder($id);
            }catch(Exception $e){
                throw new Exception($e->getMessage());
            }

            return null;
    
       
    }

    public function list(){
        try{
            $orders = $this->order_service->listAll() ;
            return $orders;
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}