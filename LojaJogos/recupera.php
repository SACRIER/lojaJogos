<?php
		include_once('conect.php');
	
        $id = $_POST["id"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
		$senha = $_POST["senha"];
		
		

	

		$sql = "UPDATE cliente SET senha='$senha' WHERE cpf = '$cpf'";
		$sqlu = "UPDATE usuario SET senha='$senha' WHERE cpf = '$cpf'";
        
		
        if(mysqli_query($conn, $sql))
        {
            echo 
            "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=login.php'>
			    <meta charset='UTF-8'>
				<script type=\'text/javascript\'>
					alert(\'A SENHA FOI RECUPERADA COM SUCESSO PARSA!\');
				</script>
            ";
        }
            else{
           	  echo "
           	  	<meta charset='UTF-8'>
					<script type=\"text/javascript\">
						alert(\"ERRO ao alterar!\");
					</script>
                 ";
                 exit();
               //echo"<meta http-equiv='refresh' content='3;URL=adm.php'>";
                }          
?>