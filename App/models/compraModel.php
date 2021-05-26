<?php
require("carrinhoModel.php");
require("pagamentoModel.php");
class CompraModel{
    private CarrinhoModel $carrinho;
    private $dataCompra;
    private PagamentoModel $formaPagamento; 
}