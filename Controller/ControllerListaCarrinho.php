<?php

require_once "models/CarrinhoSession.php";
require_once "models/ItemCarrinhoModel.php";
require_once "IControlador.php";
class ControladorListaCarrinho implements IControlador{
    private $carrinho;

    public function __construct(){
        $this->carrinho = new CarrinhoSession();  
    }

    public function processaRequisicao(){
        
        $itensCarrinho = $this->carrinho->getItensCarrinho();
        $carrinho = $this->carrinho;
        require "views/ListarCarrinho.php";
    }
}
    
    
?>