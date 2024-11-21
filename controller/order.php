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
                return $e;
            }

            return null;
          
        }
       
    }
}