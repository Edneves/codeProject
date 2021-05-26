		<?php
        include_once '../DataBase/conexao.php';
        include_once '../App/Controller/ClienteController.php';

        $user = new ClienteController();

        if (isset($_POST['enviar'])) {
            $email = trim($_POST['email']);
            $senha = trim(md5($_POST['senha']));
            if ($user->login($email, $senha)) {
                header('Location: home.php');
                exit;
            } else {
                echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= login.php'>
							<script type=\"text/javascript\">
								alert(\"Senha ou email incorretos!\");
							</script>
						";
            }
        }
        ?>
		<form method="post" action="" id="fomularioLogin" name="formularioLogin">
		    <h1>Login</h1>
		    <p>
		        <label for="email_login">Seu email</label>
		        <input id="email_login" name="email_login" type="text" placeholder="ex. contato@htmlecsspro.com" />
		    </p>

		    <p>
		        <label for="senha_login">Sua senha</label>
		        <input id="senha_login" name="senha_login" type="password" placeholder="ex. senha" />
		    </p>

		    <p>
		        <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
		        <label for="manterlogado">Manter-me logado</label>
		    </p>

		    <p>
		        <input type="submit" value="Logar" />
		    </p>

		    <p class="link">
		        Ainda não tem conta?
		        <a href="./cadastro.php">Cadastre-se</a>
		    </p>
		</form>