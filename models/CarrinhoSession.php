<?php
require_once "iCarrinhoModel.php";
require_once "ItemCarrinhoModel.php";

class CarrinhoSession implements ICarrinho{
    private $itens = array();

    public function __construct(){
        $this->itens = $this->restaura();
    }

    public function estaNoCarrinho($id){
        return isset($this->itens[$id]);
    }

    public function adicionar($item){
        $id = $item->getProduto()->getCodigo();
        if ($this->estaNoCarrinho($id))
            $this->itens[$id] = $item;
        else
            $this->itens[$id]->setQuantidade($this->itens[$id]->getQuantidade()+1);    
    }

    public function atualizar($item){
        $id=$item->getProduto()->getCodigo();
        if ($this->estaNoCarrinho($id)){
            if($item->getQuantidade()==0){
                $this->apagar($id);
                return;
            }
            $this->itens[$id] = $item;
        }
    }

    public function apagar($id){
        if ($this->estaNoCarrinho($id))
            unset($this->itens[$id]);
    }

    public function getTotal(){
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->getSubTotal();
        }
        return $total;
    }

    public function getItensCarrinho(){
        return $this->itens;
    }

    public function __destruct(){
        $_SESSION['carrinho2'] = serialize($this->itens);
    }

    public function restaura(){
        if(isset($_SESSION['carrinho2'])){
            return unserialize($_SESSION['carrinho2']);
        }
        else
            return array();
    }
}

?>