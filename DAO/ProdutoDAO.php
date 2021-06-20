<?php

require "Database/conexao.php";
class ProdutoDAO
{

    public function listarTodos()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto");

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
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

     //listar bebidas
     public function listarBebidas()
     {
         try {
             $conexao = Conexao::getConexao();
             $sql = $conexao->prepare("select * from produto where categoria = 1 ");
 
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
                 $listaProd[$i] = $produto;
                 $i++;
                
             }
             return $listaProd;
 
         } catch (PDOException $e) {
             return array();
         }
         $sql = null;
     }
     
     public function listarCarne()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where categoria = 2");

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
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

    public function listarFrutas()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where categoria = 3");

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
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

    public function listarHigiene()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where categoria = 4");

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
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

    public function listarHort()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where categoria = 5");

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
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

    public function listarLimpeza()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where categoria = 6");

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
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

    public function listarMercearia()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where categoria = 7");

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
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

    public function listarPadaria()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where categoria = 8");

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
                $listaProd[$i] = $produto;
                $i++;
               
            }
            return $listaProd;

        } catch (PDOException $e) {
            return array();
        }
        $sql = null;
    }

    public function listarPet()
    {
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("select * from produto where categoria = 9");

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