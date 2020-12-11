<?php
require "verifica.php"; 

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Adicionar jogo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="./assets/css/popup.css">
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>


	</head>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Meu perfil</a></li>
							<li><a href="destroy.php">Sair</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<br><br><h1>Adicionar Jogo</h1>
							</header>
							<section class="tiles">
								<section>
									<form method="POST" action="teste.php" enctype="multipart/form-data">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="nome" id="demo-email" value="" placeholder="Nome do jogo" maxlength="30" required="" />
											</div>
											
											<div class="col-12">
												<textarea name="descricao" id="demo-message" placeholder="Descrição do jogo" rows="6" maxlength="400" required=""></textarea>
											</div>

											<div class="col-6 col-12-xsmall">
												<input type="text" name="preco" id="demo-email" value="" placeholder="Preço modelo: R$ 0.000,00" required="" 
												onkeydown="FormataMoeda(this,10,event)"
												onkeypress="return maskKeyPress(event)"
												onkeypress="return sem_acento(event);" 
												 />
											</div>

											<div class="col-6 col-12-xsmall">
												Selecione uma imagem para o jogo:
												<input type="file" name="imagem" accept="jpg" required="">
											</div>

											<div class="col-6 col-12-xsmall">
												Data de lançamento:
												<input type="date" name="data_lancamento" required="">
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="genero" id="genero" value="" placeholder="Genero do jogo" maxlength="30" required="" />
											</div>

											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Adicionar" class="primary" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</section>
						</div>
					</div>

			</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="formatacao.js"></script>

	</body>
</html>