<?php
require_once "DAO/ProdutoDAO.php";
class ProdutoModel{
    private $codigo;
    private $nome;
    private $preco;
    private $imagem;
    private $categoria;
   

    // MÉTODOS GETTERS PARA O CLIENTE
    public function getCodigo(){ return $this->codigo;}
    public function getNome(){ return $this->nome; }
    public function getPreco(){ return $this->preco; }
    public function getImagem(){ return $this->imagem; }
    public function getCategoria(){ return $this->categoria; }

    // MÉTODOS SETTERS PARA O CLIENTE
    public function setCodigo($codigo){$this->codigo = $codigo;}
    public function setNome($nome){ $this->nome = $nome;}
    public function setPreco($preco){ $this->preco = $preco;}
    public function setImagem($imagem){ $this->imagem = $imagem;} 
    public function setCategoria($categoria){ $this->categoria = $categoria;}  

    public function listarTodos(){
        $produto = new ProdutoDAO();
        return $produto->listarTodos();
    }

     //listar bebidas
     public function listarBebidas(){
        $produto = new ProdutoDAO();
        return $produto->listarBebidas();
    }
    //lista carnes e frio
    public function listarCarne(){
        $produto = new ProdutoDAO();
        return $produto->listarCarne();
    }
    //lista frutas
    public function listarFrutas(){
        $produto = new ProdutoDAO();
        return $produto->listarFrutas();
    }
    //Lista higiene
    public function listarHigiene(){
        $produto = new ProdutoDAO();
        return $produto->listarHigiene();
    }
    //hort
    public function listarHort(){
        $produto = new ProdutoDAO();
        return $produto->listarHort();
    }
    //limpeza
    public function listarLimpeza(){
        $produto = new ProdutoDAO();
        return $produto->listarLimpeza();
    }
    //mercearia
    public function listarMercearia(){
        $produto = new ProdutoDAO();
        return $produto->listarMercearia();
    }
    //padaria
    public function listarPadaria(){
        $produto = new ProdutoDAO();
        return $produto->listarPadaria();
    }
    //pet
    public function listarPet(){
        $produto = new ProdutoDAO();
        return $produto->listarPet();
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