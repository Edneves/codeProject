<?php
if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}
function exibirDados(){
  if($_SESSION['email']==true){
    echo $_SESSION['email'];
  }else{
    echo '<a href="./login.php">Logar</a>';
  }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Compra Certa | Pagamento</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h2>Formulário de Pagamento</h2>
                <h2>Seja bem vindo: <?php exibirDados();?></h2>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Quantidade de Produtos</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Código Promocional</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (R$)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Código promocional">
                            <button type="submit" class="btn btn-secondary">Resgatar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Preencha os Campos</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Primeiro nome</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Digite seu nome" value="" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Digite seu sobrenome" value="" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@ Email</span>
                                    <input type="email" class="form-control" id="email" placeholder="email@exemplo.com" value="<?php echo $_SESSION['email'];?>">
                                </div>
                            </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Endereço</label>
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="country" class="form-label">Cidade</label>
                                    <select class="form-select" id="country" required>
                                        <option value="">Escolher...</option>
                                        <option>Camaçari</option>
                                        <option>Lauro de Freitas</option>
                                        <option>Salvador</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Selecione uma cidade.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="state" class="form-label">Estado</label>
                                    <select class="form-select" id="state" required>
                                        <option value="">Escolher...</option>
                                        <option>Bahia</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Selecione um estado.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="zip" class="form-label">Cep</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Preencha o Cep.
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">                           
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="save-info">
                                <label class="form-check-label" for="save-info">Guarde as informações para a próxima compra</label>
                            </div>

                            <hr class="my-4">

                            <h4 class="mb-3">Pagamento</h4>

                            <div class="my-3">
                                <div class="form-check">
                                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                    <label class="form-check-label" for="credit">Cartão de Crédito</label>
                                </div>
                                <div class="form-check">
                                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="paypal">PayPal</label>
                                </div>
                            </div>

                            <div class="row gy-3">
                                <div class="col-md-6">
                                    <label for="cc-name" class="form-label">Nome no Cartão</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="digite o nome" required>
                                    <small class="text-muted">Nome conforme exibido no cartão</small>
                                </div>

                                <div class="col-md-6">
                                    <label for="cc-number" class="form-label">Número do Cartão de Crédito</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="número do cartão" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="cc-expiration" class="form-label">Vencimento</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="vencimento" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="cc-cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="código de segurança" required>
                                </div>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue para finalizar a compra</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
        <span class="text-muted">&copy; 2021 - Desenvolvido por: Abraão Santos, Ednaldo Conceição e Lucas
            Nascimento.</span><br>
          <span class="text-muted">Disciplina de Desenvolvimento de Softwares para Web</span><br>
          <span class="text-muted">5º Semestre, Análise e Desenvolvimento de Sistemas</span>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="form-validation.js"></script>
</body>

</html>