<?php
require_once "IControlador.php"; 

class PagamentoController implements IControlador{
    public function processaRequisicao(){
        $total = $_POST['id'];    
        require "views/Pagamento.php";
    }
}


?>