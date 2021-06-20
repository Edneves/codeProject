<?php
require_once "DAO/ProdutoDAO.php";
class ProdutoModel{
    private $codigo;
    private $nome;
    private $preco;
    private $imagem;
    private $categoria;
    private $qtd;
   

    // MÉTODOS GETTERS PARA O CLIENTE
    public function getCodigo(){ return $this->codigo;}
    public function getNome(){ return $this->nome; }
    public function getPreco(){ return $this->preco; }
    public function getImagem(){ return $this->imagem; }
    public function getCategoria(){ return $this->categoria; }
    public function getQtd() { return $this->qtd; }

    // MÉTODOS SETTERS PARA O CLIENTE
    public function setCodigo($codigo){$this->codigo = $codigo;}
    public function setNome($nome){ $this->nome = $nome;}
    public function setPreco($preco){ $this->preco = $preco;}
    public function setImagem($imagem){ $this->imagem = $imagem;} 
    public function setCategoria($categoria){ $this->categoria = $categoria;}  
    public function setQtd($qtd){ $this->qtd = $qtd; }

    public function listarTodos(){
        $produto = new ProdutoDAO();
        return $produto->listarTodos();
    }

    public function pesquisarProd(){
        $produto = new ProdutoDAO();
        $produto->pesquisarProd($this);
    }

    public function consultarProd(){
        $produto = new ProdutoDAO();
       return $produto->consultarProd($this);
    }

    public function listarCarrinho(){
        $produto = new ProdutoDAO();
        return $produto->produtoCarrinho();
    }
}
?>