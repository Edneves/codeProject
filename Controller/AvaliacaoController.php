<?php
if (session_status() != PHP_SESSION_ACTIVE) {
	session_start();
}
include_once "Database/conexao.php";
class AvaliacaoController{
    public function processaRequisicao(){
        if(!empty($_POST['estrela'])){
            try{
                $conexao = Conexao::getConexao();
                if($conexao != null){
                    $sql = $conexao->prepare("insert into avaliacao(idCompra, qtd_estrela) values( :idCompra, :estrela)");
                    $sql->bindParam("estrela", $estrela);
                    $sql->bindParam("idCompra", $idCompra);
            
                    $estrela = (int)$_POST['estrela'];
                    $idCompra = (int)$_SESSION['idCarrinho'];
            
                    $sql->execute();
        
                    $_SESSION['msg'] = "Avaliação cadastrada com sucesso, obrigado por nos avaliar!";
                    header('Location: home.php');
        
                } else{
                    $_SESSION['msg'] = "Erro ao cadastrar a avaliação";
                    header("Location: Avaliacao.php");
                }
                
            } catch (PDOException $e){
                echo "ERRO AO CONECTAR AO BANCO DE DADOS: ". $e;
            }
        
        } else{
            $_SESSION['msg'] = "Necessário realizar a pesquisa para que possamos melhorar o atendimento!";
            header('Location: Avaliacao.php');
        }

    }
}
