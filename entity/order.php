<?php

class OrderEntity{
    public $id;
    public $nome;
    public $sobrenome;
    public $tipo_instrumento;
    public $descricao;
    public $data_inicio;
    public $data_termino;

    public function valid(){
        if (empty($this->nome)){
            throw new Exception("Nome é obrigatório");
        }

        if (empty($this->sobrenome)){
            throw new Exception("Sobrenome é obrigatório");
        }

        if (empty($this->tipo_instrumento)){
            throw new Exception("Tipo do Instrumento é obrigatório");
        }

        if (empty($this->descricao)){
            throw new Exception("Descrição do Serviço é obrigatório");
        }

        if (empty($this->data_inicio)){
            throw new Exception("Data de Início é obrigatório");
        }

        if (empty($this->data_termino)){
            throw new Exception("Data de Término é obrigatório");
        }
    }
}