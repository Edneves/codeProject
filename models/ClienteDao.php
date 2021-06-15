<?php
if(session_status() !== PHP_SESSION_ACTIVE){
   session_start();
}
require_once "Database/conexao.php";
class ClienteDAO{
   
   public function inserirClienteDAO($cliente){
       try {
         $conexao = Conexao::getConexao();
          $sql = $conexao->prepare("insert into projetoWeb.cliente (nome, cpf, endereco, email, senha)values(:enome, :ecpf, :eendereco, :eemail, :esenha)");
          $sql->bindParam("enome",$nome);
          $sql->bindParam("ecpf", $cpf);
          $sql->bindParam("eendereco", $endereco);
          $sql->bindParam("eemail", $email);
          $sql->bindParam("esenha", $senha);
          $nome = $cliente->getNome();
          $cpf = $cliente->getCpf();
          $endereco = $cliente->getEndereco();
          $email = $cliente->getEmail();
          $senha = $cliente->getSenha(); 
          $sql->execute();
          //echo $conexao;
       } catch (PDOException $e) {
          echo "ERRO AO CADASTRAR OS DADOS". $e->getMessage();
          return 0;
       }
   }

   public function pesquisaClienteDAO(){
      try {
         $conexao = Conexao::getConexao();
         $sql = $conexao->prepare("select*from projetoWeb.cliente");

         $sql->execute();
         $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
         
         $listaCli = array();
         $i=0;

         while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
            $cli = new ClienteModel();
            $cli->setNome($linha['nome']);
            $cli->setCpf($linha['cpf']);
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
   }

   public function excluirClienteDAO($cliente){
      try{
         $conexao = Conexao::getConexao();
         $sql = $conexao->prepare("delete from projetoWeb.cliente where cpf=:cpf");
         $sql->bindParam("cpf", $cpf);
         $cpf = $cliente->getCpf();
         $sql->execute();
      } 
      catch(PDOException $err){
         echo "ERRO AO EXCLUIR OS DADOS: ".$err->getmessage();
         exit();
      }
   }

   public function validarDadosDAO($cliente){
      try{      
         $conexao = Conexao::getConexao();
         $sql = $conexao->prepare("select * from cliente where email = :email and senha = :senha");
         $sql->bindValue("email", $cliente->getEmail());
         $sql->bindValue("senha", $cliente->getSenha());
         $sql->execute();
         
         if($sql->rowCount()>0){
            $dado = $sql->fetch(PDO::FETCH_OBJ);
            $_SESSION['id'] = $dado->id;
            return true;
         }
         else{
            return false;
         }
      }
      catch(PDOException $e){
         echo "ERRO AO CONSULTAR O EMAIL". $e;
      }
   }
}

?>