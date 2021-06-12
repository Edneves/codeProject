<?php
require_once "ProdutoModel.php";
class ItemCarrinho{
    private $produto;
    private $quantidade;

    public function __construct($id, $quantidade){
        $this->produto = new ProdutoModel();
        $this->produto->setCodigo($id);
        $this->produto->pesquisarProd();
        $this->quantidade = $quantidade;
    }
    public function getProduto(){
        return $this->produto;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setProduto($produto){
        $this->produto = $produto;
    }
    public function setquantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function subTotal(){
        return $this->produto->getPreco() * $this->quantidade;
    }
}
?>