<?php
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}
function exibirDados()
{
  if (!empty($_SESSION['id'])) {
    echo "Seja Bem-vindo(a)";
  } else {
    echo '<a href="./login.php">Logar</a>';
  }
}
?>
<!DOCTYPE html>
<html lang="pr-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>CompraCerta | Home </title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="./style5.css">
  <!--link para o w3 bootstrap-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
        <a class="navbar-brand" href="./home.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
          </svg>
          Compra Certa
        </a>
      </div>

      <ul class="list-unstyled components">
        <h3 color="">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
          </svg>
          Produtos
        </h3>
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
            Confira nossos produtos!
          </a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <form action="listartodos" method="post">
                <button class="btn btn-success" type="submit">Acessar</button>
              </form>
            </li>
          </ul>
        </li>

        <li>
          <form action="CARRINHO" method="post">
            <button type="submit" class="btn btn-secondary">Acessar Carrinho</button>
          </form>
      </ul>
    </nav>
    <!-- Page Content Holder -->
    <div id="content">

      <div>
        <nav class="navbar " id="navbar">

          <ul class="nav justify-content-center">
            <form class="d-flex" method="post" action="CONSULTARPROD">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="cons_prod">
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
          </ul>

          <!--formulario de loguin-->
          <div class="navbar">
            <button type="button" class="btn btn-outline-primary">
              <a class="navbar-brand" href="/">
                <?php
                exibirDados();
                ?>
              </a>
            </button>
            <form action="LOGOUT" method="post">
              <button type="submit" class="btn btn-outline-danger">Sair</button>
            </form>
          </div>
        </nav>

      </div>



      <!--Carrosel-->

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./img/imgPages/teste2.jpeg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/imgPages/teste.png" alt="Segundo Slide">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/imgPages/teste3.jpeg" alt="Terceiro Slide">
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <button type="button" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            <span class="sr-only">Anterior
            </span>
          </button>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <button type="button" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
            </svg>
            <span class="sr-only">Próximo</span>
          </button>
        </a>
      </div>



      <br>
      <!--itens em promoção-->
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="/promo.html">
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="row justify-content-center">
            <!--container pages-->
            <div class="container container-fluid">
              <div class="row">

                <!--corpo page-->
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="promo">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="card btn-outline">
                            <div class="card-body">
                              <img class="card-img-top" src="./img/imgPages/desodorante.jfif" alt="Card image cap">
                              <h5 class="card-title text-center">Desodorante Nívea</h5>
                              <p class="card-text">Por apenas R$ 9,99.</p>
                              <form action="listartodos" method="post">
                                <button class="btn btn-outline-secondary" type="submit">Acessar</button>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card btn-outline">
                            <div class="card-body">
                              <img class="card-img-top" src="./img/imgPages/picanha.png" alt="Card image cap">
                              <h5 class="card-title text-center">Picanha</h5>
                              <p class="card-text">O kilo por apenas R$ 78,90.</p>
                              <form action="listartodos" method="post">
                                <button class="btn btn-outline-secondary" type="submit">Acessar</button>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body btn-outline">
                              <img class="card-img-top" src="./img/imgPages/alface.png" alt="Card image cap">
                              <h5 class="card-title text-center">
                                Alface
                              </h5>
                              <p class="card-text">Venha buscar o seu R$ 1,89.</p>
                              <form action="listartodos" method="post">
                                <button class="btn btn-outline-secondary" type="submit">Acessar</button>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card btn-outline">
                            <div class="card-body">
                              <img class="card-img-top" src="./img/imgPages/cebola_roxa.png" alt="Card image cap">
                              <h5 class="card-title text-center">Cebola roxa</h5>
                              <p class="card-text">Somente R$ 4,69 o kg.</p>
                              <form action="listartodos" method="post">
                                <button class="btn btn-outline-secondary" type="submit">Acessar</button>
                              </form>
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
      </div>

      <br>
      <br>

      <!--teste-->
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="/pdv/bebidas.html">
                <h1 style="justify-content: center;">Bebidas</h1>
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="promo">
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="./img/imgPages/blacklabel.jpg" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 112,90</h3>
                    </h5>
                    <p class="card-text">Whisky Black Label 1LT</p>
                    <form action="listartodos" method="post">
                      <button class="btn btn-outline-secondary" type="submit">Acessar</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="./img/imgPages/redbull.png" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 8,90</h3>
                    </h5>
                    <p class="card-text">Red Bull</p>
                    <form action="listartodos" method="post">
                      <button class="btn btn-outline-secondary" type="submit">Acessar</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="./img/imgPages/cocazero.jpg" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 2,10</h3>
                    </h5>
                    <p class="card-text">CocaCola 350ML </p>
                    <form action="listartodos" method="post">
                      <button class="btn btn-outline-secondary" type="submit">Acessar</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="./img/imgPages/redlabel.jpg" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 24,00</h3>
                    </h5>
                    <p class="card-text">Whisky Red Label 1LT</p>
                    <form action="listartodos" method="post">
                      <button class="btn btn-outline-secondary" type="submit">Acessar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--rodapé-->
      <hr>
      <hr>
      <footer class="footer mt-auto py-0 bg-light text-center">
        <div class="container">
          <span class="text-muted">&copy; Desenvolvido por: Abraão Santos, Ednaldo Conceição e Lucas
            Nascimento.</span><br>
          <span class="text-muted">Disciplina de Desenvolvimento de Softwares para Web</span><br>
          <span class="text-muted">5º Semestre em Análise e Desenvolvimento de Sistemas</span>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
      </script>

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