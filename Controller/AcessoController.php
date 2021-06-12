<?php
if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}
require_once "models/ClienteModel.php";
require_once "IControlador.php";

class AcessoController implements IControlador{
    private $cliente;

    public function __construct(){
        $this->cliente = new ClienteModel();
    }
    public function processaRequisicao(){     
            if($_SESSION['email'] == true){   
               header('Location: ListaCarrinho.php');      
            }
            else{
                header('Location:login.php');
            }
    }
}

?>