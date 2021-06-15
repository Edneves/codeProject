<?php

require_once "Database/conexao.php";

class CartaoDAO{
    public function registraCompraDAO($dados){
        try {
            $conexao = Conexao::getConexao();
             $sql = $conexao->prepare("insert into compra (nomeCartao, numeroCartao, vencCartao, cvvCartao, valorCompra, idCliente, diaCompra)values(:nome, :numero, :venc, :cvv, :valor, :idcliente, :diacompra)");
             $sql->bindParam("nome",$nomeCartao);
             $sql->bindParam("numero", $numeroCartao);
             $sql->bindParam("venc", $vencCartao);
             $sql->bindParam("cvv", $cvvCartao);
             $sql->bindParam("valor", $valorCompra);
             $sql->bindParam("idcliente", $idCliente);
             $sql->bindParam("diacompra", $diaCompra);

             $nomeCartao = $dados->getNomeCartao();
             $numeroCartao = $dados->getNumeroCartao();
             $vencCartao = $dados->getVencCartao();
             $cvvCartao = $dados->getCvvCartao();
             $valorCompra = $dados->getValorCompra(); 
             $idCliente = $dados->getIdCliente();
             $diaCompra = $dados->getDiaCompra();
             
             $sql->execute();
             //echo $conexao;
          } catch (PDOException $e) {
             echo "ERRO AO GRAVAR OS DADOS". $e->getMessage();
             return 0;
          }
    }
}


?>