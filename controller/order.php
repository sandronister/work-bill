<?php

require_once __DIR__ . '/../service/order.php';

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
            }catch(Exception $e){
                throw new Exception($e->getMessage());
            }

            return null;
        }
       
    }

    public function update_order(){
        if ($_SERVER["REQUEST_METHOD"] == "PUT") {
            $order = new OrderDTO();
            $order->init($_POST);
            $id=$_REQUEST["id"];
        
            try{
               $this->order_service->updateOrder($order,$id);
            }catch(Exception $e){
                throw new Exception($e->getMessage());
            }

            return null;
        }
       
    }

    public function delete_order(){
        if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
            $id=$_REQUEST["id"];
        
            try{
               $this->order_service->deleteOrder($id);
            }catch(Exception $e){
                throw new Exception($e->getMessage());
            }

            return null;
        }
       
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