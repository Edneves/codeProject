<?php
if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}
require_once "models/ClienteModel.php";
require_once "IControlador.php";

class ClienteController implements IControlador
{
    private $cliente;

    public function __construct(){
        $this->cliente = new ClienteModel();
    }

    public function processaRequisicao(){
        $this->cliente->setNome($_POST['nome']);
        $this->cliente->setCpf($_POST['cpf']);
        $this->cliente->setEndereco($_POST['endereco']);
        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setSenha($_POST['senha']);

        $this->cliente->insereClienteModel();
        header('Location: login.php', true, 302);
    }

    public function pequisaClientes(){
        $lista = $this->cliente->pesquisaCliente();
        require "ListarProduto.php";
    }

    public function excluirClienteController(){
        $this->cliente->setCpf($_POST['cpf']);
        $this->cliente->excluirCliente();
        header('Location:home.php', true, 302);
    }

    public function validarUsuario(){
        if(!empty($_POST['email_login']) && !empty($_POST['senha_login'])){
            $this->cliente->setEmail($_POST['email_login']);
            $this->cliente->setSenha($_POST['senha_login']);
            $this->cliente->validarDados();      
            if($_SESSION['email'] == $_POST['email_login'] && $_SESSION['email'] == true){   
               header('Location: home.php');      
            }
            else{
                header('Location:login.php');
            }
        }
        else{
            header('Location: login.php');
        }
       
    }
    public function sairDoSistema(){
        $_SESSION['email'] = null;
        header('Location:home.php');
    }
}
