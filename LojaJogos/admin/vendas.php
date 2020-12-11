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
							<h1>Histórico de todas as vendas</h1>

						</div>
					</header>

				<!-- Main -->
				<div id="main">
					<div class="inner">
						<div class="table-wrapper">
							<?php
								include_once("conect.php");
								
								$sql= "SELECT * FROM compra";
								
								$res = mysqli_query($conn, $sql);
								
							    
							    while($dados = mysqli_fetch_array($res)){
							        $nome = $dados["nome"];
							        $produto = $dados["produto"];
							        $total = $dados["total"];
							            
							        echo "
							        <p>
							        <b>Nome:</b> $nome | <b>Total: </b>$total<br>
							  		<b>Produto:</b> $produto<br>
									</p>
							        <br>
							        ";
							        
							    }
							    if(mysqli_affected_rows($conn) == 0) {
							        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=ss.php'>
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



