<?php

class ClienteModel{
    private $nome;
    private $cpf;
    private $endereco;
    private $nomeUsuario;
    private $senha;

    public function __construct(){}
    // MÉTODOS GETTERS PARA O CLIENTE
    public function getNome(){ return $this->nome; }
    public function getCpf(){ return $this->cpf; }
    public function getEndereco(){ return $this->endereco; }
    public function getNomeUsuario(){ return $this->nomeUsuario; }
    public function getSenha(){ return $this->senha; }

    // MÉTODOS SETTERS PARA O CLIENTE
    public function setNome($nome){ $this->nome = $nome;}
    public function setCepf($cpf){ $this->cpf = $cpf;}
    public function setEndereco($endereco){ $this->endereco = $endereco; }
    public function setNomeUsuario($nomeUsuario){ $this->nomeUsuario = $nomeUsuario; }
    public function setSenha($senha){ $this->senha = $senha; }
}
?>

