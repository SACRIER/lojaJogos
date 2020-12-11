<!DOCTYPE HTML>
<html lang="pt_br">
	<head>
		<title>Administrador</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./assets/css/main.css" />
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<!--
								<?php
								$url = '';
					             $get_ip = gethostbyname($url);
					             echo $get_ip;
								?>
								-->
								<h2>Bem-vindo à Administração</h2>
								<form method="POST" action="autorizacao.php">
									<div class="fields">
										<div class="field half">
											<input type="email" name="login" id="email" placeholder="Email" />
										</div>
										<div class="field half">
											<input type="password" name="senha" id="email" placeholder="Senha" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Entrar" class="primary" /></li>
									</ul>
								</form>
							</section>
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