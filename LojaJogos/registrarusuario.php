

<?php

class AdicionarCliente
{
	public $id, $email, $senha, $cpf, $nome, $cep, $endereco, $bairro, $cidade, $estado;

	function __construct()
	{
		$this->id = "";
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

	

	public function InsertCliente()
	{
		try
		{
			$conect = new PDO("mysql: host=localhost:8080;port=3306;dbname=loja","root","");
			$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM cliente WHERE email = '".$this->email."'";
			$teste = $conect->query($sql);
			if ($teste->rowCount() != 0)
			{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastro.php'>
					<meta charset='UTF-8'>
   					<script type=\"text/javascript\">
						alert(\"Desculpe, Email já cadastrado!\");
					</script>

				";

				exit();
			}
			else
			{
				$inserir = "INSERT INTO cliente VALUES (null, '$this->email', '$this->senha', '$this->cpf', '$this->nome', '$this->cep', '$this->endereco', '$this->bairro', '$this->cidade', '$this->estado')";
				$sqlu = "INSERT INTO usuario VALUES ('$this->email', '$this->senha')";
				$conect->exec($sqlu);
				$conect->exec($inserir);
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=login.php'>
					<meta charset='UTF-8'>
   					<script type=\"text/javascript\">
						alert(\"Cadastro realizado com sucesso!\");
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

$addCliente = new AdicionarCliente();

$addCliente->InsertCliente();

?>