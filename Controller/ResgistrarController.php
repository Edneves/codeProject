<?php

if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}
require_once "models/CartaoModel.php"; 
require_once "IControlador.php";

class RegistroController implements IControlador{
    private $dados;

    public function __construct(){
        $this->dados = new CartaoModel();
    }

    public function processaRequisicao(){
        if(!empty($_POST['cc-nome']) && !empty($_POST['cc-numero']) && !empty($_POST['cc-cvv']) && !empty($_POST['cc-venc'])){
            $this->dados->setNomeCartao($_POST['cc-nome']); 
           $this->dados->setNumeroCartao($_POST['cc-numero']); 
           $this->dados->setVenccartao($_POST['cc-venc']); 
           $this->dados->setCvvCartao($_POST['cc-cvv']); 
           $this->dados->setValorCompra($_POST['valor']); 
           $this->dados->setIdCliente((int)$_SESSION['id']);
           $this->dados->setDiaCompra((String) date("d/m/Y H:i:s"));
            
           $this->dados->registraCompra();
           $_SESSION['id'] = null;
           header('Location:home.php');
        }
        else{
            header('Location:Pagamento');
        }
    }
}
?>