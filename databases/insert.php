<?php
require("conexao.php");

$dbName = "projetoWeb"; // NOME DO DB
$userName = "root"; // NOME DO USUÁRIO NO DB
$senha = "94257318"; // SENHA DO DB, CASO NÃO FOI CADASTRADA, DEIXAR ESPAÇO EM BRANCO

// INSTÂNCIA DO OBJETO DA CLASSE
$insert = new Conexao();

// ESTRUTURA DO INSERT NA TABELA ESCOLHIDA
$sql = $insert->conectarBd($dbName, $userName, $senha)->prepare("insert into projetoWeb.clientes (nome, cpf, endereco, nomeDeUsuario, senha) values (:nome, :cpf, :endereco, :nomeDeUsuario, :senha)");
$sql->bindParam("nome",$nome);
$sql->bindParam("cpf",$cpf);
$sql->bindParam("endereco",$endereco);
$sql->bindParam("nomeDeUsuario",$nomeDeUsuario);
$sql->bindParam("senha",$senha);
$nome = "Ednaldo Conceição";
$cpf = "123456789";
$endereco = "Pernambués";
$nomeDeUsuario = "Ed_neves";
$senha = 987654;
$sql->execute();
echo"---------------------------------------------------------------\n";
echo "DADOS INCLUÍDOS COM SUCESSO\n";
echo"----------------------------------------------------------------";

$sql = null;
