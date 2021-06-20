<?php
require_once "DAO/ComprasModelDAO.php";

class ComprasModel{
    private $idCliente;
    private $idProd;
    private $nProd;
    private $nCategoria;
    private $qtdProd;

    public function __construct(){}
    
    public function getIdProd(){ return $this->idProd; }
    public function getIdCliente(){ return $this->idCliente; }
    public function getNProd(){ return $this->nProd; }
    public function getNCategoria(){ return $this->nCategoria; }
    public function getQtdProd(){ return $this->qtdProd;}
    
    public function setIdProd($idProd){ $this->idProd = $idProd; }
    public function setIdCliente($idCliente){ $this->idCliente = $idCliente; }
    public function setNProd($nProd){ $this->nProd = $nProd; }
    public function setNCategoria($nCategoria){ $this->nCategoria = $nCategoria;}
    public function setQtdProd($qtdProd){ $this->qtdProd = $qtdProd;}

    public function addProdutos(){
        $addProdutosDAO = new ComprasModelDAO();
        $addProdutosDAO->addProdutosDAO($this);
    }

}

?>