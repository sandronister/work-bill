<?php 

require_once 'entity/order.php';
require_once 'dto/order.dto.php';

class OrderMapper {


    public static function DTOToEntity(OrderDTO $dto): OrderEntity {
        $order = new OrderEntity();
        $order->nome = $dto->nome;
        $order->sobrenome = $dto->sobrenome;
        $order->tipo_instrumento = $dto->tipo_instrumento;
        $order->descricao = $dto->descricao;
        $order->data_inicio = $dto->data_inicio;
        $order->data_termino = $dto->data_termino;
        return $order;
    }
}