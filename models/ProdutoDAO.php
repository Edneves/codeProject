<?php
require "Database/conexao.php";
class ProdutoDAO
{

    public function listarTodos()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from projetoWeb.produto");

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

            $listaProd = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new ProdutoModel();
                $produto->setCodigo($linha['idProduto']);
                $produto->setNome($linha['nome']);
                $produto->setPreco($linha['preco']);
                $produto->setdescricao($linha['descricao']);
                $listaProd[$i] = $produto;
                $i++;
            }
            return $listaProd;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function listaProdDAO($idProd)
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from ads.produto where idcategoria=:id");
            $sql->bindParam("id", $idProduto);
            $idProduto = $idProd->getCodigo();
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $listaProd = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new ProdutoModel();
                $produto->setCodigo($linha['idProduto']);
                $produto->setNome($linha['nome']);
                $produto->setPreco($linha['preco']);
                $produto->setdescricao($linha['descricao']);
                $listaProd[$i] = $produto;
                $i++;
            }
            return $listaProd;
        } catch (PDOException $e) {
            return array();
        }
    }
















    public function pesquisarProd($prod)
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from projetoWeb.cliente where cpf=:idProduto");
            $sql->bindParam("idProduto", $idProduto);
            $idProduto = $prod->getIdProduto();
            $sql->execute();

            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $prod->setNome($linha['nome']);
                $prod->setCpf($linha['cpf']);
                $prod->setEmail($linha['email']);
            }
        } catch (PDOException $e) {
            echo "MESSAGE ON THE CATCH: " . $e;
        }
    }
}
