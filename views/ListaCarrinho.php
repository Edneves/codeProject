<?php
if (session_status() != PHP_SESSION_ACTIVE) {
	session_start();
}
function exibirDados()
{
	if (!empty($_SESSION['id'])) {
		echo "(*.*)";
	} else {
		echo '<a href="./home.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
  </svg></a>';
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>CompraCerta | Carrinho </title>

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
		<!-- Sidebar Holder -->
		<nav id="sidebar">
			<div class="sidebar-header">
				<a class="navbar-brand" href="./home.php">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
						<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
					</svg>
					Compra Certa
				</a>
			</div>

			<ul class="list-unstyled components">
				<h3 color="">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
						<path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
					</svg>
					Produtos
				</h3>
				<li class="active">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
						</svg>
						Continuar Comprando
					</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li>
							<form action="listartodos" method="post">
								<button class="btn btn-secondary" type="submit">Compre mais!</button>
							</form>
						</li>
					</ul>
				</li>
				<li>
				</li>
			</ul>
		</nav>
		<div id="content">
			<div>
				<nav class="navbar " id="navbar">
					<ul class="nav justify-content-center">
						<form class="d-flex" method="post" action="CONSULTARPROD">
							<input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="cons_prod">
							<button class="btn btn-outline-success" type="submit">Pesquisar</button>
						</form>
					</ul>
					<div class="navbar">
						<button type="button" class="btn btn-outline-primary">
							<?php
							exibirDados();
							?>
							</a>
						</button>
					</div>
				</nav>
			</div>
			<link rel="stylesheet" type="text/css" href="./style.css">
			<div class="container">
				<div class="cart-container">
					<header>
						<h3>Carrinho de Compras</h3>
					</header>
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>c??digo</th>
								<th>Nome</th>
								<th>Categoria</th>
								<th>Pre??o</th>
								<th>Quantidade</th>
								<th>SubTotal</th>
								<th>A????o</th>
							</tr>
						</thead>
						<tbody class="table">
							<?php foreach ($itensCarrinho as $item) : ?>
								<tr>
									<td><?php echo $item->getProduto()->getCodigo(); ?></td>
									<td><?php echo $item->getProduto()->getNome(); ?></td>
									<td><?php echo $item->getProduto()->getCategoria();  ?></td>
									<td>R$ <?php echo number_format($item->getProduto()->getPreco(), 2, ',', '.'); ?></td>
									<td>
										<form action="CarrinhoAltQuant" method="post">
											<input type="hidden" name="qtdProduto" value="<?php echo $item->getQuantidade(); ?>">
											<input type="hidden" name="id" value="<?php echo $item->getProduto()->getCodigo(); ?>">
											<input type="hidden" name="nomeProd" value="<?php echo $item->getProduto()->getNome(); ?>">
											<input type="text" name="quantidade" value="<?php echo $item->getQuantidade(); ?>" size="2">
											<button type="submit" class="btn btn-warning btn-xs">Alterar</button>
										</form>
									</td>
									<td>R$ <?php echo number_format($item->getSubTotal(), 2, ',', '.'); ?></td>
									<td>
										<form method="post" action="ApagaItemCarrinho">
											<input type="hidden" name="id" value="<?php echo $item->getProduto()->getCodigo(); ?>">
											<input type="submit" class="btn btn-danger btn-sm" value="Excluir">
										</form>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4"><b>Total</b></td>
								<td></td>
								<td>R$ <?php echo number_format($carrinho->getTotal(), 2, ',', '.'); ?></td>
								<form action="GRAVARPRODUTOS" method="post">
									<input type="hidden" name="ValorCompra" value="<?php echo $carrinho->getTotal(); ?>">
									<input type="hidden" name="nomeProd" value="<?php echo $item->getProduto()->getNome(); ?>">
									<input type="hidden" name="total" value="<?php echo number_format($carrinho->getTotal(), 2, ',', '.'); ?>">
									<td><button class="btn btn-success" type="submit">Finalizar</button></td>
								</form>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<!--rodap??-->
			<hr>
			<hr>
			<footer class="footer mt-auto py-0 bg-light text-center">
				<div class="container">
					<span class="text-muted">&copy; Desenvolvido por: Abra??o Santos, Ednaldo Concei????o e Lucas
						Nascimento.</span><br>
					<span class="text-muted">Disciplina de Desenvolvimento de Softwares para Web</span><br>
					<span class="text-muted">5?? Semestre em An??lise e Desenvolvimento de Sistemas</span>
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