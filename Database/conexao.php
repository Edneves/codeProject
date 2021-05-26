<?php

class Conexao{
    private $dbName = "projetoWeb"; // NOME DO DB
    private $userName = "root"; // NOME DO USUÁRIO NO DB
    private $senha = "94257318"; // SENHA DO DB, CASO NÃO FOI CADASTRADA, DEIXAR ESPAÇO EM BRANCO

   
  /**
	 	* Conecta com o MySQL usando PDO
	 	*/
         public function conexao(){
	    	return new PDO("mysql:host=localhost;dbname='$this->dbName'; charset=utf8", $this->userName, $this->senha);
		}

		/**
		 * Cria o hash da senha, usando MD5 e SHA-1
		 */
		public function make_hash($str){
		    return sha1(md5($str));
		}	 
	 
		/**
		 * Verifica se o usuário está logado
		 */
		public function isLoggedIn(){
		    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
		        return false;
		    }
		    return true;
		}
}
