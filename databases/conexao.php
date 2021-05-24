<?php

class Conexao{
    public function __construct() { }
    
    public static function conectarBd($dbName, $userName, $senha){
        try {
            $conexao = new \PDO('mysql:host=localhost; dbname='.$dbName, $userName, $senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo"--------------------------------------------------------------------------\n";
            echo "CONECTADO AO BANCO DE DADOS!\n";
            echo"--------------------------------------------------------------------------\n";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Erro genérico: " . $e->getMessage();
        }
        return $conexao;
    }
}