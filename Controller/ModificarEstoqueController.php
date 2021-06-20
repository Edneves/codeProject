<?php
require_once "IControlador.php";
require_once "Database/conexao.php";
class ModificarEstoqueController implements IControlador{

    public function processaRequisicao(){
       
        try {
            $conexao = Conexao::getConexao();
            $sql = $conexao->prepare("UPDATE `estoque` inner join produto on idQtd = idestoque SET `qtd`='{quantidade}' WHERE `codigo`='{idProduto}'");
            $sql->bindParam("quantidade", $quantidade);
            //$sql->bindParam("", $preco);
            $sql->bindParam("idProduto", $idProduto);

            $idProduto = (int)$_POST['idProduto'];
            $quantidade = (int) $_POST['qtd'];
            $preco = (float) $_POST['preco'];

           $sql->execute(); 

        } catch (PDOException $e) {
            echo "Erro ao fazer update";
        }
        $sql = null;

      
        
    }
}





?>
