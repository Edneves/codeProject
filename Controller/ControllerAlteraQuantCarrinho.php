<?php

require_once "models/CarrinhoSession.php";
require_once "models/ItemCarrinhoModel.php";
require_once "IControlador.php";

class ControladorAlteraQuantCarrinho implements IControlador{
     private $carrinhoSession;     
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
         if(!empty($_POST['qtdProduto'])){
                 $_SESSION['qtdProduto'] = $_POST['qtdProduto'] ;
         }
        if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])) {
            //cria o objeto itemCarrinho
            $itemCarrinho = new ItemCarrinho($_POST['id'],$_POST['quantidade']);
            //atualiza o itemCarrinho no carrinho
            $this->carrinhoSession->atualizar($itemCarrinho);
        }
        header('Location:Carrinho', true,302);

     }

}

?>