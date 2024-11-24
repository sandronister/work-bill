<?php 

class OrderDTO {
    public $id;
    public $nome;
    public $sobrenome;
    public $tipo_instrumento;
    public $descricao;
    public $data_inicio;
    public $data_termino;

  

    public function init(&$data){
        $this->nome = $data['nome'];
        $this->sobrenome = $data['sobrenome'];
        $this->tipo_instrumento = $data['tipo_instrumento'];
        $this->descricao = $data['descricao'];
        $this->data_inicio = $data['data_inicio'];
        $this->data_termino = $data['data_termino'];
    }

    public function getDataIni(){
        $format = new DateTime($this->data_inicio);
        return $format->format('d/m/Y');
    }

    public function getDatafim(){
        $format = new DateTime($this->data_termino);
        return $format->format('d/m/Y');
    }

}