
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <title>Cadastro | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./styleProfile.css" />


  
</head>
<body>
 
  <div class="container" >
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
      <form method="POST" action="PROCESSAUSUARIO1" id="fomularioLogin" name="formularioLogin">
		    <h1>Login Administrativo</h1>
		    <p>
		        <label for="email_login">Email</label>
		        <input id="email_login" name="email_login" type="text" placeholder="ex. contato@htmlecsspro.com" />
		    </p>

		    <p>
		        <label for="senha_login">Senha</label>
		        <input id="senha_login" name="senha_login" type="password" placeholder="ex. senha" />
		    </p>

		    <p>
		        <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
		        <label for="manterlogado">Manter-me logado</label>
		    </p>

		    <p>
		        <input type="submit" value="Logar"/>
		    </p>

		    <p class="link">
		        Ainda não tem conta?
		        <a href="./cadastroAdmin.php">Cadastre-se</a>
		    </p>
		</form> 
      </div>
    </div>
  </div>  
</body>
</html>