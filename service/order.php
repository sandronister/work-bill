<?php 

require_once __DIR__ . '/../repository/order.php';

class OrderService{

    private OrderRepository $orderRepository;

    public function __construct(OrderRepository $orderRepository){
        $this->orderRepository = $orderRepository;
    }

    public function createOrder(OrderDTO $order){
        $order = new OrderDTO();
        $order->init( $request );

        try{
            $entity=OrderMapper::DTOToEntity($order);
            $entity->valid();
            $this->orderRepository->save($entity);
        }catch(Exception $e){
            return $e;
        }

        return $entity;
    }

}