<?php

require "models/ProdutoModel.php";
require "IControlador.php";
class ProdutoController implements IControlador
{
    private $produto;

    public function __construct()
    {
        $this->produto = new ProdutoModel();
    }

    public function processaRequisicao()
    {
        $listaprod =  $this->produto->listartodos();
        require "views/ListaProdutos.php";
    }

    public function consultarProd()
    {
        if (isset($_POST['cons_prod'])) {
            $this->produto->setNome($_POST['cons_prod']);
            $results = $this->produto->consultarProd();
            if ($_SESSION['nome'] == $_POST['cons_prod'] && $_SESSION['nome'] == true) {
                require "views/Produto.php";
            }
            else{
                echo '<script>alert("Produto não existe no estoque!")</script>';
                header('Location:LISTARTODOS');
            }
        } else {
            echo '<script>alert("Produto não existe no estoque!")</script>';
            header('Location:LISTARTODOS');
        }
    }
}
