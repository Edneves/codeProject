<?php
include_once('../database/conexao.php');

class ProdutoModel{
    private $idProduto;
    private $nome;
    private $preco;
    private $descricao;
   

    // MÉTODOS GETTERS PARA O CLIENTE
    public function getIdProduto(){ return $this->idProduto;}
    public function getNome(){ return $this->nome; }
    public function getPreco(){ return $this->preco; }
    public function getDescricao(){ return $this->descricao; }

    // MÉTODOS SETTERS PARA O CLIENTE
    public function setNome($nome){ $this->nome = $nome;}
    public function setPreco($preco){ $this->preco = $preco;}
    public function setDescricao($descricao){ $this->descricao = $descricao;}   
}
?>