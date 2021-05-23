<?php
require("produtoModel.php");
class CategoriaModel{
    private $nomeCategoria;
    private ProdutoModel $produto = array();

    public function __construct($nomeCategoria){ 
        $this->nomeCategoria = $nomeCategoria;
    }
    public function getNomeCategoria(){ 
        return $this->nomeCategoria; 
    }

    public function cadCategoria($nomeCategoria){
        $this->nomeCategoria = $nomeCategoria;
    }
    
        
    
}

?>