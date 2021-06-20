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
      <form method="post" action="PROCESSAUSUARIO" name="cadastro">
          <h1>Cadastro Administrativo</h1>

          <p>
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text" placeholder="nome" required/>
          </p>
          <p>
            <label for="matricula">Matrícula</label>
            <input id="cpf" name="matricula" type="text" placeholder="matricula" 
            title="Digite sua matrícula" required/>
          </p>

          <p>
            <label for="endereco">Enderecço</label>
            <input id="endereco" name="endereco" type="text" placeholder="enderecço" required/>
          </p>
          <!-- <p>
            <label for="endereco_cad">Tipo de usuario</label><br>
            <select class="form-select" aria-label="Default select example">
              <option selected>Administrador</option>
              <option value="2">Vendedor</option>
            </select>
          </p> -->
                    
          <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="contato@htmlecsspro.com" required/>
          </p>
          <p>
            <label for="senha">Senha</label>
            <input id="senha" name="senha" type="password" placeholder="ex. 1234" required/>
          </p>

          <p>
            <input type="submit" value="Cadastrar" />
          </p>

          <p class="link">
            Já tem conta?
            <a href="./loginaAmin.php"> Ir para Login </a>
          </p>
        </form>

      </div>
    </div>
  </div>
  </div>
</body>

</html>
