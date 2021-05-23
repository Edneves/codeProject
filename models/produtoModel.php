<?php
require("categoriaModel.php");

class ProdutoModel{
    private $nome;
    private $preco;
    private $descricao;
    private CategoriaModel $categoria;

    public function __construct($nome, $preco, $descricao){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
    }

    public function getNome(){ return $this->nome; }
    public function getPreco(){ return $this->preco; }
    public function getDescricao(){ return $this->descricao; }
    public function getCategoria(){ return $this->categoria; }

    public function cadastrarproduto($nome, $preco, $descricao){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
    }
    public function listarProduto(){
      return  "Nome ". $this->nome.
              "Preço ". $this->preco.
              "Descrição ". $this->descricao.
              "Caregoria ". $this->categoria;
    }
}
?>