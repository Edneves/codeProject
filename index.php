<?php
if (isset($_GET['url'])) {
    $url = strtoupper($_GET['url']);
    switch ($url) {
        case "VIEWS/INSERIRCLIENTE":
            require "Controller/ClienteController.php";
            $controlador = new ClienteController();
            $controlador->processaRequisicao();
            break;
        case "VIEWS/VALIDAUSUARIO":
            require "Controller/ClienteController.php";
            $controlador = new ClienteController();
            $controlador->validarUsuario();
            break;
        case "VIEWS/LOGOUT":
            require "Controller/ClienteController.php";
            $controlador = new ClienteController();
            $controlador->sairDoSistema();
            break;
        case "VIEWS/ACESSOCARRINHO":
            require "Controller/AcessoController.php";
            $controlador = new AcessoController();
            $controlador->processaRequisicao();
            break;
        case "VIEWS/LISTARTODOS":
            require "Controller/ProdutoController.php";
            $controlador = new ProdutoController();
            $controlador->processaRequisicao();
            break;
        case "VIEWS/ADDITEMCARRINHO":
            require "Controller/ControllerAddItemCarrinho.php";
            require_once 'models/CarrinhoSession.php';
            $carrinhoSession = new CarrinhoSession();
            $controlador = new ControladorAddItemCarrinho($carrinhoSession);
            $controlador->processaRequisicao();
            break;
        case "VIEWS/CARRINHO":
            require "Controller/ControllerListaCarrinho.php";
            $controlador = new ControladorListaCarrinho();
            $controlador->processaRequisicao();
            break;
        case "VIEWS/CONSULTARPROD":
            require "Controller/ProdutoController.php";
            $controlador = new ProdutoController();
            $controlador->consultarProd();
            break;
        case "VIEWS/CARRINHOALTQUANT":
            require "Controller/ControllerAlteraQuantCarrinho.php";
            $carrinhoSession = new CarrinhoSession();
            $controlador = new ControladorAlteraQuantCarrinho($carrinhoSession);
            $controlador->processaRequisicao();
            break;
        case "VIEWS/APAGAITEMCARRINHO":
            require "Controller/ControllerApagaItenCarrinho.php";
            require_once 'models/CarrinhoSession.php';
            $carrinhoSession = new CarrinhoSession();
            $controlador = new ControladorApagaItemCarrinho($carrinhoSession);
            $controlador->processaRequisicao();
            break;
        case "VIEWS/PAGAMENTO":
            require "Controller/PagamentoController.php";
            $controlador = new PagamentoController();
            $controlador->processaRequisicao();
            break;
        case "VIEWS/ARMAZENAR":
            require "Controller/ResgistrarController.php";
            $controlador = new RegistroController();
            $controlador->processaRequisicao();
            break;
        default:
            require "Controller/HomeController.php";
            $controlador = new ControladorHome();
            $controlador->processaRequisicao();
            break;
    }
} else {
    $url = '404.php';
}
