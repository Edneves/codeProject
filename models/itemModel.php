<?php
require("produtoModel.php");
class ItemModel{
    private ProdutoModel $produto;
    private $precoUnitario;

    public function __construct($precoUnitario){
        $this->precoUnitario = $precoUnitario;
    }
    public function getProduto(){
        $this->produto;
    }

    public function getPrecoUnitario(){
        $this->precoUnitario;
    }

    public function listardados(){
        echo "Produto: ". $this->produto->listarproduto(). "Preço: ". $this->precoUnitario;

    }
}


