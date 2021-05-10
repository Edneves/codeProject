<?php
class CategoriaModel{
    private $nomeCategoria;

    public function __construct($nomeCategoria){ $this->nomeCategoria = $nomeCategoria; }
    public function getNomeCategoria(){ return $this->nomeCategoria; }

    public function cadastrarCategoria($nomeCategoria){
        $this->nomeCategoria = $nomeCategoria;
    }
    
        
    
}

?>