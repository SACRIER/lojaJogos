


<?php

class AlterarPerfil
{
	public $id, $email, $senha, $cpf, $nome, $cep, $endereco, $bairro, $cidade, $estado;

	function __construct()
	{
		$this->id = $_POST['id'];
		$this->email = $_POST['email']; 
		$this->senha = $_POST['senha'];
		$this->cpf = $_POST['cpf'];
		$this->nome = $_POST['nome'];
		$this->cep = $_POST['cep'];
		$this->endereco = $_POST['endereco'];
		$this->bairro = $_POST['bairro'];
		$this->cidade = $_POST['cidade'];
		$this->estado = $_POST['estado'];
	}

	

	public function Alterar()
	{
		try
		{
			$conect = new PDO("mysql: host=localhost:8080;port=3306;dbname=loja","root","");
			$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE cliente SET email='$this->email', senha='$this->senha', cpf='$this->cpf', nome='$this->nome', cep='$this->cep', endereco='$this->endereco', bairro='$this->bairro', cidade='$this->cidade', estado='$this->estado' WHERE cpf = '$this->cpf'";
			$teste = $conect->query($sql);
			$sqlu = "UPDATE usuario SET email ='$this->email', senha='$this->senha'";
				$conect->exec($sqlu);
			if ($teste->rowCount() != 0)
			{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=perfil.php'>
					<meta charset='UTF-8'>
   					<script type=\"text/javascript\">
						alert(\"Dados alterados com sucesso!\");
					</script>

				";

				exit();
			}
			else
			{
			
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=perfil.php'>
					<meta charset='UTF-8'>
   					<script type=\"text/javascript\">
						alert(\"ALGO DEU ERRADO!\");
					</script>

				";
			}
		}
		catch(PDOException $erro)
		{
			echo "Erro. $erro";
		}
	}
}

$alteraPerfil = new AlterarPerfil();

$alteraPerfil->Alterar();

?>