<?php
require("conexao.php");

$dbName = "projetoWeb"; // NOME DO DB
$userName = "root"; // NOME DO USUÁRIO NO DB
$senha = "94257318"; // SENHA DO DB, CASO NÃO FOI CADASTRADA, DEIXAR ESPAÇO EM BRANCO

// INSTÂNCIA DO OBJETO DA CLASSE
$insert = new Conexao();

// ESTRUTURA DO INSERT NA TABELA ESCOLHIDA
$sql = $insert->conexao($dbName, $userName, $senha)->prepare("insert into projetoWeb.clientes (nome, cpf, endereco, email, nomeDeUsuario, senha) values (:nome, :cpf, :endereco, :email, :nomeDeUsuario, :senha)");
$sql->bindParam("nome",$nome);
$sql->bindParam("cpf",$cpf);
$sql->bindParam("endereco",$endereco);
$sql->bindParam("email", $email);
$sql->bindParam("nomeDeUsuario",$nomeDeUsuario);
$sql->bindParam("senha",$senha);
$nome = "Ednaldo Conceicao";
$cpf = "123456789";
$endereco = "Pernambues";
$email = "ednaldoconceicao@gmail.com";
$nomeDeUsuario = "Ed_neves";
$senha = 123;
$sql->execute();
echo "DADOS INCLUÍDOS COM SUCESSO\n";

$sql = null;
