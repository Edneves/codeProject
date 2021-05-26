<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>CompraCerta | Pet </title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="./style5.css">

  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
    integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
  </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
    integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
  </script>

</head>

<body>

  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <a class="navbar-brand" href="/home.html">
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

          <a href="/promo.html">Promoções</a>
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

      <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <ul class="nav justify-content-center">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </form>
        </ul>

        <!--formulario de loguin
                  <div class="nav justify-content-find">
                    <a class="navbar-brand" href="/login/home.html">
                      <img src="/img/logon.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                      Entrar
                    </a>
                  </div>
                  -->
      </nav>

      <div class="container">
        <div class=" text-center">
            <h1>Pet </h1>
            <p>Tudo para o seu Pet </p> 
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
                            <img class="card-img-top" src="../img/Pet/bola inteligente.jpg" alt="Card image cap">
                          <h5 class="card-title"><h3>R$ 98,90</h3></h5>
                          <p class="card-text">Bola Inteligente </p>
                          <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                          <a href="#" class="btn btn btn-ligh">Carrinho</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="../img/Pet/caixa de transporte.jfif" alt="Card image cap">
                            <h5 class="card-title"><h3>R$ 110,90</h3></h5>
                            <p class="card-text">Caixa de Transporte </p>
                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                              <img class="card-img-top" src="../img/Pet/casa para cachorro.jpg" alt="Card image cap">
                              <h5 class="card-title"><h3>R$ 150,90</h3></h5>
                              <p class="card-text">Casa para Cachorro</p>
                              <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                              <a href="#" class="btn btn btn-ligh">Carrinho</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <img class="card-img-top" src="../img/Pet/coleira.jpg" alt="Card image cap" width="1000" height="220">
                                <h5 class="card-title"><h3>R$ 20,89</h3></h5>
                                <p class="card-text">Coleira</p>
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
                        <img class="card-img-top" src="../img/Pet/mordedor anel.jpg" alt="Card image cap">
                      <h5 class="card-title"><h3>R$ 55,90 6 un.</h3></h5>
                      <p class="card-text">Mordedor Anel para Cachorro </p>
                      <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                      <a href="#" class="btn btn btn-ligh">Carrinho</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="../img/Pet/osso pra cachorro.png" alt="Card image cap">
                        <h5 class="card-title"><h3>R$ 25,99</h3></h5>
                        <p class="card-text">Osso para cachorro </p>
                        <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                        <a href="#" class="btn btn btn-ligh">Carrinho</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="../img/Pet/raçaocat.jpg" alt="Card image cap">
                            <h5 class="card-title"><h3>R$ 15,69 </h3></h5>
                            <p class="card-text">Ração para Gato 3Kg</p>
                            <a href="../login/home.html" class="btn btn btn-ligh ">Comprar</a>
                            <a href="#" class="btn btn btn-ligh">Carrinho</a>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card">
                     <div class="card-body">
                              <img class="card-img-top" src="../img/Pet/raçãodog.jfif" alt="Card image cap">
                              <h5 class="card-title"><h3>R$ 110,90</h3></h5>
                              <p class="card-text">Ração para Cachorro 20Kg</p>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
  </script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
      });
    });
  </script>
</body>

</html>