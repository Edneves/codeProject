<?php
require "Database/conexao.php";

class ComprasModelDAO{

    public function addProdutosDAO($dados){

        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("insert into listaCompra(idCliente, idProd, nProd, nCategoria, qtdProd) values(:idCliente, :idProd, :nProd, :nCategoria, :qtdProd)");
            $sql->bindParam("idCliente", $idCliente);
            $sql->bindParam("idProd", $idProd);
            $sql->bindParam("nProd", $nProd);
            $sql->bindParam("nCategoria", $nCategoria);
            $sql->bindParam("qtdProd", $qtdProd);
            $idCliente = $dados->getIdCliente();
            $idProd = $dados->getIdProd();
            $nProd = $dados->getNprod();
            $nCategoria = $dados->getNCategoria();
            $qtdProd = $dados->getQtdProd();

            $sql->execute();
            // $sql = null;

        } catch (PDOException $e) {
            echo "ERRO AO CADASTRAS AS COMPRAS: ". $e;
        }
    }
}
?>