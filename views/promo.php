<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>CompraCerta | Promoções </title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="style5.css">

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
          <img src= <?php header('location:promo.php') ?> width="30" height="30" class="d-inline-block align-top" alt="">
          Compra Certa
        </a>
      </div>

      <ul class="list-unstyled components">
        <h3 color="">Produtos</h3>
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> 
            <img src="/img/menu.ico" width="25" height="25">
            Categoria
          </a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="/pdv/bebidas.html">Bebidas</a>
            </li>
            <li>
              <a href="/pdv/padaria.html">Café da Manhã/Padaria</a>
            </li>
            <li>
              <a href="/pdv/carnesfrios.html">Carnes e Frios</a>
            </li>
            <li>
              <a href="/pdv/frutas_legumes.html">Frutas e Legumes</a>
            </li>
            <li>
              <a href="/pdv/higienepessoal.html">Higiene pessoal</a>
            </li>
            <li>
              <a href="/pdv/mercearia.html">Mercearia em geral e Enlatados</a>
            </li>
            <li>
              <a href="/pdv/limpeza.html">Produtos de limpeza e Utilidades</a>
            </li>
            <li>
              <a href="/pdv/pet.html">Pet</a>
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

      </nav>

      <div class="container">
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="promo">
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="/img/promocoes/maquina_brastemp.png" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 2.280,66</h3>
                    </h5>
                    <p class="card-text">Maquina de lavar Brastemp 14 kG</p>
                    <a href="#" class="btn btn btn-ligh ">Comprar</a>
                    <a href="#" class="btn btn btn-ligh">Carrinho</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="/img/promocoes/panela.png" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 135,25</h3>
                    </h5>
                    <p class="card-text">Jogo de Panelas com 06 peças TRAMONTINA</p>
                    <a href="#" class="btn btn btn-ligh ">Comprar</a>
                    <a href="#" class="btn btn btn-ligh">Carrinho</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="/img/promocoes/frango.jpg" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 16,70</h3>
                    </h5>
                    <p class="card-text">Peito de frango Seara</p>
                    <a href="#" class="btn btn btn-ligh ">Comprar</a>
                    <a href="#" class="btn btn btn-ligh">Carrinho</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="/img/Bebidas/jackdaniels.jpg" height="220" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 148,00</h3>
                    </h5>
                    <p class="card-text">Whisky Jack Daniels</p>
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
                    <img class="card-img-top" src="/img/Frutas/cenoura.png" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 3,50 Kg</h3>
                    </h5>
                    <p class="card-text">Cenoura</p>
                    <a href="#" class="btn btn btn-ligh ">Comprar</a>
                    <a href="#" class="btn btn btn-ligh">Carrinho</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="/img/promocoes/iphone.jpg" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 2.198,06</h3>
                    </h5>
                    <p class="card-text">Iphone 7 </p>
                    <a href="#" class="btn btn btn-ligh ">Comprar</a>
                    <a href="#" class="btn btn btn-ligh">Carrinho</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="/img/Açougue/charque.png" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 24,06 Kg</h3>
                    </h5>
                    <p class="card-text">Charque Dianteiro</p>
                    <a href="#" class="btn btn btn-ligh ">Comprar</a>
                    <a href="#" class="btn btn btn-ligh">Carrinho</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="card-img-top" src="/img/Pet/casa para cachorro.jpg" alt="Card image cap">
                    <h5 class="card-title">
                      <h3>R$ 35,06</h3>
                    </h5>
                    <p class="card-text">Casa para cachorro</p>
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