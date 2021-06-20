<?php
require_once "models/ProdutoModel.php";
require_once "IControlador.php";

class EstoqueController implements IControlador{
    private $produto;

    public function __construct()
    {
        $this->produto = new ProdutoModel();
    }

    public function processaRequisicao()
    {
        $listaprod =  $this->produto->listartodos();
        require "views/admin.php";
    }
}
?>