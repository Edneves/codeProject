<?php
if(session_status() !== PHP_SESSION_ACTIVE){
   session_start();
}
require_once "Database/conexao.php";
class UsuarioDAO{
   
   public function inserirUsuarioDAO($cliente){
       try {
         $conexao = Conexao::getConexao();
          $sql = $conexao->prepare("insert into usuario (nome, matricula, endereco, email, senha)values(:nome, :matricula, :endereco, :email, :senha)");
          $sql->bindParam("nome",$nome);
          $sql->bindParam("matricula", $matricula);
          $sql->bindParam("endereco", $endereco);
          $sql->bindParam("email", $email);
          $sql->bindParam("senha", $senha);

          $nome = $cliente->getNome();
          $matricula = $cliente->getMatricula();
          $endereco = $cliente->getEndereco();
          $email = $cliente->getEmail();
          $senha = $cliente->getSenha(); 

          $sql->execute();
          //echo $conexao;
         } catch (PDOException $e) {
          echo "ERRO AO CADASTRAR OS DADOS". $e->getMessage();
          return 0;
         }
         $sql = null;
   }

   public function pesquisaUsuarioDAO(){
      try {
         $conexao = Conexao::getConexao();
         $sql = $conexao->prepare("select * from usuario");

         $sql->execute();
         $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
         
         $listaCli = array();
         $i=0;

         while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
            $cli = new UsuarioModel();
            $cli->setNome($linha['nome']);
            $cli->setMatricula($linha['matricula']);
            $cli->setEndereco($linha['endereco']);
            $cli->setEmail($linha['email']);
            $cli->setSenha($linha['senha']);
            $listaCli[$i] = $cli;
            $i++;
         }
      return $listaCli;   
      } 
      catch (PDOException $e) {
         return array();
      }
      $sql = null;
   }

   // public function excluirClienteDAO($cliente){
   //    try{
   //       $conexao = Conexao::getConexao();
   //       $sql = $conexao->prepare("delete from projetoWeb.cliente where cpf=:cpf");
   //       $sql->bindParam("cpf", $cpf);
   //       $cpf = $cliente->getCpf();
   //       $sql->execute();
   //    } 
   //    catch(PDOException $err){
   //       echo "ERRO AO EXCLUIR OS DADOS: ".$err->getmessage();
   //       exit();
   //    }
   //    $sql = null;
   // }

   public function validarDadosDAO($cliente){
      try{      
         $conexao = Conexao::getConexao();
         $sql = $conexao->prepare("select * from usuario where email = :email and senha = :senha");
         $sql->bindValue("email", $cliente->getEmail());
         $sql->bindValue("senha", $cliente->getSenha());
         $sql->execute();
         
         if($sql->rowCount()>0){
            $dado = $sql->fetch(PDO::FETCH_OBJ);
            $_SESSION['idUsuario'] = $dado->id;
            return true;
         }
         else{
            return false;
         }
      }
      catch(PDOException $e){
         echo "ERRO AO CONSULTAR O EMAIL". $e;
      }
      $sql = null;
   }
}

?>