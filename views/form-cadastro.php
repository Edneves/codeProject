        <form method="POST" action="../App/Controller/emailExists.php" id="formularioCadastro" name="formularioCadastro">
          <h1>Cadastro de Clientes</h1>

          <p>
            <label for="nome">Seu nome</label>
            <input id="nome" name="nome" type="text" placeholder="nome" />
          </p>
          <p>
            <label for="cpf">Seu cpf</label>
            <input id="cpf" name="cpf" type="text" placeholder="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
            title="Digite o CPF no formato 000.000.000-00" />
          </p>

          <p>
            <label for="endereco">Seu enderecço</label>
            <input id="endereco" name="endereco" type="text" placeholder="enderecço" />
          </p>
          <p>
            <label for="email">Seu email</label>
            <input id="email" name="email" type="email" placeholder="contato@htmlecsspro.com" />
          </p>
          <p>
            <label for="senha">Sua senha</label>
            <input id="senha" name="senha" type="password" placeholder="ex. 1234" />
          </p>

          <p>
            <input type="submit" value="Cadastrar" />
          </p>

          <p class="link">
            Já tem conta?
            <a href="./login.php"> Ir para Login </a>
          </p>
        </form>
