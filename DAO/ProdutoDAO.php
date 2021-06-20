<?php

require "Database/conexao.php";
class ProdutoDAO
{

    public function listarTodos()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto inner join estoque on idQtd = idestoque");

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $listaProd = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new ProdutoModel();
                $produto->setCodigo($linha['codigo']);
                $produto->setNome($linha['nome']);
                $produto->setPreco($linha['preco']);
                $produto->setImagem($linha['imagem']);
                $produto->setQtd($linha['qtd']);
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

    public function pesquisarProd($prod)
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where codigo=:codigo");
            $sql->bindParam("codigo", $codigo);
            $codigo = $prod->getCodigo();
            
            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $prod->setCodigo($linha['codigo']);
                $prod->setNome($linha['nome']);
                $prod->setPreco($linha['preco']);
                $prod->setCategoria($linha['nomeCategoria']);
            }
        
        } catch (PDOException $e) {
            echo "ERRO AO PESQUISAR: " . $e;
        }
        $sql = null;
    }

    public function consultarProd($prod){
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where nome = :nome");
            $sql->bindParam("nome", $nome);
            $nome = $prod->getNome();
            
            $sql->execute();
            $produto = array();
            $i = 0;
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $prod->setCodigo($linha['codigo']);
                $prod->setNome($linha['nome']);
                $prod->setPreco($linha['preco']);
                $prod->setCategoria($linha['nomeCategoria']);
                $prod->setImagem($linha['imagem']);
                $produto[$i] = $prod;
                $i++;
                $_SESSION['nome'] = $prod->getNome();
            }
                return $produto;
        } catch (PDOException $e) {
            echo "ERRO AO CONSULTAR O PRODUTO: " . $e;
        }
        $sql = null;
    }

    public function produtoCarrinho(){
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where idCliente = :idCliente");

            $sql->execute();
            $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
            $listaProd = array();
            $i = 0;

            while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
                $produto = new ProdutoModel();
                $produto->setCodigo($linha['nProd']);
                $produto->setNome($linha['qtdProd']);
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }
}

?>