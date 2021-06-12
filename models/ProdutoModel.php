<?php
require "ProdutoDAO.php";
class ProdutoModel{
    private $codigo;
    private $nome;
    private $preco;
    private $descricao;
   

    // MÉTODOS GETTERS PARA O CLIENTE
    public function getCodigo(){ return $this->codigo;}
    public function getNome(){ return $this->nome; }
    public function getPreco(){ return $this->preco; }
    public function getDescricao(){ return $this->descricao; }

    // MÉTODOS SETTERS PARA O CLIENTE
    public function setCodigo($codigo){$this->codigo = $codigo;}
    public function setNome($nome){ $this->nome = $nome;}
    public function setPreco($preco){ $this->preco = $preco;}
    public function setDescricao($descricao){ $this->descricao = $descricao;}   

    public function listarTodos(){
        $produto = new ProdutoDAO();
        $produto->listarTodos();
    }

    public function pesquisarProd(){
        $produto = new ProdutoDAO();
        $produto->pesquisarProd($this);
    }
    
    public function listaProdModel(){
        $produto = new ProdutoDAO();
        $produto->listaProdDAO($this);
    }
}
?>