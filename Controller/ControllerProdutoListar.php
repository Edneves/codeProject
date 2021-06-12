<?php
require_once "models/ProdutoModel.php";
require_once "IControlador.php";
class ControladorProdutoListar implements IControlador{
    private $produto;

    public function __construct(){
        $this->produto = new ProdutoModel();
    }

    public function processaRequisicao(){
        $listaProdutos = $this->produto->listarTodos();
        require "views/ListarProduto.php";
    }
}
?>