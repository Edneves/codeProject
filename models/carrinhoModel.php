<?php
require("itemModel.php");
class CarrinhoModel{
    private ItemModel $items = array();
    private $quantidade;
    private $precoTotal;

    public function __construct($quantidade, $precoTotal){
        $this->quantidade = $quantidade;
        $this->precoTotal = $precoTotal;
    }
    
    public function getQuantidade(){
        $this->quantidade;
    }
    public function getPrecoTotal(){
        $this->precoTotal;
    }
    public function getItem(){
        $this->items;
    }

    public function exibirCarrinho($item){
        $this->items.array_push($item);
    }

    public function fecharCarrinho(){
        echo "Vocẽ fechou o carrinho";
    }
}


