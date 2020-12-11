<?php
session_start();
	include_once("./conect.php");
	if(($_POST['login']) && ($_POST['senha'])){
		$login = $_POST['login'];//
		$senha = $_POST['senha'];
                
        $result_usuario = "SELECT * FROM admin WHERE login = '$login' && senha = '$senha'" ;
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$rs = mysqli_fetch_assoc($resultado_usuario);//obtem uma matriz associativa
		if($rs){
	
            $_SESSION['id'] = $rs['id'];
			$_SESSION['login'] = $rs['login'];
			$_SESSION['senha'] = $rs['senha'];
			
				header("Location:index.php");
			}
		}else{
			echo "ERRO!";
                }          
?>