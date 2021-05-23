<?php

class MovimentacaoModel{
    private $dataentrega;
    private $situacaoEntrega;

    public function __construct($dataentrega, $situacaoEntrega){
        $this->dataentrega = $dataentrega;
        $this->situacaoEntrega = $situacaoEntrega;
    }
    public function getDataEntrega(){
        return $this->dataentrega;
    }
    public function getSituacaoentrega(){
        return $this->situacaoEntrega;
    }
}