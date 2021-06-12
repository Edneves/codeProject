<?php
require "models/ProdutoModel.php";
require "IControlador.php";
class ProdutoController {
    private $produto;

    public function __construct(){
        $this->produto = new ProdutoModel();
    }

    public function prodBedidas(){
        $lista = $this->produto->listaProdModel();
        require "views/ListarProduto.php";
    }

}
?>

