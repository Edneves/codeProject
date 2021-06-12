<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
function exibirDados()
{
    if ($_SESSION['email'] == true) {
        echo $_SESSION['email'];
    } else {
        echo '<a href="../home.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
  </svg></a>';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CompraCerta | Mercearia </title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a class="navbar-brand" href="../home.php">
                    <img src="../img/botaohome.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Compra Certa
                </a>
            </div>

            <ul class="list-unstyled components">
                <h3 color="">Produtos</h3>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <img src="../img/menu.ico" width="25" height="25">
                        Categoria
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="./bebidas.php">Bebidas</a>
                        </li>
                        <li>
                            <a href="./padaria.php">Café da Manhã/Padaria</a>
                        </li>
                        <li>
                            <a href="./carnesfrios.php">Carnes e Frios</a>
                        </li>
                        <li>
                            <a href="./frutas_legumes.php">Frutas e Legumes</a>
                        </li>
                        <li>
                            <a href="./higienepessoal.php">Higiene pessoal</a>
                        </li>
                        <li>
                            <a href="./mercearia.php">Mercearia em geral e Enlatados</a>
                        </li>
                        <li>
                            <a href="./limpeza.php">Produtos de limpeza e Utilidades</a>
                        </li>
                        <li>
                            <a href="./pet.php">Pet</a>
                        </li>
                    </ul>
                </li>

                <li>

                    <a href="../promo.php">Promoções</a>
                    <!--<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                          <a href="/pdv/bebidas.html">Bebidas</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Portfolio</a>
                </li>

                <li>
                    <a href="#">Contact</a>
                </li>
-->
            </ul>

            <!-- <ul class="list-unstyled CTAs">
        <li>
          <a href="#" class="download">Download source</a>
        </li>
        <li>
          <a href="#" class="article">Back to article</a>
        </li>
      </ul>-->
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar " id="navbar">

                <ul class="nav justify-content-center">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </ul>

                <div class="navbar">
                    <button type="button" class="btn btn-outline-primary">
                        <?php
                        exibirDados();
                        ?>
                        </a>
                    </button>
                </div>
            </nav>

            <div class="container">

                <div class=" text-center">
                    <h1>Mercearia em Geral e Enlatados </h1>
                    <p> Produtos selecionados para Você. </p>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="promo">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/acucar-cristal.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 2,29 1Kg</h3>
                                            </h5>
                                            <p class="card-text">Açúcar Cristal</p>
                                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/açúcar mascavo.jfif" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 12,90 1kg </h3>
                                            </h5>
                                            <p class="card-text">Açúcar Mascavo </p>
                                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/arroz.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 5,29 1Kg</h3>
                                            </h5>
                                            <p class="card-text">Arroz Branco Camil </p>
                                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/azeite de olivia.png" alt="Card image cap" width="1000" height="220">
                                            <h5 class="card-title">
                                                <h3>R$ 14,89 500ml</h3>
                                            </h5>
                                            <p class="card-text">Azeite de Olivia Galo </p>
                                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/biscoito creamcracker.jpeg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 4,89 </h3>
                                            </h5>
                                            <p class="card-text">Biscoito CreamCracker</p>
                                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/biscoito_maria.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 4,59</h3>
                                            </h5>
                                            <p class="card-text">Biscoito Maria</p>
                                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/café.png" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 4,29</h3>
                                            </h5>
                                            <p class="card-text">Café Jurerê 500g</p>
                                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/Feijao Branco.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 6,59</h3>
                                            </h5>
                                            <p class="card-text">Feijão Branco</p>
                                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/feijao carioca.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 5,89 </h3>
                                            </h5>
                                            <p class="card-text">Feijao Carioca</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/feijao preto.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 6,59</h3>
                                            </h5>
                                            <p class="card-text">Feijão Preto</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/flocao.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 2,29</h3>
                                            </h5>
                                            <p class="card-text">Flocão de Milho</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/leite em liquido.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 4,59</h3>
                                            </h5>
                                            <p class="card-text">Leite em Liquido Bêtania 1Lt</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/leite em po.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 4,69 </h3>
                                            </h5>
                                            <p class="card-text">Leite em Pó 200g</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/macarrão.jfif" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 1,89</h3>
                                            </h5>
                                            <p class="card-text">Macarrão Vitarella 500g </p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/milho de pipoca.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 1,89</h3>
                                            </h5>
                                            <p class="card-text">Milho de pipoca 500g</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/oleodemilho.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 7,59</h3>
                                            </h5>
                                            <p class="card-text">Oléo de milho</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="promo">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/oleodesoja.jpeg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 6,89 </h3>
                                            </h5>
                                            <p class="card-text">Oléo de Soja</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/sal.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 0,89</h3>
                                            </h5>
                                            <p class="card-text">Sal Atlântico</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/passatempo.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 1,99</h3>
                                            </h5>
                                            <p class="card-text">Biscoito Passatempo</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="card-img-top" src="../img/Mercearia/trakinas.jpg" alt="Card image cap">
                                            <h5 class="card-title">
                                                <h3>R$ 2,59</h3>
                                            </h5>
                                            <p class="card-text">Biscoito Trakinas</p>
                                            <a href="#" class="btn btn btn-ligh ">Comprar</a>
                                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>