<?php
require "ClienteDao.php";
class ClienteModel{
    private $nome;
    private $cpf;
    private $endereco;
    private $email;
    private $senha;

    // MÉTODOS GETTERS PARA O CLIENTE
    public function getNome(){ return $this->nome; }
    public function getCpf(){ return $this->cpf; }
    public function getEndereco(){ return $this->endereco; }
    public function getEmail(){ return $this->email; }
    public function getSenha(){ return $this->senha; }

    // MÉTODOS SETTERS PARA O CLIENTE
    public function setNome($nome){ $this->nome = $nome;}
    public function setCpf($cpf){ $this->cpf = $cpf;}
    public function setEndereco($endereco){ $this->endereco = $endereco; }
    public function setEmail($email){ $this->email = $email; }
    public function setSenha($senha){ $this->senha = $senha; }

    public function insereClienteModel(){
        $clienteDAO = new ClienteDAO();
        $clienteDAO->inserirClienteDAO($this);
    }

    public function pesquisaCliente(){
        $clienteDAO = new ClienteDAO();
        $clienteDAO->pesquisaClienteDAO();
    }

    public function excluirCliente(){
        $clienteDAO = new ClienteDAO();
        $clienteDAO->excluirClienteDAO($this);
    }

    public function validarDados(){
        $email = new ClienteDAO();
        $email->validarDadosDAO($this);
    }
}
?>

