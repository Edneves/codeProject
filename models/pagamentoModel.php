<?php

class PagamentoModel{
    private $tipoPagamento;

    public function __construct($tipoPagamento){
        $this->tipoPagamento = $tipoPagamento;
    }
    
    public function getTipoPagamento(){
        return $this->tipoPagamento;
    }
        
    
}