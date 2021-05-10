<?php
class ClienteModel{
    private $nome;
    private $dataNasc;
    private $cpf;
    private $endereco;
    private $nomeUsuario;
    private $senha;

    public function __construct($nome, $dataNasc, $cpf, $endereco, $nomeUsuario, $senha){
        $this->nome = $nome;
        $this->dataNasc = $dataNasc;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->nomeUsuario = $nomeUsuario;
        $this->senha = $senha;
    }

    public function getNome(){ return $this->nome; }
    public function getDataNasc(){ return $this->dataNasc; }
    public function getCpf(){ return $this->cpf; }
    public function getEndereco(){ return $this->endereco; }
    public function getNomeUsuario(){ return $this->nomeUsuario; }
    public function getSenha(){ return $this->senha; }

    public function cadastrarCliente($nome, $dataNasc, $cpf, $endereco, $nomeUsuario, $senha){
        $this->nome = $nome;
        $this->dataNasc = $dataNasc;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->nomeUsuario = $nomeUsuario;
        $this->senha = $senha;
    }
    public function atualizarDados($nome, $dataNasc, $cpf, $endereco){
        if(($nome != null)&&($dataNasc != null)&&($cpf != null)&&($endereco != null)){
            $this->nome = $nome;
            $this->dataNasc = $dataNasc;
            $this->cpf = $cpf;
            $this->endereco = $endereco;
        } else {
            echo "Não exite dados para serem atualizados!";
        }
    }
    public function login($nomeUsuario, $senha){

    }
    public function logout(){

    }
}
?>

