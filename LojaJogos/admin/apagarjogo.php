<?php

class Apagar
{
	public $id, $nome, $data_lancamento, $descricao, $categoria, $preco, $imagem;	
	
	function __construct()
	{
		$this->id = $_GET["id"];
		$this->nome = "";
		$this->data_lancamento = "";
		$this->descricao = "";
		$this->categoria ="";
		$this->preco = "";
		$this->imagem = "";
	}

	public function BuscarDados()
	{
		$conect = new PDO("mysql: host=localhost;port=3306;dbname=loja","root","");
		$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM jogo WHERE id = $this->id";
		$resultado = $conect->query($sql);

		while($linha = $resultado->fetch(PDO::FETCH_ASSOC))
		{
			$this->nome = $linha["nome"];
			$this->data_lancamento = $linha["data_lanc"];
			$this->descricao = $linha["descricao"];
			$this->categoria = $linha["genero"];
			$this->preco = $linha["preco"];
			$this->imagem = $linha["imagem"]; 
		}
	}

	public function ExibirDados()
	{
		echo "
		<body class='is-preload'>
		<div id='wrapper'>
		<div id='main'>
		<header>
			<br>
			<center>
			<h1>Apagar jogo</h1>
			<p>ATENÇÃO: ao clicar no botão 'Apagar' o jogo será imediatamente apagado e não há recuperação para casos de erro.</p>
			</center>
		</header>
		<div class='inner'>
		<section class='titles'>
			<div class='row gtr-uniform'>
				<div class='col-6 col-12-xsmall'>
					<b>Nome: </b>$this->nome
				</div>
											
				<div class='col-6 col-12-xsmall'>
					<b>Preço: </b>$this->preco
				</div>

				<div class='col-12'>
					<b>Descrição: </b>$this->descricao
				</div>
				<div class='col-12'>
					<b>Descrição: </b>$this->categoria
				</div>

				<div class='col-6 col-12-xsmall'>
					<img src='$this->imagem' width='100' height='100'>
				</div>

				<div class='col-6 col-12-xsmall'>
					<b>Data de lançamento: </b>$this->data_lancamento
				</div>

				<div class='col-12'>
					<ul class='actions'>
					<li><a href='apagar.php?id=$this->id' class='button primary' />Apagar</a></li>
					</ul>
				</div>
			</div>
			</section>
			</div>
			</div>
			</div>
			</body>
		";
	}
}

$apg = new Apagar();
$apg->BuscarDados();
$apg->ExibirDados();

?>

<head>
		<title>Painel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="./assets/css/popup.css">
		<noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>
<!--ACESSO AOS CÓDIGOS DE FORMATAÇÃO VISUAL-->
</head>