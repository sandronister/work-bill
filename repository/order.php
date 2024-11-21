<?php

require_once 'entity/order.php';

class OrderRepository{

    private $connection;

    public function __construct(&$connection){
        $this->connection = $connection;
    }

    public function save(OrderEntity $order){
        $sql = "INSERT INTO fichas_trabalho (nome_cliente, tipo_instrumento, descricao_servico, data_inicio, data_termino)
            VALUES ('$order->nome', '$order->tipo_instrumento', '$order->descricao', '$order->data_inicio', '$order->data_termino')";

        $this->connection->query($sql);
    }
}