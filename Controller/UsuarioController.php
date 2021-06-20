<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
require_once "models/UsuarioModel.php";
require_once "IControlador.php";

class UsuarioController implements IControlador
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new UsuarioModel();
    }

    public function processaRequisicao()
    {

        $this->usuario->setNome($_POST['nome']);
        $this->usuario->setMatricula($_POST['matricula']);
        $this->usuario->setEndereco($_POST['endereco']);
        $this->usuario->setEmail($_POST['email']);
        $this->usuario->setSenha($_POST['senha']);

        $this->usuario->insereUsuarioModel();
       
        header('Location: loginAdm.php', true, 302);
    }

    // public function pequisausuarios(){
    //     $lista = $this->usuario->pesquisausuario();
    //     require "ListarProduto.php";
    // }

    // public function excluirusuarioController(){
    //     $this->usuario->setCpf($_POST['cpf']);
    //     $this->usuario->excluirusuario();
    //     header('Location:home.php', true, 302);
    // }

    public function validarUsuario()
    {
        if (!empty($_POST['email_login']) && !empty($_POST['senha_login'])) {
            $this->usuario->setEmail($_POST['email_login']);
            $this->usuario->setSenha($_POST['senha_login']);
            $this->usuario->validarDados();
            
            if (!empty($_SESSION['idUsuario'])) {
               header('Location: Saudacoes.php');
            } else {
                header('Location:loginAdm.php');
            }
        } else {
            header('Location: loginAdm.php');
        }
    }

    public function sairDoSistema()
    {
        $_SESSION['id'] = null;
        header('Location:loginAdm.php');
    }
}
