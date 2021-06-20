<?php
require_once "DAO/CartaoDAO.php";
class CartaoModel{
    private $nomeCartao;
    private $numeroCartao;
    private $vencCartao;
    private $cvvCartao;
    private $valorCompra;
    private $idCliente;
    private $diaCompra;

    public function __construct(){}

    public function getNomeCartao(){
        return $this->nomeCartao;
    }
    public function getNumeroCartao(){
        return $this->numeroCartao;
    }
    public function getVencCartao(){
        return $this->vencCartao;
    }
    public function getCvvCartao(){
        return $this->cvvCartao;
    }
    public function getValorCompra(){
        return $this->valorCompra;
    }
    public function getIdCliente(){
        return $this->idCliente;
    }
    public function getDiaCompra(){
        return $this->diaCompra;
    }

    public function setNomeCartao($nome){
        $this->nomeCartao = $nome;
    }
    public function setNumeroCartao($numero){
        $this->numeroCartao = $numero;
    }
    public function setVencCartao($vencimento){
        $this->vencCartao = $vencimento;
    }
    public function setCvvCartao($cvv){
        $this->cvvCartao = $cvv;
    }
    public function setValorCompra($valorCompra){
        $this->valorCompra = $valorCompra;
    }
    public function setIdCliente($id){
        $this->idCliente = $id;
    }
    public function setDiaCompra($dia){
        $this->diaCompra = $dia;
    }

    public function registraCompra(){
        $cartao = new CartaoDAO();
        $cartao->registraCompraDAO($this);
    }
}


?>