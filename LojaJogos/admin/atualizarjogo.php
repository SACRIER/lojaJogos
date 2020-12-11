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
	</head>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->

				<!-- Menu -->

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<br><br><h1>Atualização de jogo</h1>
							</header>
							<section class="tiles">
							<?php
								$id = $_GET["id"];
								$conect = new PDO("mysql: host=localhost;port=3306;dbname=loja","root","");
								$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

								$sql = "SELECT * FROM Jogo WHERE id = ".$id."";
								$resultado = $conect->query($sql);
								while($linha = $resultado->fetch(PDO::FETCH_ASSOC))
								{
									$nome = $linha['nome'];
									$data_lancamento = $linha['data_lanc'];
									$descricao = $linha['descricao'];
									$preco = $linha['preco'];
									$imagem = $linha['imagem'];
								}

								echo
								"
								<form method='POST' action='atualizar.php?id=$id' enctype='multipart/form-data'>
									<div class='row gtr-uniform'>
											<div class='col-6 col-12-xsmall'>
											<b>Nome</b>
												<input type='text' name='nome' id='demo-email' value='$nome' maxlength='30' required='' />
											</div>
											
											<div class='col-6 col-12-xsmall'>
											<b>Utilize o ponto para informar os centavos.</b>
												<input type='text' name='preco' id='demo-email' value='$preco' required='' 
												onkeydown='FormataMoeda(this,10,event)'
												onkeypress='return maskKeyPress(event)'
												onkeypress='return sem_acento(event);' 
												 />
											</div>

											<div class='col-12'>
											<b>Descrição</b>
												<input type='text' name='descricao' id='demo-message' value='$descricao' maxlength='400' required=''></textarea>
											</div>

											<div class='col-6 col-12-xsmall'>
												<img src='$imagem' width='100' height='100'>
												<input type='file' name='imagem' accept='jpg' value='$imagem'>
											</div>

											<div class='col-6 col-12-xsmall'>
												Data de lançamento:
												<input type='date' name='data_lancamento' required='' value='$data_lancamento'>
											</div>

											<input type='hidden' value='$imagem' name='foto'>

											<div class='col-12'>
												<ul class='actions'>
													<li><input type='submit' value='Atualizar' class='primary' /></li>
												</ul>
											</div>
										</div>
								</form>
								";
							?>
								
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