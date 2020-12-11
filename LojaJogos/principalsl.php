

<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SACRIER</title>
		<img src="images/LOGOjogos.png" width="300" height="200"/>
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
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="login.php">Faça seu login</a></li>
							<li><a href="cadastro.php">Cadastre-se</a></li>
							<li><a href="recuperacao.php">Recuperar senha</a></li>
						</ul>
					</nav>

				<!-- Main -->
				<div class="table">
						<table class="table ">	
						<tbody>
							<tr>
				

									
                           			 <?php
								require("showGames.php");
						
							?>
				
				</tr>	
			</tbody>
		</table>
	</div>
				<!-- Footer -->
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
										<select class="list_of_works" name="tipo" required="">
								            <option selected style="display:none;color:#000000;">Selecione</option>
								            <option value="Dúvida">Dúvida</option>
								            <option value="Sugestão e Elogio">Sugestão e Elogio</option>
								            <option value="Reclamação">Reclamação</option>
								          </optgroup>
								        </select>
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