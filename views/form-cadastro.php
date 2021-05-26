        <form method="POST" action="../App/Controller/emailExists.php" id="formularioCadastro" name="formularioCadastro">
          <h1>Cadastro de Clientes</h1>

          <p>
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" type="text" placeholder="nome" />
          </p>
          <p>
            <label for="cpf_cad">Seu cpf</label>
            <input id="cpf_cad" name="cpf_cad" type="text" placeholder="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
            title="Digite o CPF no formato 000.000.000-00" />
          </p>

          <p>
            <label for="end_cad">Seu enderecço</label>
            <input id="end_cad" name="end_cad" type="text" placeholder="enderecço" />
          </p>
          <p>
            <label for="email_cad">Seu email</label>
            <input id="email_cad" name="email_cad" type="email" placeholder="contato@htmlecsspro.com" />
          </p>
          <p>
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" type="password" placeholder="ex. 1234" />
          </p>

          <p>
            <input type="submit" value="Cadastrar" />
          </p>

          <p class="link">
            Já tem conta?
            <a href="./login.php"> Ir para Login </a>
          </p>
        </form>
