<?php
	include_once("conect.php");
	require "verifica.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Jogos</title>
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
							<h1>Todos os jogos</h1>

						</div>
					</header>

				<!-- Main -->
				<div id="main">
					<div class="inner">
						<div class="table-wrapper">
							<?php
								include_once("conect.php");
								
								$sql= "SELECT * FROM jogo ORDER BY nome";
								
								$res = mysqli_query($conn, $sql);
								
							    
							    while($dados = mysqli_fetch_array($res)){
							        $id = $dados["id"];
							        $nome = $dados["nome"];
									$data_lancamento = $dados["data_lanc"];
									$categoria = $dados["genero"];
							        $preco = $dados["preco"];
							        $imagem = $dados["imagem"];
							        $descricao = $dados["descricao"];
							            
							        echo "
							        <p>
							        <span class='image left'>
							        <img src='$imagem' width='200' height='200' alt='' />
							        </span>
							        <b>Nome:</b> $nome | <b>Preço: </b>$preco<br> | <b>Genero: </b>$categoria<br>
							  		<b>Lançamento:</b> $data_lancamento<br>
							        $descricao<br>
							        <ul class='actions'>
										<li><a href='apagarjogo.php?id=$id' class='button primary small'>Apagar</a></li>
										<li><a href='atualizarjogo.php?id=$id' class='button small'>Atualizar</a></li>
									</ul>
									</p>
							        <br>
							        ";
							        
							    }
							    if(mysqli_affected_rows($conn) == 0) {
							        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
							    	<meta charset='UTF-8'>
							        	<script type=\"text/javascript\">
							            	alert(\"NENHUM JOGO CADASTRADO\");
							        	</script>
							        ";
							    }
							?>
						</div>
				</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	</body>
</html>



