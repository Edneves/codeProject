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

  <title>Admin</title>

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

    <!-- Page Content Holder -->
    <div id="content">

      <div>
        <nav class="navbar " id="navbar">

          <div class="sidebar-header">
            <a class="navbar-brand" href="./home.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg>
              Compra Certa
            </a>
          </div>


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

      <div class="card text-center">
        <div class="card-header">

          <h1 style="justify-content: center;">Admin</h1>

        </div>
      </div>

      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">

            <a class="nav-link active" href="/pdv/bebidas.html">
              <h1 style="justify-content: center;">Status compra</h1>
            </a>

          </ul>
        </div>
        <div class="card-body">
          <div class="promo">
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h1>Preparação</h1>
                    <form action="listartodos" method="post">
                      <button class="btn btn-outline-secondary" type="submit">Listar</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h1>Conferência</h1>
                    <form action="listartodos" method="post">
                      <button class="btn btn-outline-secondary" type="submit">Listar</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h1>Envio</h1>
                    <form action="listartodos" method="post">
                      <button class="btn btn-outline-secondary" type="submit">Listar</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h1>Finalizado</h1>
                    <form action="listartodos" method="post">
                      <button class="btn btn-outline-secondary" type="submit">Listar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <h1 class="text-center">Estoque</h1>
      <br>
      <div class="container-fluid">
        <div class="row">
          <?php foreach ($listaprod as $lista) { ?>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <p class="card-text"><?php echo $lista->getQtd(); ?></p>
                  '<img class="card-img-top" src="img/imgPages/<?php echo $lista->getImagem(); ?>" alt="" width="200" height="200" />'
                  <h5 class="card-title">
                    <h6>Valor R$ <?php echo number_format($lista->getPreco(), 2, ',', '.'); ?></h6>
                    <h6>Quantidade </h6>
                  </h5>
                  <form action="MODIFICARESTOQUE" method="post">
                    <input type="hidden" name="nomeProduto" value="<?php echo $lista->getNome(); ?>">
                    <input type="hidden" name="id" value="<?php echo $lista->getCodigo(); ?>">
                    <div class="text-center">
                      <input type="submit" class="btn btn-outline-secondary" value="Alterar Quantidade" size="5">
                      <input type="text" name="qtd" id="" size="1">
                      <input type="submit" class="btn btn-outline-secondary" value="Alterar Valor" size="5">
                      <input type="text" name="preço" id="" size="1">
                    </div>
                  </form>
                </div>
              </div>
              <br>
            </div>
            <br>
          <?php } ?>
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