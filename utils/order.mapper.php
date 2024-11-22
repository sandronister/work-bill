<?php 

require_once 'entity/order.php';
require_once 'dto/order.dto.php';

class OrderMapper {


    public static function DTOToEntity(OrderDTO $dto,int $id): OrderEntity {
        $order = new OrderEntity();
        if($id > 0) {
            $order->id = $id;
        }
        $order->nome = $dto->nome;
        $order->sobrenome = $dto->sobrenome;
        $order->tipo_instrumento = $dto->tipo_instrumento;
        $order->descricao = $dto->descricao;
        $order->data_inicio = $dto->data_inicio;
        $order->data_termino = $dto->data_termino;
        return $order;
    }

    public static function EntityTODTO(OrderEntity $orderEntity): OrderDTO {
        $orderDTO = new OrderDTO();
        $orderDTO->id = $orderEntity->id;
        $orderDTO->nome = $orderEntity->nome;
        $orderDTO->sobrenome = $orderEntity->sobrenome;
        $orderDTO->tipo_instrumento = $orderEntity->tipo_instrumento;
        $orderDTO->descricao = $orderEntity->descricao;
        $orderDTO->data_inicio = $orderEntity->data_inicio;
        $orderDTO->data_termino = $orderEntity->data_termino;
        return $orderDTO;
    }
}
