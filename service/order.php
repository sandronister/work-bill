<?php 

require_once 'repository/order.php';
require_once 'utils/mapper.php';

class OrderService{

    private OrderRepository $orderRepository;

    public function __construct(OrderRepository $orderRepository){
        $this->orderRepository = $orderRepository;
    }

    public function createOrder(OrderDTO $order){
        try{
            $entity=OrderMapper::DTOToEntity($order, 0);
            $entity->valid();
            $this->orderRepository->save($entity);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }

        return $entity;
    }

    public function updateOrder(OrderDTO $order,int $id){
        try{
            $entity=OrderMapper::DTOToEntity($order,$id);
            $entity->valid();
            $this->orderRepository->update($entity);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function deleteOrder(int $id){
        try{    
            $this->deleteOrder($id);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
    public function getOrder(int $id){
        try{
            $entity= $this->orderRepository->find($id);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
        return OrderMapper::EntityTODTO($entity);
    }   

    public function listAll(){
        $result=array();
        try{
            $list=$this->orderRepository->listAll();
            foreach($list as $order){
                $result[]=OrderMapper::EntityTODTO($order);
            }
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
        return $result;
    }
            


}