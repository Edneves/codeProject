<?php
include '../../databases/conexao.php';
// CADASTRO DE NOVOS CLIENTES
$nome = $_POST['nome_cad'];
$cpf = $_POST['cpf_cad'];
$endereco = $_POST['end_cad'];
$email = $_POST['email_cad'];
$nomeUsuario = $_POST['nUsuario_cad'];
$senha = $_POST['senha_cad'];


// LOGIN DOS CLIENTES
//$emailLogin = $_POST['email_login'];
//$senhaLogin = $_POST['senha_login'];

// FAZENDO UM QUERY NO BANCO
$conexao = new Conexao();
$consulta = $conexao->conectarBd()->query("select email from clientes where email='$email'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

if($consulta->rowCount() == 1){
    header('location:erro1.php');
} else {
    $incluir = $conexao->conectarBd()->query("
        insert into clientes(nome, cpf, endereco, email, nomeDeUsuario, senha) values ('$nome', '$cpf', '$endereco',
        '$email', '$nomeUsuario', '$senha')");
        header('location:../../views/home.php');
}

/**  TESTANDO VARIÁVEIS
 * echo $nome.'<br>';
 * echo $cpf.'<br>';
 * echo $endereco.'<br>'; 
 * echo $email.'<br>';
 * echo $nomeUsuario.'<br>';
 * echo $senha.'<br>';
 */



// echo $emailLogin.'<br>';
// echo $senhaLogin.'<br>';
?>