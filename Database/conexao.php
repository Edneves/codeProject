<?php

class Conexao{
	public static function getConexao(){
	    $dbName = "projetoWeb";
		$userName = "root";
		$password = "94257318"; 
		try {
			$con = new PDO("mysql:host=localhost:3306;dbname=$dbName", $userName, $password);
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "CONECTADO AO BANCO DE DADOS";
			return $con;
		} 
		catch (PDOException $e) {
			echo "MESSAGE ON THE CATCH: ".$e->getMessage();
			return null;
		}
	}
}
?>