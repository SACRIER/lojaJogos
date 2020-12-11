<?php

		session_start();
    include_once("conect.php");
	$email = $_SESSION['email'];
    	$produto = $_GET['nome'];
		$total = $_GET['total'];




	$result_usuario = "INSERT INTO compra(nome,produto, total) VALUES ('$email', '$produto', '$total')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if($resultado_usuario>=1){
		
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=concluir-compra.php'>
		<meta charset='UTF-8'>
			<script type=\"text/javascript\">
				alert(\"DALEE\");
			</script>
		";
		}else{
			 echo "
				 <meta charset='UTF-8'>
				<script type=\"text/javascript\">
					alert(\"ALGO DEU RUIM\");
				</script>
			 ";
		} 
?>