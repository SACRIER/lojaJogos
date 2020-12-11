<?php

class Apagar
{
	public $id;

	function __construct()
	{
		$this->id = $_GET["id"];
	}

	public function DestruirJogo()
	{
		try
		{
			$conect = new PDO("mysql: host=localhost;port=3306;dbname=loja","root","");
			$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "DELETE FROM jogo WHERE id = :id";
			$acao = $conect->prepare($sql);
			$acao->bindParam(':id', $this->id);
			$acao->execute();

			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=jogos.php'>
				<meta charset='UTF-8'>
   				<script type=\"text/javascript\">
					alert(\"Deletado com sucesso!\");
				</script>
				";
		}
		catch(PDOException $e)
		{
			echo "Erro: ".$e->getMessage();
		}
	}
}

$apg = new Apagar();
$apg->DestruirJogo();

?>