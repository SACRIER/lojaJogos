<?php 



	
	include_once('conect.php');

	$produto_id = $_GET["id"];
	$nome = $_GET["nome"];
	$genero = $_GET["genero"];
	$preco = $_GET["preco"];


	$select = ("SELECT * FROM desejo WHERE id='$produto_id'");
	$result = $conn->query($select);

	if ($result->num_rows == 0) 
	{   
		

		$sql = "INSERT INTO desejo (id, nome,genero,preco) VALUES ('$produto_id', '$nome', '$genero', '$preco')";
//relatorio
		if ($conn->query($sql) === TRUE) {    
			echo "<script type='text/javascript'> alert('O item foi adicionado à lista de desejos :)');history.go(-1);</script>";
		} 
		else {
			echo "<script type='text/javascript'> alert('Ops, ocorreu algum erro e o produto não foi enviado para o seu orçamento :(');history.go(-1);</script>" . $sql . "<br>" . $conn->error;
		}
	}else {


			$select = ("SELECT * FROM desejo WHERE id='$produto_id'");
			$result = $conn->query($select);

			if ($result->num_rows > 0) 
			{   
				while($row = $result->fetch_assoc()) 
				{
					echo  "<script type='text/javascript'> alert('O item ja foi adicionado:)');history.go(-1);</script>";
					$produto_id = "".$row["id"]."";
					
				}
			} 

	

	}


	






?>





