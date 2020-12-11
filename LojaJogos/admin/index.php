<?php
require "verifica.php"; 

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Painel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="./assets/css/popup.css">
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>

<script language="javascript" type="text/javascript">
function newPopup(){
varWindow = window.open (
'configuracaoconta.php',
'pagina',
"width=365, height=417, top=210, left=450, scrollbars=no " );
}
</script>
</script>
	</head>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
								<nav>
									<ul>
									<li>
										<?php 
											echo "<b>Olá, </b>".$_SESSION['login']." |  "; 
										?>
									</li>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="destroy.php">Sair</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<br><br><h1>Sebo Online</h1>
							</header>
							<section class="tiles">
								<ul class="actions fit">
									<li><a href="jogos.php" class="button fit">Jogos</a></li>
									<li><a href="adicionarjogo.php" class="button primary fit">Adicionar Jogo</a></li>
									<li><a href="vendas.php" class="button fit">Vendas</a></li>
								</ul>
							</section>
						</div>
					</div>

			</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>