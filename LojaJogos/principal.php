<?php
//require ("verifica.php"); 

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>SACRIER</title>
		<img src="images/LOGOJogos.png" width="300" height="200"/>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo --
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>-->

							<!-- Nav -->
								<nav>
									<ul>
									<li>
										<?php 
											//echo "<b>Olá, </b>".$_SESSION['login']." |  "; 
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
						
							<li><a href="perfil.php">Perfil</a></li>
							<li><a href="carrinho.php">Carrinho</a></li>
							<li><a href="desejos.php">Lista de Desejos</a></li>
							<li><a href="destroy.php">Sair</a></li>
						</ul>
					</nav>

				<!-- Main -->
			<div  class="container" align="center">
    			<div class="row" id="card_item">
							<header>
							
								<button type="button" onClick="javascript: location.href='carrinho.php'">Meu Carrinho&nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i></button>
								<br><br>
								<form method="POST" action="pesquisar-livros.php">
								<input type="text" name="pesquisar" placeholder="Procure um jogo aqui">
								<input type="submit" value="Pesquisar">
								</form>
								<br>
								
							</header>
				</div>
			</div>
			<div id="main">
						<div class="inner">
							<header>
								<br><br><h1>SACRIER</h1>
							</header>
							<section class="tiles">

					<div id="main">
						<div class="inner">
							<header>
								<br><br><h2>Jogos à venda</h2>
							</header>
								<form method="POST" action="genero.php">
								<input type="text" name="genero" placeholder="Procure pelo genero aqui">
								<input type="submit" value="Pesquisar">
								</form>

                            <?php
							require("showGames.php");
							?>
						</div>
					</div>
							</section>
						</div>
					</div>
				
					<footer id="footer">
						<div class="inner">
						<section>
								<h2><center>Em caso de dúvidas, envie uma mensagem para nossa equipe</center></h2>
								<form method="POST" action="faleconosco.php">
									<div class="fields">
										<div class="field half">
											<input type="text" name="nome" id="nome" placeholder="Nome" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="E-mail" />
										</div>
										<div class="field">
											<textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2><center>Siga-nos nas redes sociais</center></h2>
								<ul class="icons">
								<center>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
								</center>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; SACRIER. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>