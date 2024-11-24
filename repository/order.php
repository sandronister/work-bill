<?php

require_once 'entity/order.php';

class OrderRepository{

    private $connection;

    public function __construct(&$connection){
        $this->connection = $connection;
    }

    public function save(OrderEntity $order){
        try{
            $sql = "INSERT INTO orders (nome,sobrenome, tipo, descricao, data_inicio, data_fim)
                VALUES ('$order->nome', '$order->sobrenome','$order->tipo_instrumento', '$order->descricao', '$order->data_inicio', '$order->data_termino')";

            $this->connection->query($sql);
        }catch(Exception $e){
            throw new Exception("Erro ao salvar a ordem: " . $e->getMessage());
        }
    }

    public function delete(int $id){
        try{
            $sql = "DELETE FROM orders WHERE id = $id";
            echo $sql;
            $this->connection->query($sql);
        }catch(Exception $e){
            throw new Exception("Erro ao deletar a ordem: " . $e->getMessage());
        }
    }

    public function listAll(){
        try{
            $sql = "SELECT * FROM orders";
            $result= $this->connection->query($sql);
            $orders= new SplDoublyLinkedList();
            while($row = $result->fetch_assoc()){
              $orders->push($this->getOrderEntity($row));
            }
            return $orders;
        }catch(Exception $e){
            throw new Exception("Erro ao listas as ordens". $e->getMessage());
        }
    }

    public function find(int $id){
        try{
            $sql = "SELECT * FROM orders WHERE id = $id";
            $result =  $this->connection->query($sql);
            $row = $result->fetch_assoc();
            return $this->getOrderEntity($row);
        }catch(Exception $e){
            throw new Exception("Erro ao buscar a ordem". $e->getMessage());
        }
    }

    public function update(OrderEntity $order){
        try{
            $sql = "UPDATE orders SET nome = '$order->nome', tipo = '$order->tipo_instrumento', descricao = '$order->descricao', data_inicio = '$order->data_inicio', data_fim = '$order->data_termino' WHERE id = $order->id";
            $this->connection->query($sql);
        }catch(Exception $e){
            throw new Exception("Erro ao atualizar a ordem". $e->getMessage());
        }
    }

    private function getOrderEntity(mixed $row) : OrderEntity{
        $entity = new OrderEntity();
        $entity->id = $row["id"];
        $entity->nome = $row["nome"];
        $entity->sobrenome = $row["sobrenome"];
        $entity->tipo_instrumento = $row["tipo"];
        $entity->descricao = $row["descricao"];
        $entity->data_inicio = $row["data_inicio"];
        $entity->data_termino = $row["data_fim"];
        return $entity;
    }
}