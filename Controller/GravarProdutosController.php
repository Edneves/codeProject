<?php
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}
require_once "models/CarrinhoSession.php";
require_once "models/ItemCarrinhoModel.php";
require_once "IControlador.php";
require_once "Database/conexao.php";

class GravaProdutosController implements IControlador
{
  private $carrinho;

  public function __construct()
  {
    $this->carrinho = new CarrinhoSession();
  }

  public function processaRequisicao()
  {
    $this->carrinho = new CarrinhoSession();
    $itensCarrinho = $this->carrinho->getItensCarrinho();

    //CRIANDO CARRINHO
    try {
      $conexao = Conexao::getConexao();
      $sql = $conexao->prepare("insert into carrinho (idCliente, nProd, qtdProd, idCarrinho) values(:idCliente, :nProd, :qtdProduto, :idCarrinho)");
      $sql->bindParam("idCliente", $idCliente);
      $sql->bindParam("idCarrinho", $idCarrinho);
      $sql->bindParam("qtdProduto", $qtdProd);
      $sql->bindParam("nProd", $nProd);
        
        foreach ($itensCarrinho as $item) {
          $idCarrinho = $_SESSION['idCarrinho'];
          $idCliente = $_SESSION['id'];
          $nProd =  $item->getProduto()->getNome();
          $qtdProd = $item->getQuantidade();
          $sql->execute();
      }
      $valorTotal = $_POST['ValorCompra'];
      require "views/Pagamento.php";
    } catch (PDOException $e) {
      echo "ERRO AO CRIAR CARRINHO: " . $e;
    }
    
    //cho $_POST['valorCompra'];
    
 
    
    
    //ADICIONAR PRODUTOS AO CARRINHO
    // try {
    //   $conexao = Conexao::getConexao();
    //   $sql = $conexao->prepare("
    //   update carrinho as car
    //   left join cliente as cli
    //   on car.idCliente = cli.id
    //   set car.nProd = :nProd
    //   and qtdProduto = :qtdProd
    //     where car.idCliente = :id)");
    // // $sql->bindParam("id", $_SESSION['id']);
    //  $sql->bindParam("nProd", $_SESSION['nomeProduto']);
    //  $sql->bindParam("qtdProd",$_SESSION['qtdProduto']);

    //   // foreach ($itensCarrinho as $item) {
    //   //   $nProd = ;
    //   //   // $nProd = $item->getProduto()->getNome();
    //   //   $qtdProd = $item->getQuantidade();
    //   //   $sql->execute();
    //   // }
    // } catch (PDOException $e) {
    //   echo "ERRO AO CRIAR CARRINHO: " . $e;
    // }
  }
}
