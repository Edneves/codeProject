<?php
require_once("../databases/banco.php");
class ClienteModel{
    private $nome;
    private $cpf;
    private $endereco;
    private $nomeUsuario;
    private $senha;

    public function __construct(){}

    public function getNome(){ return $this->nome; }
    public function getCpf(){ return $this->cpf; }
    public function getEndereco(){ return $this->endereco; }
    public function getNomeUsuario(){ return $this->nomeUsuario; }
    public function getSenha(){ return $this->senha; }

    public function cadastrarCliente($nome, $cpf, $endereco, $nomeUsuario, $senha){
        
    }
    public function atualizarDados($nome, $cpf, $endereco){
        if(($nome != null)&&($cpf != null)&&($endereco != null)){
            $this->nome = $nome;
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

