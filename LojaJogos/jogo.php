<?php
//require ("verifica.php"); 

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>JOGO - SACRIER</title>
		<div class="logo">
			<a href="principal.php"><img src="images/LOGOjogos.png" img src="images/LOGOjogos.png" width="300" height="200" alt=""/></a>
		</div>

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
				<div id="main">
						<div class="inner">
						<h1>Adquira já o seu jogo</h1>
						<?php
						
					include_once("conect.php");
					require "verifica.php";
					$id = $_GET["id"];
					$sql = "SELECT * FROM jogo WHERE id = '$id'";
					$res = mysqli_query($conn, $sql);
					while ($dados=mysqli_fetch_array($res)) {
						
						$nome = $dados["nome"];
						$data_lanc = $dados["data_lanc"];
						$descricao = $dados["descricao"];
						$genero = $dados["genero"];
						$preco = $dados["preco"];
						$preco = round($preco,2);
						$preco = number_format($preco, 2,',','.');
						$imagem = $dados["imagem"];
						
					
					}

					echo "
						<h1>$nome</h1>
							<form method='POST' action='adddesejo.php'>
                                    <div class='table-wrapper' vertical-align=middle>
										<table class='alt'>
										<table cellspacing='10' cellpadding='10' border='3'>
											<tr>
													<th><center>Gênero: $genero</center></th>
											</tr>
											<tr>
 										   <td>
 										   <center>
 										   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 										   <img src='$imagem' width='300' height='400' title='Capa do livro $nome' alt=''>
 										
 										   <center>
 										   </td>
											</tr>
											<table>
											<thead>
												<tr>
													<th>Descrição</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>$descricao</td>
												</tr>
											</tbody>	
										</table>
										<table>
											<thead>
												<tr>
													<th>nome</th>
													<th>Data Lançamento</th>
													<th>descricao</th>
													<th>genero</th>
													<th>preco</th>
													<th>imagem</th>
												
												
					
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>$nome</td>
													<td>$data_lanc</td>
													<td>$descricao</td>
													<td>$genero</td>
													<td>$preco</td>
													<td>$imagem</td>
												
												</tr>
											</tbody>
											</table>
										
                                    </div>  
								</section> 
								</table>
								</center>
								</center>
								</td>
								</tr>
								</table>
								</table>
								<ul class='actions'>
								<li><a href='addcarrinho.php?id=$id' class='button primary fit small'>Adicionar ao carrinho</a></li>
                            <li><a href='adddesejo.php?id=$id' class='button fit small'>Adicionar à lista de desejos</a></li>
						
								</ul>
								</form>
								
								
								
								
								";
						
							?>
						</div>
						</div>
					</div> 
		
							

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>