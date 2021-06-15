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
        if(!empty($_SESSION['id']) == true){
            $itensCarrinho = $this->carrinho->getItensCarrinho();
            $carrinho = $this->carrinho;
            require "views/ListaCarrinho.php";
        }
        else{
            require "views/login.php";
        }
    }
}
    
    
?>