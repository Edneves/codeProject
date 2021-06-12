<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./styleProfile.css" />



</head>

<body>
  <div class="container">
    <div class="content">
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
      <form method="post" action="INSERIRCLIENTE" name="cadastro">
          <h1>Cadastro de Clientes</h1>

          <p>
            <label for="nome">Seu nome</label>
            <input id="nome" name="nome" type="text" placeholder="nome" required/>
          </p>
          <p>
            <label for="cpf_cad">Seu cpf</label>
            <input id="cpf" name="cpf" type="text" placeholder="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
            title="Digite o CPF no formato 000.000.000-00" required/>
          </p>

          <p>
            <label for="endereco_cad">Seu enderecço</label>
            <input id="endereco" name="endereco" type="text" placeholder="enderecço" required/>
          </p>
          <p>
            <label for="email_cad">Seu email</label>
            <input id="email" name="email" type="email" placeholder="contato@htmlecsspro.com" required/>
          </p>
          <p>
            <label for="senha">Sua senha</label>
            <input id="senha" name="senha" type="password" placeholder="ex. 1234" required/>
          </p>

          <p>
            <input type="submit" value="Cadastrar" />
          </p>

          <p class="link">
            Já tem conta?
            <a href="./login.php"> Ir para Login </a>
          </p>
        </form>

      </div>
    </div>
  </div>
  </div>
</body>

</html>
