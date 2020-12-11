<?php

class AdicionarJogo
{
	public $nome, $categoria, $descricao, $preco, $imagem, $data_lancamento, $caminho;

	function __construct()
	{
		$this->nome = $_POST["nome"];
		$this->descricao = $_POST["descricao"];
		$this->preco = $_POST["preco"];
		$this->imagem = $_FILES["imagem"];
		$this->data_lancamento = $_POST["data_lancamento"];
		$this->caminho = "";
		$this->categoria = $_POST['categoria'];
	}

	public function ValidarImagem()
	{
		$tamanhoPermitido = 1024 * 1024 * 1024;
	    $dir = "JogosImg/";
	 
	    // verifica se arquivo foi enviado e sem erros
	    if($this->imagem['error'] == UPLOAD_ERR_OK){
	        // pego a extensão do arquivo
	        $extensao = ltrim( substr($this->imagem['name'], strrpos($this->imagem['name'], '.' ) ), '.' );
	        // valida a extensão - Qualquer extensão é válida!
	        if(in_array( $extensao, array("jpg","jpeg","png"))){
	            // verifica tamanho do arquivo
	            if ($this->imagem['size'] > $tamanhoPermitido){
	                echo "Erro! O arquivo enviado é muito grande, envie arquivos de até 134MB";
	                $class = "alert-warning";
	            }else{
	                // atribui novo nome ao arquivo
	                $novonome  = time().".".$extensao;
	                // faz o upload
	                $envio = move_uploaded_file($this->imagem["tmp_name"], "$dir/". $this->imagem["name"]);
	                $this->caminho = "$dir/".$this->imagem["name"]."";
	            }
	        }
	    }
	}

	public function InsertDados()
	{
		try
		{
			$conect = new PDO("mysql: host=localhost:8080;port=3306;dbname=loja","root","");
			$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM jogo WHERE nome = '".$this->nome."'";
			$teste = $conect->query($sql);
			if ($teste->rowCount() != 0)
			{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=adicionarjogo.php'>
					<meta charset='UTF-8'>
   					<script type=\"text/javascript\">
						alert(\"Desculpe, jogo já cadastrado!\");
					</script>

				";

				exit();
			}
			else
			{
				$inserir = "INSERT INTO jogo(id, nome, data_lanc, descricao, genero, preco, imagem) VALUES(null, '$this->nome', '$this->data_lancamento', '$this->descricao', '$this->categoria', '$this->preco', '$this->caminho')";
				$conect->exec($inserir);
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=adicionarjogo.php'>
					<meta charset='UTF-8'>
   					<script type=\"text/javascript\">
						alert(\"Jogo cadastrado com sucesso!\");
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

$addJogo = new AdicionarJogo();
$addJogo->ValidarImagem();
$addJogo->InsertDados();

?>