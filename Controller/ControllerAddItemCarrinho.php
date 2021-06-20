<?php
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}
require_once "models/CarrinhoSession.php";
require_once "models/ItemCarrinhoModel.php";
require_once "IControlador.php";

class ControladorAddItemCarrinho implements IControlador{
     private $carrinhoSession; 
     
     public function __construct($carrinhoSession){
         $this->carrinhoSession = $carrinhoSession;
     }

     public function processaRequisicao(){
        
         if (isset($_POST['id']) && preg_match("/^[0-9]+/",$_POST['id'])){
           if(!empty($_SESSION['id'])){
             $_SESSION['nomeProduto'] = $_POST['nomeProduto'];
             // cria o objeto itemCarrinho
              $itemCarrinho = new ItemCarrinho($_POST['id'],1);
              //adiciona o itemCarrinho no carrinho         
              $this->carrinhoSession->adicionar($itemCarrinho);
           }else{
             header('Location: login.php');
           }
       header('Location:Carrinho', true,302);
          }

    }

}
?>