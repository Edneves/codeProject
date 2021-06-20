<?php
require_once "DAO/UsuarioDAO.php";
class UsuarioModel{
    private $nome;
    private $matricula;
    private $endereco;
    private $email;
    private $senha;

    // MÉTODOS GETTERS PARA O CLIENTE
    public function getNome(){ return $this->nome; }
    public function getMatricula(){ return $this->matricula; }
    public function getEndereco(){ return $this->endereco; }
    public function getEmail(){ return $this->email; }
    public function getSenha(){ return $this->senha; }

    // MÉTODOS SETTERS PARA O CLIENTE
    public function setNome($nome){ $this->nome = $nome;}
    public function setMatricula($matricula){ $this->matricula = $matricula;}
    public function setEndereco($endereco){ $this->endereco = $endereco; }
    public function setEmail($email){ $this->email = $email; }
    public function setSenha($senha){ $this->senha = $senha; }

    public function insereUsuarioModel(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->inserirUsuarioDAO($this);
    }

    public function pesquisaUsuario(){
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->pesquisaUsuarioDAO();
    }


    public function validarDados(){
        $email = new UsuarioDAO();
        $email->validarDadosDAO($this);
    }
}
?>

