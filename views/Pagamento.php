<php <!doctype html>
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
                    <h2>Formulário de Pagamento</h2>
                </div>
                <form class="needs-validation" action="ARMAZENAR" method="post">
                    <div class="row g-5">
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-primary">Valor da Compra </span>
                            </h4>
                         
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between">
                                    <h5>Total R$ <?php echo $valorTotal; ?></h5>
                                    <input type="hidden" name="valorCompra" value="<?php echo $valorTotal; ?>">
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-7 col-lg-8">
                            <h3 class="mb-3">Preencha os Campos</h3>
                            <h4 class="mb-3">Pagamento</h4>
                            <div class="my-3">
                                <div class="form-check">
                                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                    <label class="form-check-label" for="credit">Cartão de Crédito</label>
                                </div>
                            </div>
                            <div class="row gy-3">
                                <div class="col-md-6">
                                    <label for="cc-name" class="form-label">Nome no Cartão</label>
                                    <input type="text" class="form-control" name="cc-nome" placeholder="digite o nome" required>
                                    <small class="text-muted">Nome conforme exibido no cartão</small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cc-number" class="form-label">Número do Cartão de Crédito</label>
                                    <input type="text" class="form-control" name="cc-numero" placeholder="número do cartão" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="cc-expiration" class="form-label">Vencimento</label>
                                    <input type="text" class="form-control" name="cc-venc" placeholder="vencimento" required>
                                </div>

                                <div class="col-md-3">
                                    <label for="cc-cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" name="cc-cvv" placeholder="código de segurança" required>
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Finalizar a compra</button>
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