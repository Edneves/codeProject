<?php
require("itemModel.php");
class CarrinhoModel{
    private ItemModel $item = array();
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
        $this->item;
    }

    public function exibirCarrinho(ItemModel $itens){
        $this->item.array_push($item);
    }

    public function fecharCarrinho(){
        echo "Vocẽ fechou o carrinho";
    }
}


